const openPopUp6 = document.getElementById('otkrit');
const closePopUp6 = document.getElementById('zakri');
const popUp6 = document.getElementById('info');

openPopUp6.addEventListener('click', function (e) {

	e.preventDefault();
	popUp6.classList.add('active');
})
closePopUp6.addEventListener('click', () => {
	popUp6.classList.remove('active');
})