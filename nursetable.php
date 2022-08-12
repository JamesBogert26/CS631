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
		$salary =  $_REQUEST['salary'];
        $skills = $_REQUEST['skills'];
		$numPatientsAssigned = $_REQUEST['numPatientsAssigned'];
		$gender = $_REQUEST['gender'];
		$Address = $_REQUEST['Address'];
		$phone = $_REQUEST['phone'];
		$grade = $_REQUEST['grade'];
		$year = $_REQUEST['year'];
		
		
	
		
	
        
        $sql1 = "INSERT INTO nurseTable VALUES ('$employeeNumber',
            '$Name','$ssn','$salary','$skills','$numPatientsAssigned','$gender','$Address','$phone','$grade','$year')";
			
		
		 
		
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