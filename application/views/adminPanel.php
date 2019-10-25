<?php include 'partials/header.php'?>
<?php include 'partials/navBar.php'?>
<div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <h3>System Users</h3>
            <hr>
            <table class="table" id="table" >
                <thead class="thead-dark">
                <tr>
                    <th scope="col">User_ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
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
                                    <td><?php echo $row->password;?></td>
                                    <td><?php echo $row->role;?></td>
                                    <td><?php echo "<a href='#'>edit</a>"?></td>
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
    </div>
</div>
<?php include 'partials/footerContent.php'?>
<?php include 'partials/footer.php'?>
