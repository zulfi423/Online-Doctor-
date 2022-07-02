<?php
$con = mysqli_connect('localhost','root');
if($con){
     echo "Submit succefully";
   
}else{
    echo "No Connection";
}
    mysqli_select_db($con,'dr_burhan_data');
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $time = $_POST['time'];
    $date = $_POST['date'];

    $query = "insert into dr_burhan (name,number,email,time,date)
    values ('$name','$number','$email','$time','$date')";
    
mysqli_query($con,$query);


    ?>