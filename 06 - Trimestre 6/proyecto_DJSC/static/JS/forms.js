// forms.js
const inputs = document.querySelectorAll('.input');

inputs.forEach((input) => {
  input.addEventListener('input', () => {
    if (input.value.length > 0) {
      input.classList.add('valid');
    } else {
      input.classList.remove('valid');
    }
  });
});

document.addEventListener('DOMContentLoaded', function() {
  const textarea = document.getElementById('descripcion');
  const form = document.querySelector('.form');
  const submitButton = document.querySelector('.submit');
  
  textarea.addEventListener('input', function() {
     // Ajustar el tamaño del textarea basado en su contenido
     this.style.height = 'auto';
     this.style.height = (this.scrollHeight) + 'px';
     
     // Ajustar el tamaño del contenedor del formulario
     form.style.height = 'auto';
     form.style.height = (form.scrollHeight) + 'px';
     
     // Ajustar la posición del botón
     submitButton.style.marginTop = (this.scrollHeight + 10) + 'px';
  });
  
  // Ajustar la posición del botón al cargar la página
  submitButton.style.marginTop = (textarea.scrollHeight + 10) + 'px';
  
  textarea.addEventListener('input', function() {
    if (this.value === '') {
      form.style.height = 'auto';
      submitButton.style.marginTop = (textarea.scrollHeight + 10) + 'px';
    }
  });
});

