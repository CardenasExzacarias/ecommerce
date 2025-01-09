import axios from "axios";
import { Component } from "./Component";
import { secure_url } from "./secure_url";

const search = document.getElementById('search');
const products = document.getElementById('products');

search.addEventListener('submit', (e) => {
    e.preventDefault();

    const formData = new FormData(e.target);

    const data = {};
    formData.forEach((value, key) => {
        data[key] = value;
    });

    const url = e.target.action;

    axios.get(url, { params: data })
        .then(res => {
            products.innerHTML = '';
            const component = new Component(products);

            const productElements = [];

            res.data.forEach(product => {
                productElements.push(
                    component.element(
                        'div',
                        { class: 'grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6' },
                        component.element(
                            'a',
                            { href: secure_url(`product/${product.id}`) },
                            component.element(
                                'div',
                                { class: 'bg-white p-4 border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300' },
                                component.element(
                                    'h2',
                                    { class: 'text-xl font-semibold text-gray-800' },
                                    product.name
                                )
                            )
                        )
                    )
                );
            });

            const elementComponent = component.element(
                'div',
                { class: 'max-w-7xl mx-auto p-6' },
                productElements
            );

            component.addToStruct(elementComponent).render();
        })
        .catch(error => {
            console.error(error);
        });
});
