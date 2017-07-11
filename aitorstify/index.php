
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

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
          display:table;
          background-color: #c9cdd3;

      }

      #aCentrarizquierda{
        vertical-align: middle;
        border:1px solid transparent;
        height:100%;
        display: table-cell;
      }

      #derecha{
        float:right;
        border:1px solid transparente;
        width:85%;
        height:100%;
        display:block;
        position:relative;
        float:right;
      }

      .contenedorGlobalSongs{
        background-color: #f2f7ff;
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

      .clasificacionModal {
        direction: rtl;
        unicode-bidi: bidi-override;
      }

      .clasificacionModal label{
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

        <script type="text/javascript">
        function escucharCancion(id){

            var x = id;

            //Restarting the song in case that it was played before
            $('#restart'+id).click();

            var x = document.getElementById('divsong'+id);


            var cancionRuta = $('#divsong'+id).attr('value');
            //alert(cancionRuta);

            var audioElement = document.createElement('audio');
            //document.getElementById('hache3'+id)
            audioElement.setAttribute('src', cancionRuta);
            var test = audioElement.getAttribute('src');
            //alert(test);
            //alert(audioElement.setAttribute('src', cancionRuta));

            audioElement.addEventListener('ended', function() {
                this.play();
            }, false);

            audioElement.addEventListener("canplay",function(){
                $("#length"+id).text("Duration:" + audioElement.duration + " seconds");
                $("#source"+id).text("Source:" + audioElement.src);
                $("#status"+id).text("Status: Ready to play").css("color","green");
            });

            audioElement.addEventListener("timeupdate",function(){
                $("#currentTime"+id).text("Current second:" + audioElement.currentTime);
            });

            $('#play'+id).click(function() {
                audioElement.play();
                $("#status"+id).text("Status: Playing");
            });

            $('#pause'+id).click(function() {
                audioElement.pause();
                $("#status"+id).text("Status: Paused");
            });

            $('#restart'+id).click(function() {
                audioElement.currentTime = 0;
            });

            if (x.style.display === 'none') {
                x.style.display = 'initial';
            }else if(x.style.display === 'initial') {
                x.style.display = 'none';
                $('#pause'+id).click();

            }
        }

        var concaternarCosas = "";
        var concaternarCosas2 = "";
        var concaternarCosas3 = "";

          $(document).ready(function() {
            $('#anoCancionSelectPanel').datepicker({
                 minViewMode: 2,
                 format: 'yyyy'
            });

//------------------------------------------------------------------------------

            $(document).ready( function() {
                $('#anoCancionSelectPanel').bind('change', function () {

                  filtrar();

                });

                $('#estiloMusicalSelectPanel').bind('change', function () {

                  filtrar();
                });

                $('#autorSelectPanel').bind('change', function () {

                  filtrar();

                });
              });
          });


          function filtrar(opt){
            var puntuacion = opt;
            //alert(test);
            var cadena = "";

            var ano=$('#anoCancionSelectPanel').val();
            var estilo=$('#estiloMusicalSelectPanel option:selected').val();
            var autor=$('#autorSelectPanel option:selected').val();

            var testingtecnomortero = $('.contenedorGlobalSongs').attr('class');
            //alert(ano.length);

            if(ano != '') cadena ='.a'+ano;
            if(estilo!='') cadena+='.'+estilo;
            if(autor!='') cadena+='.'+autor;
            if(puntuacion>0) cadena+='.'+puntuacion;

            //alert(cadena);
            //alert('.'+cadena);
            $('.contenedorGlobalSongs').hide();
            $(cadena).show();
          }

          $(document).ready( function() {
              $('.testingInputText').bind('click', function () {
                  if ($('input.testingInputText').is(':checked')) {
                      $('#noResultados').show();
                      //alert($('#noResultados').text());
                      var codigo = "";
                      var codigo2 = "";
                      var imagen = $('#img'+$(this).val()).attr('src');
                      //alert(imagen);

                      var nombreAutor = $('#autor'+$(this).val()).attr('value');
                      var nombreCancion = $('#cancion'+$(this).val()).attr('value');
                      var id = $(this).val();
                      //alert(id);
                      //alert(nombreAutor);
                      codigo += "<br/><div clas='contenedorOpiniones' style='border:1px solid transparent;'>";
                        codigo +="<form method='POST' action='guardar_php2.php'><div clas='contenedorOpiniones' style='border:1px solid black; float:left;  width:40%; height:60%;'>";
                          codigo += "<br/><img src='"+imagen+"' alt='Foto' style='width:80%; height:80%;'><h3 style='color:black'>"+nombreAutor+"</h3><h3 style='color:black'>"+nombreCancion+"</h3><br/>"
                        codigo += "</div>";
                      codigo+= "<div clas='contenedorOpiniones' style='border:1px solid black; float:right; width:59%; height:20%;'><br/>";
                        codigo+="<br/>Comentario<br/><textarea rows='4' cols='50' style='resize: none;' name='comentarioBBDD'></textarea>"
                        codigo +="<p class='clasificacion'>";
                          codigo +="<input id='radio1' type='radio' name='estrellas' value='5'><label for='radio1'>★</label>";
                          codigo+="<input id='radio2' type='radio' name='estrellas' value='4'><label for='radio2'>★</label>";
                          codigo+="<input id='radio3' type='radio' name='estrellas' value='3'><label for='radio3'>★</label>";
                          codigo+="<input id='radio4' type='radio' name='estrellas' value='2'><label for='radio4'>★</label>";
                          codigo+="<input id='radio5' type='radio' name='estrellas' value='1'><label for='radio5'>★</label>";
                        codigo+="</p>";
                        codigo +="</div><div clas='contenedorOpiniones' style='border:1px solid black; float:right; width:59%;height:20%;'><br/><br/><br/>Email<br/><input type='text' name='emailBBDD' size='50'>";
                      codigo+="</div>";
                      codigo +="<div clas='contenedorOpiniones' style='border:1px solid black; float:right; width:59%; height:20%; text-align:center;'><br/><br/>Nombre<br/><input type='text' size='50' name='nombreBBDD'><br/><br/>";
                      codigo +="<input class='btn btn-block btn-large btn-danger red_btn' type='submit' id='opinarButtonSubmit' value='Opinar' style='width:30%;text-align:center; margin-left:35%; cursor:pointer;'><br/><br/></div></div>";
                      codigo +="</form>";

                      codigo2 += "<div class='container'>";
                        codigo2 += "<div class='modal fade' id='myModal"+id+"' role='dialog';><div class='modal-dialog'>";
                          codigo2 += "<div class='modal-content' style='width:1000;'>";
                            codigo2 += "<div class='modal-header' style='border:1px solid transparent;'>";
                              codigo2 += "<button type='button' class='close' data-dismiss='modal'>&times;</button>";
                              codigo2 +="<h4 class='modal-title'>Opinion</h4>"
                            codigo2 += "</div><hr/>";
                            codigo2 += "<div clas='modal-body' style='border:1px solid transparent; margin-right:2%'>";
                            codigo2 += "<form method='POST' action='guardar_php2.php'>";
                              codigo2 += "<input type='number' size='50' name='id_cancionBBDD' style='display:none;' value='"+id+"'>";
                              codigo2 +="<div clas='contenedorOpiniones' style='border:1px solid transparent; float:left;  width:40%; height:60%;'>";
                              codigo2 +="<br/><img src='"+imagen+"' alt='Foto' style='width:70%; height:70%;'><h3 style='color:black'>"+nombreAutor+"</h3><h3 style='color:black'>"+nombreCancion+"</h3><br/>";
                              codigo2 +="</div><div clas='contenedorOpiniones' style='border:1px solid transparent; float:right; width:59%; height:20%; margin-top:3%; margin-bottom:-5%;'><br/><br/>Comentario<br/><textarea rows='4' cols='50' style='resize: none;' name='comentarioBBDD'></textarea>";
                              codigo2 +="<br/><span class='clasificacionModal' id='estrellasPuntuacionModal'>";
                                codigo2 += "<input id='radioModal1' type='radio' name='estrellasModal' value='5'><label for='radioModal1'>★</label>";
                                codigo2 +="<input id='radioModal2' type='radio' name='estrellasModal' value='4'><label for='radioModal2'>★</label>";
                                codigo2 += "<input id='radioModal3' type='radio' name='estrellasModal' value='3'><label for='radioModal3'>★</label>";
                                codigo2 +="<input id='radioModal4' type='radio' name='estrellasModal' value='2'><label for='radioModal4'>★</label>";
                                codigo2 +="<input id='radioModal5' type='radio' name='estrellasModal' value='1'><label for='radioModal5'>★</label>";
                              codigo2 +="</span></div><div class='contenedorOpiniones' style='border:1px solid transparent; float:right; width:59%; margin-top:5%;'>Email<br/><input type='text' name='emailBBDD' size='50'>";
                              codigo2 +="</div><div clas='contenedorOpiniones' style='border:1px solid transparent; float:right; width:59%; height:20%; text-align:center;'><br/><br/>Nombre<br/><input type='text' size='50' name='nombreBBDD'><br/><br/>";
                              codigo2 +="<input class='btn btn-block btn-large btn-danger red_btn' type='submit' id='opinarButtonSubmit' value='Opinar' style='width:30%;text-align:center; margin-left:35%; cursor:pointer;'><br/><br/></div>";
                            codigo2 +="</div></form><br/><br/>"
                      codigo2 += "<div class='modal-footer' style='text-align:center; margin-top:50%;'><button type='button' class='btn-sm btn-danger btn-red' data-dismiss='modal'>Close</button></div></div>";

                      //alert($('#myModal'+id).attr('id'));
                      $('#noResultados').append(codigo2); // put it into the DOM

                      //ME ESCONDE EL CHECKBOX
                      $('#myModal'+id).on('hidden.bs.modal', function () {
                          $('input.testingInputText').prop( "checked", false );
                      });
                  }
              });
          });

          $( "#opinarButtonSubmit" ).click(function() {
            $( "#opinarButtonSubmit" ).submit();
          });

          function onClickEstrella(object){
            //Valor del click
            var test = object;
            filtrar(test);
          }
        </script>

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
          <div id="aCentrarizquierda">
          <br/>

          <?php
            //print_r($_POST);
           ?>

          Año <br/>
              <input type="text" class="date-own datepicker" style="width:90%; height:2.6%;" name="ano" id="anoCancionSelectPanel" value=""><br/><br/>


          Estilo musical <br/>
              <select style="width:90%; height:2.6%;" class="selectpicker" id="estiloMusicalSelectPanel">
              <option> </option>
                  <option value="Hard_Rock">Hard Rock</option>
                  <option value="Metal">Metal</option>
                  <option value="Heavy_clasico">Heavy clasico</option>
                  <option value="Grunge">Grunge</option>
                  <option value="Ska">Ska</option>
                  <option value="Heavy_metal">Heavy Metal</option>
                  <option value="Rock">Rock</option>
                  <option value="Rap">Rap</option>
                  <option value="Rock_pop">Rock pop</option>
              </select><br/><br/>

          Autor <br/>
          <select style="width:90%; height:2.6%;" class="selectpicker" id="autorSelectPanel">
          <option > </option>
                <option value="ACDC" class="selectpickerOPTION">ACDC</option>
                <option value="Rammstein" class="selectpickerOPTION">Rammstein</option>
                <option value="Led_Zeppelin" class="selectpickerOPTION">Led Zeppelin</option>
                <option value="Nirvana" class="selectpickerOPTION">Nirvana</option>
                <option value="Metallica" class="selectpickerOPTION">Metallica</option>
                <option value="Talco" class="selectpickerOPTION">Talco</option>
                <option value="Motörhead" class="selectpickerOPTION">Motörhead</option>
                <option value="Barricada" class="selectpickerOPTION">Barricada</option>
                <option value="Rosendo" class="selectpickerOPTION">Rosendo</option>
                <option value="Violadores_del_verso" class="selectpickerOPTION">Violadores del verso</option>
                <option value="Eminem" class="selectpickerOPTION">Eminem</option>
                <option value="Hard_gz" class="selectpickerOPTION">Hard gz</option>
                <option value="The_beatles" class="selectpickerOPTION">The beatles</option>
                <option value="Queen" class="selectpicker">Queen</option>
          </select><br/><br/>

          <form>
                <span class="clasificacion" id="estrellasPuntuacion">
                           <input id="radio1" type="radio" name="estrellas" value="5" onclick="onClickEstrella(this.value);"><!--
                                --><label for="radio1">★</label><!--
                        --><input id="radio2" type="radio" name="estrellas" value="4" onclick="onClickEstrella(this.value);"><!--
                        --><label for="radio2">★</label><!--
                        --><input id="radio3" type="radio" name="estrellas" value="3" onclick="onClickEstrella(this.value);"><!--
                                --><label for="radio3">★</label><!--
                        --><input id="radio4" type="radio" name="estrellas" value="2" onclick="onClickEstrella(this.value);"><!--
                                --><label for="radio4">★</label><!--
                        --><input id="radio5" type="radio" name="estrellas" value="1" onclick="onClickEstrella(this.value);"><!--
                                --><label for="radio5">★</label>
                </span>
          </form>


          </div>
        </div>

        <div id="derecha" class="container">
            <div id="encabezaqGlobalSongs" class="row" style="border:1px solid transparent; width:100%; display: flex; flex-wrap: wrap;">
              <br/>

              <!-- WE START PAINTING DIFERENT DIVS -->
              <?php
              foreach($resultado as $item){
                          $sql2 = 'SELECT AVG(puntuacion) as media FROM __opiniones WHERE id_cancion='.$item['id'];
                          $resultado2 = mysqli_query($conn,$sql2);

                          foreach($resultado2 as $puntos){
                          }
              $counter = 0;
              ?>

                <div id="contenedorGlobalSongs" class="contenedorGlobalSongs <?php echo 'a'.$item['ano']?> <?php echo $item['estilo']?> <?php echo $item['autor']?> <?php echo round($puntos['media'])?>" style="bordeR:1px solid transparent; display:wrap; width:30%; margin-top:1%; margin-right:1%; margin-left:1%;">
                      <div style="bordeR:1px solid lightgrey;">
                          <input type="checkbox" class="testingInputText" name="checkbox" value="<?php echo($item['id']);?>" data-toggle="modal" data-target="#myModal<?php echo($item['id']);?>"/><br/><label style="color:black;">Opinar</label>
                      </div><br/>

                      <div id="imagenCancionDiv" style="bordeR:1px solid transparent;">
                          <img src="<?php echo $item['imagen']?>" alt="Foto" style="width:50%; height:30%;" id="img<?php echo($item['id']);?>">
                      </div>

                      <br/>

                      <input class='btn btn-block btn-large btn-danger red_btn' type='button' id='btna<?php echo($item['id']);?>' value='Escuchar cancion' style='width:30%;text-align:center; margin-left:35%; cursor:pointer;' onclick="escucharCancion(<?php echo($item['id']);?>);";><br/>

                      <div value="<?php echo($item['cancion_ruta']);?>" id="divsong<?php echo($item['id']);?>" style="display:none;">
                            <h2>Información audio</h2>
                            <div id="length<?php echo($item['id']);?>">Duración:</div>
                            <div id="currentTime<?php echo($item['id']);?>">0</div>
                            <div id="source<?php echo($item['id']);?>">0</div>
                            <div id="status<?php echo($item['id']);?>" style="color:red;">Status: Loading</div><br/>
                            <button id="play<?php echo($item['id']);?>">Play</button>
                            <button id="pause<?php echo($item['id']);?>">Pause</button>
                            <button id="restart<?php echo($item['id']);?>">Restart</button>
                            <br/><br/>
                      </div>

                      <div id="autor<?php echo($item['id']);?>" class="claseAutor<?php echo $item['autor']?>" style="bordeR:1px solid black;" value="<?php echo($item['autor']);?>">
                          <?php echo $item['autor']?>
                      </div><br/>

                      <div id="cancion<?php echo($item['id']);?>" style="border:1px solid black;" value="<?php echo($item['nombre_cancion']);?>">
                          <?php echo $item['nombre_cancion']?>
                      </div><br/>

                      <div id="estiloCancionDiv" class="estiloMusical <?php echo $item['estilo']?>" style="bordeR:1px solid black;">
                          <?php echo $item['estilo']?>
                      </div><br/>

                      <div id="anoCancionDiv<?php echo $item['ano']?>" style="bordeR:1px solid black;" >
                          <?php echo $item['ano']?>
                      </div><br/>

                      <div id="puntuacionCancionDiv" style="bordeR:1px solid black;">
                          <?php echo round($puntos['media'])?> puntos
                      </div>
                </div>



                <br/>
            <!-- END OF PAINTING DIFERENT DIVS -->
            <?php
            }
            mysqli_close($conn);
            ?>

            </div>
            <hr/>
            <div style="display:none;" id="noResultados">

            </div>
        </div>
  </div>

</body>
</html>
