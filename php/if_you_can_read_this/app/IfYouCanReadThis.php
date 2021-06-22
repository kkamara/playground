<?php

namespace App;
/*
 *   Examples:
 *	 Input: If you can read
 *	 Output: India Foxtrot Yankee Oscar Uniform Charlie Alfa November Romeo Echo Alfa Delta
 */
class IfYouCanReadThis
{
    static function execute(string $string)
    {
        $commands = ['a' => 'Alfa', 'b' => 'Bravo', 'c' => 'Charlie', 'd' => 'Delta', 'e' => 'Echo', 'f' => 'Foxtrot', 'g' => 'Golf', 'h' => 'Hotel', 'i' => 'India', 'j' => 'Juliett', 'k' => 'Kilo', 'l' => 'Lima', 'm' => 'Mike', 'n' => 'November', 'o' => 'Oscar', 'p' => 'Papa', 'q' => 'Quebec', 'r' => 'Romeo', 's' => 'Sierra', 't' => 'Tango', 'u' => 'Uniform', 'v' => 'Victor', 'w' => 'Whiskey', 'x' => 'X-ray', 'y' => 'Yankee', 'z' => 'Zulu',];
        $in = str_split(strtolower($string));
        $out = "";

        for($i=0; $i < sizeof($in); $i++)
        {
            // get current $in value
            $val = $in[$i];
            $addSpace = false;
            // disregard empty strings
            if($val == " ") continue;
            // concatenate space to $out string if current iteration is not the last $in character
            if(sizeof($in) - 1 !== $i) $addSpace = true;

            $out .= $commands[$val] ?? $val;

            if($addSpace) $out .= " ";
        }

        return $out;
    }
}