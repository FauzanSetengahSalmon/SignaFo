<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignaFo Login</title>
    <link rel="stylesheet" href="Login.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>
    <div class="container">
        <div class="logo-section">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path fill="#5b3ef0" d="M80 259.8L289.2 345.9C299 349.9 309.4 352 320 352C330.6 352 341 349.9 350.8 345.9L593.2 246.1C602.2 242.4 608 233.7 608 224C608 214.3 602.2 205.6 593.2 201.9L350.8 102.1C341 98.1 330.6 96 320 96C309.4 96 299 98.1 289.2 102.1L46.8 201.9C37.8 205.6 32 214.3 32 224L32 520C32 533.3 42.7 544 56 544C69.3 544 80 533.3 80 520L80 259.8zM128 331.5L128 448C128 501 214 544 320 544C426 544 512 501 512 448L512 331.4L369.1 390.3C353.5 396.7 336.9 400 320 400C303.1 400 286.5 396.7 270.9 390.3L128 331.4z" />
                </svg>
                <span class="logo-text">SignaFo</span>
            </div>
            <p class="subtitle">Class Management System</p>
        </div>

        <div class="card">
            <div class="card-text">
                <h2>Welcome Back</h2>
                <p>Sign in to your account</p>
            </div>

            <div class="role-toggle">
                <button class="role-button active" id="studentBtn">
                    <i class="fa-solid fa-graduation-cap"></i>
                    Student
                </button>
                <button class="role-button" id="adminBtn">
                    <i class="fa-solid fa-shield"></i>
                    Admin
                </button>
            </div>

            <form id="loginForm" action="Process.php" method="POST">
                <label>Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your student email" required />

                <label>Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required />

                <input type="hidden" name="role" id="role" value="student" />

                <button type="submit" id="submitBtn">Sign in as Student</button>
            </form>
        </div>
    </div>
    <script src="Login.js"></script>
</body>

</html>