<?php
   header("content-type: text/xml");
   echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
    
    //variables
    $campaign_number;
    $connection;
    $host  = "b145c0ee1085beccdede0fc7814c2917b3042fc5.rackspaceclouddb.com";
    //$host  = "rackspaceclouddb.com";
    $name = "api-usefultools";
    $user = "usefultools";
    $password = "Brickell305!";
    $sql;
    
    
    
    //get campaign number from the call
    $campaign_number = $_REQUEST['number'];
    
    //echo $campaign_number;
    
    //build query to store important values
    $dtmf = generate_random_dtmf();
    $sql = "Insert into usefultools_call (campaign_number, dtmf) values('{$campaign_number}', '{$dtmf}')";
    //$sql = "Insert into usefultools_call (campaign_number,dtmf) values(12674322577,12345)";
    
    //store campaign number/dtmf into DB
    $connection=mysqli_connect($host,$user,$password,$name);

	// Check connection
	if (mysqli_connect_errno($connection)){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}else {
		//inert known values into db
		mysqli_query($connection,$sql);
	}
	
	//close the DB connection
	mysqli_close($connection);
    
    //end storage
    
    
    
    
    //generate random dtmf
    function generate_random_dtmf(){
    	$dtmf = rand(10000,99999);
		return $dtmf;
	}
    
?>
<!--<Response>
    <Dial callerId="415-799-4622">
        <Number sendDigits="ww<?php echo $_REQUEST['number']?>">
            317-662-2952
        </Number>
    </Dial>
</Response>-->

<Response>
    <Dial callerId="415-799-4622">
        <Number sendDigits="ww<?php echo $dtmf ?>">
            317-662-2952
        </Number>
    </Dial>
</Response>