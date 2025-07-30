<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AdoptLove | Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <style>
    :root {
      --primary: #00cc66;
      --primary-dark: #00994d;
      --light-bg: #f0faff;
      --white: #ffffff;
      --border: #a3d9c3;
      --text: #00cc66;
    }
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    html, body {
      height: 100%;
      font-family: 'Poppins', sans-serif;
    }
    #bgVideo {
      position: fixed;
      top: 0;
      left: 0;
      min-width: 100%;
      min-height: 100%;
      object-fit: cover;
      z-index: -2;
    }
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.15);
      z-index: -1;
    }
    .wrapper {
      display: flex;
      justify-content: flex-end; /* Move container to the right */
      align-items: center;
      height: 100%;
      padding: 0 5vw;
    }
    .login-container {
      background-image: url('./images/login1.jpg');
      background-size: cover;
      background-position: center;
      border: 1px solid var(--border);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0, 204, 102, 0.15);
      width: 100%;
      max-width: 400px;
      color: var(--text);
      position: relative;
      z-index: 1;
    }
    .login-container::before {
      content: "";
      position: absolute;
      inset: 0;
      background-color: rgba(255, 255, 255, 0.85);
      border-radius: 12px;
      z-index: -1;
    }
    h3 {
      text-align: center;
      margin-bottom: 25px;
      font-weight: 600;
      font-size: 1.8rem;
      color: var(--text);
    }
    .form-group {
      margin-bottom: 20px;
      position: relative;
    }
    label {
      display: block;
      font-weight: 500;
      margin-bottom: 6px;
      color: var(--text);
    }
    .form-control {
      width: 100%;
      padding: 10px 14px;
      font-size: 1rem;
      border: 1.5px solid var(--border);
      border-radius: 6px;
      background-color: var(--light-bg);
      color: var(--text);
    }
    .form-control:focus {
      border-color: var(--primary);
      background-color: #ffffff;
      box-shadow: 0 6px 15px rgba(0, 204, 102, 0.3);
      outline: none;
    }
    .form-control::placeholder {
      color: var(--primary-dark);
      opacity: 0.6;
    }
    .toggle-password {
      position: absolute;
      top: 38px;
      right: 12px;
      background: none;
      border: none;
      cursor: pointer;
    }
    .toggle-password svg {
      width: 20px;
      height: 20px;
      fill: var(--primary-dark);
    }
    .btn-primary {
      width: 100%;
      padding: 12px 0;
      background-color: var(--primary);
      color: var(--white);
      border: none;
      border-radius: 8px;
      font-size: 1.1rem;
      font-weight: 600;
      cursor: pointer;
    }
    .btn-primary:hover {
      background-color: var(--primary-dark);
      box-shadow: 0 8px 25px rgba(0, 204, 102, 0.5);
    }
    .btn-success {
      margin-top: 18px;
      display: block;
      width: 100%;
      text-align: center;
      padding: 10px 0;
      border: 2px solid var(--primary);
      border-radius: 8px;
      color: var(--primary);
      font-weight: 600;
      text-decoration: none;
    }
    .btn-success:hover {
      background-color: var(--primary);
      color: var(--white);
      text-decoration: none;
      box-shadow: 0 8px 25px rgba(0, 204, 102, 0.5);
    }
    @media (max-width: 768px) {
      .wrapper {
        justify-content: center;
        padding: 0 15px;
      }
    }
  </style>
</head>
<body>
  <video autoplay muted loop id="bgVideo">
    <source src="./images/pets.mp4" type="video/mp4">
  </video>
  <div class="overlay"></div>
  <div class="wrapper">
    <div class="login-container">
      <h3>Administrator Login</h3>
      <form action="./login_process.php" method="POST" novalidate>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" class="form-control" placeholder="Enter username" required autocomplete="username" />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required autocomplete="current-password" />
          <button type="button" class="toggle-password" onclick="togglePassword()">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M12 5c-7 0-11 7-11 7s4 7 11 7 11-7 11-7-4-7-11-7zm0 12a5 5 0 110-10 5 5 0 010 10zm0-8a3 3 0 100 6 3 3 0 000-6z"/>
            </svg>
          </button>
        </div>
        <button type="submit" class="btn-primary">Login</button>
      </form>
      <a href="index.php" class="btn-success">Back to Home</a>
    </div>
  </div>
  <script>
    function togglePassword() {
      const passwordInput = document.getElementById('password');
      const type = passwordInput.type === 'password' ? 'text' : 'password';
      passwordInput.type = type;
    }
  </script>
</body>
</html>
