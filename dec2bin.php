<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Decimal To Binary</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
</head>
<body>
	
	<!-- Menu Bar Starts Here -->
	<div class="mb-5">
        <nav class="navbar navbar-dark navbar-expand-lg	bg-dark fixed-top">
            <a class="navbar-brand" href="index.php">Home</a>
			
			<!-- Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<!-- List -->
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="text2bin.php">Text->Binary</a></li>
					<li class="nav-item"><a class="nav-link" href="bin2text.php">Binary->Text</a></li>
					<li class="nav-item"><a class="nav-link" href="dec2bin.php">Decimal->Binary</a></li>
					<li class="nav-item"><a class="nav-link" href="bin2dec.php">Binary->Decimal</a></li>
					<li class="nav-item"><a class="nav-link" href="oct2bin.php">Octal->Binary</a></li>
					<li class="nav-item"><a class="nav-link" href="bin2oct.php">Binary->Octal</a></li>
					<li class="nav-item"><a class="nav-link" href="hex2bin.php">Hexadecimal->Binary</a></li>
					<li class="nav-item"><a class="nav-link" href="bin2hex.php">Binary->Hexadecimal</a></li>
				</ul>
			</div>
        </nav>
    </div>
	<!-- Menu Bar Ends Here -->

	<!-- Form Part Starts Here -->
	<div class="container" style="">
		<form action="" method="post">
			<h1><b>Decimal to Binary</b></h1>
			<textarea name="text" id="" cols="35" rows="10"><?php echo $_POST['text']; ?></textarea><br /> <br />
			<input type="submit" value="Convert" name="submit" /><br />
		</form>
		<br />
		<textarea class="" name="" id="" cols="35" rows="10"><?php
			if(isset($_POST['submit'])
			){
				$text=$_POST['text'];
				
				$bin=explode(" ",$text);
				
				foreach($bin as $char){
					echo str_pad(decbin($char),8,0,STR_PAD_LEFT)." ";
				}
			}
		?></textarea>
	</div>
	
	
	
	<!-- Comment Part Starts Here -->
    <div class="mt-5">
        <div class="container text-white">
            <div class="row" style="margin-top: 50px; margin:auto;">
                <div class="col-sm-6 col-sm-offset-3 form-container bg-success">
                    <h2>Feedback</h2>
                    <p>
                        Please provide your feedback below:
                    </p>
                    <form role="form" method="post" id="reused_form">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>How do you rate your overall experience?</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad"> Bad
                                    </label>

                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average"> Average
                                    </label>

                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="good"> Good
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments">
                                    Comments:</label>
                                <textarea class="form-control" type="textarea" name="comment" id="comments" placeholder="Your Comments" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="name">
                                    Your Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <!--div class="col-sm-6 form-group">
                                <label for="email">
                                    Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div-->
                        </div>

                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" name="comment_submit" class="btn btn-lg btn-warning btn-block">Post </button>
                            </div>
                        </div>

                    </form>
					
					<div>
						<?php
							if(isset($_POST['comment_submit']) && isset($_POST['comment'])  && isset($_POST['name'])
							){
								$myfile=fopen("uploads/feed.txt","a+") or die("Unable To Send Feedback");
								
								fwrite($myfile,"Name : ".$_POST['name']."\n");
								//fwrite($myfile,"Email : ".$_POST['email']."\n");
								fwrite($myfile,"Comments : ".$_POST['comment']."\n");
								fwrite($myfile,"Experience : ".$_POST['experience']."\n");
								
								fclose($myfile);
								
								echo "Thanks";
							}
						?>
					</div>
                </div>
            </div>
        </div>

    </div>
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>