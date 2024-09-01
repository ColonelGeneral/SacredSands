document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault();  // Prevent the default form submission

    // Here you can perform any additional logic or validations if needed

    // Redirect to a different page after form submission
    window.location.href = "home page.html";  // Replace with your desired page URL
});
