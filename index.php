<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th>Grupo 1</th>
            <th>Grupo 2</th>
            <th>Grupo 3</th>
            <th>Grupo 4</th>
            <th>Grupo 5</th>
            <th>Grupo 6</th>
            <th>Grupo 7</th>
            <th>Grupo 8</th>
        </tr>
    </thead>
    <tbody>
<?php
$interval = 1800; // Interval in seconds

$date_first     = date('Y-m-d')." 00:10";
$date_second    = date('Y-m-d')." 23:40";

$time_first     = strtotime($date_first);
$time_second    = strtotime($date_second);
$g = 1;
for ($i = $time_first; $i < $time_second; $i += $interval){
    if ($g == 1) {
        echo "<tr>";
    }
$g++;

    echo "<td>".date('H:i', $i)."</td>";
    if ($g == 9) {
        echo "</tr>";
        $g = 1;
    }
}
?>
    </tbody>
</table>
</div>

</body>
</html>