	    <?php if(!isset($step) && !isset($test)){ ?>
	   
	    	<div id="content-block">
	    	<div id="content-wrapper">
	    		<div class="row-fluid">
	    			<div class="content-padding">
			      		
			      		<form method="POST" class="form-horizontal" id = "first_step" action= <?php echo '/v1/console/'. $dtmf . '/' . $key . '/' . $token . '/' . $sid . '/' . '2' ?> >
							<div class="script">Thank you for calling the Neil's Ford Prize Verification Center. In order to proceed, I need to notify you that if you are a winner, my system will not tell me what prize you have won.</div>
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
		</div>
		
		<div id="side-block">
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
  </div>
		

		
		<?php } else {
			
		} ?>
		
		<?php if(isset($step) && $step == 2 && !isset($test)){ echo $step; ?>
	    	<div id="content-block">
	    	<div id="content-wrapper">
	    		<div class="row-fluid">
	    			<div class="content-padding">
			      		
			      		<form method="POST" class="form-horizontal" id = "first_step" action= <?php echo '/v1/console/'. $dtmf . '/' . $key . '/' . $token . '/' . $sid . '/' . '3' ?> >
							<div class="script">Congratulations, you are a winner! Subject to the rules and regulations found on your mail piece. I will just need to verify a few things so that you can come to the dealership to claim your prize. What is your first name and last name?</div>
						<div class="form-element">
							<div class="control-group" >
							    <label class="control-label">First Name</label>
							    <div class="controls">
					    			<input name="first_name" type="text" class="span11" placeholder="First Name" value = "<?php echo isset($user['first_name']) && strtolower($user['first_name']) != 'preferred' ? $user['first_name'] : '' ; ?>">
								</div>
							</div>
							<div class="control-group" >
						    	<label class="control-label">Last Name</label>
							    <div class="controls">
							    	<input name="last_name" type="text" class="span11" placeholder="Last Name" value = "<?php echo isset($user['last_name']) && strtolower($user['last_name']) != 'customer' ? $user['last_name'] : '' ; ?>">
								</div>
							</div>
						</div>
 						
							<!-- <div class="control-group" id="mobile_number" style="display: none" >
								<label class="control-label">Mobile Number</label>
								<div class="controls">
									 <input name="mobile_number" type="text" class="span8" placeholder="Number" value="<?php if(!isset($caller_phone_number) || empty($caller_phone_number) || $caller_phone_number[0] == 'r') {  } else { echo $caller_phone_number; } ?>">
								</div>
							</div> -->
						</div>

							<div class="continue">
								

							    <input type="submit" class="span4 btn btn-success offset8" id="continue" value="Continue" />  
							</div>

							<div id="hangup_var"></div>
						</form>
	
					</div>
				</div>
			</div>
		</div>
		
		<div id="side-block">
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
  </div>
		
		
	
		<?php } ?>
		
		<?php if(isset($step) && $step == 3 && !isset($test)){ echo $step; ?>
	    	<div id="content-block">
	    	<div id="content-wrapper">
	    		<div class="row-fluid">
	    			<div class="content-padding">
			      		
			      		<form method="POST" class="form-horizontal" id = "first_step" action= <?php echo '/v1/console/'. $dtmf . '/' . $key . '/' . $token . '/' . $sid . '/' . '4' ?> >
							<div class="script">This special event ends Saturday at 6 pm. What time would you like to come down to the dealership to claim your prize?</div>
						<div class="form-element">
							<div class="control-group" >
						    	<label class="control-label" for="inputDate">Appointment Date</label>
							    <div class="controls">
							    	<!--<select name="the_date" class="span6">
							    		<option value ="">Day of the Week</option>
							    		<?php $i = 0; foreach($dates as $day_int => $day) { if($day_int >= 1372132800 && $day_int <= 1372478400) { ?>
							    			<option <?php echo (isset($caller_details['the_date']) && $caller_details['the_date'] == $day_int) ? 'selected="selected"' : '' ;?> value="<?php echo $day_int; ?>"><?php echo ($i == 0) ? 'TODAY' : $day; ?></option>
							    		<?php $i++; } } ?>
							    	</select>-->
							    	<!--<select id="time_everyday" name="the_time" class="span6">
							    		<option value="">Hour of the Day</option>
							    		<?php foreach($times as $time_int => $time) { ?>
							    			<option <?php echo (isset($caller_details['the_time']) && $caller_details['the_time'] == $time_int) ? 'selected="selected"' : '' ;?> value="<?php echo $time_int; ?>"><?php echo $time; ?></option>
							    		<?php } ?>
							    	</select>-->
							    	
							    	<select name="the_date" class="span6">
							    		<option value="">Days of the week</option>
							    		<option value="">Tuesday,Jul 9th</option>
							    		<option value="">Wednesday,Jul 9th</option>
							    		<option value="">Thursday,Jul 9th</option>
							    		<option value="">Friday,Jul 9th</option>
							    		<option value="">Saturday,Jul 9th</option>
							    	</select>
							    	
									<select id="time_saturday" style="" name="the_time" class="span6">
							    		<option value="">Hour of the Day</option>
							    		<option value="<?php echo strtotime("2013-06-29 9:00:00 AM"); ?>">9:00 AM</option>
							    		<option value="<?php echo strtotime("2013-06-29 10:00:00 AM"); ?>">10:00 AM</option>
							    		<option value="<?php echo strtotime("2013-06-29 11:00:00 AM"); ?>">11:00 AM</option>
							    		<option value="<?php echo strtotime("2013-06-29 12:00:00 PM"); ?>">12:00 PM</option>
							    		<option value="<?php echo strtotime("2013-06-29 1:00:00 PM"); ?>">1:00 PM</option>
							    		<option value="<?php echo strtotime("2013-06-29 2:00:00 PM"); ?>">2:00 PM</option>
							    		<option value="<?php echo strtotime("2013-06-29 3:00:00 PM"); ?>">3:00 PM</option>
							    		<option value="<?php echo strtotime("2013-06-29 4:00:00 PM"); ?>">4:00 PM</option>
							    		<option value="<?php echo strtotime("2013-06-29 5:00:00 PM"); ?>">5:00 PM</option>
							    		<option value="<?php echo strtotime("2013-06-29 6:00:00 PM"); ?>">6:00 PM</option>
							    	</select>
							    </div>
							 </div>
						</div>
						<div class="help">AGENT NOTE: If the caller is unsure which date is best, put them down for the last hour of the last day.</div>
						<div class="script">Take your mailer and ID with you to the event. When you arrive ask for Christina to claim your prize. The location of the event is on the mailer. No purchase is necessary. However, you must come to the dealership to validate your mailer and collect your prize. If you do not show up at the time of your appointment, you forfeit your prize. So it&rsquo;s important that you come, so you don’t miss out. Thank you for calling.	</div>
							<div class="continue">
								

							    <input type="submit" class="span4 btn btn-success offset8" id="continue" value="Continue" />  
							</div>

							<div id="hangup_var"></div>
						</form>
	
					</div>
				</div>
			</div>
		</div>
		
		<div id="side-block">
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
  </div>
		
		

		<?php } ?>
		
		<?php if(isset($step) && $step == 4 && !isset($test)){ ?>
	    	<div id="content-block">
	    	<div id="content-wrapper">
	    		<div class="row-fluid">
	    			<div class="content-padding">
			      		<form method="POST" class="form-horizontal" id = "first_step" action= <?php echo '/v1/console/'. $dtmf . '/' . $key . '/' . $token . '/' . $sid . '/' . '5' ?> >
				      	<div class="form-element">
							<div class="control-group">
								<div class="inner-padding">
									<label><i>Internal Note:</i> If you experienced any issues or have comments, please take the time to let us know.</label>
									<textarea name="observation" id="observation" rows="10" class="span8"></textarea>
									</div>	    
									</div>
								</div>
			      		
			      		

							<div class="continue">
								

							    <input type="submit" class="span4 btn btn-success offset8" id="continue" value="Submit" />  
							</div>

							<div id="hangup_var"></div>
						</form>
	
					</div>
				</div>
			</div>
		</div>
		
		<div id="side-block">
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
  </div>
		

		<?php } ?>
	<?php if( isset($step) && $step == 5 && !isset($test) ) {  ?>
		<div class="row-fluid">
			<div class="content-padding">
				<div class="help">
		    		<h4 class="text-center">Please update your caller disposition to "Inquiry" in your LiveOps panel.</h4>
					<p class="text-center">Thank you for using UsefulTools.</p>
				</div>
			</div>
		</div>
		
	
<?php } ?>