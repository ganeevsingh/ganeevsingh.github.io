<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Website Contact Form'; 
		$to = 'ganeevs@g.ucla.edu'; 
		$subject = 'Message from Contact Demo ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ganeev Singh - Entrepreneur and Aspiring Physician</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/mycustom.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>


<body>
<!--nav class="navbar navbar-inverse navbar-static-top"> 
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-example-1" aria-expanded="false">
				<span class="sr-only">Toggle nav</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">Ganeev Singh</a>
			</div>
		<div class="collapse navbar-collapse" id="nav-example-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href='#about'>About Me</a><li>
				<li><a href='#post'>Posts</a><li>
				<li><a href='#publications'>Publications</a><li>
				<li><a href='/file/CV.pdf'>Resume/CV</a><li>
				<li><a href='#contact'>Contact</a><li>
			</ul>
		</div>
	</div>
</nav>

Style =

.navbar {
	margin-bottom: 0;
}

.navbar-inverse {
	background: #2E2F31;
	border: 0;
	position: fixed;
	width: 100%
}
.navbar-inverse .navbar-nav li a {
	color: #f7f7f7;
	font-size: 16px;
}
.navbar-inverse .navbar-nav li a:hover {
	background: blue;
}

-->
    <div class="main" id="main">
        <div class="blanket">
            <div class="container" align="center">
                 <img class="img-circle" src="images/me1.jpg">
                 <div>
                     <h3 class="title" style="display: inline">Ganeev Singh</h3>
                </div>
				<br>
                <h5>Associate Consultant &middot; Entrepreneur &middot; Aspiring Physician</h5>
            </div>
        </div>
    </div>

<div class="temp">
	<h5>&#9733; This website is a continuous work in progress as I learn how to code in Summer 2017 &#9733;</h5>
	<p>Sure I could have made a beautiful WordPress website in minutes, but where is the fun in that? </p>
	<br>
</div>
	<div id="about">
		<div class="container">
			<h3 class="title">About Me</h3>
            <br>
			<p>Hey! I'm Ganeev. For most of my life, I have been fascinated by the field of medicine and my last two years of college allowed me to explore the business sector as well. After graduating with honors from <a href="http://www.ucla.edu/">UCLA</a>, I moved up to San Francisco to work as an Associate Consultant at <a href="http://www.triageconsulting.com/">Triage Consulting Group</a>. Next year, I will be applying to a joint MD/MBA program with a matriculation date of Fall 2019. My overall career goal is to become a physician who runs healthcare and technology entrepreneurship ventures on the side that benefit people of limited means who have nowhere to turn to for help.  I am also interested in higher level hospital management, running multiple hospitals one day and impacting lives in my community and beyond.</p>
	</div>
	<div id="post">
		<div class="container">
			<h3 class="title">Posts</h3>
            <br>
			<p> By imparting my knowledge to you through writing, I hope you don't make the same mistakes as I have! </p>
	</div>
	<div id="publications">
		<div class="container">
			<h3 class="title">Publications</h3>
            <br>
			<p> I conducted extensive neuroscience research from November 2014 to June 2017. My research focused mostly on optogenetics and opioids.</p>
			<br>
			<p> I have contributed to two co-authored publications. </p>
	</div>
	<br>
        <div class="jumbotron jumbotron-job" align="center" style="background: #2D2D2D;color: #FFF;padding-bottom: 30px" id="contact">
            <div class="container" align="center">
                <h2 class="wow fadeInUp white-text title upper">Get <span class="wow fadeInUp white-text title upper" data-wow-delay="250ms">In</span> <span class="wow fadeInUp white-text title upper" data-wow-delay="500ms">Touch</span></h2>
                <hr class="wow zoomIn" data-wow-delay="750ms" style="width: 100px;border: 2px solid #2D2D2D">
                <h5>Shoot me an email at <u><a style="color: #FFF" href="mailto:ganeevs@ucla.edu">ganeevs@ucla.edu</a></u>!<!--or use the form below!--></h5>
                <br>
				<form class="form-horizontal" role="form" method="post" action="index.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
				</form> 
				<div style="width: 100%" align="center">
                    <h1><a target="_blank" href="http://www.linkedin.com/in/ganeevsingh"><i class="fa fa-linkedin wow fadeInUp white-text"></i></a> <a target="_blank" href="http://www.facebook.com/singh.ganeev"><i class="fa fa-facebook wow fadeInUp white-text" data-wow-delay="500ms"></i></a> <a target="_blank" href="http://www.instagram.com/ganeevil"><i class="fa fa-instagram wow fadeInUp white-text"></i></a></h1>
                </div>
                <br>
				<a target="_blank" href="/file/CV.pdf" style="color: #FFF"><h6>View my resume/CV <i class="fa fa-angle-right"></i></h6></a>
                <script>
                ! function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0],
                        p = 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + '://platform.twitter.com/widgets.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, 'script', 'twitter-wjs');
                </script>
            </div>
        </div>
	<div class="copyright">
		<p> Updated 7.9.17</p>
		<p> &copy; 2017 Ganeev Singh &middot; All rights reserved. </p>
	</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
</body>

</html>