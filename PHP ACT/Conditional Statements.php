<!DOCTYPE html>
<html>
<body>
    <?php
        $score = 85;
        if ($score >= 90) {
            echo "<p>A Grade</p>";
        } elseif ($score >= 80) {
            echo "<p>B Grade</p>";
        } else {
            echo "<p>C Grade</p>";
        }
    ?>
</body>
</html>