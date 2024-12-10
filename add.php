<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "final";

$conn = mysqli_connect($host,$user,$pass,$db);

$errors = [] ;

$name = $price = $Service = '';
if (isset($_POST['name'])) {
    

$name    = htmlspecialchars(trim($_POST['name']));
$price   = htmlspecialchars(trim($_POST['price']));
$Service = htmlspecialchars(trim($_POST['Service']));

if(empty($name)){
    $errors[] = "Name  is required";
}

if(empty($price)){
    $errors[] = "price  is required";
}

if(empty($Service)){
    $errors[] = "Service is required";
}
if(count($errors) == 0){
    $sql = "INSERT INTO services (name , price , Service ) VALUES ('$name' , '$price' , '$Service' )";
    if(mysqli_query($conn,$sql)) {
       // echo "<div class='alert alert-success'>
       // <i class='fa-solid fa-check'></i>data stored succeessfull
       // </div>";
       header("location: view.php ");
    }

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
   
    
</head>
<body>
    <div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Add New Service</h1>
    <a href="view.php" class="btn btn-primary">All Service </a>
  </div>

  


        <?php if(count($errors) > 0){?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach($errors as $error){?>
                  
                <li> <?= $error ?> </li>
                <?php }?>
            </ul>
        </div>
        <?php }?>

  <form action="" method="post">
    <div class="mb-3">
        <label for="">Name <span class="text-danger">*</span></label>
        <input type="text" placeholder="Service Name ..." name="name" value="<?= $name ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">price<span class="text-danger">*</span></label>
        <input type="number" placeholder="Service price ..." name="price"  value="<?= $price?>"   class="form-control ">
    </div>
    <div class="mb-3">
        <label for="">Service Evaluation <span class="text-danger">*</span></label>
        <input type="text" placeholder=" Service Evaluation ..." name="Service" value="<?= $Service ?>"   class="form-control ">
    </div>
    <button class="btn btn-success px-5">Save</button>
  </form>








    </div>
    
</body>
</html>