export function getFormData(form) {
    const url = form.action;

    const formData = new FormData(form);

    const values = {};
    formData.forEach((value, key) => {
        values[key] = value;
    });

    return { url, values };
}
