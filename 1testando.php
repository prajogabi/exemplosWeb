<?php
	$data = 10;
    
    echo '<a href="' . htmlspecialchars("/nextpage.php?stage=23&data=" .
        urlencode($data)) . '">'."oi \n";
?>