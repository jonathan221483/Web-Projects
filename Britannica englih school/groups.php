 <?php
session_start(); //start session to use _SESSION variables
require_once 'make_connection.php'; //import the code from "make_connection.php" where browser connects to the database
if((isset($_SESSION['Admin']) && $_SESSION['Admin']=='False') || (isset($_SESSION['User']) && $_SESSION['User']=='Student'))//if the user is not an admin or is a student
{
    $_SESSION['Permission']='True';
    header('Location: index.php'); //go to index page
}
if(isset($_SESSION['Error']) && $_SESSION['Error']=='True')//if the error occured, show the following message
{
  echo'
<script>
alert("You cannot make similar names!");
</script>';
$_SESSION['Error']='False';
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
  a{
    text-decoration: none;
    color: #693939;
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

          <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#group" style="font-size: 20px;">
              Create new group
            </button>
            <div class="modal fade" id="group" tabindex="-1" aria-labelledby="group" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="group">Group info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form class="form-floating" action="create_group.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Group_name" name="Group_name" placeholder="1" required minlength="5" maxlength="10">
                            <span class="validity"></span>
                            <label for="Group_name">Type group name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="Group_Size" name="Group_Size" placeholder="1" required min="10" max="20">
                            <span class="validity"></span>
                            <label for="Group_Size">Type group size</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Group_Subject" name="Group_Subject" placeholder="1" required minlength="5" maxlength="30">
                            <span class="validity"></span>
                            <label for="Group_Size">Type group subject</label>
                        </div>  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Submit">
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
</nav>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Group ID</th>
      <th scope="col">Group Name</th>
      <th scope="col">Group Size</th>
      <th scope="col">Group Teacher</th>
      <th scope="col">Group Subject</th>
    </tr>
    </thead>
  <tbody>
    <?php
$selection=mysqli_query($connect_to_database, "SELECT * FROM groups_table");//select all information from table of groups
while($results = mysqli_fetch_array($selection))
{
  $id=$results['Group_ID'];
  $selection1 = mysqli_query($connect_to_database, "SELECT * FROM teachers_table WHERE Group_ID=$id");//select all information from table of teachers where group ID is equal to ID of current user
  $teacher=mysqli_fetch_array($selection1);
  echo'<tr>
      <th scope="row">'.$results['Group_ID'].'</th>
      <td>'.$results['Group_Name'].'</td>
      <td>'.$results['Group_Size'].'</td>';
      $length = mysqli_num_rows($selection1);
      if($length==0)//if there is no teacher with particular ID write folowing text
      echo '<td>Still no teacher</td>';
      else echo '<td>'.$teacher['Teacher_Name'].'</td>';
      echo '<td>'.$results['Group_Subject'].'</td></tr>';//show table row
}
?>  
</tbody>
</table>
</body>
</html>