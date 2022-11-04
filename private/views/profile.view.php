<?php 
$this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>


    <div class="container-fluid p-4 shadow mx-auto" style="max-width:1000px;">
    <?php $this->view('includes/bread'); ?>
    <div class="row">
        <div class="col-sm-3 col-md-4">
            <img src="<?=ASSETS?>/mg.png" class="cursor-pointer border border-primary d-block mx-auto rounded-circle" alt="" style="width:100px ;">    
        <h3 class="text-center">Jon Snow</h3>
    </div>
        <div class="col-sm-9 col-md-8 bg-light p-2">
            <table class="table table-hover table-bordered table-striped">
                <tr>
                <th>First Name:</th> <td>Jon</td>
               </tr>
               <tr>
               <th>Last Name:</th> <td>Snow</td>
               </tr>
               <tr>
                <th>Gender:</th> <td>Male</td>
            </tr>
               <tr>
                <th>Date Created:</th> <td>08-03-2022</td>
            </tr>
        </table>
        </div>
    </div>
    <br>
    <div class="container-fluid">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a href="" class="nav-link active">Basic Info</a></li>
        <li class="nav-item"><a href="" class="nav-link">Classes</a></li>
        <li class="nav-item"><a href="" class="nav-link">Tests</a></li>
        <!-- <li class="nav-item"><a href="" class="nav-link disabled">Disabled</a></li> -->
    </ul>
    <nav class="navbar navbar-light bg-light">
        <form action="" class="form-inline">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">&nbsp;<i class="fas fa-eye    ">S</i></span></div>
         
            <input type="text" aria-describedby="basic-addon1" aria-label="Search" name="" placeholder="Search" id="" class="form-control">
            </div>
        </form>
    </nav>
    </div>
    </div>

<?php 
$this->view('includes/footer'); ?>
