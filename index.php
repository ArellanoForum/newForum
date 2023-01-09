<?php
include_once 'header.php'
?>
<body>
<section class="login-form">
    <h2>Log in</h2>
<div class="login-container">
    <form action="login.inc.php" method="post">
        <div class="login">
    <label for="username">Username:</label>
    <input type="text" name="username" placeholder="Type your Username">
        </div>
        <div class="login">
    <label for="password">Password:</label>
    <input type="password" name="password" placeholder="Type your Password">
        </div>
    <button type="submit" name="submit">Continue</button>
    </section>

</body>
</html>

<?php
include_once 'footer.php'
?>