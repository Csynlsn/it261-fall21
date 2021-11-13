<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link href="css/contact-styles.css" type="text/css" rel= "stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Praise&display=swap" rel="stylesheet">
<title> <?php echo $title; ?></title>
<style></style>
</head>

<body class="<?php echo $body;?>" style="<?php echo $background_color;?>" >
    <header>
        <div class="header-inner">
        <a href="index.php">
            <img id="logo" src="images/kc-logo.jpeg" alt="logo">
        </a>
        <nav>
            
<ul>


<?php
echo my_nav($nav);
?>


</ul>
        </nav>
        </div> <!--END header-inner-->
    </header>