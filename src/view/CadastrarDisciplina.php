<!doctype html>
<html lang="pt-br">
  <head>
      <title>Seja Bem Vindo...</title>
      <meta charset="UTF-8">
  	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/bootstrap-responsive.css" rel="stylesheet">
  	  <link href="css/stilo.css" rel="stylesheet">
      <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
      <![endif]-->
  </head>
  <body>

    <div class="container">
      <?php 
      //inclui o arquivo de topo na pagina
        include('topo.php'); 
      // inclui o arquivo de menu responsivo no sistema
        include('menu.php'); ?>
        <!-- Conteudo do sistema   -->
        <section> 
            <div class="row-fluid">
                    <div id="conteudo">
                            <div class="span12">
                                <form class="form-horizontal" method="post" action="index.php?pg=InserirDisciplina" >
                                <fieldset>

                                <!-- Select Basic -->
                                <div class="control-group">
                                  <label class="control-label" for="semestre">Selecione o Semestre</label>
                                  <div class="controls">
                                    <select id="semestre" name="semestre" class="input-small">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="opt">Opt</option>
                                    </select>
                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="codigo">Codigo</label>
                                  <div class="controls">
                                    <input id="codigo" name="codigo" placeholder="" class="input-large" type="text">

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="nome">Nome</label>
                                  <div class="controls">
                                    <input id="nome" name="nome" placeholder="" class="input-large" type="text">

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="abreviacao">Abreviação</label>
                                  <div class="controls">
                                    <input id="abreviacao" name="abreviacao" placeholder="" class="input-large" type="text">

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="cargahoraria">Carga Horaria</label>
                                  <div class="controls">
                                    <input id="cargahoraria" name="cargahoraria" placeholder="" class="input-large" type="text">

                                  </div>
                                </div>
                                
                                <!-- Text input-->
                                <div class="control-group">
                                  <div class="controls">
                                      <input id="curso" name="curso" value="<?php echo $curso; ?>" placeholder="" class="input-large" required="" type="hidden">
                                    <p class="help-block"></p>
                                  </div>
                                </div>
                                
                                <!-- Text input-->
                                <div class="control-group">
                                  <div class="controls">
                                      <input id="idmatriz" name="idmatriz" value="<?php echo $matriz['id']; ?>" placeholder="" class="input-large" required="" type="hidden">
                                    <p class="help-block"></p>
                                  </div>
                                </div>

                                <!-- Multiple Radios (inline) -->
                                <div class="control-group">
                                  <label class="control-label" for="tipo">Selecione o Tipo</label>
                                  <div class="controls">
                                    <label class="radio inline" for="tipo-0">
                                      <input name="tipo" id="tipo-0" value="T" type="radio">
                                      Teorica
                                    </label>
                                    <label class="radio inline" for="tipo-1">
                                      <input name="tipo" id="tipo-1" value="P" type="radio">
                                      Pratica
                                    </label>
                                  </div>
                                </div>

                                <!-- Button -->
                                <div class="control-group">
                                  <label class="control-label" for="salvar"></label>
                                  <div class="controls">
                                    <button id="salvar" name="salvar" class="btn btn-primary">Salvar</button>
                                  </div>
                                </div>

                                </fieldset>
                                </form>
                                <table class="table">
                                    <tr>
                                        <th>Semestre</th>
                                        <th>Codigo</th>
                                        <th>Nome</th>
                                        <th>Tipo</th>
                                        <th>Editar</th>
                                    </tr>
                                    <?php
                                     foreach ($disciplina as $dis) {
                                        echo '
                                    <tr>
                                        <td>'.$dis->dis_semestre.'</td>
                                        <td>'.$dis->dis_codigo.'</td>
                                        <td>'.$dis->dis_nome.'</td>
                                        <td>'.$dis->dis_tipo.'</td>
                                        <td><a class = "btn" href="index.php?pg=AlterarDisciplina&id='.$dis->id.'">Editar</a></td>
                                    </tr>';
                                     }
                                    ?>
                                    
                                </table>
                                    
                            </div>
                    </div>
            </div>
        </section>
        
        
       <!-- Fim do Conteudo do sistema   --> 
       <?php
       //inclui o arquivo de rodape no sistema
       include('rodape.php');?>
          
   
      
    </div><!-- fim da div container -->

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>


