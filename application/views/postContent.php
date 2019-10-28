<?php include 'partials/header.php'?>
<?php include 'partials/navBar.php'?>
<div class="col-md-6 mx-auto" id="postContent">
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
            <label for="image">Choose Image</label><br>
            <input type="file" id="content" name="image"/>
        </div>
        <button type="submit" class="btn btn-primary" name="upload">Post</button>
  <?php echo form_close()?>
</div>
<?php include 'partials/footerContent.php'?>
<?php include 'partials/footer.php'?>
