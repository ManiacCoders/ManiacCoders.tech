<?php
//if "email" variable is filled out, send email
  if (isset($_POST['email']))  {
  
  //Email information
  $admin_email = "maniaccodertech@gmail.com";
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $message=$message."\n\r ph.no: ".$_POST['phone']."\n\r name: ".$_POST['name'];
  
  //send email
  mail($admin_email, $subject, $message, "From:" . $email);
  
  //Email response
  //echo "Thank you for contacting us!";
  $url = '../index.html';
	header('Location: ' . $url);
	
  }
  
  //if "email" variable is not filled out, display the form
  else  {
  echo "notsend";
/*

 <form method="post">
  Email: <input name="email" type="text" /><br />
  Subject: <input name="subject" type="text" /><br />
  Message:<br />
  <textarea name="comment" rows="15" cols="40"></textarea><br />
  <input type="submit" value="Submit" />
  </form>
  
<?php  */
  }
?>