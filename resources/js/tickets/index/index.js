import { revenueChart } from "./revenueChart";

const nextSlide = document.getElementById('next-slide');
const prevSlide = document.getElementById('prev-slide');

revenueChart();

let index = 0;

function showSlide(n) {
    const slides = document.querySelectorAll('#carousel > div');
    if (n >= slides.length) {
        index = 0;
    } else if (n < 0) {
        index = slides.length - 1;
    } else {
        index = n;
    }
    document.getElementById('carousel').style.transform = `translateX(${-index * 100}%)`;
}

nextSlide.addEventListener('click', () => {
    showSlide(index + 1);
});

prevSlide.addEventListener('click', () => {
    showSlide(index - 1);
});


console.log(tickets.data);
