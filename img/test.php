<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Virtual Slot Machine</title>
        <link rel="stylesheet" href="css.css">
    </head>
    <body>
        <?php
        $images = array('apple.png', 'cherry.png', 'grapes.png', 'lemon.png', 'orange.png', 'pear.png', 'watermelon.png');
        $random_image1 = array_rand($images);
        $random_image2 = array_rand($images);
        $random_image3 = array_rand($images);
        $name = $_POST["name"];
        $bet = $_POST["bet"];
        $credit = $_POST["credit"];
        if (($images[$random_image1] == $images[$random_image2]) && ($images[$random_image1] == $images[$random_image3])) {
            $credit += $bet * 10;
            echo "<h1>Congratulations " . $name . ", you won " . $bet * 10 . " credits!</h1>";
        }
        elseif (($images[$random_image1] == $images[$random_image2]) || ($images[$random_image1] == $images[$random_image3])) {
            $credit += $bet * 2;
            echo "<h1>Congratulations " . $name . ", you won " . $bet * 2 . " credits!</h1>";
        }
        elseif (($images[$random_image2] == $images[$random_image3])) {
            $credit += $bet * 2;
            echo "<h1>Congratulations " . $name . ", you won " . $bet * 2 . " credits!</h1>";
        }
        else {
            $credit -= $bet;
            echo "<h1>Sorry " . $name . ", you lost " . $bet . " credits!</h1>";
        }
        
        ?>
       <form action="index.php" method="POST">
            <div>
                <img src="<?php echo $images[$random_image1]; ?>" height="200" width="200">
                <img src="<?php echo $images[$random_image2]; ?>" height="200" width="200">
                <img src="<?php echo $images[$random_image3]; ?>" height="200" width="200"><br>
                Name:<input type="text" name="name" value="<?php echo $name; ?>"><br><br>
                Bet:<input type="number" name="bet" value="<?php echo $bet; ?>"><br><br>
                Credit:<input type="text" name="credit" value="<?php echo $credit; ?>"><br><br>
                <input type="submit" value="SPIN">
            </div>        
        </form>
    </body>
</html>
