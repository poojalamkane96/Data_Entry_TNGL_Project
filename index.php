<?php include('header.php');?>
<?php include('dbcon.php');?>

    <div class="box1">
    <h3>All CUSTOMERS</h3>
    <!-- modal for adding clients -->
    <button class="btn btn-primary  " data-bs-toggle="modal" data-bs-target="#exampleModal">ADD Customer</button>
    </div>


    <table class="table table-hover table-bordered table-striped mt-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Customer Number</th>
                <th>Meter Serial Number</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "select * from clientdb";
                $result=mysqli_query($connection,$query);
                if(!$result)
                {
                    die("query failed".mysqli_error());
                }
                else
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['Name'] ?></td>
                            <td><?php echo $row['Address'] ?></td>
                            <td><?php echo $row['customer_number'] ?></td>
                            <td><?php echo $row['customer_meter_number'] ?></td>
                            <td><a href="update_page_1.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Update</a></td>
                            <td><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <?php
                    }
                }
            ?>
        </tbody>
    </table>

    <!-- Validation Message -->
    <!-- <?php
    if(isset($_GET['message']))
    {
        echo "<h6>".$_GET['message']."<h6>";
    }
    ?>
    <?php
    if(isset($_GET['insert_msg']))
    {
        echo "<h6>".$_GET['insert_msg']."<h6>";
    }
    ?> 
    
    <?php
    if(isset($_GET['update_msg']))
    {
        echo "<h6>".$_GET['update_msg']."<h6>";
    }
    ?> 
    <?php
    if(isset($_GET['delete_msg']))
    {
        echo "<h6>".$_GET['delete_msg']."<h6>";
    }
    ?> 
-->





    <!-- Modal code -->
<form action="insertdata.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD CUSTOMERS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form Code start -->

       
            <div class="form-group">
                <label for="fname">Customer Name</label>
                <input type="text" name="fname" class="form-control">
            </div>
            <div class="form-group">
                <label for="f_address">Address</label>
                <input type="text" name="f_address" class="form-control">
            </div>
            <div class="form-group">
                <label for="f_number">Customer Number</label>
                <input type="text" name="f_number" class="form-control">
            </div>
            <div class="form-group">
                <label for="f_meternum">Meter Serial Numbetr</label>
                <input type="text" name="f_meternum" class="form-control">
            </div>

        <!-- Form Code End -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_customers" value="ADD">
      </div>
    </div>
  </div>
</div>
</form>
    <?php include('footer.php');?>

    