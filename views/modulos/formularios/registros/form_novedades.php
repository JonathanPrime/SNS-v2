<div id="main">
    <div class="container">
    	<br>
        <h3 class="">Ingresar novedad</h3>
        	<br>
        	<form method="post">
            <label>Seleccione novedad</label>
              <select class="form-control" name="select" id="select">
                <option disabled="">--Seleccione opcion--</option>
                <option value="aplazamientos">Aplazamiento</option>
                <option value="Cambio_de_jornada">Cambio de jornada</option>
                <option value="deserciones">Desercion</option>
                <option value="Reintegro">Reintegro</option>
                <option value="retiro_voluntario">Retiro voluntario</option>
                <option value="traslado">Traslado</option>
              </select>
            <!--
              <input type="button" value="mostrar" onclick="mostrar()">
               <input type="button" value="ocultar" onclick="ocultar()">  -->
        		<div class="form-group">
	      			<label for="usr">N&uacute;mero de documento</label>
              <input type="text" class="form-control" name="nd" autocomplete="off" required>
              <label>Tipo de Documento</label>
              <select class="form-control" name="tidoc">
                <option value="1">Cédula de Ciudadania</option>
                <option value="2">Tarjeta de Identidad</option>
                <option value="3">Cédula de Extranjeria</option>
                <option value="4">Pasaporte</option>
              </select>
              <div id="pai">
                <div id="Aplazamiento">
                    <label for="usr">Fallas</label>
                    <input type="text" class="form-control" name="fallas" autocomplete="off">
                </div>
                <div id="Cambio_de_jornada">
                    <label for="usr">Esto es una prueba</label>
                </div>
              </div>
	      			<label for="usr">Fecha</label>
	      			<input type="date" class="form-control" name="fecha" autocomplete="off">
	      			<label for="usr">Motivo</label>
	      			<textarea class="form-control" name="motivo" autocomplete="off" required>
                </textarea>
	      			<label for="usr">Respuesta</label>
	      			<input type="text" class="form-control" name="respuesta" autocomplete="off">
     			 	<!-- <label for="usr">Confirme Contraseña</label>
     			 	<input type="password" class="form-control" name="contra1"autocomplete="off" required> -->
	   			</div>
	   			<center> <button type="submit" class="btn btn-info">Registrar</button>
	   			</center>
        	</form>                             
        <br><br>                           
    </div>  
</div>
<br><br>
<?php

$registro = new MvcController();
$registro -> registroUsuarioController();
if(isset($_GET["action"])){

  if ($_GET["action"]=="ok") {
      echo"registro exitoso";
  }
}
?>