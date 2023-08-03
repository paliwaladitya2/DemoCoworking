<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
    /* Same background styling as in login page */
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: url('background.jpg') no-repeat center center fixed;
    background-size: cover;
}

.container {
    /* Same container styling as in login page */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.registration-form {
    /* Similar form styling as in login page */
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    max-width: 400px;
    width: 100%;
}

.registration-form h1 {
    /* Same heading styling as in login page */
    text-align: center;
    margin-bottom: 30px;
}

.registration-form form {
    /* Similar form styling as in login page */
    display: flex;
    flex-direction: column;
}

.registration-form input {
    /* Same input field styling as in login page */
    margin: 10px 0;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
}

.registration-form button {
    /* Same button styling as in login page */
    background-color: #4CAF50;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.registration-form button:hover {
    /* Same button hover styling as in login page */
    background-color: #45a049;
}

.registration-form p {
    /* Additional styling for the "Already have an account?" link */
    text-align: center;
    margin-top: 10px;
}

    </style>
    <title>Registration Page</title>
</head>
<body>
    <div class="container">
        <div class="registration-form">
            <h1>Registration</h1>
            <form action="{{ Route('saveregister') }}" method="post">
                @csrf
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <button type="submit">Register</button>
            </form>
            <p>Already have an account? <a href="{{ Route('login') }}">Login here</a></p>
        </div>
    </div>
</body>
</html>
