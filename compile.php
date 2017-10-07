<style>
<?php
//-----------------------------------------------------

$color = "#f5f4ef";


function prefix($value) {
	echo "-webkit-".$value."\n";
	echo "	-moz-".$value."\n";
	echo "	-o-".$value."\n";
	echo "	-ms-".$value."\n";
	echo "	".$value."\n";
}

//-----------------------------------------------------
ob_start();
?>

/* your css here */
body {
	background-color: <?=$color?>;
	font-size: 100%;
	border-top: 3px solid #7dc2ca;
	color: #878782;
}

.wrapper {
	width: 850px;
	margin: 0 auto;
	<?php prefix("box-shadow: 0px 10px 10px #AAA;"); ?>
}

<?php

$content = ob_get_contents();
ob_end_clean();

$file = 'style.css';
file_put_contents($file, $content);

?>

</style>

<?php echo "static CSS file is ready!"; ?>
