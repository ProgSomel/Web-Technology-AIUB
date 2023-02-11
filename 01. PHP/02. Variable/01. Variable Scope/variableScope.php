<?php
$x = 12;
$y = 16;
$z = $x + $y;

if ($z > 50) {
    $m = 15;

}

echo " <h1>Hello PHP $z</h1> ";
echo " <h1>Hello PHP" . $z . "</h1> ";

?>
<html>
    <head></head>
    <body>
This is Plain html 
We have access from private network and calculated result is <?php echo $z ?> and m = <?php echo $m ?>
    </body>
</html>