<html>
<head><title>Sofia Rousou - Movie Search</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>

<body>
	<h1> Your results : </h1>
	<?php
	$movies = array(
		"drama" => array("The Shawshank Redemption","The Green Mile","Requiem for a Dream"),
		"comedy" => array("The Hangover","Knocked Up","Due Date"),	
		"horror" => array("Halloween","The Conjuring","The Shining") );

	$res_ar = $movies[$_POST['mo_category']];
	$matches = preg_grep("/{$_POST['mo_name']}/",$res_ar);
	echo "Total results <strong>".count($matches)."</strong><br>";
	if  (count($matches) != 0) {
		$matches = preg_grep("/{$_POST['mo_name']}/",$res_ar);
		foreach($matches as $key => $value)
			{
			echo "Movie found: ".$value;
			if ($_POST['mo_name'] != ''){
			echo ", -- you entered : <kbd>".$_POST['mo_name']."</kbd>";
			}
			echo "<br>";
			}
	} else {
		echo "Sorry no such movie exists in our db!!";
		}
	?> <a href="exercise1.html">Search again</a> 
</body>
</html>