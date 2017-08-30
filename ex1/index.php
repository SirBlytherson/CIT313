<?php

//use require and include statements to pull in variables (unnecessarily verbose)
require('./includes/head.php');
include('./includes/foot.php');

//declare the variable $blythe to hold attributes
$blythe = array(
	'name' => 'Blythe Brown',
	'color' => 'Green',
	'movie' => 'Howl\'s Moving Castle',
	'book' => 'Name of the Wind',
	'website' => 'stackoverflow.com'
);

//setup the html page
echo $head."\n";

//output name as an h1 title
$name = $blythe['name'];
echo "\t\t<h1>".$name."</h1>\n";
echo "\t\t<ul>\n";

//output a list of the attributes of $blythe
//do not show name
//link to favorite website
$output = '';
foreach ($blythe as $attr => $value) {
	if($attr !== 'name') {
		$output .= "\t\t\t<li>$value</li>\n";
	} else if ($attr === 'website') {
		$output .= "\t\t\t<li><a href=\"$value\">$value</a></li>\n";
	}
}
echo $output."\t\t</ul>\n";

//end the html pae
echo $foot;
