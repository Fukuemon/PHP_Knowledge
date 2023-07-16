<!DOCTYPE html>
<html>
<head>
    <title>Table with alternating row colors</title>
</head>
<body>
    <table>
    <?php
    $color = "#FFFFFF";
    for ($i = 1; $i <= 10; $i++) {
        if ($color == "#FFFFFF") {
            $color = "#CCCCCC";
        } else {
            $color = "#FFFFFF";
        }
        echo '<tr style="background-color:' . $color . '">';
        echo '<td>' . $i . '行目</td>';
        echo '</tr>';
    }
    ?>
    </table>
</body>
</html>