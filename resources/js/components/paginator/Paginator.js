import { Component } from "../../Component";
import { PaginatorItems } from "./PaginatorItems";

export function Paginator(pagination) {
    return Component('div', {
        class: "flex justify-between items-center m-4"
    }, [
        Component('p', {
            class: "text-gray-600 dark:text-white"
        }, `Mostrando ${pagination.from} a ${pagination.to} de ${pagination.total}`),
        Component('div', {
            class: "flex items-center space-x-1"
        },
            Component('nav', {
                class: "flex justify-between items-center",
                role: "navigation",
                "aria-label": "Pagination Navigation"
            },
                Component('div', {
                    class: "hidden sm:flex-1 sm:flex sm:items-center sm:justify-between"
                },
                    Component('span', {
                        class: "inline-flex relative z-0 rounded-md shadow-sm rtl:flex-row-reverse"
                    },
                    PaginatorItems(pagination.links)
                    )
                )
            )
        )
    ]);
}