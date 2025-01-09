import { updateCartData } from "../../tickets/create";
import { Component } from "../../Component";
import { secure_url } from "../../utilities/secure_url";

export const ProductListItem = (product, cart, cartList) => {
    return Component(
        'div',
        { class: 'grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6' },
        [
            Component(
                'a',
                { href: secure_url(`product/${product.id}`) },
                Component(
                    'div',
                    { class: 'bg-white p-4 border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300' },
                    Component(
                        'h2',
                        { class: 'text-xl font-semibold text-gray-800' },
                        product.name
                    )
                )
            ),
            Component(
                'button',
                {
                    event: {
                        type: 'click',
                        handler: () => {
                            const productAdded = updateCartData(product.id);

                            if (productAdded.quantity != 1) {
                                const productElement = cartList.struct.find(element =>
                                    element.id == productAdded.product
                                );

                                const input = document.getElementById(`quantity:${product.name}`);

                                let count = input.value;
                                input.value = parseInt(count) + 1;
                            } else {
                                cartList.addToStruct(Component(
                                    'h1',
                                    { id: product.id },
                                    [
                                        product.name,
                                        Component(
                                            'button',
                                            {
                                                event: {
                                                    type: 'click',
                                                    handler: () => {
                                                        const input = document.getElementById(`quantity:${product.name}`);
                                                        let count = input.value;
                                                        input.value = parseInt(count) + 1;
                                                    }
                                                }
                                            },
                                            '+'
                                        ),
                                        Component(
                                            'input',
                                            { value: 1, type: 'text', id: `quantity:${product.name}` }
                                        ),
                                        Component(
                                            'button',
                                            {
                                                event: {
                                                    type: 'click',
                                                    handler: () => {
                                                        const input = document.getElementById(`quantity:${product.name}`);
                                                        let count = input.value;
                                                        input.value = parseInt(count) - 1;
                                                    }
                                                }
                                            },
                                            '-'
                                        ),
                                    ]
                                )).render(cart);
                            }
                        }
                    }
                },
                'Agregar al carrito'
            )
        ]
    );
};
