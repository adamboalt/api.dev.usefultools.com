<?php

//echo $_SERVER['REQUEST_URI'];

//print_r(apache_get_modules());
/*USAGE*/
$tokens = tokenize(1,6,$_SERVER['REQUEST_URI'],'/');
$dtmf = $tokens[0];
$key = $tokens[1];
$token = $tokens[2];
$sid = $tokens[3];
$step = $tokens[4]; 




/*parses a string, splitting into tokens*/
function tokenize($start, $stop, $sStrInput, $delim){
	$tks = array();//empty array holds the final tokens that we want
	$tokens = explode($delim, trim($sStrInput, $delim));
	for($i = 0;$i<=count($tokens);$i++) {
		if($i <= $start){
			continue;
		}elseif($i > $stop ) {
			continue;
		}
		
		//if we reach here, then all is good to go
		array_push($tks,$tokens[$i]);
	}
	
	if(isset($tks)){
		return $tks;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>UsefulTools Agent Console</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link type="text/css" rel="stylesheet" media="all" href="/css/bootstrap.css" />
	<link type="text/css" rel="stylesheet" media="all" href="/css/console.css" />
	
	<style>
      /*body {
        padding-top: 70px; 
      }*/ /* 60px to make the container go all the way to the bottom of the topbar */
      #nav.affix {
	    position: fixed;
	    top: 0px;
	    width: 100%;
	}
    </style>
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
  
  </head>

  <body>
 <!--<div id="navbar-wrapper">
		    <div id="nav" class="navbar navbar-inverse"> 
	  			
		    </div>
	    </div>-->
	    
	    <?php
	    	if(isset($step) && $step == 1){ echo $step;?>
	    		    		<div id="content-block">
	    	<div id="content-wrapper">
	    		<div class="row-fluid">
	    			<div class="content-padding">
			      		<!--BODY content-->
			      		<form method="POST" class="form-horizontal" id = "first_step" action="<?php/.$dtmf./.$step./.$key./.$sid?>">
							<div class="script">Thank you for calling the Keith White Ford Prize Verification Center. In order to proceed, I need to notify you that if you are a winner, my system will not tell me what prize you have won.</div>
							<div class="script">May I please have the confirmation code from your mail piece?</div>
							<div class="form-element">
								<div class="control-group" >
								    <label class="control-label">Enter Number</label>
								    <div class="controls">
								    	<input name="activation_code" type="text" class="span8" placeholder="">
									</div>
								</div>
							</div>
							<div class="help">AGENT NOTE: FAQs are to the right in BLUE.</div>
							<div class="script">Give me a moment while I verify your code.</div>
							<div class="continue">
								<!-- <button class="span4 btn btn-danger" id="cancel" >Hang Up</button>
							    <button type="submit" class="span4 btn btn-warning" id="skip">Skip</button> -->

							    <input type="submit" class="span4 btn btn-success offset8" id="continue" value="Continue" />  
							</div>

							<div id="hangup_var"></div>
						</form>
					</div>
				</div>
			</div>
	    	<?php}?>
	    	
	    	<?php if(isset($step) && $step == 2){?>
	    		
	    	<?php}?>
	    	
	    	<?php if(isset($step) && $step == 3){?>
	    		
	    	<?php}?>
	    	
	    	<?php if(isset($step) && $step == 4){?>
	    		
	    	<?php}?>

	
		  
  		<!--<div id="content-block">
	    	<div id="content-wrapper">
	    		<div class="row-fluid">
	    			<div class="content-padding">
			      		
			      		<form method="POST" class="form-horizontal" id = "first_step" action="?step=2">
							<div class="script">Thank you for calling the Keith White Ford Prize Verification Center. In order to proceed, I need to notify you that if you are a winner, my system will not tell me what prize you have won.</div>
							<div class="script">May I please have the confirmation code from your mail piece?</div>
							<div class="form-element">
								<div class="control-group" >
								    <label class="control-label">Enter Number</label>
								    <div class="controls">
								    	<input name="activation_code" type="text" class="span8" placeholder="">
									</div>
								</div>
							</div>
							<div class="help">AGENT NOTE: FAQs are to the right in BLUE.</div>
							<div class="script">Give me a moment while I verify your code.</div>
							<div class="continue">
								

							    <input type="submit" class="span4 btn btn-success offset8" id="continue" value="Continue" />  
							</div>

							<div id="hangup_var"></div>
						</form>
	
					</div>
				</div>
			</div>
		</div>-->
	    <!--<div id="side-block">
			<div class="accordion" id="accordion2">
			  <div class="accordion-group">
			    <div class="accordion-heading">
			      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
			        Q: Where's my confirmation code?
			      </a>
			    </div>
			    <div id="collapseOne" class="accordion-body in">
			      <div class="accordion-inner">
			      	A: It's right in the middle of the prize box, just under your LUCKY NUMBER and the PHONE NUMBER.
			      </div>
			    </div>
			  </div>
			  <div class="accordion-group">
			    <div class="accordion-heading">
			      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
			        Q: What&rsquo;s my prize?
			      </a>
			    </div>
			    <div id="collapseTwo" class="accordion-body">
			      <div class="accordion-inner">
			        A: We won't know exactly what prize you won until the code is verified at the event. But it is one of the many prizes shown on your mailer.
			      </div>
			    </div>
			  </div>
			  <div class="accordion-group">
			    <div class="accordion-heading">
			      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
			        Q: What's the catch?
			      </a>
			    </div>
			    <div id="collapseOne" class="accordion-body in">
			      <div class="accordion-inner">
			      	A: There is no catch. No purchase is necessary to be eligible to win a prize. But all prizes must be verified and claimed at the dealership.
			      </div>
			    </div>
			  </div>
			</div>
		</div>
  </div>-->

  </body>
</html>