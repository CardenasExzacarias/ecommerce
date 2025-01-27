document.addEventListener('DOMContentLoaded', () => {
  const sidebar = document.getElementById('sidebar');
  const logoContainer = document.getElementById('logo-container'); // Contenedor del logo
  const logo = document.getElementById('logo'); // Imagen del logo
  const titleContainer = document.getElementById('title-container'); // Contenedor del texto "TIENDA" y la línea
  const sidebarContent = document.querySelectorAll('#sidebar > *:not(#logo-container):not(#title-container)'); // Excluye los contenedores del logo y del texto

  // Función para manejar el clic en el logo
  logoContainer.addEventListener('click', () => {
    // Alternar las clases de ancho
    sidebar.classList.toggle('w-40');  // Sidebar ancha
    sidebar.classList.toggle('w-16');  // Sidebar estrecha

    // Ocultar o mostrar el contenido del sidebar
    if (sidebar.classList.contains('w-16')) {
      // Si el sidebar está cerrado (ancho w-16), ocultar el texto "TIENDA" y la línea
      titleContainer.style.display = 'none';

      // Ocultar el resto del contenido del sidebar
      sidebarContent.forEach(element => {
        element.style.display = 'none';
      });

      // Cambiar las dimensiones del logo para que sea simétrico con el sidebar cerrado
      logo.classList.remove('w-24', 'h-24'); // Eliminar dimensiones originales
      logo.classList.add('w-12', 'h-12'); // Nuevas dimensiones más pequeñas

      // Ajustar el contenedor del logo para que ocupe menos espacio
      logoContainer.classList.add('px-2', 'py-3'); // Reducir el padding
      logoContainer.classList.remove('px-4', 'py-5'); // Eliminar el padding original
    } else {
      // Si el sidebar está abierto (ancho w-40), mostrar el texto "TIENDA" y la línea
      titleContainer.style.display = '';

      // Mostrar el resto del contenido del sidebar
      sidebarContent.forEach(element => {
        element.style.display = ''; // Restablecer el valor por defecto
      });

      // Restaurar las dimensiones originales del logo
      logo.classList.remove('w-12', 'h-12'); // Eliminar dimensiones pequeñas
      logo.classList.add('w-24', 'h-24'); // Restaurar dimensiones originales

      // Restaurar el padding original del contenedor del logo
      logoContainer.classList.remove('px-2', 'py-3');
      logoContainer.classList.add('px-4', 'py-5');
    }
  });
});
  const dropdownButtons = document.querySelectorAll('.dropdown-button');

  dropdownButtons.forEach(button => {
    button.addEventListener('click', function() {
      // Cerrar otros dropdowns
      document.querySelectorAll('[class*="max-h-"]').forEach(content => {
        if (content !== this.nextElementSibling) {
          content.classList.replace('max-h-[200px]', 'max-h-0');
          content.previousElementSibling.querySelector('.dropdown-arrow').classList.remove('rotate-180');
        }
      });
      
      const dropdownContent = this.nextElementSibling;
      const arrow = this.querySelector('.dropdown-arrow');
      
      if (dropdownContent.classList.contains('max-h-0')) {
        dropdownContent.classList.replace('max-h-0', 'max-h-[200px]');
        arrow.classList.add('rotate-180');
      } else {
        dropdownContent.classList.replace('max-h-[200px]', 'max-h-0');
        arrow.classList.remove('rotate-180');
      }
    });

  // Cerrar dropdowns al hacer click fuera
  document.addEventListener('click', function(e) {
    if (!e.target.closest('.dropdown-container')) {
      document.querySelectorAll('[class*="max-h-"]').forEach(content => {
        content.classList.replace('max-h-[200px]', 'max-h-0');
      });
      document.querySelectorAll('.dropdown-arrow').forEach(arrow => {
        arrow.classList.remove('rotate-180');
      });
    }
  });
});