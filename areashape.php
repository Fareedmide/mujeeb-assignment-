<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action=" <?php echo $_SERVER['PHP_SELF']?>">
<label for="shape">select shape </label></b>
<select id="shape" name="shape" required>
<option value="square">Square</option>
<option value="triangle">triangle</option>
<option value="circle">circle</option>  
</select>

<br>

<label for="side1">Enter side/length/base/radius:</label>
<input type="text" name="side1" id="side1" required>
<br>

<label for="side2">Enter height/width:</label>
<input type="text" name="side2" id="side2">
<br>
<button type="submit">Calculate Area</button>
</form>
</body>
</html>
<?php 
if($_SERVER["REQUEST_METHOD"]== "POST"){
echo 'yeah';
    $shape = $_POST["shape"];
    $side1 = $_POST["side1"];
    $side2 = $_POST["side2"];
    if ($shape == "square"){

        document.getelem
        $area = $side1 * $side1;
        echo "<p>The area of the square is: $area</p>";
    }elseif($shape == "rectangle"){
        $area = $side1 * $side2;
        echo "<p>The area of the square is: $area</p>";
    }elseif ($shape == "triangle") {
        $area = 0.5 * $side1 * $side2;
        echo "<p>The area of the triangle is: $area</p>";
    }elseif($shape == "circle"){
        $area = 3.1415 * pow($side1, 2);
        echo "<p>The area of the square is: $area</p>";
    }

}
