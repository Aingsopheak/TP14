<html>
    <?php
        session_start();

        //storing session data
        $_SESSION["username"] = "sopheak";
        $_SESSION["email"] = "sopheakg@gmail.com";

        //retrieve session data
        echo $_SESSION["username"];
        echo "<br>";
        echo $_SESSION["email"];
    ?>
</html>