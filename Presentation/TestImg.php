<?php
    require_once 'SessionHandler.php';
    SecureSessionStart();

 /**
 * ©copyright 2016 Ashif & Sayed
 */


?>

<html>
    <form action="test.php" method="post">
        <p><img src="Captcha.php" width="220" height="60" border="1" alt="CAPTCHA"></p>
        <p><input type="text" size="6" maxlength="5" name="captcha" value=""><br>
        <small>copy the digits from the image into this box</small></p>
        <input type="submit" value="Upload Product" name="submit">
    </form>
</html>