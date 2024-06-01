<form action="login.php" method="post">
    <span style="color: red;"><? $error ?? '' ?></span>
    <label for="username">Username</label>
    <input type="text" name="username" id="username"> 
    <label for="password">Passwort</label>
    <input type="password" name="password" id="password"> 
    <button type="submit">Login</button>
</form>