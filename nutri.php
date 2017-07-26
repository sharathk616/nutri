<html>
<body>

OPTION ENTERED : <?php 
echo "<br>";
echo $_GET["op"]; 
echo "<br>";
?><br>

NO. OF NUTRITIONAL PARAMETERS :
<?php
echo "<br>"; 
echo $_GET["par"]; 
echo "<br>";
?><br>

NUTRITIONAL PARAMETERS ENTERED : 
<?php 
$i=0;
echo "<br>";
while( $i < $_GET["par"] ) {
echo "<br>";
echo $_GET["nut"][$i];
$gen[i] = $_GET["nut"][$i];
echo "<br>";
$i++;
}
?>

<?php
$ds = Array("fruit","cereal.data","nuts.data","protein.data","root.data");
echo "<br>";
echo "NUTRITIONAL DIET SUGGESTION : ";
echo "<br>";
echo "<br>";
function data($set,$par)
{
$file = fopen($set,"r");

while( ($line = fgetcsv($file,1000,",")) !== FALSE )
{
/* print_r($line[10]);echo "<br>"; */
/* $line[0] = (float) $file[0];*/

$dif = $line[0] - $_GET["nut"][0];
$sqr = $dif * $dif;
$sum = $sum + $sqr;
/* print_r($dif);echo "<br>"; */
$i=1;
$par1 = $par - 1;
while( $i <= $par1 )
{
$dif = $line[$i] - $_GET["nut"][$i];
$sqr = $dif * $dif;
$sum = $sum + $sqr;
$i++;
}
$k = sqrt($sum);
/* print_r($k);
echo "<br>";
*/
if( $k >= 0 && $k <= 20)
{
 print_r($line[10]); 
echo "<br>";
echo "<br>";

}
$sum = 0;   
}
}
switch($_GET["op"])
{
case 1:data($ds[0],$_GET["par"]);
       break;
case 2:data($ds[1],$_GET["par"]);
       break;
case 3:data($ds[2],$_GET["par"]);
       break;
case 4:data($ds[3],$_GET["par"]);
       break;
case 5:data($ds[4],$_GET["par"]);
       break;
}

fclose($file);

?>
</body>
</html>




