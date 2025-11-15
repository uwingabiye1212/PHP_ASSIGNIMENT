# PHP_ASSIGNIMENT
### How Sessions Were Used

Sessions were used to manage user authentication and protect all CRUD pages in the system. When a user successfully logs in, the application creates a session and stores key user information such as the username and customer ID. This session acts as a temporary identity for the user throughout the entire browsing period.

### How Cookies Were Used

Cookies were used in this project to enhance the user experience by providing a simple “Remember Me” functionality. When a user logs in, the system can store their username in a browser cookie so that the login form can automatically pre-fill the next time they visit the site. This helps users log in faster without retyping their information each time.

Only non-sensitive data, such as the username, is stored in the cookie. Passwords or confidential information are never saved in cookies for security reasons. The cookies were set with an expiration time, meaning they remain in the user’s browser for a defined period (for example, 30 days) unless the user clears them.

### How Authentication Is Secured

Authentication in this system is secured through several layers of protection to ensure that only authorized users can access the CRUD operations.
### Secure Login Validation
### Session-Based Access Control
### Encrypted Password Storage
### Secure Cookies (Optional “Remember Me”)