const form = document.querySelector('form');
const resultDiv = document.querySelector('#result');

form.addEventListener('submit', e => {
	e.preventDefault();
	const formData = new FormData(form);
	fetch('submit.php', {   //172.20.10.2/phpmyadmin/submit.php
		method: 'POST',
		body: formData
	})
	.then(response => response.text())
	.then(result => {
		resultDiv.textContent = result;
	})
	.catch(error => {
		console.error('Error:', error);
	});
});