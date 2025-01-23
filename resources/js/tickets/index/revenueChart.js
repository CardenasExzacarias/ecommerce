import ApexCharts from 'apexcharts';
import { Component } from "../../Component";

export const revenueChart = () => {
    const currentYear = new Date().getFullYear();
    const lastYear = currentYear - 1;

    const ticketsCurrentYear = tickets.filter(sale => parseInt(sale.year_month.split('-')[0]) === currentYear);
    const ticketsLastYear = tickets.filter(sale => parseInt(sale.year_month.split('-')[0]) === lastYear);

    const sortByMonth = (a, b) => {
        const monthA = parseInt(a.year_month.split('-')[1]);
        const monthB = parseInt(b.year_month.split('-')[1]);
        return monthA - monthB;
    };

    ticketsCurrentYear.sort(sortByMonth);
    ticketsLastYear.sort(sortByMonth);

    const totalSalesDataCurrentYear = ticketsCurrentYear.map(sale => sale.total_sales);
    const totalCostDataCurrentYear = ticketsCurrentYear.map(sale => sale.total_cost);
    const categoriesCurrentYear = ticketsCurrentYear.map(sale => sale.year_month);

    const totalSalesDataLastYear = ticketsLastYear.map(sale => sale.total_sales);
    const totalCostDataLastYear = ticketsLastYear.map(sale => sale.total_cost);
    const categoriesLastYear = ticketsLastYear.map(sale => sale.year_month);

    const differenceDataCurrentYear = totalSalesDataCurrentYear.map((sale, index) => {
        return sale - totalCostDataCurrentYear[index];
    });

    const differenceDataLastYear = totalSalesDataLastYear.map((sale, index) => {
        return sale - totalCostDataLastYear[index];
    });

    let isCurrentYear = true;

    const chartOneOptions = {
        series: [
            {
                name: "Venta total",
                data: totalSalesDataCurrentYear,
            },
            {
                name: "Costo total",
                data: totalCostDataCurrentYear,
            },
        ],
        legend: {
            show: false,
            position: "top",
            horizontalAlign: "left",
        },
        colors: ["#219653", "#FFA70B"],
        chart: {
            fontFamily: "Satoshi, sans-serif",
            height: 335,
            type: "area",
            dropShadow: {
                enabled: true,
                color: "#623CEA14",
                top: 10,
                blur: 4,
                left: 0,
                opacity: 0.1,
            },
            toolbar: {
                show: false,
            },
        },
        responsive: [
            {
                breakpoint: 1024,
                options: {
                    chart: {
                        height: 300,
                    },
                },
            },
            {
                breakpoint: 1366,
                options: {
                    chart: {
                        height: 350,
                    },
                },
            },
        ],
        stroke: {
            width: [2, 2],
            curve: "straight",
        },
        markers: {
            size: 0,
        },
        labels: {
            show: false,
            position: "top",
        },
        grid: {
            xaxis: {
                lines: {
                    show: true,
                },
            },
            yaxis: {
                lines: {
                    show: true,
                },
            },
        },
        dataLabels: {
            enabled: false,
        },
        markers: {
            size: 4,
            colors: "#fff",
            strokeColors: ["#219653", "#FFA70B"],
            strokeWidth: 3,
            strokeOpacity: 0.9,
            strokeDashArray: 0,
            fillOpacity: 1,
            discrete: [],
            hover: {
                size: undefined,
                sizeOffset: 5,
            },
        },
        xaxis: {
            type: "category",
            categories: categoriesCurrentYear,
            labels:{
                style: {
                    class: 'text-black dark:text-white'
                }
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
        },
        yaxis: {
            title: {
                style: {
                    fontSize: "0px",
                },
            },
            labels:{
                style: {
                    class: 'text-black dark:text-white'
                }
            },
            min: 0,
            max: Math.max(...totalSalesDataCurrentYear, ...totalCostDataCurrentYear) + 10,
        },
        tooltip: {
            shared: true,
            custom: function ({ series, seriesIndex, dataPointIndex, w }) {
                const differenceData = isCurrentYear ? differenceDataCurrentYear : differenceDataLastYear;
                return Component('div', { class: "flex p-2 flex-col dark:bg-boxdark" }, [
                    Component('span', { class: "flex flex-row items-center" }, [
                        Component('span', { class: "inline-block w-4 h-4 bg-white dark:bg-boxdark border-4 mx-1 border-success rounded-full" }),
                        Component('p', { class: "text-black-0 dark:text-white" }, [
                            Component('b', { class: "mx-1" }, 'Venta:'),
                            series[0][dataPointIndex]
                        ])
                    ]),
                    Component('span', { class: "flex flex-row items-center" }, [
                        Component('span', { class: "inline-block w-4 h-4 bg-white dark:bg-boxdark border-4 mx-1 border-warning rounded-full" }),
                        Component('p', { class: "text-black-0 dark:text-white" }, [
                            Component('b', { class: "mx-1" }, 'Costo:'),
                            series[1][dataPointIndex]
                        ])
                    ]),
                    Component('span', { class: "flex flex-row items-center" }, [
                        Component('span', { class: "inline-block w-4 h-4 bg-white dark:bg-boxdark border-4 mx-1 border-primary rounded-full" }),
                        Component('p', { class: "text-black-0 dark:text-white" }, [
                            Component('b', { class: "mx-1" }, 'Ganancia:'),
                            differenceData[dataPointIndex]
                        ])
                    ])
                ]);
            }
        }
    };

    const chartSelector = document.getElementById('revenue');

    let chartOne;

    if (chartSelector) {
        chartOne = new ApexCharts(chartSelector, chartOneOptions);
        chartOne.render();
    }

    document.getElementById('yearToggle').addEventListener('click', () => {
        isCurrentYear = !isCurrentYear;
        const newData = isCurrentYear ? {
            totalSales: totalSalesDataCurrentYear,
            totalCost: totalCostDataCurrentYear,
            categories: categoriesCurrentYear,
            difference: differenceDataCurrentYear
        } : {
            totalSales: totalSalesDataLastYear,
            totalCost: totalCostDataLastYear,
            categories: categoriesLastYear,
            difference: differenceDataLastYear
        };

        chartOne.updateOptions({
            series: [
                {
                    name: "Venta total",
                    data: newData.totalSales,
                },
                {
                    name: "Costo total",
                    data: newData.totalCost,
                },
            ],
            xaxis: {
                categories: newData.categories,
            },
            yaxis: {
                max: Math.max(...newData.totalSales, ...newData.totalCost) + 10,
            }
        });
        document.getElementById('yearToggle').textContent = isCurrentYear ? 'Año actual' : 'Año anterior';
    });
};
