<?php
session_start();
include'dbconnection.php';
include("checklogin.php");
check_login();

if(isset($_POST['submit']))
{
$vehicle=$_POST['vehicle'];
$vehicleid=$_POST['vehicleid'];
$userid=$_SESSION['id'];
$charge=$_POST['charge'];
$returndate=$_POST['returndate'];
$time=$_POST['time'];
$userstatus=1;
$vehiclestatus=1;
$query=mysqli_query($con,"insert into booking(vehicle,vehicleid,userid,charge,returndate,time,userstatus,vehiclestatus) values('$vehicle','$vehicleid','$userid','$charge','$returndate','$time','$userstatus','$vehiclestatus')");
  if($query)
  {
    echo "<script>alert('Your have successfully booked a vehicle');</script>";
  }

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>User | Booking</title>
    <link href="../admin/assets/css/bootstrap.css" rel="stylesheet">
    <link href="../admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../admin/assets/css/style.css" rel="stylesheet">
    <link href="../admin/assets/css/style-responsive.css" rel="stylesheet">
  
  <script>
function getvehicle(val) {
  $.ajax({
  type: "POST",
  url: "get_vehicle.php",
  data:'ID='+val,
  success: function(data){
    $("#doctor").html(data);
  }
  });
}
</script> 

  <script>
function getfee(val) {
 $.ajax({
 type: "POST",
 url: "get_vehicle.php",
 data:'ID='+val,
 success: function(data){
  $("#fees").html(data);
 }
 });
}
</script> 


  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="#" class="logo"><b>KIGOMA SACCO</b></a>
            <div class="nav notify-row" id="top_menu">
               
                         
                   
                </ul>
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                   <li><a class="logout" href="welcome.php">Home</a></li>
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="#"><img src="../admin/assets/img/ui-danro.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $_SESSION['name'];?></h5>
        
              </ul>
          </div>
      </aside>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Booking</h3>
				<div class="row">
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i>Bookings</h4>
	                  	  	  <hr>
                              
      <div class="form-group">
      <label for="vehicle">vehicle</label>
  <select name="Vehicle" class="form-control" id="Vehicle" onChange="getvehicle(this.value);" required="required">
 <?php
 $sql=mysqli_query($con,"select vehicle,ID from vehicles");?>
 <option disabled="" selected="selected">Select Vehicle </option>
 <?php
 while($row=mysqli_fetch_array($sql))
  {?>
{
?>
  <option value="<?php echo htmlentities($row['ID']);?>">
      <?php echo htmlentities($row['vehicle']);?>
  </option>
  <?php } ?>
    </select>
        </div>



 <div class="form-group">
   <label for="charge">Vehicle  Fees</label>
     <select name="fees" class="form-control" id="fees" readonly></select>
 </div>

 <div class="form-group">
    <label for="returndate">Return Date</label>
<input class="form-control datepicker" name="appdate"  required="required" data-date-format="yyyy-mm-dd">yyyy-mm-dd
 </div>
                            
<div class="form-group">
<label for="ttime">Time</label>
      <input class="form-control" name="apptime" id="timepicker1" required="required">eg : 10:00 PM
</div>                            
<button type="submit" name="submit" class="btn btn-o btn-primary">Submit</button>
</form>
</table>
</div></div></div>
</section>
</section>
</section>

 <script src="../admin/assets/js/jquery.js"></script>
 <script src="../admin/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../admin/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../admin/assets/js/jquery.scrollTo.min.js"></script>
    <script src="../admin/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../admin/assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
