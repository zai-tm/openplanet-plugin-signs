<?php

function signDirTpl(string $dir): string {
	$ret = "";
	foreach(glob($dir . "/*") as $file) {
		if (str_ends_with($file, ".loc")) continue;
		
		$ret .= sprintf("[!%s](%s)\n\n", $file, $file);
		
	}
	return $ret;
}

?>
# Openplanet Plugin Signs

##1x1 (12-3-1)

<?php echo signDirTpl("1x1"); ?>


## 1x2 (12-3-2)

<?php echo signDirTpl("1x2"); ?>


## 1x4 (12-3-3)

<?php echo signDirTpl("1x4"); ?>