
<!-- 
// if (isset($_POST['num1'])) {
// $num1 = $_POST['num1'];
// $num2 = $_POST['num2'];
// $myTotal = $num1 + $Num2;
// echo '<h2>You added '.$num1.' and '.$num2.' </h2>';
// echo ' <p> and the answer is <br>
// <style="color:red;"> '.$myTotal.' !</p>';
// echo'<p><a href="">Reset page</a>';
// } -->

<html>
<head>
<title>My Adder Assignment</title>
<style>
 p {
        text-align: center;
    }
    
    h1 {
        color:#BA4CE9;
        font-style:italic;
        text-align: center;
    }
    
    h2 {
        font-size:1.5em;
        text-align: center;
        color:#FFA700;
    }
    
    form {
        width:350px;
        margin:0 auto;
        border:2px solid #ABB2B9 ;
        padding:16px;
     }
    
    input, label {
        margin:2px;
        padding-left:2px;
    }
    
</style>
</head>
<body>
<h1>Adder.php</h1> <form action="" method="post">
<label for="num1">Enter the first number:</label><input type="number" name="num1"><br>
<label for="num2">Enter the second number:</label><input type="number" name="num2"><br>
<input type="submit" value="Add Em!!"> </form>

<?php
if (isset($_POST['num1'])) {
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2;
echo '<h2>You added '.$num1.' and '.$num2.' !!!</h2>';
echo ' <p style=" color:grey;"> and the answer is 
 '.$myTotal.' !</p>';
 echo'<p><a href="">Reset page</a>';
 }
 ?>

<!--here are my errors--> <!--here are my errors--><!--here are my errors--><!--here are my errors--><!--here are my errors--><!--here are my errors-->


</body>
</html>


<!--
//  1. missing closing " on line 23
//  2. opening <form> tag has \ on line 20
//  3. opening <label> tag has \ on line 21
//  4. $myTotal var missing . on line 9
//  5. echo missing closing ' on line 9
//  6. changed to single '', added missing single ' quotes and . on line 7
//  7. added missing </h2> on line 7
//  8. removed - on line 6
//  9. change " to ' on line 9
//  10. removed  ';} by the closing PHP tag line 29
//  11. added ; after echos
//  12. added for="$num1" and changed N to n on line 21
//  13. added <label> tags for second number line 22
//  14. line 21/22 changed input type to 'number', rearranged input/label tags
//  15. move all PHP below form in body
//  16. added method="post" to h1
//  17. moved <style> tag(and removed < >) inside <p>
-->
        











