document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("loginForm");
    loginForm.addEventListener("submit", function (e) {
        e.preventDefault();
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;
        
        // Send the username and password to the server using AJAX or fetch API
        // Handle the server response here (e.g., check if the credentials are valid).
    });
});
