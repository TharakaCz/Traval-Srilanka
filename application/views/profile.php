<?php
    if (!($this->session->userdata('active'))){
        redirect('Home/login');
    }
?>
<?php include 'partials/header.php'?>
<?php include 'partials/navBar.php'?>

    <?php echo form_open('Profile/editUser')?>
    <div class="col-md-6 mx-auto">
        <div class="form-group">
            <label for="firstname">Frist Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?php echo $this->session->userdata('fname')?>" name="fname" />
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" aria-describedby="emailHelp"  value="<?php echo $this->session->userdata('lname')?>" name="lname" />
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $this->session->userdata('email')?>" name="email" />
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" aria-describedby="emailHelp"  value="<?php echo $this->session->userdata('address')?>" name="address" />
        </div>
        <button class="btn btn-primary" type="submit">Edit</button>
    </div>
   <?php echo form_close()?>

<?php  include 'partials/footer.php'?>