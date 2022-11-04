<?php 
$this->view('includes/header');  
?>

<div class="container-fluid blue">
   

    <div class="p-5 mx-auto shadow rounded" style="margin-top:50px; width: 100%; max-width:340px;">
    <h2 class="text-center">ƵETA</h2>
    <img src="<?=ROOT?>/assets/Ƶetateam.png" class="rounded-circle d-block border border-primary mx-auto" style="width:100px; " alt="">
    <h3 >Add User</h3>

    <input type="text" name="lname" class="form-control my-3" placeholder="First Name" autofocus>
    <input type="text" name="fname" class="form-control my-3" placeholder="Last Name">
    <input type="email" name="email" class="form-control my-3" placeholder="Enter Email">
    <select name="gender" id="" class="my-2 form-control">
        <option value="">---Select A Gender---</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
    <select name="rank" id="" class="my-2 form-control">
        <option value="">---Select A Rank---</option>
        <option value="Student">Student</option>
        <option value="Reception">Reception</option>
        <option value="Lecturer">Lecturer</option>
        <option value="Admin">Admin</option>
        <option value="super_admin">Super Admin</option>
    </select>
    <input type="text" name="password" class="form-control my-3" placeholder="Enter Password" >
    <input type="text" name="password" class="form-control my-3" placeholder="Confirm Password" ><br>
    <button type="submit" class="btn btn-primary float-end">Add User</button>
    <button type="submit" class="btn btn-danger">Cancel</button>
    
    </div>
   </div>
  
   <?php 
$this->view('includes/footer'); ?> 