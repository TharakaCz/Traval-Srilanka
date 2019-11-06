<?php
    if (!($this->session->userdata('active'))){
        redirect('Home/login');
    }
?>
<?php include 'partials/header.php'?>
<?php include 'partials/navBar.php'?>
        <div class="card shadow-lg p-3 mb-5 bg-white rounded col-md-6 mx-auto">
            <div class="card-body ">
                    <div class="col-md-3 mx-auto">
                        <img class="rounded-circle" src="https://placekitten.com/640/360" style="width: 120px;height: 120px">
                    </div>
                    <div class="text-center">
                        <h1><?php echo $this->session->userdata('fname')?> <?php echo $this->session->userdata('lname')?></h1>
                        <span class="mb-2 text-muted"><?php echo $this->session->userdata('email')?></span>
                    </div>
            </div>
        </div>
<br>
<div class="row justify-content-center">
    <?php if ($this->session->flashdata('edone')){
        echo "<div class=\"alert alert-success shadow p-3 mb-5 bg-white rounded\" role=\"alert\">".$this->session->flashdata('edone')."</div>";
    }else if ($this->session->flashdata('eerror')){
        echo "<div class=\"alert alert-danger shadow p-3 mb-5 bg-white rounded\" role=\"alert\">".$this->session->flashdata('eerror')."</div>";
    }
    ?>
</div>
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
<br><br>
<?php include  'partials/footerContent.php'?>
<?php  include 'partials/footer.php'?>