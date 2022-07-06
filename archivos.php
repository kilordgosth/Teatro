
<!--
04/05/2020
Nombre del Programa de Formación: Desarrollo web con PHP.
Codigo: 21730185.
Evidencia: Taller “Uso de formularios para transferencia”.
-->
<?php
        # Array donde se encuentra almacenada la información del Teatro
          $l = 'L';
          $r = 'R';#variables para los valores.
          $t = 'V';
            $col1 = array(1=>$t,2=>$r,3=>$l,4=>$l,5=>$l);
            $col2 = array(1=>$l,2=>$l,3=>$l,4=>$t,5=>$r);
            $col3 = array(1=>$r,2=>$r,3=>$t,4=>$t,5=>$l);
            $col4 = array(1=>$l,2=>$r,3=>$l,4=>$r,5=>$l);
            $col5 = array(1=>$l,2=>$l,3=>$t,4=>$l,5=>$r);
            
            
            # Funciones para separar por filas
            
        function FilasTotal($f,$op,$col1,$col2,$col3,$col4,$col5,$p){
               if ($f == '1'){
                    return $re1 = FilaUno($op,$col1,$p);
               };
               if($f == '2'){
                   return $re2 = FilaDos($op,$col2,$p);
               };
               if($f == '3'){
                   return $re3 = FilaDos($op,$col3,$p);
               };
               if($f == '4'){
                   return $re4 = FilaCuatro($op,$col4,$p);
               };
               if($f == 5){
                   return $re5 = FilaCinco($op,$col5,$p);
               };
        };
        # Funcion para aplicar logica de estados de las sillas
        #como: Libre, Reservado o Compra.
        function FilaUno($op,$col1,$p){
            if ($op == 'reserva' and $col1[$p] == 'L'){
               return $fila =array_replace($col1,array($p=>'R'));
            }elseif($op == 'compra'  and $col1[$p] == 'L'){
                return $fila=array_replace($col1,array($p=>'V'));
            }elseif($op == 'liberar'  and $col1[$p] == 'R'){
                return $fila=array_replace($col1,array($p=>'L'));
            }elseif($op == 'compra'  and $col1[$p] == 'R'){
                return $fila=array_replace($col1,array($p=>'V'));
                #---estos ultimos son los de el mensaje ya que no cambian
                # y asi se activa la ventanilla.
            }elseif($op == 'liberar'  and $col1[$p] == 'L'){
                return $fila=array_replace($col1,array($p=>'L'));
                
            }elseif($op == 'liberar'  and $col1[$p] == 'V'){
                return $fila=array_replace($col1,array($p=>'V'));
                
            }elseif($op == 'reserva'  and $col1[$p] == 'V'){
                return $fila=array_replace($col1,array($p=>'V'));
            };
        };
        function FilaDos($op,$col2,$p){
            if ($op == 'reserva' and $col2[$p] == 'L'){
                return $fila =array_replace($col2,array($p=>'R'));
            }elseif($op == 'compra' and $col2[$p] == 'L'){
                return $fila=array_replace($col2,array($p=>'V'));
            }elseif($op == 'liberar'  and $col2[$p] == 'R'){
                return $fila=array_replace($col2,array($p=>'L'));
            }elseif($op == 'compra'  and $col2[$p] == 'R'){
                return $fila=array_replace($col2,array($p=>'V'));
               #---estos ultimos son los de el mensaje ya que no cambian
                # y asi se activa la ventanilla.
            }elseif($op == 'liberar'  and $col2[$p] == 'L'){
                return $fila=array_replace($col2,array($p=>'L'));
            }elseif($op == 'liberar'  and $col2[$p] == 'V'){
                return $fila=array_replace($col2,array($p=>'V'));
            }elseif($op == 'reserva'  and $col2[$p] == 'V'){
                return $fila=array_replace($col2,array($p=>'V'));
            };
        };
        function FilaTres($op,$col3,$p){
            if ($op == 'reserva' and $col3[$p] == 'L'){
               return $fila =array_replace($col3,array($p=>'R'));
            }elseif($op == 'compra' and $col3[$p] == 'L'){
               return $fila=array_replace($col3,array($p=>'V'));
            }elseif($op == 'liberar'  and $col3[$p] == 'R'){
               return $fila=array_replace($col3,array($p=>'L'));
            }elseif($op == 'compra'  and $col3[$p] == 'R'){
               return $fila=array_replace($col3,array($p=>'V'));
               #---estos ultimos son los de el mensaje ya que no cambian
                # y asi se activa la ventanilla.
            }elseif($op == 'liberar'  and $col3[$p] == 'L'){
               return $fila=array_replace($col3,array($p=>'L')); 
            }elseif($op == 'liberar'  and $col3[$p] == 'V'){
               return $fila=array_replace($col3,array($p=>'V'));   
            }elseif($op == 'reserva'  and $col3[$p] == 'V'){
                return $fila=array_replace($col3,array($p=>'V'));  
            };
        };
        function FilaCuatro($op,$col4,$p){
            if ($op == 'reserva' and $col4[$p] == 'L'){
                return $fila =array_replace($col4,array($p=>'R'));
            }elseif($op == 'compra' and $col4[$p] == 'L'){
               return $fila=array_replace($col4,array($p=>'V'));
            }elseif($op == 'liberar'  and $col4[$p] == 'R'){
               return $fila=array_replace($col4,array($p=>'L'));
            }elseif($op == 'compra'  and $col4[$p] == 'R'){
               return $fila=array_replace($col4,array($p=>'V'));
               #---estos ultimos son los de el mensaje ya que no cambian
                # y asi se activa la ventanilla.
            }elseif($op == 'liberar'  and $col4[$p] == 'L'){
                return $fila=array_replace($col4,array($p=>'L'));
            }elseif($op == 'liberar'  and $col4[$p] == 'V'){
                return $fila=array_replace($col4,array($p=>'V'));
            }elseif($op == 'reserva'  and $col4[$p] == 'V'){
                return $fila=array_replace($col4,array($p=>'V'));
            };
        };
            
        function FilaCinco($op,$col5,$p){
            if ($op == 'reserva' and $col5[$p] == 'L'){
                return $fila =array_replace($col5,array($p=>'R'));
            }elseif($op == 'compra' and $col5[$p] == 'L'){
                   return $fila=array_replace($col5,array($p=>'V'));
            }elseif($op == 'liberar'  and $col5[$p] == 'R'){
               return $fila=array_replace($col5,array($p=>'L'));
            }elseif($op == 'compra'  and $col5[$p] == 'R'){
               return $fila=array_replace($col5,array($p=>'V'));
              #---estos ultimos son los de el mensaje ya que no cambian
                # y asi se activa la ventanilla.
            }elseif($op == 'liberar'  and $col5[$p] == 'L'){
                return $fila=array_replace($col5,array($p=>'L'));
            }elseif($op == 'liberar'  and $col5[$p] == 'V'){
                return $fila=array_replace($col5,array($p=>'V'));
            }elseif($op == 'reserva'  and $col5[$p] == 'V'){
                return $fila=array_replace($col5,array($p=>'V')); 
            };
        };
        function informacionTextarea($col1,$col2,$col3,$col4,$col5){
            $c0 = implode($col1);
            $c1 = implode($col2);
            $c2 = implode($col3);
            $c3 = implode($col4);
            $c4 = implode($col5);   
            $jk ="\n".$c0."\n".$c1."\n".$c2."\n".$c3."\n".$c4;;
          return $jk;  
        };
     /*       
    foreach($_POST as $key => $val) {
    print "$key = $val <br>";
    }*/