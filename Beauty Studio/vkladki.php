<?php
session_start();
require_once 'connect.php';
if(!isset($_SESSION['ID']))
$_SESSION['ID']='';
if(!isset($_SESSION['signup']))
$_SESSION['signup']='0';
if(!isset($_SESSION['application']))
$_SESSION['signup']='';
$_SESSION['error']='1';
$_SESSION['signup_error']='0';
?>
<html>
<head>
  <title>
Beauty studio
</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<style type="text/css">
		th{
			padding: 5px;
			font-size: 200%;
		}
		td{
			font-size: 150%;
		}
		table{
			background-color: #ff99ff;
		}
		.qwe{
			position: relative;
			left: 500px;
		}
		.reglink{
			font-size: 200%;
		}
		.application{
			text-align: center;
		}
		.applicationlink{
			text-decoration: none;
		}
		body{
			background-image: linear-gradient(to right, #ff66cc,#ffccff, #ff66cc);
		}
		 p {
		    border: 1px solid black;
		    background-color: #ff00ff;
		    color: #000000;
		    padding: 10px;
        color: white;
		}
		.text {
			background-color: #ff00ff;
			font-size: 210%;
      width: 800px;
      margin: auto;

		}
		.procedure{
      margin: auto;
      width: 800;
      height: 400;
		}
		.car
		{
			margin: auto;	
      width: 800;
			height: 400;
		}
    output{
      font-size: 50px;
    }
	</style>

<script src="https://www.google.com/jsapi"></script>
  <script>
   google.load("visualization", "1", {packages:["corechart"]});
   google.setOnLoadCallback(drawChart);
   function drawChart() {
    var data = google.visualization.arrayToDataTable([
     ['Master','Attendance'] 
          <?php 
          $result=mysqli_query($connect, "SELECT * FROM masters");
          while($rows = mysqli_fetch_array($result))
          {
            echo ",['".$rows['master_name']."',".$rows['master_attendance']."]";
          }
          echo "]);";
          ?>
    var options = {
     title: 'Rating by attendance',
     is3D: true
    };
    var chart = new google.visualization.PieChart(document.getElementById('rating_by_attend'));
    chart.draw(data, options);
   }
  </script>


<script>
   google.load("visualization", "1", {packages:["corechart"]});
   google.setOnLoadCallback(drawChart);
   function drawChart() {
    var data = google.visualization.arrayToDataTable([
     ['Master','Rating'] 
          <?php 
          $result=mysqli_query($connect, "SELECT * FROM masters");
          while($rows = mysqli_fetch_array($result))
          {
            echo ",['".$rows['master_name']."',".$rows['master_rating']."]";
          }
          echo "]);";
          ?>
    var options = {
     title: 'Rating by average rate',
     is3D: true
    };
    var chart = new google.visualization.PieChart(document.getElementById('rating_by_rate'));
    chart.draw(data, options);
   }
  </script>



</head>
<body>
	<div>
<nav class="navbar navbar-light" style="background-color: #ff99ff;">
  <div class="container-fluid">
    <a class="navbar-brand reglink" href="#">Beauty studio</a>
    <a class="navbar-brand reglink" href="#"></a>
    <a class="navbar-brand reglink" href="#"></a>
    <a class="navbar-brand reglink" href="#"></a>
    <a class="navbar-brand reglink" href="#"></a>
    <a class="navbar-brand reglink" href="#"></a>
    <a class="navbar-brand reglink" href="#"></a>
    <a class="navbar-brand reglink" href="#"></a>
    <a class="navbar-brand reglink" href="#"></a>
    <a class="navbar-brand reglink" href="#"></a>
    <a class="navbar-brand reglink" href="#"></a>
    <a class="navbar-brand reglink" href="#"></a>
    <a class="navbar-brand reglink" href="#">
    	<?php
      $find = false;
     	$id=$_SESSION['ID'];
     	$result=mysqli_query($connect, "SELECT ID, name, surname FROM accounts WHERE ID='$id'");
     	while($rows = mysqli_fetch_array($result))
 {
  if($id==$rows['ID'])
  {
 	echo 'Hello, '.$rows['name']." ".$rows['surname'];
  $find = true;
 }}
 if($id=='admin')
    echo "Administrator mode";
 else if(!$find)
 {
  echo "Please sign in or sign up here ---->";
 }
?>
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="signup.php"><b>Signup</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signin.php"><b>Signin</b></a>
        </li>


<li class="nav-item">
  <!-- Button trigger modal -->
<button type="button" class="btn btn-light" style="background-color: #ff80ff" data-bs-toggle="modal" data-bs-target="#rating">
  Masters rating
</button>

<!-- Modal -->
<div class="modal fade" id="rating" tabindex="-1" aria-labelledby="rating" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="rating">Rating</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div id="rating_by_attend" style="width: 500px; height: 200px;"></div>
        <div id="rating_by_rate" style="width: 500px; height: 200px;"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Ok</button>
      </div>
    </div>
  </div>
</div>
</li>


<li class="nav-item">
        <!-- Button trigger modal -->
<button type="button" class="btn btn-light" style="background-color: #ff80ff" data-bs-toggle="modal" data-bs-target="#rate_master">
  Rate a master
</button>

<!-- Modal -->
<div class="modal fade" id="rate_master" tabindex="-1" aria-labelledby="rate_master" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="lrate_master">Rate a master</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="rating.php" method="POST">
            <select class="form-select form-select-lg mb-3" name="master" aria-label=".form-select-lg example">
              <option selected disabled>Choose master</option>
              <?php
              $result=mysqli_query($connect, "SELECT * FROM masters");
                while($rows = mysqli_fetch_array($result))
                {
                  echo '<option value="' . $rows["master_name"] . '">' . $rows["master_name"] . '</option>';
                }
              ?>
              
            </select>
            <label for="customRange3" class="form-label">Rate</label>
            <input type="range" name="rate" class="form-range" min="0" max="5" step="1" id="Range"oninput="this.nextElementSibling.value = this.value"><output></output>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Submit">
        </form>
      </div>
    </div>
  </div>
</div>
</li>


        <li class="nav-item dropdown">
          <!-- Button trigger modal -->
<button type="button" class="btn btn-light" style="background-color: #ff80ff" data-bs-toggle="modal" data-bs-target="#FAQ">
  FAQ
</button>

<!-- Modal -->
<div class="modal fade" id="FAQ" tabindex="-1" aria-labelledby="FAQ" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="FAQ">FAQ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="accordion" id="FaqInfo">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        How to reach us
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#FaqInfo">
      <div class="accordion-body">
        We are located on the bus stop called <strong>Zhiguli</strong>. You can go there by bus <strong>#1,5,22,39,43</strong>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        How can you pay?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#FaqInfo">
      <div class="accordion-body">
        You can pay by cash or by card <strong>(Visa, Mastercard are acceptable)</strong>.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        What to cancel your application?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#FaqInfo">
      <div class="accordion-body">
        If you can not come to the arranged date or time, then contact the <strong>manager</strong> and ask her to postpone or cancel the application
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
        Is the prepayment required?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#FaqInfo">
      <div class="accordion-body">
        <strong>Yes</strong>, it is needed so we make sure that you will come on the arranged date. After you made an application, the manager will contact you and send the requisites for the payment
      </div>
    </div>
  </div>

</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<br><hr>



<hr><br>
<div class="text">
  <?php  
  if($_SESSION['ID']!='admin')
  {
  if(isset($_SESSION['rate']) && $_SESSION['rate']=='ok')
  {
  echo "
  <p>Thank you for the rate!<br></p>";
  unset($_SESSION['rate']);
  }
  else if(isset($_SESSION['application']) && $_SESSION['application']=='noerror')
  {
  echo "
  <p>Thank you for application! You can rate your master if you wish!<br></p>";
  unset($_SESSION['application']);
  }
  else if($_SESSION['ID']!='')
  echo "
	<p>Welcome to our website of <b>'Beauty studio'</b> salon! Here are the procedures and their costs, so as you could choose what do you need! Press the button downside to <b>make an application.</b><br></p>";
  else if($_SESSION['signup']!=0)
    echo '<p>Thank you for registration! Now you can <strong><a class="text-black" href="signin.php">sign in</a></strong>.</p>';
  else echo '<p>Remember, you need to <strong><a class="text-black" href="signin.php">sign in</a></strong> or in case you do not have an account, you need to <strong><a class="text-black" href="signup.php">sign up</a></strong></p>';
  }
  echo '</div>';

if($_SESSION['ID']!='admin')
{
echo '
<div id="carouselExampleCaptions" class="car carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="manicure.jpg" class="d-block w-100" width="100" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h5>High-level</h5>
        <p>Our masters are high-qualified with the certificates.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="eyebrow.jpg" width="100" height="400" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Accesibility</h5>
        <p>We are working from 12.00 to 18.00.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="hairdye.jpg" width="100" height="400" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Best service</h5>
        <p>Make an appointment and you will get the best service with some coffee and tea.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br>
<br><br>
<br>
<br><br>
<div class ="procedure">
<table border="1">
	<tr>
		<th>Procedure</th>
		<th>Cost</th>
	</tr>
	<tr>
		<td>Manicure(gel polish)</td>
		<td>5000tenge</td>
	</tr>
	<tr>
		<td>Pedicure(gel polish)</td>
		<td>8000tenge</td>
	</tr>
	<tr>
		<td>Haircut</td>
		<td>4000-7000(depends on length)</td>
	</tr>
	<tr>
		<td>Hair dye</td>
		<td>20000-30000(depends on length, thickness)</td>
	</tr>
	<tr>
		<td>Eyebrow lamination</td>
		<td>5000tenge</td>
	</tr>
	<tr>
		<td>Eyelash lamination</td>
		<td>5000tenge</td>
	</tr>
	<tr>
		<td>Eyelash extension</td>
		<td>4000-8000(depends on type of extension)</td>
	</tr>
</table>
</div>
<br>
<div class="qwe">';

 if($_SESSION['ID']=='')
 {
echo '
<a href="#" type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#Modal"><h1 class="application">Click to make an application</h1></a>
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Warning!!!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        You did not signed in! You have to sign in <strong><a class="text-black" href="signin.php">there </a></strong>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';
}
else 
echo 
'<a href="codapplication.php" type="button" class="btn btn-outline-success"><h1 class="application">Click to make an application</h1></a>';
}
else if($_SESSION['ID']=='admin')
{
  echo '<div class="d-grid col-6 mx-auto"><a href="admin_applications.php" type="button" class="btn btn-outline-success"><h1 class="application">Show all applications</h1></a></div>';
}
?>
</div>
<br><br><br><br><br>
</body>
</html>