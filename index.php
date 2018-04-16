<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>React Simple Calc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php 
        include 'calc.php';

        $a['latitude']=54.3821;
        $a['longitude']=18.454;

        $b['latitude']=54.5037439;
        $b['longitude']=18.3233968;

        $c['latitude']=52.17;
        $c['longitude']=20.9725;
        
        echo getDistanceInMeters($a, $b).'<br>';
        echo getDistanceInMeters($a, $c).'<br>';
    ?>
</body>
</html>