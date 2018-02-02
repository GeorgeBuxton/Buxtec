<?php

$success_message = "";

if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "gbuxton1@gmail.com";
    $email_subject = "Buxtec contact from";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  

$success_message = "Thank you for contacting Buxtec. <br /> George will be in touch with you very soon.";

}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit-no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
<title>For Front-end Dev...</title>
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
	<!-- icon links -->
	<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
	<link rel="manifest" href="images/manifest.json">
	<link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112391462-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-112391462-1');
	</script>
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MNVMWM2');</script>
	<!-- End Google Tag Manager -->
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MNVMWM2"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
	<header>
		<div  class="container">
			<div class="row">
				<div class="col-6 float-left">
					<a href="index.html">
						<img id="logo" class="logo" src="images/buxtec.svg" alt="Buxtec Logo"/>
					</a>
				</div>
				<div class="col-6 float-right">
					<menu onmouseover="menuOver()" onmouseout="menuOut()">
						<a href="menu.html"><img id="menu" class="menu-icon" src="images/menu-open.svg" alt="menu"/></a>
					</menu>
				</div>
			</div><!-- row -->
		</div><!-- container -->
		
	</header>
	
	<main>
		<div id="about" class="content container">
			<div class="row">
				<div class="col-md-6">
					<h1 class="text-left">Get in touch</h1>
				</div>
				<div class="col-md-6">
					<?php echo $success_message; ?>
				</div>
			</div><!-- row -->
			
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-sm-10">
							<p>I’m looking for a position with a company that is actively pushing technology forward, values their customers and works as a team.</p>
							<p>If you are looking for a frontend developer/designer, send me an email or give me a call.</p>
							<p><a href="tel:+64210425024">
								<div class="contact-icons align-text-center"><img id="phone-icon" class="contact-icon" src="images/phone.svg" alt="Phone"/></div> +64 21 042 5024
							</a></p>
							<p><a href="mailto:gbuxton1@gmail.com">
								<div class="contact-icons"><img id="email-icon" class="contact-icon" src="images/email.svg" alt="Email"/></div> gbuxton1@gmail.com
							</a>
							</p>
							<p></p>
							<br />
							<br />
						</div> 
						<div class="col-sm-2">
						</div>
					</div> <!-- row -->
				</div>
				<div class="col-md-6">
					<form name="contactform" method="post" action="contact.php">
							<div class="form-line">
							  <label for="first_name">First Name *</label>
							  <input  type="text" name="first_name" maxlength="50" size="30">
							</div>
							<div class="form-line">
							  <label for="last_name">Last Name *</label>
							  <input  type="text" name="last_name" maxlength="50" size="30">
							</div>
							<div class="form-line">
								<label for="email">Email*</label>
								<input  type="text" name="email" maxlength="80" size="30">
							</div>
							<div class="form-line">
								<label for="telephone">Phone</label>
								<input  type="text" name="telephone" maxlength="30" size="30">
							</div class="form-line">
							<div class="">
							  <label for="comments">Message*</label>
							  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
							</div>
							<div>
							  <input class="btn submit" type="submit" value="SEND">
							</div>
						</form>
				</div>
			</div><!-- row -->
		</div><!-- container -->	
	</main>
	<footer></footer>
	
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/tether.js"></script>
	<script src="https://unpkg.com/popper.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
