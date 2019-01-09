<?php
if (isset($_GET["devblog"])){
  $title = $_GET["devblog"];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Devblog <?php $title ?></title>
    <link rel="shortcut icon" href="../favicon.png">
    <link rel="stylesheet" href="../../css/master.css">
    <link rel="stylesheet" href="../css/devblog.css">
    <script src="../javascript/jquery.js" charset="utf-8"></script>
    <script src="../javascript/gallery.js" charset="utf-8"></script>
    <script src="../javascript/teammember.js" charset="utf-8"></script>
    <script src="../javascript/countnotes.js" charset="utf-8"></script>
    <script src="../javascript/devblogpost.js" charset="utf-8"></script>
  </head>
  <body>
    <?php
    include '../header.php';
    if (isset($_GET["devblog"])) {
      $link = "devblog" . $_GET["devblog"] . ".html";
      if (file_exists($link)) {
    include ($link);
  }else {
    include './notfound.html';
  }
    }else {
      include './blog.html';
    }
    include '../../footer.php';
    ?>
  </body>
</html>
