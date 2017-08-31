<?php
	$fname="movievote.txt";

	//Wrtie to file
	$fp = fopen($fname,'a');

	if (isset($_POST['movie']) && strlen($_POST['movie']) > 0)
	{
		fwrite($fp,$_POST['movie'] . "\r\n");
	}

	if (isset($_POST['votemovie']) && strlen($_POST['votemovie']) > 0)
	{
		fwrite($fp,$_POST['votemovie'] . "\r\n");
	}

	fclose($fp);

	//Read from file
	$text = file_get_contents($fname);
	$text = trim($text,"\n");
	$text = trim($text,"\r");

	//var_dump($text);

	//echo "<br><br>";

	$mov_arr = explode("\r\n",$text);
	//var_dump($mov_arr);


	//echo "<br><br>";

	$blank_arr = array();
	foreach($mov_arr as $mov_name)
	{
		if (isset($blank_arr[$mov_name]))
			$blank_arr[$mov_name]++;
		else
			$blank_arr[$mov_name] = 1;
	}
	//var_dump($blank_arr);


	// add is clicked

	// update file

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="vote.css">
</head>

<body>
<div id="container">
	<form action="vote.php" method="POST">
	<div id="title">What is your favorite movie ?</div>
	<div id="content">
		<table id="movietable" border="1">
			<tr>
				<th>Movie</th>
				<th>Score</th>
				<th>Vote</th>
			</tr>
			<?php
			foreach ($blank_arr as $key => $value) {
			?>
			<tr>
				<td class='movie'><?php echo $key; ?><!--Movie Name --></td>
				<td class='score'><?php echo $value; ?><!--Score --></td>
				<td class='vote'><button type="submit" name="votemovie" value="<?php echo $key; ?>">vote on <?php echo $key; ?><!--Movie Name --></button></td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>
	<div id="footer">

		<input type="text" name="movie" style="width: 70%">
		<input type="submit" name="add" value="Add">

	</div>

	</form>
</div>

</body>
</html>
