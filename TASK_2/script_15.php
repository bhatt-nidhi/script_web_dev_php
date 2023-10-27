<html>
<body>
<form action="" method="post">

enter a number 1: <input type="number" name="number_1"> <br/>
enter a number 2: <input type="number" name="number_2"><br/>
enter a number 3: <input type="number" name="number_3"><br/>
<input type = "submit" name="submit" value="submit">
</form>
</body>
</html>



<?php
if(isset($_POST['submit'])){
	
	$i=$_POST['number_1'];
	$j=$_POST['number_2'];
	$k=$_POST['number_3'];

	if($i > $j && $i >$k)
	{
		echo "$i is greatest";
		
	}
	elseif ($j >$i && $j >$k)
	{
		echo "$j is greatest";
	}
	else
	{
		echo "$k is greatest";
	}
}



?>