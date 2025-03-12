<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Name: <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            echo "<p>Hello, $name!</p>";
        }
    ?>
</body>
</html>