// Fetch the form data
const form = document.getElementById("emailForm");

form.addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the default form submission

    const formData = new FormData(form);

    // Display the form data
    for (const [key, value] of formData.entries()) {
        console.log(`${key}: ${value}`);
    }
});