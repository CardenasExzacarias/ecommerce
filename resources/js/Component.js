export class Component {
    struct = [];

    constructor(parent) {
        this.parent = parent;
    }

    element(tag, attributes = {}, content = '') {
        const element = document.createElement(tag);

        for (const key in attributes) {
            if (attributes.hasOwnProperty(key)) {
                const value = attributes[key];

                if (key === 'class') {
                    element.classList.add(...value.split(' '));
                } else if (key === 'event') {
                    element.addEventListener(attributes.event.type, attributes.event.handler);
                } else {
                    element.setAttribute(key, value);
                }
            }
        }

        if (content !== '') {
            if (Array.isArray(content)) {
                content.forEach(childNode => {
                    this.checkContent(element, childNode);
                });
            } else {
                this.checkContent(element, content);
            }
        }

        return element;
    }

    checkContent(element, content) {
        if (typeof content === 'string') {
            element.appendChild(document.createTextNode(content));
        } else if (content instanceof Node) {
            element.appendChild(content);
        }
    }

    render() {
        this.parent.appendChild(...this.struct);
    }

    addToStruct(element) {
        this.struct.push(element);
        return this;
    }
}
