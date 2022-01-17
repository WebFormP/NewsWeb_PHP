<?php require_once('header.php'); ?>

            <!--__--__--__--__--  M A I N   C O N T E N T  --__--__--__--___--__--__-->
			<section>
				<div id="contactpost">
					<h1>Contact Us</h1>
					<p>Below is an example of how a contact form might look with this template:</p>
					<form method="post" action="#">
				        <div id="contactform">
						<p><label for="name">Name</label><input type="user" name="name" id="name" placeholder="your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'your name'" /></p> 
						<p><label for="email">Email</label><input type="email" name="email" id="email" placeholder="your@email.com" onfocus="this.placeholder = ''" onblur="this.placeholder = 'your@email.com'" /></p> 
					    <p><label for="message">Message</label><textarea name="message" id="message"></textarea></p>
						<p style="padding-top: 105px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" /></p>
						</div>
				    </form>
					&nbsp;
					<p>NOTE: A contact form such as this would require some way of emailing the input<br />
					to an email address.</p>
				</div>
            </section>

<?php require_once('footer.php'); ?>            