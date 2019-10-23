<?php  include 'partials/header.php'?>
<div class="container">
    <div id="loginform">
        <h2>Traval-Srilanka Login</h2>
        <hr>
        <?php if ($this->session->flashdata('msg')){
            echo "<h3>".$this->session->flashdata('msg')."</h3>";
        }?>
        <?php echo validation_errors()?>
       <?php echo form_open('Login/loginUser')?>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" />
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" />
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
       <?php echo form_close()?>
    </div>
</div>
<?php include 'partials/footer.php'?>
