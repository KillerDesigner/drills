<script type="text/javascript" src="js/jquery-1.7.1.js"></script>
<script type="text/javascript" src="js/jquery.pause.js"></script>
<script type="text/javascript" src="js/display.js"></script>
<link type="text/css" rel="stylesheet" href="style.css" />
<body>
<?php require_once('menu.php'); ?>
<textarea name="popis" rows="20">
<?php
if(isset($_GET['drillname']))
{
  $filename = $_GET['drillname'];
  $filename = 'data/' . preg_replace("/[^a-z]+/", "", $filename) . '.txt';

  if(file_exists($filename))
  {
    echo file_get_contents($filename);
  }
}
?>
</textarea>
<div id="playfield"></div>
<div class="control-panel"><button id="pause-button">PLAY</button></div>
</body>
