<?php include 'partials/header.php'?>
<?php include 'partials/navBar.php'?>
<br>
<div class="col-md-10 mx-auto shadow p-3 mb-5 bg-white rounded">
    <h2 class="text-center">Edit Post</h2>
    <hr class="my-4">
    <div class="col-md-6 mx-auto">
       <?php echo form_open_multipart("Content/updatePost/{$data->pid}");?>
            <div class="form-group">
                <label for="title">Content Title</label>
                <input type="text" class="form-control" id="title" placeholder="Input Content Title" name="title" value="<?php echo $data->title;?>" />
            </div>
            <div class="form-group">
                <label for="content">Discription</label>
                <textarea type="text" class="form-control" id="content" placeholder="Input Content Discription" name="content"><?php echo $data->discription;?></textarea>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" placeholder="Input Location" name="location" value="<?php echo $data->location;?>"/>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Choose District</label>
                <select class="form-control" id="exampleFormControlSelect1" name="district">
                    <?php if ($data->district_name != null){
                        echo "<option>$data->district_name</option>";
                        echo "<option></option>";
                        if ($district->num_rows() >0){
                        foreach ($district->result() as $row){
                            ?>
                            <option value="<?php echo $row->district_capitol;?>"><?php echo $row->district_capitol;?></option>
                            <?php
                        }
                    }
                    }else{
                        echo "<option>No District You Choosen</option>";
                        echo "<option></option>";

                        if ($district->num_rows() >0){
                            foreach ($district->result() as $row){
                                ?>
                                <option value="<?php echo $row->district_capitol;?>"><?php echo $row->district_capitol;?></option>
                                <?php
                            }
                        }
                    }?>
                </select>
            </div>
            <div class="form-group">
                <label for="location">Google Map Url Code Here</label>
                <textarea type="text" class="form-control"  placeholder="You Are Not Past Google Map Source Code / Past Source Url Here" name="map"><?php echo $data->map_code;?></textarea>
            </div>
            <div class="form-group">
                <label>Youer Post Image</label>
                <div>
                    <img src="../../uploads/images/<?php echo $data->image;?>">
                </div>
                <div>
                    <label>Choose Image :</label><br>
                    <input  type="file" name="image"/>
                    <input style="visibility: hidden;" type="text" name="pastimage" value="<?php echo $data->image?>" />
                </div>
            </div>
        <button type="submit" class="btn btn-warning">Update</button>
       <?php echo form_close();?>
        <br>
    </div>
</div>
<br>
<?php include 'partials/footerContent.php'?>
<?php include  'partials/footer.php'?>
