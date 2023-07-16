<?php
session_start();
if(!isset($_SESSION['login']))
$_SESSION['login']='';
?>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

<title>
Staff Line Service
</title>
    <style type="text/css">
        header
        {
        font-size: 150%;
        }
        body
        {
        background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
        background-size: 400% 400%;
        -webkit-animation: Gradient 15s ease infinite;
        -moz-animation: Gradient 15s ease infinite;
        animation: Gradient 15s ease infinite;
        }
        @-webkit-keyframes Gradient {
        0% {
        background-position: 0% 50%
        }
        50% {
        background-position: 100% 50%
        }
        100% {
        background-position: 0% 50%
        }
        }
         
        @-moz-keyframes Gradient {
        0% {
        background-position: 0% 50%
        }
        50% {
        background-position: 100% 50%
        }
        100% {
        background-position: 0% 50%
        }
        }
         
        @keyframes Gradient {
        0% {
        background-position: 0% 50%
        }
        50% {
        background-position: 100% 50%
        }
        100% {
        background-position: 0% 50%
        }
        }
        main
        {
        padding-left: 300px;
        padding-right: 300px;
        font-size: 150%;
        text-align: center;
        }
        li
        {
        float: left;
        margin: 0;
        padding: 0 9px;
        height: 42px;
        font-size: 25px;
        line-height: 42px;
        font-family: tahoma, geneva, sans-serif;
        }
        ul
        {
        list-style: none;
        }
</style>
</head>
<body>
<header>
  <br>
<ul>
  <!-- Sign in -->
  <?php
  if(isset($_SESSION['login']) && $_SESSION['login']!='admin')
  echo '
<li>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Sign up
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sign up</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="signup.php" method="POST">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Ivan" minlength="1" maxlength="20" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Surname</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="surname" placeholder="Petrov" minlength="1" maxlength="20" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Login</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="login" placeholder="name@example.com" minlength="10" maxlength="20" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Password</label>
              <input class="form-control" type="password" placeholder="qwerty1!example" name="password" minlength="10" maxlength="20" aria-label="default input example" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" value="Confirm" class="btn btn-primary">
        </div>
        </form>
      </div>
    </div>
  </div>
</li>


<li>
  <!-- Log in -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleMl">
    Log in
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleMl" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Log in</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="signin.php" method="POST">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Login</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="login" minlength="5" maxlength="50" placeholder="name@example.com">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Pasword</label>
              <input type="password" class="form-control" id="exampleFormControlInput1" minlength="8" maxlength="20" name="password" placeholder="qwerty1!example">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" value="Confirm" class="btn btn-primary">
        </div>
      </form>
      </div>
      </div>
    </div>
  </div>
</li>

<li><!-- About us modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#empleModal">
    About us
  </button>
  <div class="modal fade" id="empleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">About us</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          This is our website where you can make orders, but do not forget to <b>sign up</b> and <b>sign in</b> before making an application!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</li>
'; 
if(isset($_SESSION['login']) && $_SESSION['login']=='admin')
{
    echo '
    <li>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleMl">
    Inventory control panel
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleMl" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Inventory control panel</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="inventory_control.php" method="POST">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Meal type</label>
                          <select class="form-select" aria-label="Default select example" name="meal" required>
              <option value="1">Mushroom soup with french fries</option>
              <option value="2">Eggs with sausage and coffee</option>
              <option value="3">Pasta wiht tomato sause and coke</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Amount of increase/desrease</label>
              <input type="number" class="form-control" id="exampleFormControlInput1" name="amount" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" value="Confirm" class="btn btn-primary">
        </div>
      </form>
      </div>
      </div>
    </div>
  </div>
</li>
  <li>
  <a type="button" href="show_applications.php" class="btn btn-primary">
    Applications
  </a>';
}
?>
<li>
  <a type="button" href="logout.php" class="btn btn-primary">
    Logout
  </a>
  </li>
</ul>
</header><br><br><br>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

<?php 
if(isset($_SESSION['application']) && $_SESSION['application']=='admin')
echo '
<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    Succesfully changed the inventory!
  </div>
</div>';
else if(isset($_SESSION['login']) && $_SESSION['login']=='admin')//alert user with succesfull login
echo '
<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    Welcome admin! You can control the inventory with the <b>inventory</b> button and see all the application with <b>applications</b> button.
  </div>
</div>';
else if(isset($_SESSION['login']) && $_SESSION['login']=='fail')//alert user to log in ot sign up
    echo '
<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    You wrote incorrect information! Please check it.
  </div>
</div>
';
else if(isset($_SESSION['application']) && $_SESSION['application']=='success')
echo '
<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    Thank you for your application!
  </div>
</div>';
else if(isset($_SESSION['signup']) && $_SESSION['signup']=='error')//alert user to log in ot sign up
    echo '
<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    This login is already taken! Please change it.
  </div>
</div>
';
else if(isset($_SESSION['signup']) && $_SESSION['signup']=='success')
echo '
<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    You succesfully registered! You can <b>log in</b> by clicking the button.
  </div>
</div>';
else if(isset($_SESSION['login']) && $_SESSION['login']=='success')//alert user with succesfull login
echo '
<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    Welcome to our website! You can make an application by clicking the button <b>Make an application</b>
  </div>
</div>';
    else//alert user with unsuccesfull login
  echo '
<div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>
  <div>
    Please log in or register in case you do not have an account. If you are an administrator please login with your administrator account
  </div>
</div>';
?>

<main>
      <?php
if(isset($_SESSION['login']) && $_SESSION['login']=="success")
    echo '
	<div class="application">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#app">
    Make an application
  </button>

  <div class="modal fade" id="app" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Make an application</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="application.php">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Type of meal</label><br>
              <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="mealtype" required id="inlineRadio1" value="breakfast">
              <label class="form-check-label" for="inlineRadio1">Breakfast</label><br>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="mealtype" required id="inlineRadio2" value="lunch">
              <label class="form-check-label" for="inlineRadio2">Lunch</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="mealtype" required id="inlineRadio3" value="dinner">
              <label class="form-check-label" for="inlineRadio2">Dinner</label>
            </div>
            <div class="mb-3">
             <label class="form-label">Choose your meal</label><br>
            <select class="form-select" aria-label="Default select example" name="meal">
              <option value="1">Mushroom soup with french fries</option>
              <option value="2">Eggs with sausage and coffee</option>
              <option value="3">Pasta wiht tomato sause and coke</option>
                </select>
                </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Destination point</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="destination" minlength="2" maxlength="50" required placeholder="Nazarbayev Street">
            </div> 

        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" value="Submit" class="btn btn-primary"></button>
        </div>
        </form>
      </div>
    </div>
    </div>
  </div>';
?>
</div>
</main>
</body>
</html>