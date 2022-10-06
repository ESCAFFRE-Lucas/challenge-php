<?php
class Geolocation {
    public static function fromGeoPoints(float $x1, float $x2, float $y1, float $y2): float {
        $earthRadius = 6371000;

        $latFrom = deg2rad($x1);
        $lonFrom = deg2rad($x2);
        $latTo = deg2rad($y1);
        $lonTo = deg2rad($y2);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
                cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        return floor($angle * $earthRadius / 100) / 10;
    }
}
$calc = Geolocation::fromGeoPoints(40.76, -73.984, 38.89, -77.032);
echo $calc;