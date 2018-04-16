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
        
        function getDistanceInMeters(array $aPoint, array $bPoint){
            $earthRadius = 6371000;// promień Ziemi w metrach
            $diffLat = $aPoint['latitude'] - $bPoint['latitude'];
            $diffLng = $aPoint['longitude'] - $bPoint['longitude'];
            $a = sin($diffLat / 2) * sin($diffLat / 2) + cos($bPoint['latitude']) * cos($aPoint['latitude']) * sin($diffLng / 2) * sin($diffLng / 2);
            
            $b = 2 * asin(sqrt($a));
            // $b = 2 * atan2( sqrt($a), sqrt(1-$a) );
            $distance = round(($earthRadius * $b), 2);
            
            return $distance;
            
        }//end getDistanceInMeters

        $a['latitude']=54.360763;
        $a['longitude']=18.4098512;

        $b['latitude']=54.5037439;
        $b['longitude']=18.3233968;

        $c['latitude']=52.232855;
        $c['longitude']=20.9211115;
        
        //echo getDistanceInMeters($a, $b).'<br>';
        //echo getDistanceInMeters($a, $c);
        
/*
        echo '---- <br><br>';
        $string = file_get_contents("api/airports.json");
        $json_a = json_decode($string, true);
        echo $json_a[0]['lat'].'<br>';
        echo $json_a[0]['lon'].'<br>';
        echo $json_a[0]['name'].'<br>';
        echo $json_a[0]['country'].'<br>';
*/
?>