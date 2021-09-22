<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablita para los whaches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script data-ad-client="ca-pub-4188818814719897" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body class="bg-dark text-white">

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h3 class="text-center">Hora central</h3>
            <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=Africa%2FOuagadougou&show=hour_minute" width="100%" height="90" frameborder="0" seamless></iframe>
        </div>
        <div class="col-sm-6">
        <h3 class="text-center">Hora Argentina</h3>
        <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FArgentina%2FBuenos_Aires&show=hour_minute" width="100%" height="90" frameborder="0" seamless></iframe>
        </div>
    </div>

    <h1 class="text-center">Horarios de Argentina</h1>
<table class="table table-sm table-bordered table-responsive">
    <thead>
        <tr class="bg-dark text-white">
            <th class='text-center'>Grupo 1</th>
            <th class='text-center'>Grupo 2</th>
            <th class='text-center'>Grupo 3</th>
            <th class='text-center'>Grupo 4</th>
            <th class='text-center'>Grupo 5</th>
            <th class='text-center'>Grupo 6</th>
            <th class='text-center'>Grupo 7</th>
            <th class='text-center'>Grupo 8</th>
            <th class='text-center'>Grupo 9</th>
            <th class='text-center'>Grupo 10</th>
        </tr>
    </thead>
    <tbody>
<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');

$interval = 1800; // Interval in seconds

$date_first     = date('Y-m-d')." 02:25";
$date_second    = date("Y-m-d"." 02:10",strtotime(date('Y-m-d')." + 1 days"));;

$time_first     = strtotime($date_first);
$time_second    = strtotime($date_second);
$g = 1;
for ($i = $time_first; $i < $time_second; $i += $interval){
    if ($g == 1) {
        echo "<tr>";
    }
$g++;
if (date('H:i') >= date('H:i', $i) &&  date('H:i') <= date('H:i', strtotime('+29 minute' ,$i))) {
    echo "<td class='text-center'><span class='badge bg-light text-dark'>".date('H:i', $i)."</span></td>";
}else {
    echo "<td class='text-center text-white'>".date('H:i', $i)."</td>";
}
    
    if ($g == 11) {
        echo "</tr>";
        $g = 1;
    }
}
?>
    </tbody>
</table>
</div>
<script>
    setInterval(function(){
        location.reload();
    }, 60000)

</script>
</body>
</html>