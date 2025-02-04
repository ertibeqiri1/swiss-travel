  
function showForm(formId){
    document.querySelectorAll(".form-box").forEach(form => form.classList.remove("active") );
    document.getElementById(formId).classList.add("active");
}
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("form").forEach(function (form) {
        form.addEventListener("submit", function (event) {
            let valid = true;

            
            let name = form.querySelector("input[name='name']");
            let email = form.querySelector("input[name='email']");
            let password = form.querySelector("input[name='password']");

            // Regex kodi
            let namePattern = /^[A-Za-z\s]{3,30}$/;
            let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            let passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/;

            // Validimi emrit
            if (name && !namePattern.test(name.value)) {
                alert("Name must be between 3-30 characters and contain only letters.");
                valid = false;
            }

            // Validimi email
            if (email && !emailPattern.test(email.value)) {
                alert("Please enter a valid email address.");
                valid = false;
            }

            // Validimi password
            if (password && !passwordPattern.test(password.value)) {
                alert("Password must be at least 6 characters long and include a number.");
                valid = false;
            }

            if (!valid) {
                event.preventDefault();
            }
        });
    });
});
