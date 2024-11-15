// Login Form Submission
document.getElementById('loginForm')?.addEventListener('submit', function(e) {
    e.preventDefault(); // Default form submission ko rokna
    alert('Login successful!'); // Sirf alert show karna demonstration ke liye
});

// Signup Form Submission
document.getElementById('signupForm')?.addEventListener('submit', function(e) {
    e.preventDefault(); // Default form submission ko rokna
    alert('Signup successful!'); // Sirf alert show karna demonstration ke liye
});

// Logout Confirmation Function
function confirmLogout() {
    var result = confirm("Kya aap sach mein logout karna chahte hain?"); // User se confirmation poochhna
    if (result) {
        window.location.href = "logout.php";  // Agar user ne OK click kiya, logout page pe redirect karna
    }
    // Agar user ne Cancel click kiya, toh kuch nahi hoga
}

// Bind the logout confirmation to the logout link (if applicable)
document.getElementById('logoutBtn')?.addEventListener('click', function() {
    confirmLogout(); // Logout confirmation function ko call karna
});
