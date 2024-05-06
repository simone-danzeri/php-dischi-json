<?php
$discs_json = file_get_contents('dischi.json');
$discs = json_decode($discs_json);

header('Content-Type: application/json');
echo json_encode($discs);
?>