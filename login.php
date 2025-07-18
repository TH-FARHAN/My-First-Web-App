<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - AdoptLove</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />

  <style>
    :root {
      --primary: #29b6f6;
      --primary-dark: #0288d1;
      --light-bg: #f0faff;
      --white: #ffffff;
      --border: #b3e5fc;
      --text: #0277bd;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: var(--light-bg);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-image: url('./images/login1.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      border: 1px solid var(--border);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(2, 119, 189, 0.15);
      width: 100%;
      max-width: 400px;
      position: relative;
      z-index: 1;
      color: var(--text);
    }

    .login-container::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background-color: rgba(255, 255, 255, 0.85);
      border-radius: 12px;
      z-index: -1;
    }

    .login-container h3 {
      text-align: center;
      color: var(--text);
      margin-bottom: 25px;
      font-weight: 600;
      font-size: 1.8rem;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: 500;
      color: var(--text);
      margin-bottom: 6px;
    }

    input.form-control {
      width: 100%;
      padding: 10px 14px;
      font-size: 1rem;
      border: 1.5px solid var(--border);
      border-radius: 6px;
      color: var(--text);
      background-color: var(--light-bg);
      transition: border-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
    }

    input.form-control:focus,
    input.form-control:hover {
      border-color: var(--primary);
      outline: none;
      background-color: #ffffff;
      box-shadow: 0 6px 15px rgba(41, 182, 246, 0.3);
    }

    input::placeholder {
      color: var(--primary-dark);
      opacity: 0.6;
    }

    button.btn-primary {
      width: 100%;
      padding: 12px 0;
      background-color: var(--primary);
      color: var(--white);
      border: none;
      border-radius: 8px;
      font-size: 1.1rem;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
    }

    button.btn-primary:hover,
    button.btn-primary:focus {
      background-color: var(--primary-dark);
      box-shadow: 0 8px 25px rgba(2, 119, 189, 0.5);
      outline: none;
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
      transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
      cursor: pointer;
      user-select: none;
    }

    .btn-success:hover,
    .btn-success:focus {
      background-color: var(--primary);
      color: var(--white);
      box-shadow: 0 8px 25px rgba(2, 119, 189, 0.5);
      text-decoration: none;
      outline: none;
    }

    @media (max-width: 480px) {
      .login-container {
        padding: 30px 25px;
      }
      .login-container h3 {
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <div class="login-container" role="main" aria-label="Administrator login form">
    <h3>Administrator Login</h3>
    <form action="./login_process.php" method="POST" novalidate>
      <div class="form-group">
        <label for="username">Username</label>
        <input
          type="text"
          id="username"
          name="username"
          class="form-control"
          placeholder="Enter username"
          required
          autocomplete="username"
          aria-required="true"
        />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input
          type="password"
          id="password"
          name="password"
          class="form-control"
          placeholder="Enter password"
          required
          autocomplete="current-password"
          aria-required="true"
        />
      </div>
      <button type="submit" class="btn-primary" aria-label="Login">Login</button>
    </form>

    <a href="index.php" class="btn-success" aria-label="Back to Home">Back to Home</a>
  </div>

</body>
</html>