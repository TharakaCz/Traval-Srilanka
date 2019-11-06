<?php  include 'partials/header.php'?>
<?php  include 'partials/navBar.php'?>
<br>
<div class="col-md-10 mx-auto">
        <h1 class="text-center">Your Post</h1>
        <hr class="my-4">
        <?php if ($this->session->flashdata('res')){
            echo "<h3>".$this->session->flashdata('res')."</h3>";
        }?>
    <?php if ($this->session->flashdata('dmsg')){
        echo "<div class=\"alert alert-success shadow p-3 mb-5 bg-white rounded\" role=\"alert\">".$this->session->flashdata('dmsg')."</div>";
    }else if ($this->session->flashdata('derror')){
        echo "<div class=\"alert alert-danger shadow p-3 mb-5 bg-white rounded\" role=\"alert\">".$this->session->flashdata('derror')."</div>";
    }
    ?>

    <?php if ($this->session->flashdata('usuccsess')){
        echo "<div class=\"alert alert-success shadow p-3 mb-5 bg-white rounded\" role=\"alert\">".$this->session->flashdata('usuccsess')."</div>";
    }else if ($this->session->flashdata('uerror')){
        echo "<div class=\"alert alert-danger shadow p-3 mb-5 bg-white rounded\" role=\"alert\">".$this->session->flashdata('uerror')."</div>";
    }
    ?>
        <div class="row justify-content-center">
            <?php
            if ($data->num_rows() >0){

                foreach ($data->result() as $row){

                    ?>
                    <div class="col-md-5 card shadow-lg p-3 mb-5 bg-white rounded" style="width: 50%;">
                        <img src="../../uploads/images/<?php echo $row->image?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><label style="font-weight: bold">Title :</label><?php echo $row->title;?></h5>
                            <p class="card-text"><label style="font-weight: bold">Location :</label><?php echo $row->location;?></p>
                            <p class="card-text"><label style="font-weight: bold">District :</label><?php echo $row->district_name;?></p>
                            <p class="card-text"><label style="font-weight: bold">Discription :</label><?php echo $row->discription;?></p>
                            <?php if ($row->map_code != null){
                                echo "<label style='font-weight: bold'>Map Locaion :</label>&nbsp;<a href='$row->map_code'>Click Here Go to Ditect Location</a>";
                            }?>
                            <br>
                            <a href="<?php echo base_url("index.php/Content/delete/{$row->pid}");?>"><i class="fa fa-trash"></i>&nbsp;Delete</a>&nbsp;
                            <a href="<?php echo base_url("index.php/Content/editPost/{$row->pid}");?>"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                        </div>
                    </div>&nbsp;&nbsp;&nbsp;
                    <?php
                }

            }else{
                echo "<h4>No Data Preview</h4>";
            }
            ?>
        </div>
</div>
<?php  include 'partials/footerContent.php'?>
<?php  include 'partials/footer.php'?>
