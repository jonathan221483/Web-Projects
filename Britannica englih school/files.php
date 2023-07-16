<?php
session_start(); //start session to use _SESSION variables
require_once 'make_connection.php'; //import the code from "make_connection.php" where browser connects to the database
if(!isset($_SESSION['User']) || $_SESSION['User']=='None')//if the user if not logged in
{
    $_SESSION['Permission']='True';
    header('Location: index.php'); //go to index page
}
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
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
          if(isset($_SESSION['User']) && $_SESSION['User']=="Teacher")
          echo
          '<button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#task" style="font-size: 20px;">
                        Create new task
                      </button>
                      <div class="modal fade" id="task" tabindex="-1" aria-labelledby="task" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="task">Remember that you create task for your group only!</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form class="form-floating" action="create_task.php" method="post">
                                  <div class="form-floating mb-3">
                                      <input type="text" class="form-control" id="description" name="Task_Description" placeholder="1" required minlength="10" maxlength="50">
                                      <span class="validity"></span>
                                      <label for="description">Type task description</label>
                                  </div>
                                  <div class="form-floating mb-3">
                                      <input type="text" class="form-control" id="URL" name="Task_URL" placeholder="1" required minlength="3" maxlength="50">
                                      <span class="validity"></span>
                                      <label for="URL">Type task URL(google drive or any cloud storage)</label>
                                  </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>';?>
    </div>
  </div>
</nav>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Task ID</th>
      <th scope="col">Task Description</th>
      <th scope="col">URL</th>
      <?php
      if(isset($_SESSION['Admin']) && $_SESSION['Admin']=="True")//if the current user is admin
        echo'
      <th scope="col">Task Subject</th>';
      ?>
    </tr>
    </thead>
  <tbody>
    <?php
    $id=$_SESSION['ID'];
    $tasks_selection=mysqli_query($connect_to_database, "SELECT * FROM tasks_table");//select all information from table of tasks
  if(isset($_SESSION['User']) && $_SESSION['User']=="Student")//if the current user is student
{
  $students_selection=mysqli_query($connect_to_database, "SELECT * FROM students_table WHERE Student_ID = $id");//select information from table of students where teacher ID is equal to the ID of current user
  $select = mysqli_fetch_array($students_selection);
  $group=$select['Group_ID'];
  $groups_selection=mysqli_query($connect_to_database, "SELECT * FROM groups_table WHERE Group_ID = $group");//select information from table of groups where group ID is equal to the ID of current user
  $select = mysqli_fetch_array($groups_selection);
  $subject = $select['Group_Subject'];
}
  if(isset($_SESSION['User']) && $_SESSION['User']=="Teacher")//if the current user is teacher
{
  $teachers_selection=mysqli_query($connect_to_database, "SELECT * FROM teachers_table WHERE Teacher_ID = $id");//select information from table of teacher where teacher ID is equal to the ID of current user
  $select = mysqli_fetch_array($teachers_selection);
  $group=$select['Group_ID'];
  $groups_selection=mysqli_query($connect_to_database, "SELECT * FROM groups_table WHERE Group_ID = $group");//select information from table of groups where group ID is equal to the ID of current user
  $select = mysqli_fetch_array($groups_selection);
  $subject = $select['Group_Subject'];
}
while($results = mysqli_fetch_array($tasks_selection))
{
    echo'<tr>';
    if(isset($_SESSION['Admin']) && $_SESSION['Admin']=="True")//if the current user is admin
        {
            echo'
            <th scope="row">'.$results['Task_ID'].'</th>
            <td>'.$results['Task_Description'].'</td>
            <td><a href="'.$results['Task_URL'].'"">Task</a></td>
            <td>'.$results['Group_Subject'].'</td></tr>';//show table row
        }
    if(isset($_SESSION['User']) && $_SESSION['User']=="Student" && $results['Group_Subject']==$subject)//if the current user is student
        {
            echo'
            <th scope="row">'.$results['Task_ID'].'</th>
            <td>'.$results['Task_Description'].'</td>
            <td><a href="'.$results['Task_URL'].'"">Task</a></td></tr>';//show table row
        }
    if(isset($_SESSION['User']) && $_SESSION['User']=="Teacher" && $results['Group_Subject']==$subject)//if the current user is teacher
        {
            echo'
            <th scope="row">'.$results['Task_ID'].'</th>
            <td>'.$results['Task_Description'].'</td>
            <td><a href="'.$results['Task_URL'].'"">Task</a></td></tr>';//show table row
        }
}
?>
</tbody>
</table>
</body>
</html>