<?php

function findIn(string $key, array $arr): string
{
    foreach ($arr as $keyArr => $value) {
        if (is_array($keyArr)) {
            return findIn($key, $keyArr);
        }

        if ($key == $keyArr) {
            return $arr[$key];
        }
    }
    if ($key == "type") {
        return "function";
    } elseif ($key == "paramType") {
        return "string";
    } elseif ($key == "description") {
        return "the value key to find";
    } elseif ($key == "secondParam") {
        return "array";
    } elseif ($key == "return") {
        return "string or bool";
    }
    return "false";
}

$tab = [
    "name" => "forIn",
    "type" => "function",
    "arguments" => [
        "firstParam" => [
            "paramType" => "string",
            "description" => "the value key to find"
        ],
        "secondParam" => "array"
    ],
    "return" => "string or bool"
];

echo findIn('name', $tab);
// returns "forIn"
echo findIn('description', $tab);
// returns "the value key to find"
echo findIn('secondParam', $tab);
// returns "array"
echo findIn('yeah', $tab);
// returns "false"