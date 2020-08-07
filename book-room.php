<?php include 'header.php'; ?>
<?php include 'config.php'; 
if((isset($_POST['ch_in'])&& $_POST['ch_in'] !='') && (isset($_POST['check_out'])&& $_POST['check_out'] !=''))
{
$chk_in = $conn->real_escape_string($_POST['ch_in']);
$chk_out = $conn->real_escape_string($_POST['check_out']);
$chk_adults = $conn->real_escape_string($_POST['check_adults']);
$chk_kids = $conn->real_escape_string($_POST['check_kids']);
$sql= "INSERT INTO booking (ch_in, check_out, check_adults, check_kids) VALUES ('".$chk_in."', '".$chk_out."', '".$chk_adults."', '".$chk_kids."')";

// session_start();
//     $_SESSION['success_message'] = "Product Add successfully In Database.";
//     header("Location: thankyou.php");
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else{
    echo "<h1 class='text-center' style='padding:50px; border:1px solid; margin:150px;'>Thankyou</h1>";
}
}
else
{
echo "Please fill Check In Date and Check Out Date";
}  
  
include 'footer.php'; ?>