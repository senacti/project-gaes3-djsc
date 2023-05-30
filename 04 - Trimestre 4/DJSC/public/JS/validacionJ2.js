document
	.getElementById("Nombre de usuario")
	.addEventListener("input", function () {
		campo = event.target;
		valido = document.getElementById("Nombre de usuarioOK");

		usuarioRegex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/i;
		if (usuarioRegex.test(campo.value)) {
			valido.innerText = "válido";
		} else {
			valido.innerText = "inválido solo letras";
		}
	});
document.getElementById("DNI").addEventListener("input", function () {
	campo = event.target;
	valido = document.getElementById("DNIOK");

	passwordRegex = /^\d*$/;
	if (passwordRegex.test(campo.value)) {
		valido.innerText = "válido";
	} else {
		valido.innerText = "solo numeros de DNI";
	}
});
document.getElementById("contacto").addEventListener("input", function () {
	campo = event.target;
	valido = document.getElementById("contactoOK");

	passwordRegex = /^\(?(\d{3})\)?[-]?(\d{3})[-]?(\d{4})$/;
	if (passwordRegex.test(campo.value)) {
		valido.innerText = "válido";
	} else {
		valido.innerText = "solo numeros de telefono";
	}
});
document.getElementById("cantidad").addEventListener("input", function () {
	campo = event.target;
	valido = document.getElementById("cantidadOK");

	passwordRegex = /^\d*$/;
	if (passwordRegex.test(campo.value)) {
		valido.innerText = "válido";
	} else {
		valido.innerText = "invalido solo precios positivos";
	}
});
