<?php
include('config.php');
include('includes/header.php');?>

<?php
if(isset($_GET['today'])) {
    $today = $_GET['today'];
    } else {
    $today = date('l');
    }


switch($today) {
case 'Sunday' :
$headline = 'It\'s Serval Sunday!';
$animal = 'the Serval';
$pic = 'serval-cat.jpg';
$alt = 'Majestic wild serval cat';
$color = ' style="background-color:#17cb96"';
$content = 'The serval is a wild cat native to Africa. It is rare in North Africa and the Sahel, but widespread in sub-Saharan countries, except rainforest regions. Across its range, it occurs in protected areas, and hunting it is either prohibited or regulated in range countries. It is the sole member of the genus Leptailurus. The serval is a solitary carnivore and active both by day and at night. It preys on rodents, particularly vlei rats, small birds, frogs, insects, and reptiles, using its sense of hearing to locate prey. It leaps over 2 m (6 ft 7 in) above the ground to land on the prey on its forefeet, and finally kills it with a bite on the neck or the head.';
break;
}

switch($today) {
case 'Monday' :
$headline = 'It\'s Markhor Monday!';
$animal = 'the Markhor';
$pic = 'markhor.jpg';
$alt = 'Markhor ram with large horns';
$color = ' style="background-color:#4E77D4"';
$content = 'The markhor is an animal that was considered to be the most challenging game in British India due to the dangers of hunting them at high altitudes. The name “Markhor” is a combination of two Persian and Pashto words: “Mar” means snake and “khor” means eater. Also known as the screw-horned goat or called Shakhawat, is a species of large, wild goat that is native to the mountains and high-altitude monsoon forests of western and central Asia. Five subspecies exist.';
break;
}

switch($today) {
case 'Tuesday' :
$headline= 'It\'s Tarsier Tuesday!';
$animal = 'the Tarsier';
$pic = 'tarsier.jpeg';
$alt = 'Cute, tiny tarsier on a tree branch';
$color = ' style="background-color:#e28a27"';
$content = 'The Tarsier is a unique, primitive species of primate that generally spends its entire life on trees. Tarsiers, considered one of the smallest known primates, are today found living in lowland & coastal forests on a number of islands in the Philippines, Indonesia and Malaysia. Currently, there are 18 different sub-species of Tarsier including the Philippine tarsier (Tarsius syrichta), Bornean tarsier (Tarsius bancanus), Dian’s tarsier (Tarsius dianae), the spectral tarsier (Tarsius spectrum), and the lesser spectral tarsier or pygmy tarsier (Tarsius pumilus). Tarsiers have a life expectancy of between 8-12 years.';
break;
}
        
switch($today) {
case 'Wednesday' :
$headline = 'It\'s Warthog Wednesday!';
$animal = 'Warthogs';
$pic = 'warthog.jpeg';
$alt = 'African warthog in savanah';
$color = ' style="background-color:#FFDAB9"';
$content = 'The desert warthog is a species of even-toed ungulate in the pig family, found in northern Kenya and Somalia, and possibly Djibouti, Eritrea, and Ethiopia. This is the range of the extant subspecies, commonly known as the Somali warthog. A warthog is identifiable by the two pairs of tusks protruding from the mouth and curving upwards. The lower pair, which is far shorter than the upper pair, becomes razor-sharp by rubbing against the upper pair every time the mouth is opened and closed. The upper canine teeth can grow to 25.5 cm (10 in) long and have a wide elliptical cross section, being about 4.5 cm (1+3⁄4 in) deep and 2.5 cm (1 in) wide.';
break;
}
            
            
switch($today) {
case 'Thursday' :
$headline = 'Thursday is Tasmanian Devil Day!';
$animal = 'the Tasmanian Devil';
$pic = 'tasmanian-devil.jpeg';
$alt = 'Tasmainian devil with open mouth bearing teeth';
$color = ' style="background-color:#A2A5A2"';
$content = 'The Tasmanian devil is a carnivorous marsupial of the family Dasyuridae. Until recently, it was only found on the island state of Tasmania, but it has been reintroduced to New South Wales in mainland Australia, with a small breeding population. It is characterised by its stocky and muscular build, black fur, pungent odour, extremely loud and disturbing screech, keen sense of smell, and ferocity when feeding. The Tasmanian devil\'s large head and neck allow it to generate among the strongest bites per unit body mass of any extant predatory land mammal. It hunts prey and scavenges on carrion.';
break;
}
                
switch($today) {
case 'Friday' :
$headline = 'It\'s Fossa Friday!';
$animal = 'the Fossa';
$pic = 'fossa.jpeg';
$alt = 'Two fossa cats in a tree';
$color = ' style="background-color:#BC7454"';
$content = 'The fossa is a carnivorous mammal that is endemic to Madagascar. It is a member of the Eupleridae, a family of carnivorans closely related to the mongoose family Herpestidae.The fossa is the largest mammalian carnivore on Madagascar and has been compared to a small cougar, as it has convergently evolved many cat-like features. Adults have a head-body length of 70–80 cm (28–31 in) and weigh between 5.5 and 8.6 kg (12 and 19 lb), with the males larger than the females. It has semi-retractable claws (meaning it can extend but not retract its claws fully) and flexible ankles that allow it to climb up and down trees head-first, and also support jumping from tree to tree.';
break;
}
                    
switch($today) {
case 'Saturday' :
$headline = 'Saturday is Sloth Day!';
$animal = 'Sloths';
$pic = 'sloth.jpeg';
$alt = 'Adorable sloth hanging out on a tree branch';
$color = ' style="background-color:#b1c23a"';
$content = 'Sloths are a group of arboreal Neotropical xenarthran mammals, constituting the suborder Folivora. Noted for their slowness of movement, they spend most of their lives hanging upside down in the trees of the tropical rainforests of South America and Central America. Sloths are so named because of their very low metabolism and deliberate movements. Sloth, related to slow, literally means "laziness," and their common names in several other languages (e.g. French paresseux) also mean "lazy" or similar. Their slowness permits their low-energy diet of leaves and avoids detection by predatory hawks and cats that hunt by sight. Sloths are almost helpless on the ground, but are able to swim.';

break;
}



?>



    <div id="wrapper">
<h1 class ="daily"> <?php echo $headline; ?></h1>      
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

<h3 id="about">On <?php echo $today;?>, we learn about <?php echo $animal;?>:</h3>
<div class="content">
<p><?php echo $content;?></p> 
</div> <!--end content-->


</main> 
<?php
include('includes/footer.php');?>


