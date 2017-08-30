<?php

require('./includes/head.php');
require('./includes/foot.php');

$blythe = [
	'name' => 'Blythe Brown',
	'color' => 'Green',
	'movie' => 'Howl\'s Moving Castle',
	'book' => 'Name of the Wind',
	'website' => 'stackoverflow.com'
];

echo $head."\n";

$name = $blythe['name'];
echo "\t\t<h1>".$name."</h1>\n";
echo "\t\t<ul>\n";

$output = '';
foreach ($blythe as $attr => $value) {
	if($attr !== 'name') {
		$output .= "\t\t\t<li>$value</li>\n";
	} else if ($attr === 'website') {
		$output .= "\t\t\t<li><a href=\"$value\">$value</a></li>\n";
	}
}
echo $output."\t\t</ul>\n";

echo $foot;
