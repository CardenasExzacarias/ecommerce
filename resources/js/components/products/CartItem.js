import { Component } from "../../Component";
import { PlusCircleOutline } from "../icons/PlusCircleOutline";
import { MinusCircleOutline } from "../icons/MinusCircleOutline";
import { ButtonListItem } from "./ButtonListItem";

export const CartItem = (product) => {
    return Component(
        'div',
        {
            class: 'flex justify-between items-center m-4',
            id: product.id
        },
        [
            Component(
                'div', { class: 'flex items-center' },
                [
                    Component('p', { class: 'font-semibold' }, product.barcode),
                    Component(
                        'p',
                        { class: 'mx-4' },
                        product.name
                    ),
                    Component('p', { }, `$${product.sell_price}`),
                ]
            ),
            Component(
                'div', { class: "flex items-center" },
                [
                    ButtonListItem(() => {
                        const input = document.getElementById(`quantity:${product.name}`);
                        let count = input.value;
                        input.value = parseInt(count) - 1;
                    }, MinusCircleOutline()),
                    Component(
                        'input',
                        {
                            class: 'px-4 mx-1 py-2 w-16 rounded-md text-center focus:outline-none',
                            value: 1,
                            type: 'text',
                            name: product.name,
                            id: `quantity:${product.name}`
                        }
                    ),
                    ButtonListItem(() => {
                        const input = document.getElementById(`quantity:${product.name}`);
                        let count = input.value;
                        input.value = parseInt(count) + 1;
                    }, PlusCircleOutline()),
                ]
            ),
        ]
    );
};
