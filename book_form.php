<?php

   $connection = mysqli_connect('localhost','root','','book_db');
   // require "phpmailer/PHPMailerAutoload.php";

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }
   

   
   // if(isset($_POST['submit'])){
	// 	$name=$_POST['name'];
	// 	$email=$_POST['email'];
	// 	$phone=$_POST['phone'];
   //    $address = $_POST['address'];
   //    $location = $_POST['location'];
   //    $guests = $_POST['guests'];
   //    $arrivals = $_POST['arrivals'];
   //    $leaving = $_POST['leaving'];

	// 	$to='mohammedmuthmayeenn@gmail.com'; // Receiver Email ID, Replace with your email ID
	// 	$subject='Form Submission';
	// 	$message="Name :".$name."\n"."Phone :".$phone."\n"."address"."\n\n".$address;
	// 	$headers="From: ".$email;

	// 	if(mail($to, $subject, $message, $headers)){
	// 		echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
	// 	}
	// 	else{
	// 		echo "Something went wrong!";
	// 	}
	// }


   // $to = "mohammedmuthmayeenn@gmail.com";
   // $subject = "This is subject";
   
   // $message = "<b>This is HTML message.</b>";
   // $message .= "<h1>This is headline.</h1>";
   
   // $header = "From:tknmmproject@gmail.com \r\n";
   // $header .= "Cc:tknmmproject@gmail.com \r\n";
   // $header .= "MIME-Version: 1.0\r\n";
   // $header .= "Content-type: text/html\r\n";
   
   // $retval = mail ($to,$subject,$message,$header);
   
   // if( $retval == true ) {
   //    echo "Message sent successfully...";
   // }else {
   //    echo "Message could not be sent...";
   // }


?>