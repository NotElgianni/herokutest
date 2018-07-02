<?php
	$gewicht1 = $lengte2 ="";//geef een waarde bij opstarten script
	$operand = "/";//geef een waarde bij opstarten script
	if(isset($_GET['gewicht1']) && isset($_GET['lengte2'])) //&& isset($_GET['num3']) && isset($_GET['num4']) && isset($_GET['operand']))
	{
		$gewicht1 = $_GET['gewicht1'];

		$lengte2 = $_GET['lengte2'];

		//$lengte2 = $lengte2 / 100; // omrekenen naar cm
		//$num3 = $_GET['num3'];
		//$num4 = $_GET['num4'];
		//$operand = $_GET['operand'];
	}
calc($gewicht1, $lengte2, $operand);
	function calc($gewicht1,  $lengte2, $operand)
	{
		$bmi = round($gewicht1 / ($lengte2 / 100) / ($lengte2 / 100) , 1);
			return ($bmi);
	}
	function printSource(){ // dit script print de source code
		//echo "<h1>de source code</h1>";
		//show_source("functies_switch_startscript.php");
	 }
?>
<!DOCTYPE html>
<html lang="en">
	  <head>
		<meta charset="utf-8">
		<title>bmi calculator</title>
		<style type="text/css">
				body 	{background-color:silver; font-family: "Courier", monospace;}
				input   {color:blue;}
				p    	{color:green;font-weight: bold;}
				legend  {color:blue; font-size: 200%;}
				fieldset{width: 250px;}
		</style>
	  </head>
	  <body>
		<div> Elgianni kolf GD1A </div>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
			<fieldset>
				<legend>Berekening</legend>
				<p>Uw gewicht in kilo's: <input type="	text" name="gewicht1" placeholder = "getal" value = "<?php echo $gewicht1 ?>"></p>
				<p>Uw lengte in cm: <input type="text"name="lengte2" placeholder = "getal" value = "<?php echo $lengte2 ?>"></p>
				<!--<p>Bewerking +-*/: <input type="text" size = "8" placeholder = "bewerking" name="operand" value = "<?php echo $operand ?>"></p>-->
				<p><input type="submit" name="versturen" value="Versturen"></p>
			</fieldset>
			<p><?php echo "uw bmi is ". calc($gewicht1,  $lengte2, $operand); ?></p>
		<?php
			$bmi = round($gewicht1 / ($lengte2 / 100) / ($lengte2 / 100) , 1);

			switch($bmi) {

						case ($bmi < 18.5):

						echo "you a skinny person";
							# code...
							break;

						case ($bmi > 18.5 && $bmi < 24.9):
						echo "you are a normal sized human";
							# code...
							break;

						case ($bmi > 25 && $bmi < 29.9):
						echo "you might have to consider going to the gym";
							# code...
							break;

						case ($bmi > 30 && $bmi < 39.9):
						echo "you should definitly go to the gym";
							# code...
							break;

						case ($bmi > 40):
						echo "get profesional help!!";
							# code...
							break;

			}

		?></form>
		<!--Bonus: voeg code toe om delen door nul te voorkomen.<br>
		Als er gedeeld wordt door 0 moet je een waarschuwing
		laten zien bijvoorbeeld "delen door 0 kan niet."<br>-->
		<hr>
		<?php printSource(); ?>
	  </body>
</html>
