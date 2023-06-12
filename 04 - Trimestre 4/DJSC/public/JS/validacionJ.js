document.addEventListener("DOMContentLoaded", function() {
  document.getElementById('Nombredeusuario').addEventListener('input', function(event) {
    campo = event.target;
    valido = document.getElementById('NombredeusuarioOK');
        
    usuarioRegex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/i;
    if (usuarioRegex.test(campo.value)) {
      valido.innerText = "válido";
    } else {
      valido.innerText = "no debe contener números";
    }
});
});
document.addEventListener("DOMContentLoaded", function() {
document.getElementById('NombredelServicio').addEventListener('input', function(event) {
    campo = event.target;
    valido = document.getElementById('NombredelServicioOK');
        
    NombredelServicioRegex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/i;
    if (NombredelServicioRegex.test(campo.value)) {
      valido.innerText = "válido";
    } else {
      valido.innerText = "no debe contener números";
    }
});
});
document.addEventListener("DOMContentLoaded", function() {
document.getElementById('TipodeServicio').addEventListener('input', function(event) {
  campo = event.target;
  valido = document.getElementById('TipodeServicioOK');
      
  TipodeServicioRegex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/i;
  if (TipodeServicioRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "no debe contener números";
  }
});
});
document.addEventListener("DOMContentLoaded", function() {
document.getElementById('DescripciondelServicio').addEventListener('input', function(event) {
  campo = event.target;
  valido = document.getElementById('DescripciondelServicioOK');
      
  DescripciondelServicioRegex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/i;
  if (DescripciondelServicioRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "no debe contener números";
  }
});
});
document.addEventListener("DOMContentLoaded", function() {
document.getElementById('Email').addEventListener('input', function(event) {
  campo = event.target;
  valido = document.getElementById('emailOK');
      
  emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
  if (emailRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "inválido";
  }
});
});
document.addEventListener("DOMContentLoaded", function() {
document.getElementById('CantidaddeProductos').addEventListener('input', function(event) {
  campo = event.target;
  resultado = document.getElementById('CantidaddeProductosOK');
      
  CantidaddeProductosRegex = /^\d*$/;
  if (CantidaddeProductosRegex.test(campo.value)) {
    resultado.innerText = "válido";
  } else {
    resultado.innerText = "inválido, solo números positivos";
  }
});
});
document.addEventListener("DOMContentLoaded", function() {
document.getElementById('numerodecontacto').addEventListener('input', function(event) {
  campo = event.target;
  valido = document.getElementById('numerodecontactoOK');
      
  numerodecontactoRegex = /^\(?(\d{3})\)?[-]?(\d{3})[-]?(\d{4})$/;
  if (numerodecontactoRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "no debe contener letras";
  }
});
});
document.addEventListener("DOMContentLoaded", function() {
document.getElementById('detallesdelServicio').addEventListener('input', function(event) {
  campo = event.target;
  valido = document.getElementById('detallesdelServicioOK');
      
  detallesdelServicioRegex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/i;
  if (detallesdelServicioRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "no debe contener números";
  }
});
});
document.addEventListener("DOMContentLoaded", function() {
document.getElementById('Nombredeadministrador').addEventListener('input', function(event) {
  campo = event.target;
  valido = document.getElementById('NombredeadministradorOK');
      
  usuarioadministradorRegex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/i;
  if (usuarioadministradorRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "no debe contener números";
  }
});
});
document.addEventListener("DOMContentLoaded", function() {
document.getElementById('numerodetelefono').addEventListener('input', function(event) {
  campo = event.target;
  valido = document.getElementById('numerodetelefonoOK');
      
  numerodetelefonoRegex = /^\(?(\d{3})\)?[-]?(\d{3})[-]?(\d{4})$/;
  if (numerodetelefonoRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "no debe contener letras";
  }
});
});
document.addEventListener("DOMContentLoaded", function() {
document.getElementById('Contraseña').addEventListener('input', function(event) {
  campo = event.target;
  valido = document.getElementById('contraseñaOK');
      
  passwordRegex = /^[-\w.%+]{4,8}/i;
  if (passwordRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "inválido";
  }
});
});
document.addEventListener("DOMContentLoaded", function() {
document.getElementById('numerodeidentificacion').addEventListener('input', function(event) {
  campo = event.target;
  valido = document.getElementById('numerodeidentificacionOK');
      
  usuarioRegex = /^\d{8}$/;
  if (usuarioRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "inválido";
  }
});
});
document.addEventListener("DOMContentLoaded", function() {
  document.getElementById('direccion').addEventListener('input', function(event) {
    campo = event.target;
    valido = document.getElementById('direccionOK');
        
    usuarioRegex = /^(?:Calle|Carrera|Avenida|Transversal|Diagonal)\.\s\d{1,5}\s#\d{1,5},\s[a-zA-Záéíóúñ\s]+$/;
    if (usuarioRegex.test(campo.value)) {
      valido.innerText = "válido";
    } else {
      valido.innerText = "inválido";
    }
  });
  });
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("DNI").addEventListener("input", function (event) {
  campo = event.target;
  valido = document.getElementById("DNIOK");

  passwordRegex = /^\d*$/;
  if (passwordRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "solo números de DNI";
  }
});
});
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("contacto").addEventListener("input", function (event) {
  campo = event.target;
  valido = document.getElementById("contactoOK");

  passwordRegex = /^\(?(\d{3})\)?[-]?(\d{3})[-]?(\d{4})$/;
  if (passwordRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "solo números de teléfono";
  }
});
});
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("cantidad").addEventListener("input", function (event) {
  campo = event.target;
  valido = document.getElementById("cantidadOK");

  passwordRegex = /^\d*$/;
  if (passwordRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "inválido, solo precios positivos";
  }
});
});

