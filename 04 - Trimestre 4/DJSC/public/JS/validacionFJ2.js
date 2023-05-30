document.getElementById('Nombre de usuario').addEventListener('input', function() {
    campo = event.target;
    valido = document.getElementById('Nombre de usuarioOK');
        
    usuarioRegex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/i;
    if (usuarioRegex.test(campo.value)) {
      valido.innerText = "válido";
    } else {
      valido.innerText = "no debe contener numeros";
    }
});
document.getElementById('Email').addEventListener('input', function() {
  campo = event.target;
  valido = document.getElementById('emailOK');
      
  emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
  if (emailRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "inválido debe ser solo correo";
  }
});
document.getElementById('Cantidad de Productos').addEventListener('input', function() {
  campo = event.target;
  resultado = document.getElementById('Cantidad de ProductosOK');
      
  CantidaddeProductosRegex = /^\d*$/;
  if (CantidaddeProductosRegex.test(campo.value)) {
    resultado.innerText = "válido";
  } else {
    resultado.innerText = "inválido solo numeros ";
  }
});
document.getElementById('numero de contacto').addEventListener('input', function() {
  campo = event.target;
  valido = document.getElementById('numero de contactoOK');
      
  numerodecontactoRegex =/^\(?(\d{3})\)?[-]?(\d{3})[-]?(\d{4})$/;
  if ( numerodecontactoRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "no debe contener letras";
  }
});
document.getElementById('detalles del Servicio').addEventListener('input', function() {
  campo = event.target;
  valido = document.getElementById('detalles del ServicioOK');
      
  detallesdelServicioRegex =/^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/i;
  if (detallesdelServicioRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "no debe contener numeros";
  }
});

document.getElementById('Nombre de administrador').addEventListener('input', function() {
  campo = event.target;
  valido = document.getElementById('Nombre de administradorOK');
      
  usuarioadministradorRegex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/i;
  if (usuarioadministradorRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "no debe contener numeros";
  }
});
document.getElementById('numero de telefono').addEventListener('input', function() {
  campo = event.target;
  valido = document.getElementById('numero de telefonoOK');
      
  numerodetelefonoRegex =/^\(?(\d{3})\)?[-]?(\d{3})[-]?(\d{4})$/;
  if ( numerodetelefonoRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "no debe contener letras";
  }
});