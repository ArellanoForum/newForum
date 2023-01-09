<?php
include_once 'header.php'
?>
<body>
<section class="login-form">
    <h2>Log in</h2>
<div class="login-container">
    <form action="includes/signup.inc.php" method="post">
    <label for="password">Name:</label>
    <input type="text" name="name" placeholder="Type your Fullname">
    <label for="password">Username:</label>
    <input type="text" name="uid" placeholder="Type your Username">
    <label for="password">Password:</label>
    <input type="password" name="password" placeholder="Type your Password">
    <label for="password">Email:</label>
    <input type="text" name="email" placeholder="Type your Email">
    <button type="submit" name="submit">Continue</button>
    </section>

</body>
</html>

<?php
include_once 'footer.php'
?>