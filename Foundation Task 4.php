<?php
    class ItemOwners {
        public static function groupByOwners($items) {
            if ($items != null) {
                $temp_Items = array();
                foreach ($items as $key => $value) {
                    if(!array_key_exists($value,$temp_Items))
                    {
                        $temp_Items += [$value => $key];
                    }
                    else{
                        $temp_Items["$value"] .= $key;
                    }
                }
                // print_r($temp_Items);
                foreach ($temp_Items as $key => $value) {
                    echo "Key : " .$key .  "    Value : " . $value . "<br>";
                }
            }
    }
}
    
    $items = array(
        "Baseball Bat" => "John",
        "Golf ball" => "Stan",
        "Tennis Racket" => "John",
        "Cricket Bat" => "Mandy",
        "Skates" => "Stan"
    );
    echo json_encode(ItemOwners::groupByOwners($items));


?>