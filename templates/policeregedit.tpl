<html>
<head><title>police registration</title>
</head>
<body>
	<center style="margin-top:5rem">
	<table>
	{foreach from=$data item="d"}
	<form method="POST" action="">
	<input type="hidden" name="hide" value="h">
	<tr><td>Station Id</td><td><input type="text" name="a" value="{$d.stationid}"  class="form-control" ></td></tr>
	<tr><td>Addressline 1</td><td><input type="text" name="b" value="{$d.addline1}"  class="form-control" ></td></tr>
	<tr><td>Addressline 2</td><td><textarea name="c"  class="form-control">{$d.addline2}</textarea></td></tr>
	<tr><td>Pincode</td><td><input type="text" name="d" value="{$d.pincode}"  class="form-control"></td></tr>
	<tr><td>District</td><td><select name="district"  class="form-control">
	<option>kollam</option>
	<option>Trivandrum</option>
	<option>Alappuzha</option>
	<option>pathanamthitta</option>
	<option>kottayam</option>
	<option>Idukki</option>
	<option>Ernakulam</option>
	<option>Thrissur</option>
	<option>Palakkad</option>
	<option>Malappuram</option>
	<option>kozhikode</option>
	<option>Wayanad</option>
	<option>Kannur</option>
	<option>Kasaragod</option>{$d.district}
	</select></td></tr>
	<tr><td>City</td><td><input type="text" name="e" value="{$d.city}"  class="form-control"></td></tr>
	<tr><td>contact No:</td><td><input type="text" name="f" value="{$d.contactno}"  class="form-control"></td></tr>
	<tr><td>Email</td><td><input type="email" name="g" value="{$d.email}" class="form-control"></td></tr>
	<tr><td></td><td><input type="submit" value="Update" class="btn btn-primary"></td></tr> 
	
	</form>
	{/foreach}
	</table>
	</center>
</body>
</html>