<?php
 
    
		
	
		
        $conn = mysqli_connect("sql1.njit.edu", "jbb26", "SQLpassword123$", "jbb26");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $medCode =  $_REQUEST['medCode'];
        $medName = $_REQUEST['medName'];
        $assignedTo =  $_REQUEST['assignedTo'];
		$assignedBy =  $_REQUEST['assignedBy'];
        $quantityOnHand = $_REQUEST['quantityOnHand'];
		$quantityOnOrder = $_REQUEST['quantityOnOrder'];
		
	
		
	
        
        $sql1 = "INSERT INTO medicationTable VALUES ('$medCode',
            '$medName','$assignedTo','$assignedBy','$quantityOnHand', '$quantityOnOrder')";
			
		
		 
		
        if(mysqli_query($conn, $sql1)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$admissionNumber\n $dateAdmitted\n "
                . "$nursingUnit\n $room\n $bedNumber\n ");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
			
		
		
		
		
		
		
		
		
		
        
        // Close connection
        mysqli_close($conn);
        ?>