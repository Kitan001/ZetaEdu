<?php 
$this->view('includes/header');  
?>

<div class="container-fluid blue">
   

    <div class="p-5 mx-auto shadow rounded" style="margin-top:50px; width: 100%; max-width:340px;">
    <h2 class="text-center">ƵETA</h2>
    <img src="<?=ROOT?>/assets/Ƶetateam.png" class="rounded-circle d-block border border-primary mx-auto" style="width:100px; " alt="">
    <h3 >Login</h3>

    <input type="email" name="email" class="form-control" placeholder="Enter Email" autofocus><br>
    <input type="password" name="password" class="form-control" placeholder="Enter Password" ><br>
    <button type="submit" class="btn btn-primary">Login</button>
    <!-- <p>No Account?<a href="SignUp.php">Sign Up</a></p> -->
    </div>
   </div>
  
   <?php 
$this->view('includes/footer'); ?>   