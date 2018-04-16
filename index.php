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
        /**
         * Funkcja zwraca wartość odległości 
         * pomiędzy punktami w metrach
         *
         * @param array $aPoint
         * @param array $bPoint
         *
         * @return number
        */
        public function getDistanceInMeters(array $aPoint, array $bPoint)
        {
            $earthRadius = 6371000;// promień Ziemi w metrach
            $diffLat = $aPoint['latitude'] - $bPoint['latitude'];
            $diffLng = $aPoint['longitude'] - $bPoint['longitude'];
            $a = sin($diffLat / 2) * sin($diffLat / 2) + cos($bPoint['latitude']) * cos($aPoint['latitude']) * sin($diffLng / 2) * sin($diffLng / 2);
            
            $b = 2 * asin(sqrt($a));
            // $b = 2 * atan2( sqrt($a), sqrt(1-$a) );
            $distance = round(($earthRadius * $b), 2);
            
            return $distance;
            
        }//end getDistanceInMeters
    ?>
</body>
</html>