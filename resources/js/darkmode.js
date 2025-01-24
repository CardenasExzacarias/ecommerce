const themeToggleBtn = document.getElementById('theme-toggle');
const moonIcon = document.getElementById('moon-icon');
const sunIcon = document.getElementById('sun-icon');

themeToggleBtn.addEventListener('click', () => {
    const isDarkMode = document.documentElement.classList.toggle('dark');
    moonIcon.classList.toggle('hidden', !isDarkMode); // Mostrar luna en modo oscuro
    sunIcon.classList.toggle('hidden', isDarkMode);   // Mostrar sol en modo claro
    localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');
});

// Verificar el tema guardado en localStorage al cargar la página
const savedTheme = localStorage.getItem('theme');
if (savedTheme === 'dark') {
    document.documentElement.classList.add('dark');
    moonIcon.classList.remove('hidden'); // Mostrar luna
    sunIcon.classList.add('hidden');     // Ocultar sol
} else {
    document.documentElement.classList.remove('dark');
    moonIcon.classList.add('hidden');    // Ocultar luna
    sunIcon.classList.remove('hidden');  // Mostrar sol
}