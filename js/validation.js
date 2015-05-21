<script type="text/javascript">
function validation()
{
	var uname = document.form.username.value;
	if(uname =="")
	{
		alert("Please Enter Your Name");
		document.form.username.focus();
		return false;
	}
	if(!isNaN(uname))
	{
		alert("Please Enter Only Characters");
		document.form.username.focus();
		return false;
	}
	
	}
	var pass = document.form.password.value;
	if(pass=="")
	{
		alert("Please Enter Your Password");
		document.form.password.focus();
		return false;
	}

}
</script>