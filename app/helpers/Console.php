<?php

namespace App\Helpers;

class Console {
    /**
     * @return string user input result
     */
    public static function input() {
        echo("\n");
        $input = readline("Enter name of dog and its action: ");
        return $input;
    }

    /**
     * @param $string output string
     */
    public static function output($string) {
        echo("$string");
        echo("\n");
    }
}