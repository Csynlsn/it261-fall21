<?php
//  understanding the logic
//  1 ruble = 0.013 USD
//  1 pound sterling = 1.28 USD
//  1 canadian dollar = .79 USD
//  1 euro = 1.18 USD
//  1 yen = .0094 USD

$rubles = 10007;
$rubles *= 0.013;
$friendly_rubles = number_format($rubles, 2);


$pounds = 500;
$pounds *= 1.28;
$friendly_pounds = number_format($pounds, 2);


$canada = 5000;
$canada *= 0.79;
$friendly_canada = number_format($canada, 2);


$euro = 1200;
$euro *= 1.18;
$friendly_euro = number_format($euro, 2);


$yen = 2000;
$yen *= 0.0094;
$friendly_yen = number_format($yen, 2);

$total = $pounds + $rubles + $yen + $canada + $euro;
$friendly_total = number_format($total, 2);

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Currency</title>
<style>

table {
    width: 400px;
    margin: 20px auto;
    border: 1px solid green;
    border-collapse: collapse;
}

td, th {
    border: 1px solid green;
    padding: 5px;
    text-align: left;

}

</style>
</head>

<body>
<table>

<tr>
<th>Rubles</th>
<td>  <?php echo '$'.$friendly_rubles.' USD';?> </td>
</tr>  

<tr>
<th>Pounds</th>
<td> <?php echo '$'.$friendly_pounds.' USD';?> </td>
</tr> 

<tr>
<th>Canada</th>
<td> <?php echo '$'.$friendly_canada.' USD';?></td>
</tr> 

<tr>
<th>Euros</th>
<td> <?php echo '$'.$friendly_euro.' USD';?> </td>
</tr> 

<tr>
<th>Yen</th>
<td> <?php echo '$'.$friendly_yen.' USD';?> </td>
</tr> 

<tr>
<th><b>Total:</b></th>
<td><b> <?php echo '$'.$friendly_total.' USD';?> </b></td>
</tr> 


</table>

</body>
</html>

