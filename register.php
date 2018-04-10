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
	 if(isset($_POST['fname']) && isset($_POST['mname']) && isset($_POST['lname']) && isset($_POST['address'])  && isset($_POST['city']) && isset($_POST['pincode']) && isset($_POST['con']) && isset($_POST['native']) && isset($_POST['prof']) && isset($_POST['dob']) && isset($_POST['adob']) && isset($_POST['ldob']) && isset($_POST['email']) ){
		 $fname=$_POST['fname'];
		 $mname=$_POST['mname'];
		 $lname=$_POST['lname'];
		 $address=$_POST['address'];
         $city=$_POST['city'];
         $pincode=$_POST['pincode'];
         $con=$_POST['con'];
         $native=$_POST['native'];
         $prof=$_POST['prof'];
         $dob=$_POST['dob'];
         $adob=$_POST['adob'];
         $ldob=$_POST['ldob'];
         $email=$_POST['email'];
		
         $sql="INSERT INTO `register`(`First_Name`, `Middle_Name`, `Last_Name`, `Address`, `City`, `Pincode`, `Contact`, `Native_Place`, `Profession`, `Birth_Date`, `Add_Year`, `Leave_Year`, `Email_ID`) VALUES ('$fname','$mname','$lname','$address','$city','$pincode','$con','$native','$prof','$dob','$adob','$ldob','$email')";
         if (mysqli_query($conn, $sql)) {
              echo ("<script> 
              alert('REGISTERED SUCCESSFULLY');
              window.location.assign('http://localhost/vlvg/index.html');
              </script>
              ");
             
             
} else {
    echo ("<script> 
              alert('ERROR DURING REGISTRATION');
              window.location.assign('http://localhost/vlvg/index.html');
              </script>
              ");
}
 }

}


mysqli_close($conn);
?>