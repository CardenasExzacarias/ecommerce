export function Component(tag, attributes = {}, content = '') {
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
                checkContent(element, childNode);
            });
        } else {
            checkContent(element, content);
        }
    }

    return element;
}

export function Svg(tag, attributes, content) {
    const svgNamespace = "http://www.w3.org/2000/svg";

    const element = document.createElementNS(svgNamespace, tag);

    for (const key in attributes) {
        if (attributes.hasOwnProperty(key)) {
            const value = attributes[key];
            element.setAttribute(key, value);
        }
    }

    if (content) {
        if (Array.isArray(content)) {
            content.forEach(childNode => {
                element.appendChild(childNode);
            });
        } else {
            element.appendChild(content);
        }
    }

    return element;
}

function checkContent(element, content) {
    if (content instanceof Node) {
        element.appendChild(content);
    } else {
        element.appendChild(document.createTextNode(content));
    }
}

export class Struct {
    struct = [];

    render(parent) {
        console.log(this.struct);
        parent.innerHTML = '';
        this.struct.forEach(element => {
            parent.appendChild(element);
        });
    }

    addToStruct(element) {
        this.struct.push(element);
        return this;
    }
}
