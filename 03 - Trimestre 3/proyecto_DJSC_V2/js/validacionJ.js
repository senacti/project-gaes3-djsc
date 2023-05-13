document.getElementById('Email').addEventListener('input', function() {
    campo = event.target;
    valido = document.getElementById('emailOK');
        
    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    //Se muestra un texto a modo de ejemplo, luego va a ser un icono
    if (emailRegex.test(campo.value)) {
      valido.innerText = "válido";
    } else {
      valido.innerText = "inválido";
    }
});
document.getElementById('Contraseña').addEventListener('input', function() {
  campo = event.target;
  valido = document.getElementById('contraseñaOK');
      
  passwordRegex = /^[-\w.%+]{4,8}/i;
  if (passwordRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "inválido";
  }
});
document.getElementById('Nombre de usuario').addEventListener('input', function() {
  campo = event.target;
  valido = document.getElementById('Nombre de usuarioOK');
      
  usuarioRegex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/i
  if (usuarioRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "inválido";
  }
});
document.getElementById('Apellido de usuario').addEventListener('input', function() {
  campo = event.target;
  valido = document.getElementById('Apellido de usuarioOK');
      
  usuarioRegex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/i
  if (usuarioRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "inválido";
  }
});
document.getElementById('numero de identificacion').addEventListener('input', function() {
  campo = event.target;
  valido = document.getElementById('numero de identificacionOK');
      
  usuarioRegex = /^\d{8}$/
  if (usuarioRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "inválido";
  }
});