<?php
  include "connect.php";
  $firstName="";
  $Email="";
  $password="";
  $passwordCon="";
  
  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['ID'])){
      header("location: admin.php");
      exit;
    }
    $ID = $_GET['ID'];
    $sql = "select * from register where ID=$ID";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: admin.php");
      exit;
    }
    $firstName=$row["firstName"];
    $Email=$row["Email"];
    $password=$row["password"];
    $passwordCon=$row["passwordCon"];
  }
  else{
    $ID = $_POST["ID"];
    $firstName=$_POST["firstName"];
    $Email=$_POST["Email"];
    $password=$_POST["password"];
    $passwordCon=$_POST["passwordCon"];

    $sql = "update register set firstName='$firstName', Email='$Email', password='$password' where ID='$ID'";
    $result = $conn->query($sql);
    
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand" href="admin.php">PHP CRUD Хэсэг</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="admin.php">Нүүр</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php">Нэмэх</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Хэрэглэгчийн шинэчлэх </h1>
 </div><br>

 <input type="hidden" name="ID" value="<?php echo $ID; ?>" class="form-control"> <br>

 <label> Нэр: </label>
 <input type="text" name="firstName" value="<?php echo $firstName; ?>" class="form-control"> <br>

 <label> И-мэйл: </label>
 <input type="text" name="Email" value="<?php echo $Email; ?>" class="form-control"> <br>

 <label> Нууц үг: </label>
 <input type="text" name="password" value="<?php echo $password; ?>" class="form-control"> <br>

 <label> Нууц үг давтах: </label>
 <input type="text" name="passwordCon" value="<?php echo $passwordCon; ?>" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Хадгалах </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="admin.php"> Цуцлах </a><br>

 </div>
 </form>
 </div>
</body>
</html>