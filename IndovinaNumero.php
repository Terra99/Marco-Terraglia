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
          if(isset($_GET['Conferma']))
          {
            $_GET['tentativo']++;
          }
          else
          {
            $tentativo = 1;
            echo $tentativo;
          };
        ?>
      </h3>
      <form action = "" method ="get">
        <input type="text"/>
        <input type="hidden" name="tentativo" value="<?php echo $tentativo;?>"/>
        <input type="submit" name="Conferma" value="Conferma"/>
      </form>
    </div>
      
  </body>
  
</html>
  