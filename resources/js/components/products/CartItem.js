import { Component } from "../../Component";
import { PlusCircleOutline } from "../icons/PlusCircleOutline";
import { MinusCircleOutline } from "../icons/MinusCircleOutline";
import { ButtonListItem } from "./ButtonListItem";

export const CartItem = (product) => {
    return Component(
        'div',
        {
            class: 'flex justify-between items-center mt-4',
            id: product.barcode
        },
        [
            Component(
                'div', { class: 'flex-1 px-4 flex items-center justify-between' },
                [
                    Component('div', {class: 'w-4/12'},
                        Component('p', { class: 'font-semibold' }, product.barcode)
                    ),
                    Component('div', {class: 'w-6/12'},
                        Component(
                            'p',
                            { class: 'mx-4' },
                            product.name
                        )
                    ),
                    Component('div', {class: 'w-2/12 flex justify-end mx-4'},
                        Component('p', {}, `$${product.sell_price}`)
                    ),
                ]
            ),
            Component(
                'div', { class: "flex items-center px-4" },
                [
                    ButtonListItem(() => {
                        const input = document.getElementById(`q:${product.barcode}`);
                        let count = input.value;
                        input.value = parseInt(count) - 1;
                    }, MinusCircleOutline()),
                    Component(
                        'input',
                        {
                            class: 'px-4 mx-1 py-2 w-16 rounded-md text-center focus:outline-none bg-transparent',
                            value: 1,
                            type: 'text',
                            name: `q:${product.barcode}`,
                            id: `q:${product.barcode}`
                        }
                    ),
                    ButtonListItem(() => {
                        const input = document.getElementById(`q:${product.barcode}`);
                        let count = input.value;
                        input.value = parseInt(count) + 1;
                    }, PlusCircleOutline()),
                ]
            ),
        ]
    );
};
