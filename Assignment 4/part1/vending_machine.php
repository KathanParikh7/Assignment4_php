<?php

include 'mysqli_oop_connect.php';

?>

<!DOCTYPE html>
<html>
<body>

	<p id="demo"></p>
	<p id="p1"></p>
	<p id="p2"></p>

	<script type="text/javascript">
		var w=1.25,x=1.5,y=1.75,t=0;
	</script>

	Choose Item : <br/>
	<button type="button" onclick="document.getElementById('p1').innerHTML='Pop Selected'">Chocolate 1.25</button> <button type="button" onclick="document.getElementById('p1').innerHTML='Pop Selected'">Pop 1.5</button> <button type="button" onclick="document.getElementById('p1').innerHTML='Pop Selected'">Chips 1.75</button><br/><br/>

	Make Payment : <br/>
	<button onclick="document.getElementById('p2').innerHTML='Amount Paid:'+Math.round((t=t+1)*100)/100">1 dollar</button>     <button onclick="document.getElementById('p2').innerHTML='Amount Paid:'+Math.round((t=t+0.05)*100)/100">5 cents</button>   <button onclick="document.getElementById('p2').innerHTML='Amount Paid:'+Math.round((t=t+0.1)*100)/100">10 cents</button>   <button onclick="document.getElementById('p2').innerHTML='Amount Paid:'+Math.round((t=t+0.25)*100)/100">25 cents</button>  <br/>

</body>	
</html>