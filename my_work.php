<?php
include ('config.php');

if(isset($_POST['submit']))
{
  $cname=$_POST["name"];
  $gmail=$_POST["email"];
  $phone=$_POST["phone"];
  $city=$_POST["City"];
  $message=$_POST["message"];

  $sql1="INSERT INTO contact(name,email,phone,City,message)
  VALUES('$cname','$gmail','$phone','$city','$message')";

  if($conn->query($sql1)){
    echo("successfull");
  }
  else
   {
    echo "Error". $conn->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <title>DAWASA</title>
  <link rel="stylesheet" href="my style.css">

  
</head>
<body>
  
<nav class="menu">
            <ul>
              <li><a href="">Home</a></li>
              <li><a href="C:\xampp\htdocs\my work\plan11.html">Healthcare Plans</a></li>
              <li><a href="">Payment Method</a></li>
              <li><a href="">Create Account</a></li>
              <li><a href="">Login</a></li>
              <li><a href="Career.html">Career</a></li>
              <li><a href="">About Us</a></li>
              <li><a href="Feedback.html">FAQ</a></li>
            </ul>
          </nav>
          
    <header>
        <div class="container">
          <h1>DAWASA Health Care </h1>
     
   
      </header>

      <section id="welcome">
        <div class="container">
          <h2>Welcome to our Company</h2>
          <p>We provide high-quality services for your business.</p>
          <p>How can we help?</p>
          <a href="#contact" class="btn">Enter your details</a>
          <section id="contact">
            <div class="container">
              <h2>Contact Us</h2>
              <form action="#" method="POST">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="tel" id="phone" name="phone" required>
                </div>
                <label for="City">City</label>
            <select id="City" name="City">
              <option value="Gampaha">Gampaha</option>
              <option value="Kaduwela">Kaduwela</option>
              <option value="Colombo">Colombo</option>
              <option value="Negombo">Negombo</option>
              <option value="kandy">kandy</option>
          
            </select>
            <br>
            <br>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea id="message" name="message" required></textarea>
                </div>
                <div class="submit_button">
                <input type="submit" name='submit' value="submit">
                </div>
              </form>
            </div>
          </section>
        </div>
      </section>
      <section id="about">
        <div class="container">
          <h2>About Us</h2>
          <p>DAWASA is a healthcare insurance management system. It's a user-friendly, easy-to-use website that 
            allows users to interact with it without any hassle. The website provides a number of capabilities 
            regarding health insurance services.</p>
        </div>
      </section>

  
<section id="email,call">
    <div class="container">
        <div class="e_icon"><i class="fa fa-envelope" aria-hidden="true"></i> </div>

          <p>Contact us via email: <a href="mailto:dawasahealth@gmail.com">dawasahealth@gmail.com</a></p>
       
        <p class="call_icon"> Call support <a href="tel:+94762884825">+94762884825</a></p>

    </div>
</section>
<!--Footer-->
<footer>
            <div class="container">
              <div class="footer-content">
                <div class="footer-column">
                  <h5 class="con04">Contact Us</h5>
                  <ul>
                    <li>DAWASA Insurance Center,</li>
                    <li>No.57, Wellawatta Road,</li>
                    <li>Colombo 06.</li><br>
                    <li>dawasa67@gamil.com</li>
                    <li>Tel. 011 - 225 7972</li><br>
                    <li>Hot Line</li>
                    <li>24 * 7 </li>
                    <li>1304</li>
                  </ul>
                </div>
                <div class="footer-column">
                  <h5 class="con04">Branches,</h5>
                  <ul>
                    <li>Piliyandala</li>
                    <li>Gampha</li>
                    <li>Wadduwa</li>
                    <li>Aturugiriya</li>
                    <li>Jaffna</li>
                    <li>Kandy</li>
                    <li>Anuradapura</li>
                  </ul>
                </div>
                <div class="footer-column">
                  <h5 class="con04">Quick Links</h5>
                  <ul>
                    <li><a href="Feedback.html">Feedback</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="Terms & condition.html">Terms of Service</a></li>
                  </ul>
                </div>
              </div>
              <hr class="horizontal-line">
            </div>
          </footer>

</body>
</html>