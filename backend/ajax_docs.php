<?php

if ($_POST['house_num']) {
	$house_num = $_POST['house_num'];
	include_once('docs.php');
	$house_docs = $docs[$house_num];

	echo "<table>";
	foreach ($house_docs as $num_docs => $doc) {
		echo '<tr><td>' . sprintf("%'.02d.", $num_docs + 1) . '</td><td><a href="' . $doc['href'] . '" target="_blank"><img class="pdf_ico" src="img/service/pdf_ico.png">' . $doc['title'] . '</a></td></tr>';
	}
	echo "</table>";
}