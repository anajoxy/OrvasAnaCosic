<?php
  $this->load->helper('url');
  
?>
<div align="center">
                                <?php $attributes = array("name" => "update");
                                echo form_open("Welcome/update", $attributes);?>
<form action="<?= base_url(); ?>Welcome/update">
	<table>
		<tr>
			<td>id</td>
			<td>:</td>
			<td><input type="text" name="id" hidden value="<?php echo $index['id']?>"></td>
		</tr>
		<tr>
			<td>Company</td>
			<td>:</td>
			<td><input type="text" name="company" value="<?php echo $index['company']?>"></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td>:</td>
			<td><input type="text" name="last_name" value="<?php echo $index['last_name']?>"></td>
		</tr>
		<tr>
			<td>First Name:</td>
			<td>:</td>
			<td><input type="text" name="first_name" value="<?php echo $index['first_name']?>"></td>
		</tr>
		<tr>
		<td>Email</td>
			<td>:</td>
			<td><input type="email" name="email_address" value="<?php echo $index['email_address']?>"></td>
		</tr>
		<tr>
			<td>Job title</td>
			<td>:</td>
			<td><input type="text" name="job_title" value="<?php echo $index['job_title']?>"></td>
		</tr>
		<tr>
			<td>Business phone</td>
			<td>:</td>
			<td><input type="tel" name="business_phone" value="<?php echo $index['business_phone']?>"></td>
		</tr>
		<tr>
			<td>Home phone</td>
			<td>:</td>
			<td><input type="number" name="home_phone" value="<?php echo $index['home_phone']?>"></td>
		</tr>
		<tr>
			<td>Mobile phone</td>
			<td>:</td>
			<td><input type="tel" name="mobile_phone" value="<?php echo $index['mobile_phone']?>"></td>
		</tr>
		<tr>
			<td>Fax number</td>
			<td>:</td>
			<td><input type="tel" name="fax_number" value="<?php echo $index['fax_number']?>"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td>:</td>
			<td><input type="text" name="address" value="<?php echo $index['address']?>"></td>
		</tr>
		<tr>
			<td>City</td>
			<td>:</td>
			<td><input type="text" name="city" value="<?php echo $index['city']?>"></td>
		</tr>
		<tr>
			<td>State province</td>
			<td>:</td>
			<td><input type="text" name="state_province" value="<?php echo $index['state_province']?>"></td>
		</tr>
		<tr>
			<td>Zip postal code</td>
			<td>:</td>
			<td><input type="text" name="zip_postal_code" value="<?php echo $index['zip_postal_code']?>"></td>
		</tr>				<tr>
			<td>Country region</td>
			<td>:</td>
			<td><input type="text" name="country_region" value="<?php echo $index['country_region']?>"></td>
		</tr>
		<tr>
			<td>Web page</td>
			<td>:</td>
			<td><input type="text" name="web_page" value="<?php echo $index['web_page']?>"></td>
		</tr>
		<tr>
			<td>Notes</td>
			<td>:</td>
			<td><input type="text" name="notes" value="<?php echo $index['notes']?>"></td>
		</tr>
		<tr>
			<td>attachments</td>
			<td>:</td>
			<td><input type="text" name="notes" HIDDEN value="<?php echo $index['attachments']?>"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td colspan="2"><button name="submit" type="submit">Edit</button></td>
		</tr>

	</table>

</div>