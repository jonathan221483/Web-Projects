<?php
session_start(); //start session to use _SESSION variables
require_once 'make_connection.php'; //import the code from "make_connection.php" where browser connects to the database
if(isset($_SESSION['Login']) && $_SESSION['Login']=='True')//if user is logged in, show the following message
{
  echo'
<script>
alert("Welcome to our website!");
</script>';
$_SESSION['Login']='False';
}
if(isset($_SESSION['Error']) && $_SESSION['Error']=='True')//if the error occured, show the following message
{
  echo'
<script>
alert("You wrote incorrect data!");
</script>';
$_SESSION['Error']='False';
}
if(isset($_SESSION['Register']) && $_SESSION['Register']=='True')//if admin registered new user, show the following message
{
  echo'
<script>
alert("You succesfully added new user!");
</script>';
$_SESSION['Register']='False';
}
if(isset($_SESSION['Admin_Login']) && $_SESSION['Admin_Login']=='True')//if admin is logged in, show the following message
{
  echo'
<script>
alert("Welcome admin!");
</script>';
$_SESSION['Admin_Login']='False';
}
if(isset($_SESSION['Permission']) && $_SESSION['Permission']=='True')//if the error occured, show the following message
{
  echo'
<script>
alert("You do not have permissions to do that!");
</script>';
$_SESSION['Permission']='False';
}
if(!isset($_SESSION['Admin']))//reset the _SESSION['Admin'] variable if it is not assigned
$_SESSION['Admin']='False';
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<title>
Britannica
</title>
<style type="text/css">
  body{
    background-color: #D5F9F3;
  }
  button{
    margin-left: 20px;
  }
  input + span {
  padding-right: 30px;
}

input:invalid+span:after {
  position: absolute;
  content: '✖';
  padding-left: 5px;
}

input:valid+span:after {
  position: absolute;
  content: '✔';
  padding-left: 5px;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-muted" style="background-color: #26B69C;">
  <div class="container-fluid">
    <img src="https://galined.com/wp-content/uploads/2020/01/Math-Logo-with-Shadow-Web.png" width="5%" height="5%" class="d-inline-block align-text-top">
    <a class="navbar-brand" href="#"><span style="color: #F56635;"></span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a href="#" role="button" class="nav nav-link active" data-bs-toggle="modal" data-bs-target="#aboutus">About us</a>
                <div class="modal fade" id="aboutus" tabindex="-1" aria-labelledby="#aboutus" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content" >
                      <div class="modal-header">
                        <h5 class="modal-title" id="aboutus">Britannica</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" >
                        <p>Britannica education center is located in <b>Kashagandy 3, in Beyneu, Mangystau</b>. Center have students of school age, who need knowledge in some areas of life. For 2021 summer, more than 70 students take classes and studied in different groups(it is up to level of knowledge, age, etc).</p>
                        <p>The work of the educational center is aimed at teaching mathematics, biology, physics, Russian and English. The organization team consists 5 teachers. They share with materials, check homework and help students to become leaders in class.</p> 
                        <p>In order to properly distribute themselves into groups, clients take tests that will help determine their level. Then they can participate in the first lesson of the course for free to see if the training program is suitable for them. After that, they sign up for lessons.</p>
                        <p>“Britannica education” created to help students with school system and give chance to self-improvement in a small city, where Russian and English languages are in low level.</p> 
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    For students
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="math rules.php">Math rules</a></li>
                    <li><a class="dropdown-item" href="practices.php">Practices</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    For teachers
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="students.php">Students</a></li>
                    <li><a class="dropdown-item" href="groups.php">Groups</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link active" href="files.php">Lesson files</a>
            </li>
        </ul>
        <a href="#" role="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#Modal" style="font-size: 20px;">Sign out</a>
        <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="#signout" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="signout">Really?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <h3>Do you really want to sign out?</h3>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <a class="btn btn-outline-danger" role="button" href="sign out.php">Sign out</a>
                </div>
              </div>
            </div>
          </div>
        <?php
        if((isset($_SESSION['Admin']) && $_SESSION['Admin']=='False') && !isset($_SESSION['User']))//if user is not logged in show the buttons of signing in
            echo'
        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#students" style="font-size: 20px;">
          Sign in for students
        </button>
        <div class="modal fade" id="students" tabindex="-1" aria-labelledby="student" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="student">Sign in for students</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="form-floating" action="student_sign in.php" method="post">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Login" name="student_login" placeholder="Britannica522" required minlength="7" maxlength="20">
                    <span class="validity"></span>
                    <label for="Login">Type your login</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="Password" name="student_password" placeholder="Password" required minlength="7" maxlength="20">
                    <span class="validity"></span>
                    <label for="Password">Type your password</label>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Submit">
              </div>
              </form>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#teachers" style="font-size: 20px;">
          Sign in for teachers
        </button>
        <div class="modal fade" id="teachers" tabindex="-1" aria-labelledby="teacher" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="teacher">Sign in for teachers</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="form-floating" action="teacher_sign in.php" method="post">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="Login" name="teacher_login" placeholder="Britannica522" required minlength="7" maxlength="20">
                    <span class="validity"></span>
                    <label for="Login">Type your login</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="Password" name="teacher_password" placeholder="Password" required minlength="7" maxlength="20">
                    <span class="validity"></span>
                    <label for="Password">Type your password</label>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Submit">
              </div>
              </form>
            </div>
          </div>
        </div>';
        else if(isset($_SESSION['Admin']) && $_SESSION['Admin']=='True') //if admin is logged in
          {
            echo
            '
            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#registration" style="font-size: 20px;">
              Registration for new student/teacher
            </button>
            <div class="modal fade" id="registration" tabindex="-1" aria-labelledby="registration" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="registration">Student/teacher info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form class="form-floating" action="registration.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Name" name="name" placeholder="1" required minlength="7" maxlength="20">
                            <span class="validity"></span>
                            <label for="Name">Type user name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Surname" name="surname" placeholder="1" required minlength="7" maxlength="20">
                            <span class="validity"></span>
                            <label for="Surname">Type user surname</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Login" name="login" placeholder="1" required minlength="7" maxlength="20">
                            <span class="validity"></span>
                            <label for="Login">Type user login</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="Password" name="password" placeholder="1" required minlength="7" maxlength="20">
                            <span class="validity"></span>
                            <label for="Password">Type user password</label>
                        </div>
                        <div class="form-check">
                        <label class="form-check-label" for="group">Choose the group</label>
                            <select class="form-select form-select-lg mb-3" name="group_id" id="group" required>';
                              $groups_selection=mysqli_query($connect_to_database, "SELECT * FROM groups_table");//select all information from table of groups
                              while($select = mysqli_fetch_array($groups_selection))
                              {
                                echo '<option value="'.$select['Group_ID'].'">'.$select['Group_Name'].'</option>';
                              }
                            echo '
                            </select>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="isTeacher" name="isTeacher" value="Teacher">
                            <label class="form-check-label" for="isTeacher">
                                Is it teacher?  
                            </label>
                        </div>
                     </div>   
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Submit">
                  </div>
                  </form>
                </div>
              </div>
              </div>
            </div>';
            }?>
    </div>
  </div>
</nav>
<div style="padding-left: 300px; padding-right: 300px; padding-top: 50px;">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="1.jpg" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="2.jpg" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="3.jpg" class="d-block w-100">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
  </div>
</div><br>
      <?php
      if(isset($_SESSION['ID']))echo $_SESSION['ID'];
      ?>
  </div>
</body>
</html>