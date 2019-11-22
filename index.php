<!DOCTYPE html>
<html>
<body>

<h1>Example page </h1>

<?php
echo "Hello Mr Cooollll!";	
?>
<input type="text"  id="name">
<br>
<input type="text"  id="school">
<br>	
<input type="button" value="Ok" onclick="display()">

<script type="text/javascript">
	function checkInput(){
		var name = document.getElementById('name').value;
		if (name.length <8) {
			alert('Name is less than 8 characters');
		}
	}
	function display(){
		checkInput();
		var name = document.getElementById('name').value;
		var school = document.getElementById('school').value;
		alert('welcome ' + name + ' from school ' + school);
	}
</script>
</body>
</html>