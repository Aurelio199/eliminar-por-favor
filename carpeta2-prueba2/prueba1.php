<!DOCTYPE html >
<html>
    <head>
        <title>PROBANDO MAMP_mi primer página </title>
        <meta charset=”utf-8”/>
    </head>
    <body>

    	<h1> Página con HTML</h1>
        <?php
            echo "¡Hola, soy un script de PHP!<br />";

          	
            $num1 = 2;
            $num2 = 10;

            $suma = $num1+$num2;

            echo $suma;
   
           ?>
<!--- MAMP se refiere al conjunto de programas software comúnmente usados para desarrollar sitios web dinámicos sobre sistemas operativos--->
		 <p>Esto va a ser ignorado por PHP y mostrado por el navegador.</p>
		 <?php echo 'Mientras que esto va a ser interpretado.'; ?>
		 <p>Esto también será ignorado por PHP y mostrado por el navegador.</p>

		 <meta name="author" content="Manual Web" />

		 <!---meta http-equiv="refresh" content="2; http://lineadecodigo.com" /-->


    </body>
</html>