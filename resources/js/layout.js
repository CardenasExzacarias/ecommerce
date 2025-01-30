const container = document.getElementById('container');
const content = document.getElementById('content');
const topbar = document.getElementById('topbar');
const MARGIN = 9;

content.style.height = container.clientHeight - topbar.clientHeight - MARGIN;