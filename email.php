
    <?php
    session_start();
    ?>
    <!DOCTYPE html>
    <html>
        <head></head>
        <body>
            <form method="POST" action="email.php">
                <h3>Email</h3>
                <input type="email" name="email" value=""><br>
                <input type="submit" name="submit" value="Submit">
            </form>      
        </body>
    </html>
    <?php
	if( isset($_REQUEST['submit'])){
		$email = $_REQUEST['email'];
		
		if(empty(trim($email))){
			echo "Null submission found!";
		}
	}
?>