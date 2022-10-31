var form = document.querySelector('#form');

var checkValidity = (input) => {
	input.classList.remove('text-field__input_valid');
	input.classList.remove('text-field__input_invalid');
	input.nextElementSibling.textContent = '';
	if (input.checkValidity()) {
		input.classList.add('text-field__input_valid');
		input.nextElementSibling.textContent = 'Отлично!';
	} else {
		input.classList.add('text-field__input_invalid');
		input.nextElementSibling.textContent = input.validationMessage;
	}
}

var checkValidityAll = () => {
	var inputs = form.querySelectorAll('input');
	inputs.forEach((input) => {
		checkValidity(input);
	});
}

var onCheckValidity = (e) => {
	var target = e.target;
	if (!target.classList.contains('text-field__input')) {
		return;
	}
	checkValidity(target);
}

form.addEventListener('change', onCheckValidity);
form.addEventListener('keydown', onCheckValidity);
form.addEventListener('keyup', onCheckValidity);
checkValidityAll();


form.addEventListener('submit', (e) => {
	e.preventDefault();
	checkValidityAll();
});

var form = document.querySelector('#formi');

var checkValidity = (input) => {
	input.classList.remove('text-field__input_valid');
	input.classList.remove('text-field__input_invalid');
	input.nextElementSibling.textContent = '';
	if (input.checkValidity()) {
		input.classList.add('text-field__input_valid');
		input.nextElementSibling.textContent = 'Отлично!';
	} else {
		input.classList.add('text-field__input_invalid');
		input.nextElementSibling.textContent = input.validationMessage;
	}
}

var checkValidityAll = () => {
	var inputs = form.querySelectorAll('input');
	inputs.forEach((input) => {
		checkValidity(input);
	});
}

var onCheckValidity = (e) => {
	var target = e.target;
	if (!target.classList.contains('text-field__input')) {
		return;
	}
	checkValidity(target);
}

form.addEventListener('change', onCheckValidity);
form.addEventListener('keydown', onCheckValidity);
form.addEventListener('keyup', onCheckValidity);
checkValidityAll();


form.addEventListener('submit', (e) => {
	e.preventDefault();
	checkValidityAll();
});


