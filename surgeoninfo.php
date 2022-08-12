<?php
 
    
		
	
		
        $conn = mysqli_connect("sql1.njit.edu", "jbb26", "SQLpassword123$", "jbb26");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $employeeNumber =  $_REQUEST['employeeNumber'];
        $Name = $_REQUEST['Name'];
        $ssn =  $_REQUEST['ssn'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$phoneNumber = $_REQUEST['phoneNumber'];
		$contractNum = $_REQUEST['contractNum'];
		
		
		
	
		
	
        
        $sql1 = "INSERT INTO surgeonTable VALUES ('$employeeNumber',
           '$ssn','$gender','$address','$phoneNumber', '$contractNum')";
			
		
		 
		
        if(mysqli_query($conn, $sql1)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
			
		
		
		
		
		
		
		
		
		
        
        // Close connection
        mysqli_close($conn);
        ?>