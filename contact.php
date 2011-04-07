<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <title>Ziming Hideout | Contact</title>
  <meta name="robots" content="noindex">
  <?php require_once('includes/site-head-boilerplate.html') ?> 
</head>
<body id="contact">
  <?php require_once('includes/site-header.html') ?>
  <?php require_once('includes/site-nav.html') ?>
  <div id="main" role="main">
    <h2>Contact Me</h2>
    <p>
	Had a question for me? Feel free to contact me in the form below. I will get in touch
	with you shortly.
	</p>
	<form action="." method="post">
	
	<label for="name">Name</label>
	<input id="name" type="text" title="Type your name" name="name">
	
	<label for="email">Email</label>
	<input id="email" type="email" title="Type your email" name="email" placeholder="username@domain.com">
	
	<label for="message">Message</label>
	<textarea id="message" title="Type your message" name="message"></textarea>
	
	<input type="submit" value="Submit">
	</form>
  </div><?php # End main ?>
  <?php # <?php require_once('includes/site-footer.html') ?>
  <?php require_once('includes/site-scripts.html') ?>
  <script src="css/libs/formalize/javascripts/jquery.formalize.min.js"></script>
</body>
</html>