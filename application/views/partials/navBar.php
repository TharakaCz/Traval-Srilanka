<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Travel-Srilanka</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('index.php/Home/index')?>">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('index.php/Home/about')?>">About Us</a>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item active">
            <span class="nav-link"><?php
                echo $this->session->userdata('fname')." ".$this->session->userdata('lname') ?>
            </span>
            </li>
            <li class="nav-item active">
                <?php $status= $this->session->userdata('active');
                if ($status != false){
                    include 'profileAuth.php';
                }?>
            </li>
            <li class="nav-item active">
                <?php $status= $this->session->userdata('active');
                if ($status != false){
                    include 'postAuth.php';
                }?>
            </li>
            <li class="nav-item active">
                <?php $status= $this->session->userdata('active');
                if ($status != false){
                    include 'auth.php';
                }else{
                    include 'loginAuth.php';
                }
                ?>
            </li>
            <li class="nav-item active">
                <?php $status= $this->session->userdata('active');
                if ($status != true or null){
                    include 'registorAuth.php';
                }
                ?>
            </li>
        </ul>
    </div>
</nav>