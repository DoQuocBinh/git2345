<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello Mr Cooollll!";	
?>
<input type="text"  id="name">
<br>
<input type="text"  id="school">
<br>
<input type="button" value="Ok" onclick="display()">

<script type="text/javascript">
	function display(){
		var name = document.getElementById('name').value;
		var school = document.getElementById('school').value;
		alert('welcome ' + name + ' from school ' + school);
	}
</script>
</body>
</html>