<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/header.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="menu-toggle" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlay"></div>
            <div class="container">
                <nav>
                    <h1 class="brand"><a href="body.html"><span>FirstAIL</span></a></h1>
                    <ul>
                        <li><a href="body.html">Home</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="feedback/index.php">Feedback</a></li>
						<li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
    </header>
 <div class="heading">
   <h1>CHOOSE YOUR SUBJECT</h1> 
 </div> 

<div class="main">

 <!--cards -->

<div class="card">

<div class="image">
   <img src="image/c++.jpg">
</div>
<div class="title">
 <h1>C++
</h1>
</div>
<div class="des">
 <p>ONLINE TEST</p>
<button onclick="window.location.href='subjects/C++.HTML'">START QUIZ</button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="image/Compiler.jpg">
</div>
<div class="title">
 <h1>Compiler Design</h1>
</div>
<div class="des">
 <p>ONLINE TEST</p>
<button onclick="window.location.href='subjects/cd.HTML'">START QUIZ</button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="image/coa.jpg">
</div>
<div class="title">
 <h1>Computer Organization</h1>
</div>
<div class="des">
 <p>ONLINE TEST</p>
<button onclick="window.location.href='subjects/coa.HTML'">START QUIZ</button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="image/networking.jpg">
</div>
<div class="title">
 <h1>Computer Networking</h1>
</div>
<div class="des">
 <p>ONLINE TEST</p>
<button onclick="window.location.href='subjects/compnet.HTML'">START QUIZ</button>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="image/dbms.jpg">
</div>
<div class="title">
 <h1>Database Management</h1>
</div>
<div class="des">
 <p>ONLINE TEST</p>
<button onclick="window.location.href='subjects/dbms.HTML'">START QUIZ</button>
</div>
</div>
<!--cards -->

<div class="card">

<div class="image">
   <img src="image/ds.jpg">
</div>
<div class="title">
 <h1>Data Structure</h1>
</div>
<div class="des">
 <p>ONLINE TEST</p>
<button onclick="window.location.href='subjects/ds.HTML'">START QUIZ</button>
</div>
</div>
<!--cards -->

<div class="card">

<div class="image">
   <img src="image/os.png">
</div>
<div class="title">
 <h1>Operating System</h1>
</div>
<div class="des">
 <p>ONLINE TEST</p>
<button onclick="window.location.href='subjects/os.HTML'">START QUIZ</button>

</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="image/web.png">
</div>
<div class="title">
 <h1>Web Development</h1>
</div>
<div class="des">
 <p>ONLINE TEST</p>
<button onclick="window.location.href='subjects/web dev.HTML'">START QUIZ</button>
</div>
</div>
<!--cards -->
</div>
</body>
</html>
</body>
<footer class="footer" style="background-color: orange;">      
    <p style="margin-top: 5px; margin-bottom: 10px;">
      <a href="about.html" class="flinks">About Us</a><span class="gap"> |</span>
      <a href="contact.html" class="flinks">Contact Us</a><span class="gap"> |</span>
      <a href="privacy.php" class="flinks">Privacy</a><span class="gap"> |</span>
      <a href="terms.php" class="flinks">Terms</a><span class="gap"> |</span>
      <a href="pricing.php" class="flinks">Pricing</a><span class="gap"> |</span>
      <a href="refund-policy.php" class="flinks">Refund Policy</a><span class="gap"> |</span>
      <a href="partner.php" class="flinks">Partner</a> 
      </p>
    <p>2020-21 &copy; FirstAIL Pvt Ltd. All rights reserved.</p>
    <img src="image/logo.png" title="FirstAIL Educate" alt="FirstAIL Logo" class="footer-image">
</footer> 
</html>