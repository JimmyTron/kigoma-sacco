<?php
session_start();
include'dbconnection.php';
include("checklogin.php");
check_login();
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($con,"delete from users where id='$adminid'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>User | Return</title>
    <link href="../admin/assets/css/bootstrap.css" rel="stylesheet">
    <link href="../admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../admin/assets/css/style.css" rel="stylesheet">
    <link href="../admin/assets/css/style-responsive.css" rel="stylesheet">
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
          	<h3><i class="fa fa-angle-right"></i> Returns</h3>
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i>Returns</h4>
	                  	  	  <div class="row">
                <div class="col-md-12">
                  
                  <p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
                <?php echo htmlentities($_SESSION['msg']="");?></p> 
                  <table class="table table-hover" id="sample-table-1">
                    <thead>
                      <tr>
                        <th class="center">#</th>
                        <th class="hidden-xs">Vehicle</th>
                        <th>Daily Charge</th>
                        <th>Wear &amp Tear</th>
                        <th>Return Date / Time </th>
                        <th>Appointment Creation Date  </th>
                        <th>Current Status</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
<?php
$sql=mysqli_query($con,"select * from booking where userId='".$_SESSION['id']."'");
                $cnt=1;
                while($row=mysqli_fetch_array($ret))
                {?> 
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
                      <tr>
                        <td class="center"><?php echo $cnt;?>.</td>
                        <td class="hidden-xs"><?php echo $row['vehicle'];?></td>
                        <td><?php echo $row['charge'];?></td>
                        <td><?php echo $row['returndate'];?> / <?php echo
                         $row['time'];?>
                        </td>
                        <td><?php echo $row['postingdate'];?></td>
                        <td>
<?php if(($row['userstatus']==1) && ($row['vehiclestatus']==1))  
{
  echo "Active";
}
if(($row['userstatus']==0) && ($row['vehiclestatus']==1))  
{
  echo "Cancel by You";
}

if(($row['userstatus']==1) && ($row['vehiclestatus']==0))  
{
  echo "Cancel by Admin";
}
?>
</td>
<td >
 <div class="visible-md visible-lg hidden-sm hidden-xs">
<?php if(($row['userstatus']==1) && ($row['vehicletatus']==1))  
{ ?>

                          
  <a href="appointment-history.php?id=<?php echo $row['id']?>&cancel=update" onClick="return confirm('Are you sure you want to cancel this appointment ?')"class="btn btn-transparent btn-xs tooltips" title="Cancel Appointment" tooltip-placement="top" tooltip="Remove">Cancel</a>
  <?php } else {

    echo "Canceled";
    } ?>
  </div>
 <div class="visible-xs visible-sm hidden-md hidden-lg">
 <div class="btn-group" dropdown is-open="status.isopen">
 <button type="button" class="btn btn-primary btn-o btn-sm dropdown-toggle" dropdown-toggle>
 <i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
 </button>
<ul class="dropdown-menu pull-right dropdown-light" role="menu">
<li>
 <a href="#">Edit</a>
</li>
<li>
<a href="#">Share</a>
</li>
<li><a href="#">Remove</a>
</li>
</ul>
</div>
 </div></td> </tr>
                      
 <?php $cnt=$cnt+1;}?>
 </tbody>
                          </table>
                      </div>
                  </div>
              </div>
		</section>
      </section
  ></section>
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
