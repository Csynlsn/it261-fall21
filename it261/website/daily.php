<?php
include('includes/header.php');?>

<?php
if(isset($_GET['today'])) {
    $today = $_GET['today'];
    } else {
    $today = date('l');
    }


switch($today) {
case 'Sunday' :
$instance = '<h2>It\'s Serval Sunday!</h2>';
$pic = 'serval.jpeg';
$alt = '';
$content = 'content soon';
break;
}

switch($today) {
case 'Monday' :
$instance = '<h2>Monday is</h2>';
$pic = 'mongoose.png';
$alt = '';
$content = 'content 3soon';
break;
}

switch($today) {
case 'Tuesday' :
$instance = '<h2>Tuesday is</h2>';
$pic = 'cap.jpeg';
$alt = '';
$content = 'content 34soon';
break;
}
        
switch($today) {
case 'Wednesday' :
$instance = '<h2>Wednesday is</h2>';
$pic = 'cap.jpeg';
$alt = '';
$content = 'content ddsoon';
break;
}
            
            
switch($today) {
case 'Thursday' :
$instance = '<h2>Thursday is</h2>';
$pic = 'cap.jpeg';
$alt = '';
$content = 'content soon';
break;
}
                
switch($today) {
case 'Friday' :
$instance = '<h2>Fridayis</h2>';
$pic = '';
$alt = '';
$content = 'content soon';
break;
}
                    
switch($today) {
case 'Saturday' :
$instance = '<h2>Saturday is</h2>';
$pic = '';
$alt = '';
$content = 'content soon';
break;
}                    
?> 


    <div id="wrapper">
<div id="daily-wrap">
<main>
<h1> <?php echo $instance; ?></h1>

<div class="img-wrap">
<img src="images/<?php echo $pic;?>" alt="<?php echo $alt; ?>">
</div><!--end imgwrap-->

<h2>What do we have today?</h2>
<ul>
    <li><a href="daily.php?today=Sunday">Sunday</a></li>
    <li><a href="daily.php?today=Monday">Monday</a></li>
    <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
    <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
    <li><a href="daily.php?today=Thursday">Thursday</a></li>
    <li><a href="daily.php?today=Friday">Friday</a></li>
    <li><a href="daily.php?today=Saturday">Saturday</a></li>
</ul> 
</main> 
</div> <!--end daily-->   
<aside>
    <p><?php echo $content;?></p> 
</aside>

<?php
include('includes/footer.php');?>


