<!DOCTYPE html>
 <html>
   <head>
     <title>Quadrados</title>
   </head>
   <body>
     <table>
       <tr>
        <th>juros</th>
         <th>tempo</th>
         <th>Montante</th>
       </tr>
       <?php
$juros = $_GET['num2'];
$tempo = $_GET['num3'];
$capital = $_GET['num1'];
$numero = $capital * (1 + $juros/100) ** $tempo;

if($numero >= 0):
       ?>
       <tr>
         <td><?= $juros ?></td>
         <td><?= $tempo ?></td>
         <td><?= $numero ?></td>
       </tr>
       <?php
    $quadrado = $numero * $numero; ?>
       <tr>
         <td><?= $numero ?></td>
         <td><?= $quadrado ?></td>
       </tr>
       <?php
endif;
?>
     </table>
   </body>
 </html>