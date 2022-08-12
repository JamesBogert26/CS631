<?php
 
    
		
	
		
        $conn = mysqli_connect("sql1.njit.edu", "jbb26", "SQLpassword123$", "jbb26");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $surgeryNum =  $_REQUEST['surgeryNum'];
        $scheduledDate = $_REQUEST['scheduledDate'];
        $location =  $_REQUEST['location'];
		$assignedBy =  $_REQUEST['assignedBy'];
        $patientNumber = $_REQUEST['patientNumber'];
		$surgeonNumber = $_REQUEST['surgeonNumber'];
		
	
		
	
        
        $sql1 = "INSERT INTO surgerySchedule VALUES ('$surgeryNum',
            '$scheduledDate','$location','$patientNumber','$surgeonNumber')";
			
		
		 
		
        if(mysqli_query($conn, $sql1)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$surgeryNum\n $$scheduledDate\n "
                . "$location\n $patientNumber\n $surgeonNumber\n ");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
			
		
		
		
		
		
		
		
		
		
        
        // Close connection
        mysqli_close($conn);
        ?>