<?php
  $this->load->helper('url');
  
?>
<div align="center">

</form>

	<table border="1">
		<th>ID: </th>
		<th>Company: </th>
		<th>Last Name: </th>
		<th>First Name: </th>
		<th>Email: </th>
		<th>Job title: </th>
		<th>Business phone: </th>
		<th>Home phone: </th>
		<th>Mobile phone: </th>
		<th>Fax number: </th>
		<th>Address: </th>
		<th>State province:</th>
		<th>Zip postal code: </th>
		<th>Country region: </th>
		<th>Web page: </th>
		<th>Notes: </th>
		<?php
			foreach($customerslist->result() as $re)
				echo "<tr>"
					."<th> $re->id</th>"
					."<th> $re->company</th>"
					."<th> $re->last_name</th>"
					."<th> $re->first_name</th>"
					."<th> $re->email_address</th>"
					."<th> $re->job_title</th>"
					."<th> $re->business_phone</th>"
					."<th> $re->home_phone</th>"
					."<th> $re->mobile_phone</th>"
					."<th> $re->fax_number</th>"
					."<th> $re->address</th>"
					."<th> $re->city</th>"
					."<th> $re->state_province</th>"
					."<th> $re->zip_postal_code</th>"
					."<th> $re->country_region</th>"
					."<th> $re->web_page</th>"
					."<th> $re->notes</th>"
					."<th><a href='".base_url()."Welcome/view/$re->id'>_Edit_</a></th>"
					."</tr>";
				
		?>
	</table>
</div>