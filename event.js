function handleSubmit(event) {
    event.preventDefault();
    const form = event.target;
    console.log('Form submitted:', form.elements);
}

// Add form submission event listener to a form element
const formElement = document.getElementById('myForm');
formElement.addEventListener('submit', handleSubmit);
