<?php
// class coffee exercise
//  if today is thursday --> pumpkin latte day
//  we will start with the isset() function
//  then introduce GLOBAL VARIABLE
// our switch

//IF the variable has been set, we're going to do something
//esle, we'regoing to do something else

//$variable = 'Life is good';
//if(isset($variable)) {
//echo 'Great Job!';
//} else {
//echo 'Ya blew it';
//}


// starting the switch
// logic: if something is set ($today), then all is well
// else, today is TODAY
// GLOBAL VARIABLES ARE CAPITALIZED AND START WITH A $_
// $_Get

if(isset($_GET['today'])) {
$today = $_GET['today'];
} else {
$today = date('l');
}

//  switch

switch($today) {


case 'Monday' :
$coffee = '<h2>Monday is our London Fog Day!</h2>';
$pic = 'cap.jpeg';
$alt = 'london fog';
 $content = '<i>A <b>cappuccino</b> A London fog is a hot tea-based drink that consists of Earl Grey tea, steamed milk, and vanilla syrup.</i>';
break;  
        
 case 'Tuesday' :
$coffee = '<h2>Tuesday is our latte day!</h2>';
$pic = 'latte-small.jpeg';
$alt = 'latte';
$content = '<i>A <b>Latte</b> Caffe latte, often shortened to just latte in English, is a coffee drink of Italian origin made with espresso and steamed milk';
break;  

 case 'Wednesday' :
$coffee = '<h2>Wednesday is our Chai Tea Day!</h2>';
$pic = 'chai.png';
$alt = 'chai tea';
$content = '<i>A <b>Chai</b> is a tea beverage made by boiling black tea in milk and water with a mixture of aromatic herbs and spices.</i> Originating in India, the beverage has gained worldwide popularity, becoming a feature in many coffee and tea houses.';
break;  

case 'Thursday' :
$coffee = '<h2>Thursday is our Cap!</h2>';
$pic = 'cap.jpeg';
$alt = 'capaccino';
$content = '<i>A <b>cappuccino</b> is an espresso-based coffee drink that 
originated in Italy</i>, and is prepared with steamed milk foam. 
Variations of the drink involve the use of cream instead of milk, 
using non-dairy milk substitutes and flavoring 
with cinnamon or chocolate powder.';
break;    

case 'Friday' :
$coffee = '<h2>Friday is our Americano Day!</h2>';
$pic = 'americano.jpeg';
$alt = 'americano';
$content = '<i><b>Caff?? Americano</b> is a type of coffee drink prepared by 
diluting an espresso with hot water</i>, giving it a similar strength to, 
but different flavor from, traditionally brewed coffee. The strength 
of an Americano varies with the number of shots of espresso and the amount of water added.';
break;

case 'Saturday' :
$coffee = '<h2>Saturday is our Regular Joe Day!</h2>';
$pic = 'coffee.png';
$alt = 'coffee';
$content = '<i><b>Coffee</b> is a brewed drink prepared from roasted coffee beans</i>, 
the seeds of berries from certain Coffea species. From the coffee fruit, 
the seeds are separated to produce a stable, raw product: unroasted green coffee.';
break; 

case 'Sunday' :
$coffee = '<h2>Sunday is our Green Tea Day!</h2>';
// $color = '#800000';
$pic = 'green-tea.jpeg';
$alt = 'green tea';
$content = '<i><b>Green tea</b> is a type of tea that is made from Camellia sinensis 
leaves</i> and buds that have not undergone the same withering and oxidation process 
used to make oolong teas and black teas. Green tea originated in China, and since 
then its production and manufacture has spread to other countries in East Asia.';
break;

}
?>


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Switch Class Exercise</title>
<style>
#wrapper {
    width:80%;
    margin:0 auto;
}

#wrapper {
    background:<?php echo $color;?>
}


</style>    
</head>
<body>
<div id="wrapper">
<h1>My Switch Classwork Exercise</h1>
<?php
echo $coffee;
?>
<img src="images/<?php echo $pic;?>" alt="<?php echo $alt; ?>">
<p><?php echo $content;?></p>

<h2>Check Out Our Daily Specials</h2>
<ul>
    <li><a href="switch.php?today=Monday">Monday</a></li>
    <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
    <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
    <li><a href="switch.php?today=Thursday">Thursday</a></li>
    <li><a href="switch.php?today=Friday">Friday</a></li>
    <li><a href="switch.php?today=Saturday">Saturday</a></li>
    <li><a href="switch.php?today=Sunday">Sunday</a></li>
</ul> 
</div> <!--close wrapper-->   
</body>
</html>