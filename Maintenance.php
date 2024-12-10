<?php 
//var_dump($_SERVER);
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 //   echo" send data";
//}
// الملافات الي بنضيفها بتكون ب مصفوفة اسمها($_FILES)
$name = $email = $age = $gender = $sp = $bio = '';

if (isset($_POST['name'])) {
   //var_dump($_POST);
  $errors = [] ;
  
$name   = check_input(  $_POST['name']        );
$email  = check_input(   $_POST['email']      );
$age    = check_input(  $_POST['age']         );

 
//if (strlen($name) == 0) {
   if(empty($name)){
    $errors[] = "Name field is required";
}

if(empty($email)){
    $errors[] = " Package  is required";
}
if(empty($age)){
  $errors[] = " location is required";
}



}

function check_input($data){
    return htmlspecialchars( stripcslashes(trim($data)));
}

 
 

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlowMaint | online</title>
    <link rel="icon" href="img/logo.cline.jpg">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   
    <link rel="stylesheet" href="css/cling.css">
    </head>
     <body>
     <div class="container2">
      <header>
     <div class="header2">
    
    <h2>Maintenance Services We Offer</h2>
  </div>

</header>

<div class="bgflex">
<section class="our-team">
    
    <div class="container">
 
        <div class="item">
       
       <div class="layer"> 
         
         <div class="title-bg"></div>
         <div class="cont" data-aos="fade-right">
           <h3>Diamond Residential Package</h3>
         <p>
          <ul>
         <li>Preventive Scheduled Visits Included in the Package (Free)  :</li>
            <li>- Electrical Work: 3 visits  </li>
            <li>- Plumbing: 3 visits  </li>
            <li>- Air Conditioning: 3 visits  </li>
            <li>- Home Furniture: 3 visits </li> 
          </ul>
          <ul>

             <li>Services Included in the Package  </li>
             <li>- AC Cleaning: 12 units   </li>
             <li>- Water Heaters: 8 units   </li>
             <li>- Ground Tank Cleaning: 1   </li>
             <li>- Pest Control: 2 sessions   </li>
             <li>- Home Appliance Maintenance (Refrigerator, Washing Machine, Oven): 3 devices </li>

             </ul>
             <ul>
              <li>Price: 2,740 SAR  </li>
              <li>Tax (15%): 411 SAR </li>
              <li>Total Price: 3,151 SAR</li>
             </ul>
         </p>
         <span class="min"><i class="fa-solid
           fa-lightbulb"></i></span> 
         </div
         > </div><h4>Step 01</h4>
      </div>
 
       <div class="item">
       
         <div class="layer"> 
           
           <div class="title-bg"></div>
           <div class="cont" data-aos="fade-right">
             <h3>Gold Residential Package</h3>
           <p>
           <ul>
         <li>Preventive Scheduled Visits Included in the Package (Free)  :</li>
            <li>- Electrical Work: 2 visits  </li>
            <li>- Plumbing: 2 visits  </li>
            <li>- Air Conditioning: 2 visits  </li>
            <li>- Home Furniture: 3 visits </li> 
          </ul>
          <ul>

             <li>Services Included in the Package  </li>
             <li>- AC Cleaning: 8 units   </li>
             <li>- Water Heaters: 5 units   </li>
             <li>- Ground Tank Cleaning: 1   </li>
             <li>- Pest Control: 1 sessions   </li>
             <li>- Home Appliance Maintenance (Refrigerator, Washing Machine, Oven): 2 devices </li>

             </ul>
             <ul>
              <li>Price: 1,810 SAR  </li>
              <li>Tax (15%): 271.5 SAR </li>
              <li>Total Price: 2,083 SAR</li>
             </ul>
           </p>
           <span class="min"><i class="fa-solid
             fa-gears"></i></span> 
           </div>
         </div>
           <h4>Step 02</h4>
         
       </div>
 
 
         <div class="item">
       
           <div class="layer"> 
             
             <div class="title-bg"></div>
             <div class="cont" data-aos="fade-right">
               <h3>Air Conditioning Package</h3>
             <p>
               <ul>
                <li> A comprehensive package for AC maintenance and cleaning </li>
                <li>- Number of AC units included: 6</li>
                <li>- Note: Spare parts are not included</li>
               </ul>
             </p>
             <span class="min"><i class="fa-solid
               fa-arrow-up-right-dots"></i></span> 
             </div
             ></div>
             <h4>Step 01</h4>
           </div>
 
           
     </div>

    
   </section>


   <div class="content" data-aos="fade-left">
  
    <div class="login1" >
    
      <form action="" method="post" enctype="multipart/form-data">
        <h1> SUBSCRIPTION IN</h1>
        <?php if(isset($errors) && count($errors) == 0){?>
        <div class="success">
        <i class="fa-solid fa-check"></i>data stored succeessfull
        </div> 
        <?php }?>


        <?php if(isset($errors) && count($errors) != 0){?>
        <div class="errors">
            <ul>
                <?php foreach($errors as $error){?>
                  
                <li> <span>x</span><?= $error ?> </li>
                <?php }?>
            </ul>
        </div>
        <?php }?>
       <label for="">Usernaame</label>
       <input class="input-filed" type="text" name="name" placeholder="Name" value="<?=$name?>">
       <label for="">Package name</label>
       <input class="input-filed" type="text" name="email"  value="<?=$name?>">
       <label> location</label>
       <input class="input-filed" type="text"  name="age"  value="<?=$age?>">
       <button class="input-filed">subscription</button>
      </form>
    </div>
    </div>
</div>

    <section>
      <div class="pragraf">


        <div class="pr">
        <img src="img/p3.jpg" alt="" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
        <p >Monthly maintenance</p>
        </div>

        <div class="pr">
        <img src="img/m2.jpg" alt="" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
        <p >Annual maintenance</p>
        </div>


        <div class="pr">
        <img src="img/m3.jpg" alt="" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
        <p >Weekly maintenance</p>
        </div>
      </div>
    </section>



    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="prod.js"></script>
<script src="script.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>