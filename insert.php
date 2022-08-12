
        <?php
 
    
		
	
		
        $conn = mysqli_connect("sql1.njit.edu", "jbb26", "SQLpassword123$", "jbb26");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $admissionNumber =  $_REQUEST['admissionNumber'];
        $dateAdmitted = $_REQUEST['dateAdmitted'];
        $nursingUnit =  $_REQUEST['nursingUnit'];
		$room =  $_REQUEST['room'];
        $bedNumber = $_REQUEST['bedNumber'];
		
		$patientNumber = $_REQUEST['patientNumber'];
		$name = $_REQUEST['name'];
		$ssn = $_REQUEST['ssn'];
		$address = $_REQUEST['address'];
		$gender = $_REQUEST['gender'];
		$primaryCarePhys = $_REQUEST['primaryCarePhys'];
		$nurse = $_REQUEST['nurse'];
		$dateOfBirth = $_REQUEST['dateOfBirth'];
		$patientAllergies = $_REQUEST['patientAllergies'];
		
		$iname = $_REQUEST['iname'];
		$icode = $_REQUEST['icode'];
		$requiresInPatient = '1';
		

		$HDLlevels = $_REQUEST['HDL'];
		$LDLlevels = $_REQUEST['LDL'];
		$Triglycerides = $_REQUEST['Triglycerides'];
		
		
		
		
	
        
        $sql1 = "INSERT INTO admitPatient VALUES ('$admissionNumber',
            '$dateAdmitted','$nursingUnit','$room','$bedNumber')";
			
		$sql2 = "INSERT INTO patientTable VALUES ('$patientNumber',
            '$name','$ssn','$address','$primaryCarePhys','$nurse', '$patientAllergies','$gender','$dateOfBirth')";
			
		$sql3 = "INSERT INTO illnessTable VALUES ('$icode','$iname','$requiresInPatient')";
		
		$sql4 = "INSERT INTO cholesterolTable VALUES ('$admissionNumber','$HDLlevels','$LDLlevels','$Triglycerides','$dateAdmitted','$patientNumber')";
		
		 
		
        if(mysqli_query($conn, $sql1)&&mysqli_query($conn, $sql2)&&mysqli_query($conn, $sql3)&&mysqli_query($conn, $sql4)){
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
