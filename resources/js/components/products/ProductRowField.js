import { Component } from "../../Component";

export function ProductRowField(data) {
    return Component(
        'td',
        { class: 'px-6 py-4 text-sm text-center text-gray-700 border-b' },
        data
    )
}
