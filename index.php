<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

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
                    <li class="nav-item">
						<a href="text2bin.php" class="nav-link">Text</a>
					</li>
                    <li class="nav-item">
						<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Decimal</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="dec2bin.php">Decimal To Binary</a>
							<a class="dropdown-item" href="bin2dec.php">Binary To Decimal</a>
						</div>
					</li>
                    <li class="nav-item">
						<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Octal</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="oct2bin.php">Octal To Binary</a>
							<a class="dropdown-item" href="bin2oct.php">Binary To Octal</a>
						</div>
					</li>
                    <li class="nav-item">
						<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Hexadecimal</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="hex2bin.php">Hexadecimal To Binary</a>
							<a class="dropdown-item" href="bin2hex.php">Binary To Hexadecimal</a>
						</div>
					</li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Menu Bar Ends Here -->

    <!-- Article Part Starts Here  -->
    <div class="container my-5 py-5">
        <p>A binary code represents text, computer processor instructions, or any other data using a two-symbol system. The two-symbol system used is often "0" and "1" from the binary number system. The binary code assigns a pattern of binary digits, also known as bits, to each character, instruction, etc. For example, a binary string of eight bits can represent any of 256 possible values and can, therefore, represent a wide variety of different items.
		</p><br />
		
		<p>
			In computing and telecommunications, binary codes are used for various methods of encoding data, such as character strings, into bit strings. Those methods may use fixed-width or variable-width strings. In a fixed-width binary code, each letter, digit, or other character is represented by a bit string of the same length; that bit string, interpreted as a binary number, is usually displayed in code tables in octal, decimal or hexadecimal notation. There are many character sets and many character encodings for them.
		</p>
		<br />
		
		<p>
			A bit string, interpreted as a binary number, can be translated into a decimal number. For example, the lower case a, if represented by the bit string 01100001 (as it is in the standard ASCII code), can also be represented as the decimal number "97".
		</p>
        
        <p>
			Binary Magic <a href="text2bin.php">Next Page.</a>
		</p>
    </div>

    <!-- Comment Part Starts Here -->
    <div class="">
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