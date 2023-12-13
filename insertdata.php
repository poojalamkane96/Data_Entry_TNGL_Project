<?php
include 'dbcon.php';
if(isset($_POST['add_customers']))
{
    $name= $_POST['fname'];
    echo $name;
    $address= $_POST['f_address'];
    $number= $_POST['f_number'];
    $meternum= $_POST['f_meternum'];
    
    
        $query ="insert into `clientdb`(`Name`,`Address`,`customer_number`,`customer_meter_number`)
        values('$name','$address','$number','$meternum')";

        $result= mysqli_query($connection,$query);

        if(!$result)
        {
            die("Query Failed".mysqli_error());
        }
        else{
            header('location:index.php?message=insert_msg=Your data has been added successfully..');
        }
    

}
?>