<!--contact start here-->
<div class="contact">
	<div class="contact-top">
		<h3>Contact Us</h3>
		<p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
		Ош шаары .</p>
	</div>
	<div class="contact-bottom">
            <form action="<?php echo base_url('page/add_massange');?>" method="POST">
		<input name="name" type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}"/>
		<input name="email" type="text" class="no-mar" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"/>
		<textarea name='massange' onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}"/>Message</textarea>
		<input type="submit" value="Send" />
	</form>	
	</div>
	<div class="clearfix"> </div>
</div>