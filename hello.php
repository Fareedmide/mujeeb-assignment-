<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php   
if (isset($_GET['name'])) {
    $userName = htmlspecialcharacters($_GET['name']);
    
    // Display the personalized greeting
    echo "<h1>Hello, $userName!</h1>";
} else {
    // If name of the user is not set, prompt the user to provide their name
    echo '<h1>Please provide your name in the URL, e.g., "name=Fareed"</h1>';
}
?>
