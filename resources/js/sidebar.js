document.addEventListener('DOMContentLoaded', () => {
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