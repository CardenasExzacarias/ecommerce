import axios from "axios";
import { Component, Struct } from "./Component";
import { secure_url } from "./secure_url";
import { ProductListItem } from "./components/products/ProductListItem";

const cartData = [];

export function updateCartData(product) {
    const existingProduct = cartData.find(item => item.product === product);

    if (existingProduct) {
        existingProduct.quantity++;
        return existingProduct;
    } else {
        cartData.push({ product: product, quantity: 1 });
        return cartData[cartData.length - 1];
    }
}

const search = document.getElementById('search');
const products = document.getElementById('products');
const cart = document.getElementById('cart');

const cartList = new Struct();

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
            const productElements = [];

            res.data.forEach(product => {
                productElements.push(
                    ProductListItem(product, cart, cartList)
                );
            });

            const component = new Struct();

            const productList = Component(
                'div',
                { class: 'max-w-7xl mx-auto p-6' },
                productElements
            );

            component.addToStruct(productList).render(products);
        })
        .catch(error => {
            console.error(error);
        });
});