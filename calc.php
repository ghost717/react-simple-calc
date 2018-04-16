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
        
        //TYPOGRAPHY distance
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

        //CARTOGRAPHIC distance
        function distanceGeoPoints ($lat1, $lng1, $lat2, $lng2) {

                $earthRadius = 3958.75;
            
                $dLat = deg2rad($lat2-$lat1);
                $dLng = deg2rad($lng2-$lng1);
            
            
                $a = sin($dLat/2) * sin($dLat/2) +
                   cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
                   sin($dLng/2) * sin($dLng/2);
                $c = 2 * atan2(sqrt($a), sqrt(1-$a));
                $dist = $earthRadius * $c;
            
                // from miles
                $meterConversion = 1609;
                $geopointDistance = $dist * $meterConversion;
            
                return $geopointDistance;
        }
        
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