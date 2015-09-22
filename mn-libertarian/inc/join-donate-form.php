<hr />
<form id="join_doante_form" class="form form-horizontal">
	<div class="control-group">
		<label for="first_name" class="control-label">First Name<i>required</i></label>
		<div class="controls">
			<input type="text" name="first_name" class="required">
		</div>
	</div>
	<div class="control-group">
		<label for="last_name" class="control-label">Last Name<i>required</i></label>
		<div class="controls">
			<input type="text" name="last_name" class="required">
		</div>
	</div>
	<div class="control-group">
		<label for="email" class="control-label">Email<i>required</i></label>
		<div class="controls">
			<input type="text" name="email" class="required">
		</div>
	</div>
	<div class="control-group">
		<label for="phone" class="control-label">Phone</label>
		<div class="controls">
			<input type="text" name="phone" class="required">
		</div>
	</div>
	<div class="control-group">
		<label for="street_address" class="control-label">Street Address</label>
		<div class="controls">
			<input type="text" name="street_address" class="required">
		</div>
	</div>
	<div class="control-group">
		<label for="city" class="control-label">City<i>required</i></label>
		<div class="controls">
			<input type="text" name="city" class="required">
		</div>
	</div>
	<div class="control-group">
		<label for="zip" class="control-label">Zip<i>required</i></label>
		<div class="controls">
			<input type="text" name="street_address" class="required">
		</div>
	</div>
	<div class="control-group">
		<label for="message" class="control-label">Message<i>required</i></label>
		<div class="controls">
			<textarea name="message" class="required"></textarea>
		</div>
	</div>
</form>

<script type="text/javascript">
	$(function () {
		$('#join_doante_form').submit() {
			return false;
		});
	});
</script>