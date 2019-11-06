<?php include 'partials/header.php'?>
<?php include 'partials/navBar.php'?>
<br>
<div class="col-md-10 mx-auto text-center">
    <h2>All Travel Places</h2>
    <hr class="my-4">
    <div class="pull-right">
        <div class="row">
            <?php echo form_open('Content/getPostByDsName');?>
            <div class="form-group">
                <label>Select District :</label>
                <select class="form-control" id="dis" name="district">
                    <option>Select District</option>
                    <option></option>
                    <?php if ($data->num_rows() > 0){
                        foreach ($data->result() as $row){
                            ?>
                            <option><?php echo $row->district_capitol;?></option>
                            <?php
                        }
                    }?>
                </select>
            </div>
            <button class="btn btn-success" type="submit">Search</button>
            <?php echo form_close();?>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row justify-content-center">
        <?php if ($post->num_rows() >0){
            foreach ($post->result() as $row){
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
                    </div>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php
            }
        }else{
            echo "<h3>No Data Preview</h3>";
        } ?>
    </div>
</div>
<br>
<br>
<?php include 'partials/footerContent.php'?>
<?php include 'partials/footer.php'?>
