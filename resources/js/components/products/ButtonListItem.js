import { Component } from "../../Component";

export const ButtonListItem = (handler, svg) => {
    return Component(
        'button',
        {
            type: 'button',
            event: {
                type: 'click',
                handler: handler
            }
        },
        svg
    );
};
