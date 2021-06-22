<?php

namespace App;

/**
 * You probably know the "like" system from Facebook and other pages. People can "like" blog posts, pictures or other items. We want to create the text that should be displayed next to such an item.
 * Implement a function likes :: [String] -> String, which must take in input array, containing the names of people who like an item. It must return the display text as shown in the examples:

 * likes [] // must be "no one likes this"
 * likes ["Peter"] // must be "Peter likes this"
 * likes ["Jacob", "Alex"] // must be "Jacob and Alex like this"
 * likes ["Max", "John", "Mark"] // must be "Max, John and Mark like this"
 * likes ["Alex", "Jacob", "Mark", "Max"] // must be "Alex, Jacob and 2 others like this"
 * For 4 or more names, the number in and 2 others simply increases.
 */
class WhoLikesIt
{
    /**
     * Executes this class solution.
     * 
     * @param  array  $names
     * @return string
     */
    public static function execute($names)
    {
        $namesLength = sizeof($names);

        switch($namesLength)
        {
            case 0:
                $string = 'no one likes this';
            break;
            case 1:
                $string = sprintf('%s likes this', $names[0]);
            break;
            case 2:
                $string = sprintf('%s and %s like this', $names[0], $names[1]);
            break;
            case 3:
                $string = sprintf('%s, %s and %s like this', $names[0], $names[1], $names[2]);
            break;
            default:
                $string = sprintf('%s, %s and %d others like this', $names[0], $names[1], $namesLength-2);
            break;
        }

        return $string;
    }
}