<html>
    <head>
        <meta charset="UTF-8">
        <title>Doc_main</title>
            <link rel="stylesheet" href="./style.css">
            <?php require_once './archivos.php';?>
    </head>
    <body>
        <header>
          <h1 id="titulo">Reservas de Teatro</h1>
          <h2> Nomenclatura:</h2>
          <h4> V: vendido<br>R: Reservado<br>L: Libre</h4>
            <p>
              Los asientos Libres(L) pueden cambiar de estado a: (R)reservado y (V)vendido
              <br>
              también los reservados(R) pueden cambiar de estado a (L)libre y (V)vendido
              <br>
              los vendidos(V) no pueden cambiar su estado.
            </p>
        </header>
        <main>
              <!-- se comenta ya la variable $op inicializa null<?php
                  if (isset($_POST['puesto'])) {
                          $p = $_POST['puesto'];   
                  };
                  if (isset($_POST['intereses'])) {
                          $op = $_POST['intereses'];
                          echo '<br>';#print_r($col1);
                      }else{
                            $op == 'liberar';
                  };
                    #variable para los mensajes
                    $z = '<script language="javascript">alert("Esta operación no puede realizarce");</script>';
                  if (isset($_POST['fila'])) {
                      $f = $_POST['fila'];
                      $j = FilasTotal($f,$op,$col1,$col2,$col3,$col4,$col5,$p);
                              #print_r($j); para verificar que llege la información
                              if ($_POST['fila']==1){
                                  if ($col1 == $j){
                                      echo $z;
                                  }elseif($col1 !== $j){#comprueba si la variable es distinta
                                      $col1 = &$j; };
                                };
                              if ($_POST['fila']==2){
                                  if ($col2 == $j){
                                      echo $z;
                                  }elseif($col2 !== $j){
                                      $col2 = &$j; };
                                };
                              if ($_POST['fila']==3){
                                  if ($col3 == $j){
                                      echo $z;
                                  }elseif($col3 !== $j){
                                      $col3 = &$j; };
                                };
                              if ($_POST['fila']==4){
                                  if ($col4 == $j){
                                      echo $z;
                                  }elseif($col4 !== $j){
                                      $col4 = &$j; };
                                };
                              if ($_POST['fila']==5){
                                    if ($col5 == $j){
                                      echo $z;
                                  }elseif($col5 !== $j){
                                      $col5 = &$j; };
                                };
                    };?>  -->
          <section>   
              <table class="egt">
                <thead>
                    <tr>
                      <th colspan="6">ESCENARIO</th>
                    </tr>
                    <tr>
                      <th ></th>  <!--para pintar de negrilla -->
                      <th>Puesto 1 </th>
                      <th>Puesto 2 </th>
                      <th>Puesto 3 </th>
                      <th>Puesto 4 </th>
                      <th>Puesto 5 </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Fila 1</th>
                        <?php foreach($col1 as $jK){ ?>
                      <td><?php echo $jK; ?></td>
                        <?php # completar tabla con foreach
                              };?>
                    </tr>
                    <tr>
                        <th>Fila 2</th>
                          <?php foreach($col2 as $jK){ ?>
                      <td><?php echo $jK ?></td>
                          <?php };?>
                    </tr>
                    <tr>
                        <th>Fila 3</th>
                          <?php foreach($col3 as $h){ ?>
                      <td><?php echo $h ?></td>
                          <?php };?>
                    </tr>
                    <tr>
                        <th>Fila 4</th>
                        <?php foreach($col4 as $jK){ ?>
                      <td><?php echo $jK ?></td>
                          <?php };?>
                    </tr>
                    <tr>
                        <th>Fila 5</th>
                        <?php foreach($col5 as $jK){ ?>
                      <td><?php echo $jK; ?></td>
                        <?php };?>
                    </tr>
                </tbody>
              </table>  
          </section>     
          <section>           
            <form method="post" action="index.php">
                  <br>
                   <p> <label> Fila</label>
                  <input type="text" name="fila" placeholder="de  1 a 5" value="" required>
                  <br>
                    <label> Puesto </label>
                  <input type="text" name="puesto" value="" placeholder="de  1 a 5" required>
                  <br>
                  <!--Radio butons-->
                    <input type="radio" name="intereses" value="reserva" checked="" required>
                      <label> Reserva </label>
                    <br>
                    <input type="radio" name="intereses" value="compra" checked="" required>
                      <label> Compra </label>
                    <br>
                    <input type="radio" name="intereses" value="liberar" checked="" required>
                      <label> Liberar </label>
                      </p> 
                    <br>
                   <button type="submit" class="button">Enviar</button>
            </form>
          </section>
        </main>
        <footer>
          <p><!-- verificar información recibida-->
            <textarea style=""cols="4"rows="6">
              <?php echo informacionTextarea($col1,$col2,$col3,$col4,$col5); ?>
            </textarea>
          </p>
        </footer>
    </body >
</html>