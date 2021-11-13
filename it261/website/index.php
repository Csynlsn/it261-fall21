<?php
include('config.php');
include('includes/header.php');
?>

    <div id="wrapper">
    <div id="hero">

<?php echo random_pics();?>

<!-- <img class="screenshot" src="images/random-image-code.jpg" alt="code screenshot"> -->

    </div> <!--END hero-->




    
<main>
    <p>Here is a screenshot of my code for the random images function.<br>The pre tag wasn't showing the HTML.</p>
<img class="screenshot" src="images/random-image-code.jpg" alt="code screenshot">
<h1> <?php echo $headline; ?></h1>
<p>Morbi scelerisque lorem tristique odio molestie facilisis. 
Morbi eu metus nec mi iaculis tempus. Proin rhoncus mollis molestie. Cras suscipit bibendum velit, 
eu rhoncus mi tincidunt sed. Vestibulum porta justo pharetra, accumsan massa ac, congue magna. Integer efficitur 
tellus sit amet malesuada fringilla.</p>
</main> 
    
<aside>
        
</aside>

<?php
include('includes/footer.php');
?>