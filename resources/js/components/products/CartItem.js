import { Component } from "../../Component";
import { MinusCircle } from "../icons/MinusCircle";
import { MinusCircleOutline } from "../icons/MinusCircleOutline";
import { ButtonListItem } from "./ButtonListItem";

export const CartItem = (product) => {
    return Component(
        'div',
        {
            class: 'm-4',
            id: product.id
        },
        [
            product.name,
            ButtonListItem(() => {
                const input = document.getElementById(`quantity:${product.name}`);
                let count = input.value;
                input.value = parseInt(count) + 1;
            }, MinusCircle()),
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
            ButtonListItem(() => {
                const input = document.getElementById(`quantity:${product.name}`);
                let count = input.value;
                input.value = parseInt(count) - 1;
            }, MinusCircleOutline()),
        ]
    );
};
