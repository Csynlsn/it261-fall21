<?php
include('config.php');
include('includes/header.php'); ?>

<!--HEADER ENDS HERE--->
<div class="wrapper">
<h1 class="headline"><?php echo $headline; ?></h1>
<h2><?php echo $subheader; ?></h2>

<?php
$sql = 'SELECT * FROM plants';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)   or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

$i = 0;
while($row = $result->mysqli_fetch_assoc()) { 
if($i % 4 === 0) { ?>

<div class="plants">
<ul class="plants">
<?php } ?>
<li><img src="images/<?php echo $row['image'];?>.jpeg" alt="<?php echo $row['name'];?> "></li>
<li><b>Name</b><?php echo $row['name'];?></li>
<li><b>Light:</b><?php echo $row['light'];?></li>
<li><b>Water:</b> <?php echo $row['water'];?></li>
<li><b>Pet Friendly:</b><?php echo $row['pet_friendly'];?></li>
<li><b>Description:</b><?php echo $row['description'];?></li>
<li><b>Price:</b><?php echo $row['price'];?></li>
 
<h3 class="plant-info">For more information about <?php echo $row['name'];?> 
please click <a href="plant-view.php?id='<?php echo $row['plant_id'];?> " >here!</a></h3>
<hr>

<?php  $i++;
    if($i % 4 === 0) { ?>
 </ul>
 </div>
 <?php } else {
      echo 'Uh oh...';
  }
  } // while 
 
  mysqli_free_result($result);
  mysqli_close($iConn);
  
  ?>














</div><!--END WRAPPER---->
<?php include('includes/footer.php'); ?>












</div><!--END WRAPPER---->
<?php include('includes/footer.php'); ?>