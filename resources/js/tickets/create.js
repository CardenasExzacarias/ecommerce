import axios from "axios";
import { Component, Struct } from "../Component";
import { ProductListItem } from "../components/products/ProductListItem";
import { getFormData } from "../utilities/getFormData";

const search = document.getElementById('search');
const products = document.getElementById('products');
const cart = document.getElementById('cart');

const cartData = [];
const cartList = new Struct();

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

search.addEventListener('submit', (e) => {
    e.preventDefault();

    const { url, values } = getFormData(e.target);

    axios.get(url, { params: values })
        .then(res => {
            const productElements = [];
            res.data.data.forEach(product => {
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
