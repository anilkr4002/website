<html>
    <head>
<style> 
    header {
  background-color: #020202;
  padding: 20px;
}

.header-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.logo-container img {
  height: 100px;
  width: 130px;
}
.hotel-name {
    text-align: center;
  font-size: 36px;
  font-weight: bold;
  margin: 0;
  text-transform: uppercase;
  color: gold;
 
  letter-spacing: 2px;
}



nav li {
  display: inline-block;
  margin: 0 10px;
}

nav li a {
 
  
  color: white;
  font-size: larger;
 

}

nav li a.active {
  background-color: white;
}

nav li a:hover {
  background-color: white;
}

.book-now {
  background-image: linear-gradient(to bottom right, gold, gold);
  color: #020202;
  font-size: x-large;
  padding:  30px;
  margin-left: 20px;
  border-radius: 5px;
 

}

footer {
  background-color: #000;
  color: #fff;
}

.footer-content {
  display: flex;
  justify-content: space-between;
  padding: 50px;
  background-color: #000;
  color: #fff;
}

.contact-info, .address, .social-media {
  width: 42%;
}

.contact-info h3, .address h3, .social-media h3 {
  font-size: 26px;
  margin-bottom: 15px;
}

.contact-info p, .address p {
  font-size: 20px;
  margin: 0;
  line-height: 1.5;
}

.social-media ul {
  list-style: none;
 
  display: flex;
  justify-content: space-between;
}

.social-media a {
  color: #fff;
  font-size: 18px;
  text-decoration: none;
  transition: color 0.2s ease-in-out;
}

.social-media a:hover {
  color: #ccc;
}
</style>
</head>

<header>
  <div class="header-container">
    <div class="logo-container">
        <img src="https://thumbs.dreamstime.com/b/initial-circle-ak-letter-modern-typography-vector-template-creative-abstract-logo-design-173826139.jpg" alt="AK">
      </div>
    <h1 class="hotel-name"> &emsp;&emsp; AK HOTEL</h1>
    <nav>
      <ul>
        <li><a href="hotel2.html"> HOME</a></li>
        <li><a href="review.html">REVIEW</a></li>
        
    
        <li><a href="book.html" class="book-now">BOOK NOW</a></li>
      </ul>
       
    </nav>
  </div>
</header>
<body>
  <!DOCTYPE html>
  <html>
    <head>
      <title>Hotel Booking Confirmation</title>
     
    
  <body> 
   
    <h2> CONGRATULATIONS ! </h2>

    <strong> YOUR BOOKING IS CONFIRMED <br> <br> <br>
<?php
      
    
  
    /*if ($_SERVER["REQUEST_METHOD"] == "POST") 
      // Get the form data
      $name = $_POST["name"];
      $Password = $_POST["Password"];
      $checkdate = $_POST["check-in-date"];
      $numberofdays = $_POST["numberofdays"];
      $numberofACrooms = $_POST["number-ofAC-rooms"];
      $Total = $Total
      
      /*$data = "Name: $name\nPassword: $Password\ncheck in date: $checkdate\nnumber of days of stay: $numberofdays\n Number of AC Rooms:$$numberofACroom\n Total amount : $Total";
    
      // Open the file for appending
      $file = "data.txt";
      $handle = fopen($file, "a");
    
      // Write the form data to the file
      fwrite($handle, $data);
    
      // Close the file
      fclose($handle); */
      
      
      
/*Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = $_POST["name"];
  $password = $_POST["password"];
  $check_in_date = $_POST["check_in_date"];
  $num_rooms = $_POST["number-of-rooms"];
  

  // Create a string with the form data
  $form_data = "Name: $name\nPassword: $password\nCheck-in Date: $check_in_date\nNumber of Rooms: $num_rooms\nTotal Amount: $total_amount\n";

  // Create a unique filename for this person based on their name
  $filename = "booking_data_" . strtolower(str_replace(" ", "_", $name)) . ".txt";

  // Open the file for appending
  $handle = fopen($filename, "a");

  // Write the form data to the file
  fwrite($handle, $form_data);

  // Close the file
  fclose($handle);

  // Redirect the user back to the booking page
  header("Location: booking.php?status=success");
  exit();
}*/ 
?>
<?php /*
<h1>Booking Confirmation</h1>
    <p>Thank you for booking with us, </p>
      
    <h2>Check-In Details</h2> 
    
    <p><strong>Check-In Date:</strong> <?php echo $name ?> </p>
    <p><strong>Number of days of stay :</strong> <?php echo $numberofdays ?></p>
    <p><strong>Number of Rooms:</strong> <?php echo $num_rooms ?></p>
    <p><strong> AC Rooms :</strong> <?php echo $numberofACrooms ?></p>
    <p><strong>Total Amount:</strong> <?php echo $Total  ?></p>
    <p> <strong> Password:</strong> <?php echo $_POST['Password'] ?></p>*/

    
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Get the form data
      $name = $_POST["name"];
      $password = $_POST["password"];
      $check_in = $_POST["check-in-date"];
      $num_days = $_POST["numberofdays"];
      $num_rooms = $_POST["number-of-rooms"];
      $numACrooms = $_POST["number-ofAC-rooms"] ; 
    
      // Format the data as a string
      $total_amount = $num_days * $numACrooms * 5000 + $num_days*($num_rooms-$numACrooms)*3000;
      $data = "<tr><td>Name:</td><td>$name</td></tr>\n";
      $data .= "<tr><td>Password:</td><td>$password</td></tr>\n";
      $data .= "<tr><td>Check-in date:</td><td>$check_in</td></tr>\n";
      $data .= "<tr><td>Number of days:</td><td>$num_days</td></tr>\n";
      $data .= "<tr><td>Number of rooms:</td><td>$num_rooms</td></tr>\n";
      $data .= "<tr><td>Total amount:</td><td>$total_amount</td></tr>\n";
    
      // Open the file for appending and write the data to it
      $filename = "booking_data_" . strtolower(str_replace(" ", "_", $name)) . ".txt";
      $handle = fopen($filename, "a");
      fwrite($handle, $data);
      fclose($handle);
      
      // Display the saved data in an HTML table to the user
      echo "<table border=\"1\">\n" . $data . "</table>";
      exit();
    }
    ?>
    

    
    
    
    
  </body>
</html>

  </body>
      <footer>
        <div class="footer-content">
          <div class="contact-info">
            <h3>Contact Us</h3>
            <p>Phone: 8250298373</p>
            <p>Email: AK47@ gmail.com</p>
          </div>
          <div class="address">
            <h3>Address</h3>
            <p>Sector 17 Royal Place </p>
            <p>Mumbai </p>
          </div>
          <div class="social-media">
            <h3> &emsp;&emsp;&emsp;&emsp;&emsp; Follow Us</h3>
            <ul>
              <li><a href="https://www.bing.com/ck/a?!&&p=30f263c8e7c1e007JmltdHM9MTY4MjU1MzYwMCZpZ3VpZD0zMDE0ZjBkYy1iZjBhLTY0ZWEtMjgzOC1lMmM0YmUwYzY1NzcmaW5zaWQ9NTIxNg&ptn=3&hsh=3&fclid=3014f0dc-bf0a-64ea-2838-e2c4be0c6577&psq=marriott+facebook+page&u=a1aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL01hcnJpb3R0Lw&ntb=1">Facebook</a></li>
              <li><a href="https://www.bing.com/ck/a?!&&p=4bacfa0f0ecae801JmltdHM9MTY4MjU1MzYwMCZpZ3VpZD0zMDE0ZjBkYy1iZjBhLTY0ZWEtMjgzOC1lMmM0YmUwYzY1NzcmaW5zaWQ9NTE5NA&ptn=3&hsh=3&fclid=3014f0dc-bf0a-64ea-2838-e2c4be0c6577&psq=marriott+twitter+page&u=a1aHR0cHM6Ly90d2l0dGVyLmNvbS9NYXJyaW90dA&ntb=1">Twitter</a></li>
              <li><a href="https://www.bing.com/ck/a?!&&p=1033581bdb1e0cceJmltdHM9MTY4MjU1MzYwMCZpZ3VpZD0zMDE0ZjBkYy1iZjBhLTY0ZWEtMjgzOC1lMmM0YmUwYzY1NzcmaW5zaWQ9NTE5OA&ptn=3&hsh=3&fclid=3014f0dc-bf0a-64ea-2838-e2c4be0c6577&psq=marriott+instagram+page&u=a1aHR0cHM6Ly93d3cuaW5zdGFncmFtLmNvbS9tYXJyaW90dGhvdGVscy8&ntb=1">Instagram</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </body>
  </html>

</html>
