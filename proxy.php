<?php 
header('Expires: 0');
header('Cache-Control: must-revalidate');
if (isset($_GET["callback"]))
{
	if (isset($_GET["interval"]))
	{
		echo "setInterval(function(){";
	}
	echo $_GET["callback"] . "(";
}
$derp = readfile($_GET["url"]);
echo substr($derp, 0, -2);
if (isset($_GET["callback"]))
{
	echo ");";
	if (isset($_GET["interval"]))
	{
		echo "}, " . $_GET["interval"] . ");";
	}
}
?>



