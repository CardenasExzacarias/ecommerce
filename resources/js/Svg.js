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
