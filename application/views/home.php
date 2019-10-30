<?php  include 'partials/header.php' ?>
<?php include 'partials/navBar.php' ?>
<?php  include 'partials/carousel.php'?>
<div class="">
    <div class="card shadow p-3 mb-5 bg-white rounded bounceIn">
        <h3 class="text-center" style="font-weight: bold">Service</h3>
        <hr>
            <h4 class="text-center" style="font-weight: bold">We Are Think Twice Technology's</h4><br><br>
        <div class="row justify-content-center">
            <div class="text-center">
                <h5 style="font-weight: bold">Our Gole</h5>
                <p>Provide Good Traval Details Our Client</p>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="text-center">
                <h5 style="font-weight: bold">Our Target</h5>
                <p>Best Traval Website In Local Traveler's and Froign Travelers</p>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="text-center">
                <h5 style="font-weight: bold">Our Vision</h5>
                <p>Shair Location and Provide Help Travelers</p>
            </div>
        </div>
    </div>
    <div class="card shadow p-3 mb-5 bg-white rounded bounceIn">
        <h3 class="text-center" style="font-weight: bold">Feacherd Locations</h3>
        <hr>
        <div class="card-body col-md-12 mx-auto">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow p-3 mb-5 bg-white rounded bounceIn">
        <h3 class="text-center" style="font-weight: bold" id="aboutus">About Us</h3>
        <hr>
    </div>
    <div class="card shadow p-3 mb-5 bg-white rounded bounceIn">
        <h3 class="text-center" style="font-weight: bold">Reports</h3>
        <p class="text-center">Report Any Wrong thing and bugs or improuvments</p>
        <hr>
        <div class="col-md-6 mx-auto">
            <?php echo validation_errors();?>
            <?php if ($this->session->flashdata('msg')){
                echo "<div class=\"alert alert-success shadow p-3 mb-5 bg-white rounded\" role=\"alert\">".$this->session->flashdata('msg')."</div>";
            }else if ($this->session->flashdata('error')){
                echo "<div class=\"alert alert-danger shadow p-3 mb-5 bg-white rounded\" role=\"alert\">".$this->session->flashdata('error')."</div>";
            }
            ?>
            <?php echo form_open('Reports/sendreport');?>
                <div class="input-group input-group-sm mb-3 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" id="email" aria-label="Email" aria-describedby="inputGroup-sizing-lg" name="email" placeholder="Enter Email"/>
                </div>

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                    </div>
                    <input type="text" class="form-control" id="subject" aria-label="Subject" aria-describedby="inputGroup-sizing-lg" name="subject" placeholder="Enter Subject" />
                </div>

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-sticky-note"></i></span>
                    </div>
                    <textarea type="text" class="form-control" id="reason" aria-label="Reason" aria-describedby="inputGroup-sizing-lg" placeholder="Enter Reason" name="reason"></textarea>
                </div>
                    <button type="submit" class="btn btn-warning"><i class="fa fa-paper-plane"></i>&nbsp;Send Report</button>
                </div>
           <?php echo form_close();?>
        <br>
        </div>
    <div class="card shadow p-3 mb-5 bg-white rounded bounceIn">
        <h3 class="text-center" style="font-weight: bold">Comment Area</h3>
        <p class="text-center">Comment What Are You Thing About Us ?</p>
        <hr>
        <div class="col-md-6 mx-auto">
            <?php echo validation_errors();?>
            <?php if ($this->session->flashdata('ok')){
                echo "<div class=\"alert alert-success shadow p-3 mb-5 bg-white rounded\" role=\"alert\">".$this->session->flashdata('ok')."</div>";
            }else if ($this->session->flashdata('no')){
                echo "<div class=\"alert alert-danger shadow p-3 mb-5 bg-white rounded\" role=\"alert\">".$this->session->flashdata('no')."</div>";
            }
            ?>
            <?php echo form_open('Comment/commentsend');?>
            <div class="input-group input-group-sm mb-3 ">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="email" aria-label="Email" aria-describedby="inputGroup-sizing-lg" name="email" placeholder="Enter Email"/>
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                </div>
                <input type="text" class="form-control" id="fname" aria-label="fname" aria-describedby="inputGroup-sizing-lg" name="fname" placeholder="Enter Frist Name" />
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                </div>
                <input type="text" class="form-control" id="lname" aria-label="lname" aria-describedby="inputGroup-sizing-lg" name="lname" placeholder="Enter Last Name" />
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-sticky-note"></i></span>
                </div>
                <textarea type="text" class="form-control" id="comment" aria-label="comment" aria-describedby="inputGroup-sizing-lg" name="comment" placeholder="Enter Youer Comment"></textarea>
            </div>
            <button type="submit" class="btn btn-info"><i class="fa fa-paper-plane"></i>&nbsp;Submint Comment</button>
            <?php echo form_close();?>
        </div>
        <br>
        <div>

            <h4 class="text-center">What Are Think About Us Our Client</h4>
            <hr>
            <section class="customer-logos slider row">
                <?php
                if ($com->num_rows() >0){
                    foreach ($com->result() as $row){
                        ?>
                        <div class="slide col-sm-10 shadow p-3 mb-5 bg-white rounded bounceIn" >
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row->frist_name;?> <?php echo $row->last_name;?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $row->email;?></h6>
                                    <p class="card-text"><?php echo $row->comment;?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }else{
                    echo "<h4>No Data Preview</h4>";
                }
                ?>
            </section>
        </div>
        <br>
    </div>
    <div class="card shadow p-3 mb-5 bg-white rounded bounceIn">
        <h3 class="text-center" style="font-weight: bold">Technology</h3>
        <p class="text-center">This Are Using Bilding This Website</p>
        <hr>
        <section id="technology">
            <div class="row justify-content-center">

                <?php
                if ($data->num_rows() >0){
                    foreach ($data->result() as $row){
                        ?>
                        <img class="shadow p-3 mb-5 bg-white rounded" style="width: 14rem;" src="../../assest/images/technology/<?php echo $row->image?>">&nbsp;&nbsp;&nbsp;
                        <?php
                    }
                }else{
                    echo "<h4>No Data Preview</h4>";
                }
                ?>
            </div>
        </section>
    </div>
</div>

<?php include 'partials/footerContent.php'?>
<?php include  'partials/footer.php' ?>
