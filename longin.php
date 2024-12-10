<?php include 'db.php';

$name = $email = $age = $gender =  $Service = '';
$errors = [] ;
if (isset($_POST['name'])) {
   //var_dump($_POST);
  
  
$name   = htmlspecialchars(trim(  $_POST['name']        ));
$email  = htmlspecialchars(trim(   $_POST['email']      ));
$age    = htmlspecialchars(trim(  $_POST['age']         ));
$gender = htmlspecialchars(trim(  $_POST['gender'] ?? ''));
//$Service    = htmlspecialchars(trim(  $_POST['Service']         ));
 
//if (strlen($name) == 0) {
   if(empty($name)){
    $errors[] = "Name field is required";
}

if(empty($email)){
    $errors[] = "Email field is required";
}

if(empty($gender)){
    $errors[] = "Gender field is required";
}
}

if(count($errors) == 0){
    $sql = "INSERT INTO client (name ,email , age , Gender , Service ) VALUES ('$name' , '$email' , '$age' , '$gender' , '$Service' )";
    if(mysqli_query($conn,$sql)) {
       echo "<div class='alert alert-success'>
       <i class='fa-solid fa-check'></i>Welcome To Our Family
        </div>";
        //header("location: index.php ");
       
    }

}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Service | online</title>
    <link rel="icon" href="img/logo.cline.jpg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/cling2.css">
</head>
<body>
    <div class="container2">

    <div class="content"> 
       


 

  <form action="" method="post" enctype="multipart/form-data">
  <h1>Personal Data</h1>
        


        <?php if(isset($errors) && count($errors) != 0){?>
        <div class="errors">
            <ul>
                <?php foreach($errors as $error){?>
                <li><?= $error ?> </li>
                <?php }?>
            </ul>
        </div>
        <?php }?>
    
    <div class="mb-3">
    <label for="">Name: <span class="text-danger">*</span></label>  
    <input class="form-control " type="text" name="name" placeholder="Name" value="<?=$name?>">
</div>


<div class="mb-3">
      
    <label for="">Email: <span class="text-danger">*</span></label>
    <input class="form-control " type="email" name="email" placeholder="Email"  value="<?=$email?>">
</div>


<div class="mb-3">
        
    <label for="">age:</label>
    <input class="form-control " type="number" name="age" placeholder="Age"  value="<?=$age?>">
</div>


<div  class="mb-3">
        
    <label for="">Gender <span class="text-danger">*</span></label> <br> 
    <label><input <?= ($gender == 'Male')? 'checked' : ''; ?> type="radio" name="gender" value="Male">Male</label>
    <label><input  <?= ($gender == 'Female')? 'checked' : ''; ?> type="radio" name="gender" value="Female">Female</label>
    </div>


    

    


    <div  class="mb-3">
    <label for="">Name Service:</label>
    <input class="form-control " type="text" name="Service" placeholder="Service" value="<?=$Service?>">
    </div>


    <div>
    <button class=" px-5">Join us</button></div>
    
  </form>
</div>
</div>
</body>
</html>

