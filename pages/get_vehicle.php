<?php
include'dbconnection.php';

if(!empty($_POST["vehicle"])) 
{
$sql=mysqli_query($con,"select charge from rules where ID='".$_POST['vehicle']."'");
 while($row=mysqli_fetch_array($sql))
 	{  ?>
 <option value="<?php echo htmlentities($row['ID']); ?>"><?php echo htmlentities($row['charge']); ?></option>
 }
}
?>