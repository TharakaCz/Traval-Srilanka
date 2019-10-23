<?php include 'partials/header.php'?>
    <div class="container">
        <div id="registorform">
            <h2>Traval-Srilanka Login</h2>
            <hr>
            <?php if ($this->session->flashdata('error')){
                echo "<h3>".$this->session->flashdata('error')."</h3>";
            }?>
            <?php echo validation_errors();?>
           <?php echo form_open('Registor/registorUser');?>
                <div class="form-group">
                    <label for="fristName">Frist Name</label>
                    <input type="text" class="form-control" id="fristName"  placeholder="Enter Frist Name" name="fname">
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName"  placeholder="Enter Last Name" name="lname">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address"  placeholder="Enter Address" name="address">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Re-Enter Password" name="confirmPassword">
                </div>
                <button type="submit" id="registor" class="btn btn-warning">Registor</button>
            <?php echo form_close();?>
        </div>
    </div>
<?php include 'partials/footer.php'?>