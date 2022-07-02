<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Your entry has been submit successfully!</strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    echo "<br>";
   
}else{
    echo "No Connection";
}
    mysqli_select_db($con,'feedback_data');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    $query = "insert into feedback (name,email,feedback)
    values ('$name','$email','$feedback')";
    
mysqli_query($con,$query);


    ?>