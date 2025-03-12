<!DOCTYPE html>
<html>
<body>
    <?php
        function greet($name) {
            return "Hello, " . $name . "!";
        }
        echo "<p>" . greet("Alice") . "</p>";
    ?>
</body>
</html>