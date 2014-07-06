<?php
	date_default_timezone_set('EST');
	error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ini_set("include_path",".:/Users/jalvani/Sites/Heroku/growing-board");
	// define variables and net to null
	$the_date = $height = $height_inches_1 = $weight_lbs_1 = "";
	
	$display_date = date("m.d.Y"); 
	
// 	if ($_SERVER["REQUEST_METHOD"] == "POST") 
// 	{
// 		if (empty($_POST["name"]))
// 		{
// 			$nameErr = "Name is required";
// 		}
// 		else
// 		{
// 			$name = test_input($_POST["name"]);
// 			// check if name only contains letters and whitespace
// 			if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
// 			{
// 			   $nameErr = "Only letters and white space allowed"; 
// 			}
// 		}
// 	}
    
    if(isset($_POST['submit']))
    {
    	$the_date = $_POST['thedate'];
    	$height = $_POST['height_inches_1'];
    	// $weight = $_POST['weight_lbs_1'];
    	$list = array( 
    		// array($the_date, $height, $weight)
			array($the_date, $height)
    	);
    	
        $myfile = fopen('file.csv', 'a');
        foreach ($list as $fields) 
        {        	
        	fputcsv($myfile, $fields);
        }
        fclose($myfile);
    
    }
    
?>

<head>
<doctype html>

</head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

	<title>The Growing Board - Input </title>
	<link rel="shortcut icon" href="resources/favicon.ico">

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/base-min.css">	
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">

<body>
	<div class="pure-g">
		<div class="pure-u-1-6"></div>
		<div class="pure-u-1-6">
			<header role="banner">

				<h1>Growing Board</h1> 

			</header> 



			<form  method="post" class="pure-form pure-form-stacked" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<fieldset>
					<div class="pure-control-group">
						<label for="thedate">Date:</label>		
						<input type="date" name="thedate" id="thedate" maxlength="11" autocorrect value="<?php echo $display_date; ?>" />
					</div>
					<div class="pure-control-group">
						<label for="height_inches_1">Height:</label>		
						<input type="text" name="height_inches_1" id="height_inches_1" maxlength="5" autocorrect placeholder="in inches" />
					</div>
					<div class="pure-controls">
						<button type="submit" class="pure-button pure-button-primary" id="submit" name="submit" class="submit">Submit</button>
					</div>
				</fieldset>	
			</form>


			<?php
			echo "<h2>Your Input:</h2>";
			echo $the_date;
			echo "<br>";
			echo $height;
		// 	echo "<br>";
		// 	echo $weight;
			?>
			</div>
			<div class="pure-u-1-6"></div>
			<div class="pure-u-1-6"></div>
			<div class="pure-u-1-6"></div>
			<div class="pure-u-1-6"></div>
	</div> <!--Pure Grid--> 


</article>
	
</body>