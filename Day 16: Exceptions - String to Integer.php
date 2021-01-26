<?php


class Convert
{
    public static function convertToNumber(int $value)
    {
        echo $value;
    }
}



$handle = fopen("php://stdin", "r");
fscanf($handle, "%s", $S);
try {
    sscanf($S, "%d", $value);
    Convert::convertToNumber($value);
} catch (TypeError $e) {
    echo 'Bad String';
}
