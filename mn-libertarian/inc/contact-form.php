<div class="modal hide" id="contact-modal" style="z-index:12000;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Contact Us</h3>
  </div>
  <div class="modal-body">
    <form id="contact_form" class="form form-horizontal">
		<div class="row-fluid">
			<div class="span6">
				<label for="first_name">First Name<i>required</i></label>
				<input type="text" name="first_name" class="required">
				<label for="last_name">Last Name<i>required</i></label>
				<input type="text" name="last_name" class="required">
				<label for="email">Email<i>required</i></label>
				<input type="text" name="email" class="required">
				<label for="phone">Phone</label>
				<input type="text" name="phone" class="required">
			</div>
			<div class="span6">
				<label for="street_address" >Street Address</label>
				<input type="text" name="street_address" class="required">
				<label for="city">City<i>required</i></label>
				<input type="text" name="city" class="required">
				<label for="zip">Zip<i>required</i></label>
				<input type="text" name="street_address" class="required">
			</div>
		</div>
		<hr />
		<div class="row-fluid">
			<label for="message">Message<i>required</i></label>
			<textarea name="message" class="required" style="width:97%;"></textarea>
		</div>
	</form>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn" id="contact-close">Close</a>
    <a href="#" class="btn btn-primary" id="contact_form_submit">Send</a>
  </div>
</div>

<script type="text/javascript">
	$(function () {
		$('#contact_form_submit').click(function (evt) {
			evt.preventDefault();
			var postData = {
				'first_name':$('input[name="first_name"]').val(),
				'last_name':$('input[name="last_name"]').val(),
				'email':$('input[name="email"]').val(),
				'phone':$('input[name="phone"]').val(),
				'address':$('input[name="first_name"]').val(),
				'city':$('input[name="city"]').val(),
				'zip':$('input[name="zip"]').val(),
				'message':$('textarea[name="message"]').val()
			};
			$.ajax({
			  	type: "POST",
			  	url: '<?php bloginfo("template_directory"); ?>/inc/civicrm-process-form.php',
			  	data: postData,
			  	success: function (resp) {
			  		console.debug(resp);
			  	},
			  	dataType: "json"
			});
		});
	});
</script>