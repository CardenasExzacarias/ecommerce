import axios from "axios";
import { Component, Struct } from "../Component";
import { ProductListItem } from "../components/products/ProductListItem";
import { getFormData } from "../utilities/getFormData";
import { Paginator } from "../components/paginator/Paginator";

const search = document.getElementById('search');
const products = document.getElementById('products');
const cart = document.getElementById('cart');

export let searchedValue = '';

export const cartData = [];
export const cartList = new Struct();

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

    searchedValue = values.search;

    axios.get(url, { params: values })
        .then(manageSearch)
        .catch(error => {
            console.error(error);
        });
});

export function manageSearch(res) {
    const productElements = [];
    res.data.data.forEach(product => {
        productElements.push(
            ProductListItem(product, cart)
        );
    });

    productElements.push(Paginator(res.data));

    const component = new Struct();

    const productList = Component(
        'div',
        {},
        productElements,
    );

    component.addToStruct(productList).render(products);
}