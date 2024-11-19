<?php
    // A variavel armazena a quantidade que vem do banco de dados
    $itensItalia = 55;
	$itensFranca = 49;
	$itensBrasil = 43;
	$itensEUA = 25;
	$itensChina = 15;
?>

 

<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<body>

<canvas id="meuGrafico" style="width:100%;max-width:600px"></canvas>
<input type="hidden" id="idItalia" name="nmItalia" value="<?php echo $itensItalia ?>">
<input type="hidden" id="idFranca" name="nmFranca" value="<?php echo $itensFranca ?>">
<input type="hidden" id="idBrasil" name="nmItalia" value="<?php echo $itensBrasil ?>">
<input type="hidden" id="idEUA" name="nmEUA" value="<?php echo $itensEUA ?>">
<input type="hidden" id="idChina" name="nmChina" value="<?php echo $itensChina ?>">

<script>
var xValues = ["Italia", "França", "Brasil", "EUA", "China"];

var yValues = [];
yValues[0]= document.getElementById("idItalia").value;
yValues[1]= document.getElementById("idFranca").value;
yValues[2]= document.getElementById("idBrasil").value;
yValues[3]= document.getElementById("idEUA").value;
yValues[4]= document.getElementById("idChina").value;



var barColors = ["red", "green","blue","orange","brown"];

new Chart("meuGrafico", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Produção mundial de soja de 2022"
    }
  }
});
</script>

</body>
</html>
