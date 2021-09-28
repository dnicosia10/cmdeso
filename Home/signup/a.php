<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Post to PHP Tutorial</title>
<script  src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
<form>
 <input type="text" id="name" placeholder="Enter Your Name..." /><br />
 
 <input type="button" value="Submit" onclick="post();">
</form>

<div id="msg"></div>

<script type="text/javascript" src="">

function post()
{
 var name=document.getElementById('name').value;
 var dataString='name='+ name;
 $.ajax({
 	data: {  'name' :name },﻿
 	type:'post',
 	url: 'val.php',
 	data:dataString,
 	cache: false,
 	success: function(html){
 		$('#msg').html(html);
 	}
 });
 return false;
}

</script>
</body>
</html>﻿