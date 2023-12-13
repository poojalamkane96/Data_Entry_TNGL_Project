
<?php include('header.php');?>
<?php include('dbcon.php');?>


<?php
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
    }
    
                $query = "select * from clientdb where id='$id'";
                $result=mysqli_query($connection,$query);
                
                if(!$result)
                {
                    die("query failed".mysqli_error());
                }
                else
                {
                    $row=mysqli_fetch_assoc($result);
                    //print_r($row);
                }
            
            
?>
<!-- update code -->

                 <?php 
                    
                    if(isset($_POST['update_customers']))
                    {
                        if(isset($_GET['id_new']))
                        {
                            $idnew=$_GET['id_new'];
                        
                        }
                        $fname=$_POST['fname'];
                        $address=$_POST['f_address'];
                        $number=$_POST['f_number'];
                        $meternum=$_POST['f_meternum'];
                    

                    $query = "update clientdb set `Name` ='$fname' , `Address`='$address' ,`customer_number`='$number',
                    `customer_meter_number`='$meternum' where id='$idnew'";
                    $result=mysqli_query($connection,$query);
                
                        if(!$result)
                        {
                            die("query failed".mysqli_error());
                        }
                        else
                        {
                            header('location:index.php?update_msg="You have successfully updated"');
                        }
                    
                }
                
                ?> 



<form action="update_page_1.php?id_new=<?php  echo $id;?>" method="post">
    <div class="form-group">
        <label for="fname">Customer Name</label>
        <input type="text" name="fname" class="form-control" value="<?php echo $row['Name'] ?>">
    </div>
    <div class="form-group">
        <label for="f_address">Address</label>
        <input type="text" name="f_address" class="form-control" value="<?php echo $row['Address'] ?>">
    </div>
    <div class="form-group">
        <label for="f_number">Customer Number</label>
        <input type="text" name="f_number" class="form-control" value="<?php echo $row['customer_number'] ?>">
    </div>
    <div class="form-group">
        <label for="f_meternum">Meter Serial Numbetr</label>
        <input type="text" name="f_meternum" class="form-control" value="<?php echo $row['customer_meter_number'] ?>">
    </div>
     <input type="submit" class="btn btn-success mt-4" name="update_customers" value="UPDATE"> 

</form>

<?php include('footer.php');?>