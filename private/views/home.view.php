<?php 
$this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>
    <div class="container-fluid blue">
   <h1>This is the Home Page</h1>
   </div>
  
<?php
print_r($data['rows']);
?>

   <?php 
$this->view('includes/footer'); ?>    