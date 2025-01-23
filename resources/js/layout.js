const container = document.getElementById('container');
const content = document.getElementById('content');
const topbar = document.getElementById('topbar');
content.style.height = container.clientHeight - topbar.clientHeight;