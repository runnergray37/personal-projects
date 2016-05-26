<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "runnergray37@gmail.com";
$subject = "Question or Comment From Website";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
<script type="text/javascript"> 
    alert("Thank you! We will get back to you as soon as possible"); 
    history.back(); 
</script> 