<?php 
	 
		$SendFormTo = 'chris.emmerson1@gmail.com'; 
		$EmailSubject = 'Request Form'; 
 
		$Name = $_POST['Name']; 
		$Address = $_POST['Address']; 
		$City = $_POST['City']; 
		$State = $_POST['State']; 
		$Zip = $_POST['Zip']; 
		$Phone = $_POST['Phone']; 
		$Email = $_POST['Email']; 
		$Country = $_POST['Country']; 
		$Comments = $_POST['Comments']; 
	 
		$body = " 
	 
		Name = $Name 
		Address = $Address 
		City = $City 
		State = $State 
		Zip = $Zip 
		Phone = $Phone 
		Email = $Email  
		Country = $Country 
		Comments = $Comments 
	 
		"; 
	 
		$headers = "From: $Email"; 
		$success = mail($SendFormTo, $EmailSubject, $body, $headers); 
	 
		header( "Location: http://mywebsite.com/mainsite.html" ); 
		?>