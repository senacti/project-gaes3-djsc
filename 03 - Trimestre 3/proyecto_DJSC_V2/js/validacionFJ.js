document.getElementById('Nombre del Servicio').addEventListener('input', function() {
    campo = event.target;
    valido = document.getElementById('Nombre del ServicioOK');
        
    NombredelServicioRegex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/i;
    if (NombredelServicioRegex.test(campo.value)) {
      valido.innerText = "válido";
    } else {
      valido.innerText = "no debe contener numeros";
    }
});
document.getElementById('Tipo de Servicio').addEventListener('input', function() {
  campo = event.target;
  valido = document.getElementById('Tipo de ServicioOK');
      
  TipodeServicioRegex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/i;
  if (TipodeServicioRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "no debe contener numeros";
  }
});
document.getElementById('Cantidad de Productos').addEventListener('input', function() {
  campo = event.target;
  resultado = document.getElementById('Cantidad de ProductosOK');
      
  CantidaddeProductosRegex = /^\d*$/;
  if (CantidaddeProductosRegex.test(campo.value)) {
    resultado.innerText = "válido";
  } else {
    resultado.innerText = "inválido solo numeros positivos";
  }
});
document.getElementById('Descripcion del Servicio').addEventListener('input', function() {
  campo = event.target;
  valido = document.getElementById('Descripcion del ServicioOK');
      
  DescripciondelServicioRegex =/^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/i;
  if (DescripciondelServicioRegex.test(campo.value)) {
    valido.innerText = "válido";
  } else {
    valido.innerText = "no debe contener numeros";
  }
});
