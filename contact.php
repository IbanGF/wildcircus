<?php
$current = 'contact';
require 'inc/header.php';

$sysMsg = '';
if (!empty($_POST['submit'])) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$from = 'From: ueqiban';
	$to = 'ueqiban@gmail.com';
	$subject = $_POST['subject'];

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";		 
        if (mail ($to, $subject, $body, $from)) { 
        	$sysMsg = 'Your message has been sent!';
        } else {
        	$sysMsg = 'A problem occurred during the delivery of your message!';
        }
    } else {
        $sysMsg = 'You need to fill in all required fields!!';
    }
}
?>

		<div class="container">
			<div class="contact">
				<h1 class="small_shadow">Want the Wild Circus in your area?</h1>
				<form method="post" action="">
				    <?php if (!empty($sysMsg)): ?><span class="centered"><pre class="sysMsg"><?= $sysMsg; ?></pre></span><?php endif; ?> 
				    <label for="name">Name</label><br />
				    <input name="name" type="text" placeholder="Type your name" /><br />
				    <br />
				    <label for="email">Email</label><br />
				    <input name="email" type="email" placeholder="Type your e-mail" /><br />
				    <br />
				    <label for="subject">Subject</label><br />
				    <input name="subject" type="text" placeholder="Type the subject" /><br />
				    <br />
				    <label for="message">Message</label><br />
				    <textarea name="message" type="text" placeholder="Type your message"></textarea><br />
				    
				    <span class="centered"><input id="submit" name="submit" type="submit" value="Submit" /></span>
				        
				</form>
			</div>
		</div>
	</div>

	<footer></footer>
	<script>
		$(document).ready(function(){
	      $(".rideau_gauche").toggleClass('rideau_gauche_extends');
	      $(".rideau_droit").toggleClass('rideau_droit_extends');
	    	$(".rideau_gauche,.rideau_droit").on("click", function(){
			    $(".rideau_gauche").toggleClass('rideau_gauche_extends');
			    $(".rideau_droit").toggleClass('rideau_droit_extends');
		  });
		});
	</script>
</body>
</html>