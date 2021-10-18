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
$animal = '<h2>It\'s Serval Sunday!</h2>';
$pic = 'serval-cat.jpg';
$alt = 'Majestic wild serval cat';
$color = ' style="background-color:#17cb96"';
$content = 'The serval is a wild cat native to Africa. It is rare in North Africa and the Sahel, but widespread in sub-Saharan countries, except rainforest regions. Across its range, it occurs in protected areas, and hunting it is either prohibited or regulated in range countries. It is the sole member of the genus Leptailurus.';
break;
}

switch($today) {
case 'Monday' :
$animal = '<h2>It\'s Markhor Monday!</h2>';
$pic = 'markhor.jpg';
$alt = 'Markhor ram with large horns';
$color = ' style="background-color:#f0f5f9"';
$content = 'The markhor is an animal that was considered to be the most challenging game in British India due to the dangers of hunting them at high altitudes. The name “Markhor” is a combination of two Persian and Pashto words: “Mar” means snake and “khor” means eater. Also known as the screw-horned goat or called Shakhawat, is a species of large, wild goat that is native to the mountains and high-altitude monsoon forests of western and central Asia. Five subspecies exist.';
break;
}

switch($today) {
case 'Tuesday' :
$animal= '<h2>It\'s Tarsier Tuesday!</h2>';
$pic = 'tarsier.jpeg';
$alt = 'Cute, tiny tarsier on a tree branch';
$color = ' style="background-color:#e28a27"';
$content = 'The Tarsier is a unique, primitive species of primate that generally spends its entire life on trees. Tarsiers, considered one of the smallest known primates, are today found living in lowland & coastal forests on a number of islands in the Philippines, Indonesia and Malaysia. Currently, there are 18 different sub-species of Tarsier including the Philippine tarsier (Tarsius syrichta), Bornean tarsier (Tarsius bancanus), Dian’s tarsier (Tarsius dianae), the spectral tarsier (Tarsius spectrum), and the lesser spectral tarsier or pygmy tarsier (Tarsius pumilus). Tarsiers have a life expectancy of between 8-12 years.';
}
        
switch($today) {
case 'Wednesday' :
$animal = '<h2>It\'s Warthog Wednesday!</h2>';
$pic = 'warthog.jpeg';
$alt = 'African warthog in savanah';
$color = ' style="background-color:#CB9617"';
$content = 'The desert warthog is a species of even-toed ungulate in the pig family, found in northern Kenya and Somalia, and possibly Djibouti, Eritrea, and Ethiopia. This is the range of the extant subspecies, commonly known as the Somali warthog.';
break;
}
            
            
switch($today) {
case 'Thursday' :
$animal = '<h2>Thursday is Tasmanian Devil Day!</h2>';
$pic = 'tasmanian-devil.jpeg';
$alt = 'Tasmainian devil with open mouth bearing teeth';
$color = ' style="background-color:#A2A5A2"';
$content = 'The Tasmanian devil is a carnivorous marsupial of the family Dasyuridae. Until recently, it was only found on the island state of Tasmania, but it has been reintroduced to New South Wales in mainland Australia, with a small breeding population';
break;
}
                
switch($today) {
case 'Friday' :
$animal = '<h2>It\'s Fossa Friday!</h2>';
$pic = 'fossa.jpeg';
$alt = 'Two fossa cats in a tree';
$color = ' style="background-color:#BC7454"';
$content = 'The fossa is a carnivorous mammal that is endemic to Madagascar. It is a member of the Eupleridae, a family of carnivorans closely related to the mongoose family Herpestidae.';
break;
}
                    
switch($today) {
case 'Saturday' :
$animal = '<h2>Saturday is Sloth Day!</h2>';
$pic = 'sloth.jpeg';
$alt = 'Adorable sloth hanging out on a tree branch';
$color = ' style="background-color:#b1c23a"';
$content = 'Sloths are a group of arboreal Neotropical xenarthran mammals, constituting the suborder Folivora. Noted for their slowness of movement, they spend most of their lives hanging upside down in the trees of the tropical rainforests of South America and Central America.';
break;
}                    
?> 


    <div id="wrapper">
<h1 class ="daily"> <?php echo $animal; ?></h1>      
<main class="daily" <?php echo $color;?>>

<div class="img-wrap">
<img src="images/<?php echo $pic;?>" alt="<?php echo $alt; ?>">
</div> <!--end img-wrap-->


<div class="daily-list">
    <h3>What day is it today?</h3>
<ul>
    <li><a href="daily.php?today=Sunday">Sunday</a></li>
    <li><a href="daily.php?today=Monday">Monday</a></li>
    <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
    <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
    <li><a href="daily.php?today=Thursday">Thursday</a></li>
    <li><a href="daily.php?today=Friday">Friday</a></li>
    <li><a href="daily.php?today=Saturday">Saturday</a></li>
</ul>  
</div> <!--end daily-list-->


<div class="content">
<p><?php echo $content;?></p> 
</div> <!--end content-->


</main> 
<?php
include('includes/footer.php');?>


