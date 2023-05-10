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

    <body>
    <?php
    /*
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Get the name and password from the form
	$name = $_POST['name'];
	$password = $_POST['password'];

	// Load the booking details from the file
	$filename = 'data.txt';
	$file = file_get_contents($filename);

	// Search for the name and password in the file
	$search_string = "Name: $name\nPassword: $password\n";
	$pos = strpos($file, $search_string);
	if ($pos !== false) {
		// Extract the booking details from the file
		$details = substr($file, $pos);

		// Output the booking details
		echo "<h1>Booking Details</h1>";
		echo nl2br($details);
	} else {
		// Output an error message if the name and password are not correct
		echo "<h1>Error</h1>";
		echo "Invalid name or password.";
	}
}*/

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = $_POST["name"];
  $password = $_POST["password"];

  // Check if the name and password match the saved data
  $filename = "booking_data_" . strtolower(str_replace(" ", "_", $name)) . ".txt";
  if (file_exists($filename)) {
    $handle = fopen($filename, "r");
    $saved_data = fread($handle, filesize($filename));
    fclose($handle);

    if (strpos($saved_data, "Password: $password") !== false) {
      // Display the saved data to the user
      echo nl2br($saved_data);
      exit();
    }
  }

  // If the name and password don't match, display an error message
  echo "Name and/or password not found.";
  exit();
}


?> 

    </body>