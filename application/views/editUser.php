<?php include 'partials/header.php'?>
<?php include  'partials/navBar.php' ?>
<div class="col-md-6 mx-auto">
    <div>
        <h3>Edit User</h3>
        <hr>
        <?php if ($this->session->flashdata('error')){
                echo "<h3>".$this->session->flashdata('error')."</h3>";
        }?>
        <?php echo form_open("Admin/update_user/{$data->pid}");?>
        <div class="form-group">
            <label for="fname">Frist Name</label>
            <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $data->frist_name?>"/>
        </div>
        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $data->last_name?>" />
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" value="<?php echo $data->email?>" name="email" />
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea type="text" class="form-control" id="address" name="address"><?php echo $data->address?></textarea>
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <input type="text" class="form-control" id="role" name="role" value="<?php echo $data->role?>"/>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <?php echo form_close();?>
    </div>
</div>
<?php include 'partials/footerContent.php'?>
<?php include 'partials/footer.php'?>
