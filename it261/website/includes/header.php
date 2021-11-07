<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link href="css/styles.css" type="text/css" rel= "stylesheet">
<title> <?php echo $title; ?></title>
<style></style>
</head>

<body class="<?php echo $body;?>" style="<?php echo $background_color;?>" >
    <header>
        <div class="header-inner">
        <a href="index.php">
            <img id="logo" src="images/logo.png" alt="logo">
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