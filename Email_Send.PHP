<?php

	//-----------------------------------------------------
	//-----------------------------------------------------
	$to= "ronicse2021@gmail.com";
	//-----------------------------------------------------
	//-----------------------------------------------------

	$name = $_REQUEST["name"];
	$email = $_REQUEST["email"];
	$subject = $_REQUEST["subject"];
	$address = $_REQUEST["address"];
	$phone = $_REQUEST["phone"];
	$quantity = $_REQUEST["quantity"];
	$state = $_REQUEST["state"];
	$message_content = strip_tags($_REQUEST["message"]);

	$headers = "From: $name <$email>\n";
	$headers .= "Reply-To: $subject <$email>\n";

	$message = "--$mime_boundary\n\n";
	
	$message .= "You have an email from your web site: \n\n\n";
	$message .= "Name: $name \n\n";
	$message .= "Email: $email \n\n";
	$message .= "Company Name: $subject \n\n";
	$message .= "Address: $address \n\n";
	$message .= "Phone: $phone \n\n";
	$message .= "State: $state \n\n";
	$message .= "Quantity: $quantity \n\n";
	$message .= "Message: $message_content \n\n";

	$message .= "--$mime_boundary--\n\n";

	$mail_sent = mail($to,$subject, $message,$headers);
	echo $mail_sent ? "Success, mail sent!" : "Mail failed";
?>






<control" name="subject">
                </div><form id="ef-contact-form" method="POST" action="get_mail.php">
              <div class="row">
                <div class="col-lg-4">
                    <label><small>Name</small><span>*</span></label>
                    <input type="text" class="form-control ef-name" name="name">
                </div>

                <div class="col-lg-4">
                    <label><small>E-mail</small><span>*</span></label>
                    <input type="email" class="form-control ef-email" name="email">
                </div>

                <div class="col-lg-4">
                    <label><small>Company Name</small></label>
                    <input type="text" class="form-
              </div>
			<div class="row">
                <div class="col-lg-4">
                    <label><small>Address</small><span>*</span></label>
                    <input type="text" class="form-control ef-name" name="address">
                </div>

                
                <div class="col-lg-4">
                    <label><small>Phone</small><span>*</span></label>
                    <input type="text" class="form-control ef-email" name="phone">
                </div>
                <div class="col-lg-4">
                    <label><small>State</small><span>*</span></label>
                    <input type="text" class="form-control ef-email" name="state">
                </div>

                <div class="col-lg-4">
                    <label><small>Quantity</small><span>*</span></label>
                    <input type="number" class="form-control ef-email" name="quantity">
                </div>			

				
            </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label><small>Message</small><span>*</span></label>              
                    <textarea class="form-control ef-message" rows="7" name="message"></textarea>
                  </div>


                  <div class="ef-contact-slider-holder">
                    <div class="ef-contact-slider">Are you a human? Drag the lock to the right.</div>

                    <button type="submit" class="btn btn-default send pull-left" name="submit">Submit</button>
                  </div>
