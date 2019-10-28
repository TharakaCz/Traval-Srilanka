<?php  include 'partials/header.php'?>
<?php  include 'partials/navBar.php'?>
<div class="col-md-6 mx-auto">
    <div>
        <h3>Youer Post</h3>
        <hr>
        <?php if ($this->session->flashdata('res')){
            echo "<h3>".$this->session->flashdata('res')."</h3>";
        }?>
        <div class="mx-auto">
            <?php
            if ($data->num_rows() >0){

                foreach ($data->result() as $row){

                    ?>
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 50%;">
                        <img src="../../uploads/images/<?php echo $row->image?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><label style="font-weight: bold">Title :</label><?php echo $row->title;?></h5>
                            <p class="card-text"><label style="font-weight: bold">Location :</label><?php echo $row->location;?></p>
                            <p class="card-text"><label style="font-weight: bold">Discription :</label><?php echo $row->discription;?></p>
                        </div>
                    </div><br><br>
                    <?php
                }

            }else{
                echo "<h4>No Data Preview</h4>";
            }
            ?>
        </div>
    </div>
</div>
<?php  include 'partials/footerContent.php'?>
<?php  include 'partials/footer.php'?>
