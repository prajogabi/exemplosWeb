<?php
abstract class ClassePai {
  // Método abstrato com um único argumento
  abstract protected function prefixoNome($name);
}

class ClasseFilha extends ClassePai {
  // O método da classe filha pode definir argumentos opcionais, que não estão definidos no método da classe pai.
  public function prefixoNome($nome, $separador = ".", $saudacao = "Prezado") {
    if ($nome == "John Doe") {
      $prefix = "Prof";
    } elseif ($nome == "Jane Doe") {
      $prefix = "Profa";
    } else {
      $prefix = "";
    }
    return "{$saudacao} {$prefix}{$separador} {$nome}";
  }
}

$class = new ClasseFilha;
echo $class->prefixoNome("John Doe",';');
echo "<br>";
echo $class->prefixoNome("Jane Doe");
?>