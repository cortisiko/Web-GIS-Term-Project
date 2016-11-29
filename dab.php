<?php
require_once('connection.php');
header('Content-Type: application/json');

$result = pg_query($connect,"SELECT distinct thestartgeom FROM citibike");
if (!$result){
    echo '{"error":"no results"}';
}

$points= array();
while($row = pg_fetch_array($result)){
    $coordinate = json_decode($row['thestartgeom'])->coordinates;
    $p = new stdClass;
    $p->lat = $coordinate[0];
    $p->long = $coordinate[1];
    array_push($points, $p);
}
$output = new stdClass;
$output->points = $points;
echo json_encode($output);
pg_close($connect);
?>

