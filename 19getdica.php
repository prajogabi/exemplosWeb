<?php
	// Array com nomes
	$a[] = "Anna";
	$a[] = "Brittany";
	$a[] = "Cinderella";
	$a[] = "Diana";
	$a[] = "Eva";
	$a[] = "Fiona";
	$a[] = "Gunda";
	$a[] = "Hege";
	$a[] = "Inga";
	$a[] = "Johanna";
	$a[] = "Kitty";
	$a[] = "Linda";
	$a[] = "Nina";
	$a[] = "Ophelia";
	$a[] = "Petunia";
	$a[] = "Amanda";
	$a[] = "Raquel";
	$a[] = "Cindy";
	$a[] = "Doris";
	$a[] = "Eve";
	$a[] = "Evita";
	$a[] = "Sunniva";
	$a[] = "Tove";
	$a[] = "Unni";
	$a[] = "Violet";
	$a[] = "Liza";
	$a[] = "Elizabeth";
	$a[] = "Ellen";
	$a[] = "Wenche";
	$a[] = "Vicky";

	// Obtem o parametro da URL
	$q = $_REQUEST["q"];

	$hint = "";

	// lookup all hints from array if $q is different from ""
	if ($q !== "") {
	  $q = strtolower($q);
	  $len=strlen($q);
	  foreach($a as $name) {
		  
		//stristr - a função retorna a string procurada  
		if (stristr($q, substr($name, 0, $len))) {
		  if ($hint === "") {
			$hint = $name;
		  } else {
			$hint .= ", $name";
		  }
		}
	  }
	}

	// A saida é  "nenhuma sugestao" Se não encontrado a saída
	echo $hint === "" ? "nenhuma sugestao" : $hint;
?>