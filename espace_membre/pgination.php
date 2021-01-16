<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=primfx;charset=utf8", "root", "");
$videosParPage = 10;
$videosTotalesReq = $bdd->query('SELECT id FROM videos');
$videosTotales = $videosTotalesReq->rowCount();
$pagesTotales = ceil($videosTotales/$videosParPage);
if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0 AND $_GET['page'] <= $pagesTotales) {
   $_GET['page'] = intval($_GET['page']);
   $pageCourante = $_GET['page'];
} else {
   $pageCourante = 1;
}
$depart = ($pageCourante-1)*$videosParPage;
?>
<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <?php
      $videos = $bdd->query('SELECT * FROM videos ORDER BY id DESC LIMIT '.$depart.','.$videosParPage);
      while($vid = $videos->fetch()) {
      ?>
      <b>N°<?php echo $vid['id']; ?> - <?php echo $vid['titre']; ?></b><br />
      <i><?php echo $vid['description']; ?></i>
      <br /><br />
      <?php
      }
      ?>
      <?php
      for($i=1;$i<=$pagesTotales;$i++) {
         if($i == $pageCourante) {
            echo $i.' ';
         } else {
            echo '<a href="index.php?page='.$i.'">'.$i.'</a> ';
         }
      }
      ?>
   </body>
</html>