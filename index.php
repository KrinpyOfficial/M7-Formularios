<!DOCTYPE html>
<html>
    <head>
        <title>Formulario PHP Index</title>
    </head>
    <body>
		<?php
			echo ("
				<h1>Campo de Batalla 2.0</h1>
				<form action='resultado.php' method='GET'>
					Filas: <input type='number' min='1' name='fil' value='1'/>
					Columnas: <input type='number' min='1' name='col' value='1'/>
					<input type='submit'/>
				</form>
			");
		?>
    </body>
 </html>
