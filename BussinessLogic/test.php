<?php
    require_once 'SessionHandler.php';
    SecureSessionStart();

 /**
 * ©copyright 2016 Ashif & Sayed
 */
    if(isset($_POST['car']) && isset($_POST['submit'])){
        echo $_POST['car'];
    }


?>

<html>
    <form action="test.php" method="post">
        <select name="car" required>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>   
        <input type="submit" value="Checkout" name="submit"> 
    </form>
</html>