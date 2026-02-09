<?php
    $users = [
        [
            "firstName" => "Hugues",
            "lastName" => "Froger"
        ],
        [
            "firstName" => "Mari",
            "lastName" => "Doucet"
        ]
    ];
    
    foreach($users as $user){
        // foreach($user as $key => $name){
        //     echo "$name"." ";
        // };
        // echo "<br>";
        echo "{$user["firstName"]} {$user["lastName"]} <br>";
    };
?>