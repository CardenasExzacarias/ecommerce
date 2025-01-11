import axios from "axios";
import { Component, Struct } from "../Component";
import { ProductListItem } from "../components/products/ProductListItem";
import { getFormData } from "../utilities/getFormData";

const search = document.getElementById('search');
const products = document.getElementById('products');
const cart = document.getElementById('cart');
const productsCartContainer = document.getElementById('products-cart-container');
const storeContainerSubmit = document.getElementById('store_container_submit');

productsCartContainer.style.maxHeight = productsCartContainer.clientHeight;
products.style.maxHeight = productsCartContainer.clientHeight;
cart.style.maxHeight = productsCartContainer.clientHeight - storeContainerSubmit.clientHeight;

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

            res.data.forEach(product => {
                productElements.push(
                    ProductListItem(product, cart, cartList)
                );
            });

            const component = new Struct();

            const productList = Component(
                'div',
                { class: 'p-6 bg-white rounded-lg shadow-md' },
                productElements
            );

            component.addToStruct(productList).render(products);
        })
        .catch(error => {
            console.error(error);
        });
});
