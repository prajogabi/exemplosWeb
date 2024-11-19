<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">    
    <title>teste</title>    
    
</head>
<body>

	<?php
	function myphpFunction($oi){
		$int_value = (int) $oi;
		var_dump($int_value);
		echo $int_value  +1 ;
			
	}

	?>
	<script>
     var JSvar = 2;
     var JSnewVar = "<?=myphpFunction('" + JSvar + "');?>";
	 alert(JSnewVar);
	</script>

</body>
</html>
	 