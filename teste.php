<?php

function nomeDaFuncao($parametro)
{
	echo "Olá: ".$parametro;
}

$dados = array("Item Zero", "Item 1", "Item 2", "Item 3", "Item 4");

for ($i = 0; $i < count($dados); $i++) 
{
	echo "<br/>".$i." -> ".$dados[$i];
	
	if($dados[$i] == "Item 2")
	{
	   echo "  : Achei";
	}
}

nomeDaFuncao("Fulano");

?>
<html dir="ltr" lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Titulo</title> 
  </head>
  <body>
       Texto da minha página.
  </body>  
</html>
