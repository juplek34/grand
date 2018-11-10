	<form action="" method="get">
		<input type="text" name="username">
		<button name="submit">Validate</button>
	</form>
	<?php
		if (isset($_GET['submit'])) {
			$username = $_GET['username'];
			if (preg_match("/([a-z]{5}_[A-Z]{2}|[a-z]{5}.[A-Z]{2})/", $username)) {  
				echo "TRUE"; 
			}
			else{
				echo "FALSE";
			}
		}
	?>
</body>
</html>