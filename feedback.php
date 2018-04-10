<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vlvg";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit'])){
	 if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']) ){
		 $name=$_POST['name'];
		 $email=$_POST['email'];
		 $subject=$_POST['subject'];
		 $message=$_POST['message'];
		
         $sql="INSERT INTO `feedback`(`Name`, `Email_ID`, `Subject`, `Message`) VALUES ('$name','$email','$subject','$message')";
         if (mysqli_query($conn, $sql)) {
              echo ("<script> 
              alert('FEEDBACK SUBMITTED');
              window.location.assign('http://localhost/vlvg/index.html');
              </script>
              ");
             
             
} else {
    echo ("<script> 
              alert('ERROR DURING SUBMISSION');
              window.location.assign('http://localhost/vlvg/index.html');
              </script>
              ");
}
 }

}


mysqli_close($conn);
?>