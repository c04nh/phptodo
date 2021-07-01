<?php
$title = "연관배열 : Associated Array";
include("./header.php");
//03_freshmen.php

$freshman = array(
	"David" => "Computer",
	"Alice" => "Math",
	"Elsa" =>  "Physics",
	"Bod" => "Music",
	"Chris" => array("Electronics", "Design")
);
print($freshman['David']);
$freshman["Bob"] = "Movie";
$freshman["IU"] = "Singer";
unset($freshman["Elsa"]);

print("<pre class=\"bg-warning text-white\">");
print_r($freshman);
print("</pre>");

include("./footer.php");
?>