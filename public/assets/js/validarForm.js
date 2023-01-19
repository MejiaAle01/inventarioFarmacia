const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
const passwordInput = document.getElementById('Contra');
const emailInput = document.getElementById('Correo');

const expresiones = {
	password: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/gm,
	correo: /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g
};

const setError = (message, field, isError = true) => {
	if (isError) {
		field.classList.add("is-danger");
		field.nextElementSibling.classList.add("help", "has-text-danger");
		field.nextElementSibling.innerText = message;
		//field.nextElementSibling.innerText = `El campo ${field.name} es requerido.`;
	} else {
		field.classList.remove("is-danger");
		field.nextElementSibling.classList.remove("help", "has-text-danger");
		field.nextElementSibling.innerText = "";
	}
};

const validateEmptyField = (message, e) => {
	const field = e.target;
	const fieldValue = e.target.value;
	if (fieldValue.trim().length === 0) {
		setError(message, field);
	} else {
		setError("", field, false);
	}
};

const validateEmailFormat = (e) => {
	const field = e.target;
	const fieldValue = e.target.value;
	if (fieldValue.trim().length > 6 && !expresiones.correo.test(fieldValue)) {
		setError("Escriba un correo válido!", field);
	} else {
		setError("", field, false);
	}
};

const validatePasswordFormat = (e) => {
	const field = e.target;
	const fieldValue = e.target.value;
	if (fieldValue.trim().length <= 8 && !expresiones.password.test(fieldValue)) {
		setError("Min. 8 carácteres, incluya mayúsculas, minúsculas, símbolos y números.", field);
	} else {
		setError("", field, false);
	}
};

inputs.forEach((input) => {
	input.addEventListener("blur", (e) => validateEmptyField("El campo es requerido!", e));
});

passwordInput.addEventListener("input", validatePasswordFormat);
emailInput.addEventListener("input", validateEmailFormat);

formulario.addEventListener("submit", (e) => {
	e.preventDefault();
});