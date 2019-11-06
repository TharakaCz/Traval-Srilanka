<?php include 'partials/header.php'?>
<?php include 'partials/navBar.php'?>
   <div class="col-md-12 mx-auto text-center">
      <div class="shadow p-3 mb-5 bg-white rounded">
          <h2>System Users</h2>
          <hr>
          <?php if ($this->session->flashdata('msg')){
              echo "<h3>".$this->session->flashdata('msg')."</h3>";
          }?>
          <table class="table shadow-lg p-3 mb-5 bg-white rounded col-md-6 mx-auto" id="table" >
              <thead class="thead-dark">
              <tr>
                  <th scope="col">User_ID</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Address</th>
                  <th scope="col">Email</th>
                  <th scope="col">Role</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
              </tr>
              </thead>
              <tbody>
              <?php
              if ($data->num_rows() >0){

                  foreach ($data->result() as $row){

                      ?>
                      <tr>
                          <td><?php echo $row->pid;?></td>
                          <td><?php echo $row->frist_name;?></td>
                          <td><?php echo $row->last_name;?></td>
                          <td><?php echo $row->address;?></td>
                          <td><?php echo $row->email;?></td>
                          <td><?php echo $row->role;?></td>
                          <td><a href='<?php echo base_url("index.php/Admin/edit_user/{$row->pid}");?>'><i class="fa fa-edit"></i>&nbsp;edit</a></td>
                          <td><a href='<?php echo base_url("index.php/Admin/delete_user/{$row->pid}");?>'><i class="fa fa-trash"></i>&nbsp;delete</a></td>
                      </tr>
                      <?php
                  }

              }else{
                  echo "<td>No Data Preview</td>";
              }
              ?>
              </tbody>
          </table>
      </div>
       <div class="shadow p-3 mb-5 bg-white rounded">
           <h2 class="">Client Reports</h2>
           <?php echo validation_errors();?>
           <?php if ($this->session->flashdata('rmsg')){
               echo "<div class=\"alert alert-success shadow p-3 mb-5 bg-white rounded\" role=\"alert\">".$this->session->flashdata('rmsg')."</div>";
           }else if ($this->session->flashdata('rerror')){
               echo "<div class=\"alert alert-danger shadow p-3 mb-5 bg-white rounded\" role=\"alert\">".$this->session->flashdata('rerror')."</div>";
           }
           ?>
           <hr class="my-4">
           <div class="row justify-content-center">
               <?php
               if ($reports->num_rows() >0){
                   foreach ($reports->result() as $row){
                       ?>
                       <div class="card shadow-lg p-3 mb-5 bg-white rounded ">
                           <div class="card-body">
                               <h5><?php echo $row->email;?></h5>
                               <span>Date : <?php echo $row->date;?></span>
                               <br>
                               <span>Subject : <?php echo $row->subject;?></span>
                               <p>Reason : <?php echo $row->reason;?></p>
                               <a href="<?php echo base_url("index.php/Reports/delete/{$row->pid}");?>"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                           </div>
                       </div>
                       &nbsp;&nbsp;&nbsp;&nbsp;
                       <?php
                   }

               }else{
                   echo "<h2>No Data preview</h2>";
               }
               ?>
           </div>
       </div>
       <div class="shadow p-3 mb-5 bg-white rounded">
           <h2>Client Comment</h2>
           <?php echo validation_errors();?>
           <?php if ($this->session->flashdata('com')){
               echo "<div class=\"alert alert-success shadow p-3 mb-5 bg-white rounded\" role=\"alert\">".$this->session->flashdata('com')."</div>";
           }else if ($this->session->flashdata('comerror')){
               echo "<div class=\"alert alert-danger shadow p-3 mb-5 bg-white rounded\" role=\"alert\">".$this->session->flashdata('comerror')."</div>";
           }
           ?>
           <hr class="my-4">
           <div class="row justify-content-center">
               <?php
               if ($comment->num_rows() >0){
                   foreach ($comment->result() as $row){
                       ?>
                       <div class="card shadow-lg p-3 mb-5 bg-white rounded ">
                           <div class="card-body">
                               <h5><?php echo $row->frist_name;?> <?php echo $row->last_name;?></h5>
                               <span><?php echo $row->email;?></span>
                               <br>
                               <span>Subject : <?php echo $row->comment;?></span>
                               <br>
                               <a href="<?php echo base_url("index.php/Comment/delete/{$row->pid}");?>"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                           </div>
                       </div>
                       &nbsp;&nbsp;&nbsp;&nbsp;
                       <?php
                   }

               }else{
                   echo "<h2>No Data preview</h2>";
               }
               ?>
           </div>
       </div>
   </div>
<?php include 'partials/footerContent.php'?>
<?php include 'partials/footer.php'?>
