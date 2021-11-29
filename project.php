<?php
include('config.php');
include('includes/header.php');
?>

    <div id="wrapper"> 
    <div>
<main class="project">   
<h1 class="project"> <?php echo $headline; ?></h1>

<?php
$sql = 'SELECT * FROM rockstars';

// need to connect to the database using mysquli_connect() fucntion ---- will assign database to var $iConn 

// $iConn = '';  !!!!! when we're using the fucntion we don't need ''; // on the people.php page
// AND... if we cannot connect to the database... we DIE

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)   or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a var $result --- are going to assign the query to $result


// mysquli_query() takes two parameters 1) connection   2) actual table
                                            //if we can not extract data we die yay

$result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// big if statement --if we have more than 0 rows (we have 5)

if(mysqli_num_rows($result) > 0 ) {
// while loop will return the array (columns)
while($row = mysqli_fetch_assoc($result)) {
echo '<h3 class="more-info">For more information about '.$row['first_name'].', please click <a 
href="project-view.php?id='.$row['rockstar_id'].' " >here!</a></h3>';    
echo '<ul class="project">';
echo '<li><b>First Name:</b> '.$row['first_name'].'</li>';
echo '<li><b>Last Name:</b> '.$row['last_name'].'</li>';
echo '<li><b>Band:</b> '.$row['band'].'</li>';
echo '</ul>';
echo '<hr>';
} // while

} else {
    echo 'Houston, we have a problem...';
}

mysqli_free_result($result);
mysqli_close($iConn);

?>
</main> 
    
<aside class="project">   
<img class="project" src="images/spinaltap.jpeg" alt="spinal tap band">
</aside>
</div> <!-- end contact -->
<?php
include('includes/footer.php');
?>
