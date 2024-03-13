<HTML>
<HEAD>
<TITLE>opendir</TITLE>
</HEAD>
<BODY>
<?php
	$dir = opendir(".");

	while($name = readdir($dir)){
		
		if(is_dir($name))
			echo '[<b>'.$name.'</b>]<br>';
		else
			echo $name.'<br>';
	}

	closedir($dir);
	
	
?>
</BODY>
</HTML>