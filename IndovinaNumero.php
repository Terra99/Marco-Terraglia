<!DOCTYPE html>
<html>
  <head>
    <link href="Terraglia.css" rel="stylesheet" type="text/css"/>
    <title> Indovina numero </title>
  </head>
 
  <body>
    <div id = "container">
      <h1 id = "titolo">
        Gioco dell'indovina numero
      </h1>
      <h3>
        Tentativo n. 
        <?php
          if(isset($_POST['Conferma']))
          {  
            $rand = $_POST['rand'];
            $numero = $_POST['numero'];
            $tentativo = $_POST['tentativo'];
            if($numero != $rand)
            {
              $tentativo = $tentativo +1;
            }
            echo $tentativo;
            if ($tentativo > 7)
            {
              
              echo "<br>"."HAI PERSO."."<br>"."HAI SUPERATO I 7 TENTATIVI." . "<br>";
              ?>
              <input class="button" type ="submit" value = "Torna all'inizio" onclick = "location.href = 'index.html'"/>              
              <?php
            }
            else if($numero == $rand)
            {
              
              echo "<br>"."HAI VINTO IN ".$tentativo ." TENTATIVI!" . "<br>" . "IL NUMERO ERA: " . $rand . "<br>";
              ?>
              <input class="button" type ="submit" value = "Torna all'inizio" onclick = "location.href = 'index.html'"/>              
              <?php
            }
            else
            {              
              if($numero < $rand)
              {
                echo "<br>"."Numero troppo piccolo";
              }
              else if($numero > $rand)
              {
                echo "<br>"."Numero troppo grande";
              } 
              ?>
              <form action = "" method ="post">
              <input type="text" name="numero" />
              <input type="hidden" name="tentativo" value="<?php echo $tentativo;?>"/>
              <input type="hidden" name="rand" value="<?php echo $rand;?>"/>
              <input class="button" type="submit" name="Conferma" value="Conferma"/>
            </form>
        <?php
            }
          }
          else
          {         
            $rand=rand(1, 10);
            $tentativo=1;
            echo $tentativo;
            ?>
            <form action = "" method ="post">
            <input type="text" name="numero" />
            <input type="hidden" name="tentativo" value="<?php echo $tentativo;?>"/>
            <input type="hidden" name="rand" value="<?php echo $rand;?>"/>
            <input class="button" type="submit" name="Conferma" value="Conferma"/>
          </form>
        <?php
          };
        ?>
      </h3>
    </div>
      
  </body>  
</html>
  