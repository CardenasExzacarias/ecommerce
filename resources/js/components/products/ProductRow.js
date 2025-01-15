import { Component } from "../../Component";

export function ProductRow(product){
    return Component(
        'tr',
        {class: "hover:bg-gray-50"},
        [
            ProductRowField(product.id),
            ProductRowField(product.name),
            ProductRowField(product.sell_price),
            ProductRowField(product.stock),
            ProductRowAction('')
        ]
    )
}
