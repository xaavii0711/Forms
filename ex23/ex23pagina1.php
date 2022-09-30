<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php
    if ($_GET['colors'] == "FOC") {
        echo "<body style='background-color:red'>";
    }
    else if ($_GET['colors'] == "AIGUA") {
        echo "<body style='background-color:blue'>";
    }
    else if ($_GET['colors'] == "TERRA") {
        echo "<body style='background-color:brown'>";
    }
    else {
        echo "<body>";
    }
    ?>
    <form method="get">
        <select name="colors">
            <option <?php if($_GET['colors'] == "FOC") echo "selected";?>>FOC</option>
            <option <?php if($_GET['colors'] == "AIGUA") echo "selected";?>>AIGUA</option>
            <option <?php if($_GET['colors'] == "TERRA") echo "selected";?>>TERRA</option>
        </select>
        <input type="submit" value="ENVIA2">
    </form>
    
    
</body>
</html>