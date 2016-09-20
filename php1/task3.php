<?php
	$var1 = "Hello World!";
	$var2 = "We are silly";
	$htmlOutput = ''; //set as empty, but defined
	
	// notice the perios before each ( = ) sign... that is concatenating them onto the original var value
	$htmlOutput .= '<table bgcolor=GREEN cellpadding="8">';
	$htmlOutput .= '<tr>';
	$htmlOutput .= '<td bgcolor=RED>';
	$htmlOutput .= ' ' . $var1 . ' ';
	$htmlOutput .= '</td>';
	$htmlOutput .= '<td bgcolor=BLUE>';
	$htmlOutput .= ' ' . $var2 . ' ';
	$htmlOutput .= '</td>';
	$htmlOutput .= '</tr>';
	$htmlOutput .= "</table>";
	//now print or echo the output
	echo "$htmlOutput"
	
	//https://c00189984.candept.com/task3.php//
?>