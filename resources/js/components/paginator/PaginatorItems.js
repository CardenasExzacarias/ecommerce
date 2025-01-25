import axios from "axios";
import { Component } from "../../Component";
import { manageSearch, searchedValue } from "../../tickets/create";

export function PaginatorItems(links) {
    const items = [];
    const next = links.pop();
    const back = links.shift();

    links.forEach(link => {
        let urlString = link.url;

        if (urlString) {
            let position = urlString.indexOf('?');
            urlString = urlString.slice(0, position + 1) + `search=${searchedValue}&` + urlString.slice(position + 1);
        }

        items.push(
            Component('a', {
                class: "inline-flex relative items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-700 bg-white border border-gray-300 ring-gray-300 transition duration-150 ease-in-out hover:text-gray-500 focus:z-10 focus:outline-none focus:ring focus:border-blue-300 active:bg-gray-0 active:text-gray-700 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:hover:text-gray-300 dark:active:bg-gray-700 dark:focus:border-success",
                href: urlString,
                name: "paginator-item",
                event: {
                    type: 'click',
                    handler: (e) => {
                        e.preventDefault();
                        axios.get(urlString)
                            .then(manageSearch)
                            .catch(error => {
                                console.error(error);
                            });
                    }
                },
                "aria-label": `Ir a página ${link.label}`
            }, link.label)
        );
    });

    return items;
}
