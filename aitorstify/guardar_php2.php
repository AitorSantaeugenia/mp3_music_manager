
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
 <?php
 	include("conexion_php.php");

 	//print_r($_POST);
 	//print_r($_POST);

 	$nombre = "";
 	$comentario = "";
 	$email= "";
  $id = 0;
  $puntuacion = 0;

 	$comentario = $_POST["comentarioBBDD"];
 	$nombre = $_POST["nombreBBDD"];
 	//$puntos = $_POST["puntosBBDD"];
 	$email = $_POST["emailBBDD"];
  $id_cancion = $_POST["id_cancionBBDD"];
  $puntuacion = $_POST["estrellasModal"];

  //print_r($_POST);

 	$sql = "INSERT INTO __opiniones (comentario, nombre_usuario, email_usuario, id_cancion, puntuacion)
 	VALUES ('".$comentario."', '".$nombre."', '".  $email."', '".  $id_cancion ."', '".  $puntuacion ."')";
  	//----------------------------------------------------------------------
 		//----------------------------------------------------------------------
    if (!mysqli_query($conn, $sql)){
      echo "<p style='text-align:center'>Error: </p>" . mysqli_error($conn);
    }
 	mysqli_close($conn);
 ?>
<html>

  <head>
  	<title> Aitorstify </title>
      <!-- CONEXION PHP -->
    <style>
      /*- new styles bitch */
      #idCorpor{
        text-align:center;
        font-family: monospace;
      }

      #idCorpor h3{
        color:green;
        text-align:center;
        font-size:30px;
      }

      #izquierda{
          float:left;
          border-right:1px solid black;
          height:100%;
          width:15%;
          /*FALTA LA POSICIO FIXA */
          position:fixed;
      }

      #derecha{
        float:right;
        border:1px solid transparente;
        width:85%;
        height:100%;
        display:block;
        position:relative;
        float:right;
        text-align:center;
      }

      #derecha h3{
        text-align:center;
      }

      .form-control{
        margin-left:4%;
      }

      .datepicker{
          margin-left:3%;
          text-align:center;
      }


      .row select{
        margin-left:3%;
        text-align:center;
      }

      #encabezaqGlobalSongs h3{
        text-align: center;
        color:black;
        margin-left:36%;
      }

/* PARA LAS ESTRELLAS */
/* -------------------------------------------------------------------------- */
      #form {
        width: 250px;
        margin: 0 auto;
        height: 50px;
      }

      #form p {
        text-align: center;
      }

      #form label {
        font-size: 20px;
      }

      input[type="radio"] {
        display: none;
      }

      label {
        color: grey;
      }

      .clasificacion {
        direction: rtl;
        unicode-bidi: bidi-override;
      }

      .clasificacion label{
          font-size:30px;
      }

      label:hover,
      label:hover ~ label {
        color: orange;
      }

      input[type="radio"]:checked ~ label {
        color: orange;
      }
/* -------------------------------------------------------------------------- */

    </style>
  <!-- Latest compiled and minified CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>


<!-- INICIO SESION PHP A LA BBDD -->
        <?php
          include("conexion_php.php");

          $sql = "SELECT * FROM __canciones";

          $resultado = mysqli_query($conn,$sql);

        	if (!$resultado) {
        		die('Consulta no válida: ' . mysqli_error());
        	}
         ?>
  </head>

<body>

  <div id="idCorpor" class="wrapper">
        <div id="izquierda" class="row">
          <br/>

          <?php
            //print_r($_POST);
           ?>

          Año <br/>
              <input type="text" class="date-own datepicker" style="width:90%; height:2.6%;" name="ano" id="anoCancionSelectPanel" value=" "><br/><br/>


          Estilo musical <br/>
              <select style="width:90%; height:2.6%;" class="selectpicker" id="estiloMusicalSelectPanel">
              <option> </option>
                  <option value="Hard Rock">Hard Rock</option>
                  <option value="Metal">Metal</option>
                  <option value="Heavy clásico">Heavy clásico</option>
                  <option value="Grunge">Grunge</option>
                  <option value="Ska">Ska</option>
                  <option value="Heavy Metal">Heavy Metal</option>
                  <option value="Rock">Rock</option>
                  <option value="Rap">Rap</option>
                  <option value="Rock pop">Rock pop</option>
              </select><br/><br/>

          Autor <br/>
          <select style="width:90%; height:2.6%;" class="selectpicker" id="autorSelectPanel">
          <option > </option>
                <option value="ACDC" class="selectpickerOPTION">ACDC</option>
                <option value="Rammstein" class="selectpickerOPTION">Rammstein</option>
                <option value="Led Zeppelin" class="selectpickerOPTION">Led Zeppelin</option>
                <option value="Nirvana" class="selectpickerOPTION">Nirvana</option>
                <option value="Metallica" class="selectpickerOPTION">Metallica</option>
                <option value="Talco" class="selectpickerOPTION">Talco</option>
                <option value="Motörhead" class="selectpickerOPTION">Motörhead</option>
                <option value="Barricada" class="selectpickerOPTION">Barricada</option>
                <option value="Rosendo" class="selectpickerOPTION">Rosendo</option>
                <option value="Violadores del verso" class="selectpickerOPTION">Violadores del verso</option>
                <option value="Eminem" class="selectpickerOPTION">Eminem</option>
                <option value="Hard gz" class="selectpickerOPTION">Hard gz</option>
                <option value="The beatles" class="selectpickerOPTION">The beatles</option>
                <option value="Queen" class="selectpicker">Queen</option>
          </select><br/><br/>

          <form>
                <p class="clasificacion">
                           <input id="radio1" type="radio" name="estrellas" value="5"><!--
                        --><label for="radio1">★</label><!--
                        --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                        --><label for="radio2">★</label><!--
                        --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                        --><label for="radio3">★</label><!--
                        --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                        --><label for="radio4">★</label><!--
                        --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                        --><label for="radio5">★</label>
                </p>
          </form>
        </div>

        <div id="derecha" class="container" style="text-align:center;">
            <div id="encabezaqGlobalSongs" class="row" style="border:1px solid transparent; width:100%; display: flex; flex-wrap: wrap; text-align:center;">
              <h3 style="color:red;"> Opinion guardada
                <p style="color:black; font-size:20px;">Serás redirigido en 3 segundos</p>
              </h3>
              <script>
                  var timer = setTimeout(function() {
                      window.location='./index.php'
                  }, 3000);
              </script>




                  <!-- MAYBE WITH A FUKING BUTTON IS BETTER --><!--
                  <div id="contenedorGlobalSongs" class="contenedorGlobalSongs" style="bordeR:1px solid transparent; display:wrap; width:30%; margin-top:1%; margin-right:1%; margin-left:1%;">
                        <br/><br/><br/><br/><br/><br/><br/><br/><form class="button_to" >
                          <h3 style="color:black">Selecciona los grupos que quieras opinar y clica continuación</h3>
                          <div>
                              <input class="btn btn-block btn-large btn-danger red_btn" id="opinarButtonSubmit" value="Opinar">
                          </div>
                       </form>
                  </div>
                -->
            </div>

            <div style="display:initial;" id="noResultados">
            <!-- GLOBAL -->

            </div>
        </div>
  </div>

</body>
</html>
