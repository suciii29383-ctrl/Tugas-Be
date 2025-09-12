<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="login.css"> 
</head>
<body>
  <main class="login-container">
    <h2>Login</h2>
    <form action="login_process.php" method="POST" class="login-form">
      <input type="text" id="username" name="username" placeholder="Username" required>
      <input type="password" id="password" name="password" placeholder="Password" required>
      <button type="submit">Masuk</button>
    </form>
  </main>
</body>
</html>
