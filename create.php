<?php
    include "connect.php";
    if(isset($_POST['submit'])){
        $firstName = $_POST['firstName'];
        $Email = $_POST['Email'];
        $password = $_POST['password'];
        $passwordCon = $_POST['passwordCon'];
        $q = " INSERT INTO `register`(`firstName`, `Email`, `password`, `passwordCon`) VALUES ( '$firstName', '$Email', '$password', '$passwordCon')";

        $query = mysqli_query($conn,$q);
    }
?>
<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="admin.php">PHP CRUD Хэсэг</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="admin.php">Нүүр</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php"><span style="font-size:larger;">Нэмэх</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Шинэ хэрэглэгч бүртгэх </h1>
 </div><br>

 <label> Нэр: </label>
 <input type="text" name="firstName" class="form-control"> <br>

 <label> И-мэйл: </label>
 <input type="text" name="Email" class="form-control"> <br>

 <label> Нууц үг: </label>
 <input type="text" name="password" class="form-control"> <br>

 <label> Нууц үг давтах: </label>
 <input type="text" name="passwordCon" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Хадгалах </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="admin.php"> Цуцлах </a><br>

 </div>
 </form>
 </div>
</body>
</html>