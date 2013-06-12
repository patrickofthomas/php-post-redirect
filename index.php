<?php
	// Begin Setting
	$destination = "http://example.com/process.php";	//The action of your form. You can also define the action with a hidden input
	//End Setting

	if(!$_POST == NULL)	//Do something if there are $_POST variables
	{
		if(isset($_POST['destination']))	//Grab the destination URL if it is defined
		{
			$destination = $_POST['destination'];
		}
		
		$html = "<html>";
		$html .= "<form action = '{$destination}' method='post' name='{$form}'>";
		foreach ($_POST as $name => $value)
		{ 
			$html .= "<input type='hidden' name='{$name}' value='{$value}' />";
		}
		$html .= "</form>";
		$html .= "<script language='javascript'> document.{$form}.submit(); </script> </html>";
		echo $html;
	}
	else
	{
?>


<!-- DELETE THIS LINE *** PUT ALTERNATIVE CONTENT HERE *** DELETE THIS LINE -->

You should put something here.

<?php	}	?>





