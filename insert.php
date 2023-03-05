<?php
					
    $conn = mysqli_connect("127.0.0.1", "root", "", "registration_database");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                .mysqli_connect_error());
        }
         
        // Taking all values from the form data(input)
		if(isset($_POST['submit']))
        {
            
        $email = $_POST['email'];
		$password = $_POST['psw'];
		}

         
        // Performing insert query execution
        // here our table name is registered_user
        $sql = "INSERT INTO registered_users (email,psw)VALUES
		('$email','$password')";
     
        if(mysqli_query($conn, $sql))
        {
            
 
        } else{
            echo "ERROR: Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
?>