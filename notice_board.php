<?php
$servername = "localhost";
$username = "root";
$password = "autoset";
$dbname = "portfolio";

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>NOTICE - > Daiana's Portfolio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="css/normalize.css" />  
		<link rel="stylesheet" href="css/board.css"/>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.html">Daiana's Portfolio</a></h1>
								<p>This page is portfolio page</p>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li>
										<a href="#">Dropdown</a>
										<ul>
											<li><a href="#">Project</a></li>
											<li><a href="#">Developments</a></li>
											<li>
												<a href="#">Anyone</a>
												<ul>
													<li><a href="#">Web Game</a></li>
													<li><a href="#">Empty</a></li>
													<li><a href="#">Empty</a></li>
													<li><a href="#">Empty</a></li>
													<li><a href="#">Empty</a></li>
												</ul>
											</li>
											<li><a href="notice_board.php">Notice board</a></li>
										</ul>
									</li>
									<li><a href="left-sidebar.html">Project</a></li>
                  <li class="current"><a href="index.html">Home</a></li>
									<li><a href="right-sidebar.html">Developments</a></li>
									<li><a href="no-sidebar.html">Anyone</a></li>
								</ul>
							</nav>

					</div>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Notice Board</div>
					<div id="main" class="container">

						<!-- Content -->
							<article class="boardArticle" id="boardList"> 
							 <table >                                                      
                <caption style="font-size : 150%;margin-bottom:3%" class="readHide"><b>Notice</b></caption>
                
                <thead>
                <tr style="color:#888">
                 <th scope="col" class='no'>NO</th>
                 <th scope="col" class='subject'>TITLE</th>
                 <th scope="col" class='author'>AUTHOR</th>
                 <th scope="col" class='date'>DATE</th>
                 <th scope="col" class='hit'>HIT</th>
                </tr>
                </thead>
				        <tbody>                                                    
                                                                 
					<?php                                                  
                                                                 
						$sql = 'select number,subject,name,writetime,hit from notice order by number desc';
                                                                 
						$result = $conn->query($sql);                          
                                                                 
						while($row = $result->fetch_assoc())                 
                                                                 
						{                                                    
                                                                 
							$datetime = explode(' ', $row['writetime']);          
                                                                 
							$date = $datetime[0];                              
                                                                 
							$time = $datetime[1];                              
                                                                 
							if($date == Date('Y-m-d'))                         
                                                                 
								$row['writetime'] = $time;                          
                                                                 
							else                                               
                                                                 
								$row['writetime'] = $date;                          
                                                                 
					 
					 echo " <tr><td class='no' >" .$row['number']." </td>
					            <td class='subject'><a href=view.php?number=".$row['number']." style='text-decoration:none;'>" .$row['subject']. "</td>
					            <td class='author'>" .$row['name']. "</td>
					            <td class='date'>" .$row['writetime']. "</td>
					            <td class='hit'>" .$row['hit']. "</td>
					        </tr> ";                                                 
                                                           
						}                                                    
                                                                 
					?>                                                     
                                                                 
			</tbody>
				  
            <tr class='none'><td colspan=5 style="border-bottom: 0px"><p align=center><a href='write.php' id="write"style="text-decoration:none">WRITE</p></td></tr>
			

               </table> 
							</article> 

								</div>
							</div>

					</div>
				</div>

		<!-- Footer -->
			<div id="footer-wrapper" class="wrapper">
				<div class="title">The Rest Of It</div>
				<div id="footer" class="container">
					<header class="style1">
						<h2>Thank you for coming to my Portfolio page!</h2>
						<p>
							Here is my Github and Linkedin address.<br />
							Click on the links below for more information<br>
							If you have a message that you want to tell me, just send me a message at the address below.<br>
						</p>
					</header>
					<hr />
					<div class="row 150%">
						<div class="6u 12u(mobile)">

								<!-- Contact Form -->
									<section>
										<form method="post" action="#">
											<div class="row 50%">
												<div class="6u 12u(mobile)">
													<input type="text" name="name" id="contact-name" placeholder="Name" />
												</div>
												<div class="6u 12u(mobile)">
													<input type="text" name="email" id="contact-email" placeholder="Email" />
												</div>
											</div>
											<div class="row 50%">
												<div class="12u">
													<textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
												</div>
											</div>
											<div class="row">
												<div class="12u">
													<ul class="actions">
														<li><input type="submit" class="style1" value="Send" /></li>
														<li><input type="reset" class="style2" value="Reset" /></li>
													</ul>
												</div>
											</div>
										</form>
									</section>

							</div>
							<div class="6u 12u(mobile)">

								<!-- Contact -->
								<section class="feature-list small">
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-home">Mailing Address</h3>
												<p>
													Kookmin University,<br />
													Jungrung-ro 77, Seongbuk,<br />
													Seoul, Korea 02707
												</p>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-comment">Social</h3>
												<p>
													<a href="https://github.com/daianaludice" style="text-decoration:none;">github.com/daianaludice</a><br />
													<a href="https://linkedin.com/in/soyoung-lee-63070b152" style="text-decoration:none;">linkedin.com/in/soyoung-lee-63070b152</a><br />
												</p>
											</section>
										</div>
									</div>
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-envelope">Email</h3>
												<p>
													<a href="#" style="text-decoration:none;">daianaludice@naver.com</a>
												</p>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-phone">Phone</h3>
												<p>
													(+82) 010-2901-9252
												</p>
											</section>
										</div>
									</div>
								</section>

						</div>
					</div>
					<hr />
				</div>
				<div id="copyright">
					<ul>
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net" style="text-decoration:none;">HTML5 UP</a></li>
					</ul>
				</div>
			</div>

	</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
    
 