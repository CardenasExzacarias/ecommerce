import { updateCartData } from "../../tickets/create";
import { Component } from "../../Component";
import { secure_url } from "../../utilities/secure_url";
import { CartItem } from "./CartItem";

export const ProductListItem = (product, cart, cartList) => {
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
                            'a', { href: secure_url(`product/${product.id}`) },
                            Component(
                                'p', { class: 'font-semibold' },
                                product.name
                            )
                        ),
                        Component('p', { class: 'py-2' }, `$${product.sell_price}`),
                        Component('p', { class: 'py-2' }, `${product.description}`)
                    ]),
                    Component('div', { class: 'flex items-center justify-center space-x-4' },
                        Component(
                            'button',
                            {
                                class: 'bg-accent text-white p-2 my-4 rounded',
                                event: {
                                    type: 'click',
                                    handler: () => {
                                        const productAdded = updateCartData(product.id);

                                        if (productAdded.quantity != 1) {
                                            const input = document.getElementById(`q:${product.barcode}`);

                                            let count = input.value;
                                            input.value = parseInt(count) + 1;
                                        } else {
                                            cartList.addToStruct(CartItem(product)).render(cart);
                                        }
                                    }
                                }
                            },
                            'Agregar al carrito'
                        )
                    ),
                ]
            )
        ]
    );
};
