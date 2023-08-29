<?php 

namespace App\Helpers;

class AdditionalFunctions {
    /**
     * Receive dog name from console user input string
     * 
     * @param $roughInputString console input
     * @return string dog name
     */
    public static function getDogName($roughInputString) {
        $dogName = "";
        $devidedInputString = explode(" ", strtolower($roughInputString));

        for ($i=0; $i < count($devidedInputString) - 1; $i++) { 
            $dogName .= " $devidedInputString[$i]";
        }

        return trim($dogName);
    }

    /**
     * @param $dogs list of dogs
     * @return string available dogs names
     */
    public static function availableDogs($dogs) {
        return implode(", ",array_keys($dogs));
    }

    /**
     * @param $actions list of actions
     * @return string available actions names
     */
    public static function availableActions($actions) {
        return implode(", ",array_keys($actions));
    }
}