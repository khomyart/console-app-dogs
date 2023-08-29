<?php

namespace App;

use App\Entities\Dog;
use App\Entities\HowlingDog;
use App\Entities\HunteringDog;

use App\Helpers\Console;
use App\Helpers\AdditionalFunctions;

class Application {

    /**
     * Run console application
     */
    public static function run() {
        /**
         * key - name of a dog
         * value - dog entity
         */
        $dogs = [
            "siba-inu" => new HunteringDog("Siba-inu", "wraf! wraf!"),
            "dachshund" => new HowlingDog("Dachshund", "waf! waf!"),
            "ruber dachshund" => new HowlingDog("Ruber dachshund", "pii-iiih! pii-iiih!"),
            "plush labrador" => new Dog("Plush labrador"),
            "mops" => new HowlingDog("Dachshund", "waf! waf!"),
        ];

        /**
         * key - name of action
         * value - name of the method
         */
        $actions = [
            "hunt" => "doHunting", 
            "sound" => "makeSound",
        ];

        $availableInputDogs = AdditionalFunctions::availableDogs($dogs); 
        $availableInputActions = AdditionalFunctions::availableActions($actions);
        Console::output(
            "
            Available dogs: {$availableInputDogs}.\n
            Available actions: {$availableInputActions}."
        );

        while(true) {
            $inputString = Console::input();
            $devidedInputString = explode(" ", strtolower($inputString));
            
            if (count($devidedInputString) < 2) {
                Console::output("incorrect command (minimum length is 2 words)");
                continue;
            }
        
            $dogName = AdditionalFunctions::getDogName($inputString);
            
            if (!array_key_exists($dogName, $dogs)) {
                Console::output("no such dog - $dogName!");
                continue;
            }
        
            if (!array_key_exists(end($devidedInputString), $actions)) {
                Console::output("no such action!");
                continue;
            }
            
            $dogEntity  = $dogs[$dogName];
            $command    = end($devidedInputString);
            $isDogCan   = [
                "hunt"  => is_a($dogEntity, "App\Interfaces\HunterDogInterface"),
                "sound" => is_a($dogEntity, "App\Interfaces\LoudDogInterface"),
            ];
            
            if ($isDogCan[$command]) {
                $action = $actions[$command];
                $dogEntity->$action();
            } else {
                $dogName = ucwords($dogName);
                Console::output("$dogName cannot $command!");
            }
        }
    }
} 