<?php
$stringData = $_GET["data"];
$fh = file_put_contents('jobs.json', $stringData.PHP_EOL , FILE_APPEND);
fwrite($fh, $stringData);
fclose($fh)
?>