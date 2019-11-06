<?php include 'partials/header.php'?>
<?php include 'partials/navBar.php'?>
<div class="col-md-8 mx-auto shadow p-3 mb-5 bg-white rounded" id="postContent">
    <h2 class="text-center">Create Your Content</h2>
    <hr class="my-4">
    <div class="col-md-6 mx-auto">
        <?php if ($this->session->flashdata('msg')){
            echo "<h3>".$this->session->flashdata('msg')."</h3>";
        }?>
        <?php echo validation_errors();?>
        <?php echo form_open_multipart('Content/saveContent')?>
        <div class="form-group">
            <label for="title">Content Title</label>
            <input type="text" class="form-control" id="title" placeholder="Input Content Title" name="title" />
        </div>
        <div class="form-group">
            <label for="content">Discription</label>
            <textarea type="text" class="form-control" id="content" placeholder="Input Content Discription" name="content"></textarea>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" placeholder="Input Location" name="location" />
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Choose District</label>
            <select class="form-control" id="exampleFormControlSelect1" name="district">
                <option class="default" style="font-weight: bold">Choose Location</option>
                <option></option>
               <?php if ($data->num_rows() >0){
                   foreach ($data->result() as $row){
                       ?>
                       <option value="<?php echo $row->district_capitol;?>"><?php echo $row->district_capitol;?></option>
                <?php
                   }
               } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="location">Google Map Embede Url Code Here</label>
            <textarea type="text" class="form-control" id="map" placeholder="Past Url Only" name="map"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Choose Image</label><br>
            <input type="file" id="content" name="image"/>
        </div>
        <button type="submit" class="btn btn-primary" name="upload">Post Content</button>
        <?php echo form_close()?>
    </div>
    <br>
</div>
<br><br>
<?php include 'partials/footerContent.php'?>
<?php include 'partials/footer.php'?>
