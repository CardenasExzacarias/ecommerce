import { Component } from "../../Component";

export const ProductCartDetails = (product) => {
    console.log(product);
    return Component(
        'div', { class: 'class' }, [
        Component(
            'input',
            {
                class: 'px-4 py-2 w-1/3 rounded-md border border-gray-300',
                value: 1,
                type: 'text',
                name: product.name,
                id: `quantity:${product.name}`
            }
        ),
    ]);
};
