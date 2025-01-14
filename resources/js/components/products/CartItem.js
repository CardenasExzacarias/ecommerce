import { Component } from "../../Component";
import { PlusCircleOutline } from "../icons/PlusCircleOutline";
import { MinusCircleOutline } from "../icons/MinusCircleOutline";
import { ButtonListItem } from "./ButtonListItem";

export const CartItem = (product) => {
    return Component(
        'div',
        {
            class: 'grid grid-cols-2 gap-4 m-6',
            id: product.id
        },
        [
            Component(
                'div', { class: 'col' },
                Component('img', {
                    class: 'w-full h-80 rounded-md',
                    alt: "Imagen del producto",
                    src: product.image
                })
            ),
            Component(
                'div', { class: 'col flex flex-col justify-between' },
                [
                    Component('div', {}, [
                        Component(
                            'p',
                            { class: 'font-semibold' },
                            product.name
                        ),
                        Component('p', {class: 'py-2'}, `$${product.price}`)
                    ]),
                    Component(
                        'div', { class: 'flex items-center space-x-4' },
                        [
                            ButtonListItem(() => {
                                const input = document.getElementById(`quantity:${product.name}`);
                                let count = input.value;
                                input.value = parseInt(count) + 1;
                            }, PlusCircleOutline()),
                            Component(
                                'input',
                                {
                                    class: 'px-4 py-2 sm:w-1/4 md:w-1/3 lg:w-1/6 rounded-md border border-gray-300',
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
                    ),
                ]
            )
        ]
    );
};
