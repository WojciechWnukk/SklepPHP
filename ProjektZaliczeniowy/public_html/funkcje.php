<?php


function dodajdoBD($bd) {
    return walidacja($bd);
}

function walidacja($bd) {
    
    $zawartosc = "";

    $args = ['username' => ['filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/^[A-Z]{1}[a-ząęłńśćźżó-]{1,25}$/']
        ],
        'password' => FILTER_SANITIZE_FULL_SPECIAL_CHARS
    ];
    //przefiltruj dane z GET/POST zgodnie z ustawionymi w $args filtrami:
    $dane = filter_input_array(INPUT_POST, $args);
    //pokaż tablicę po przefiltrowaniu - sprawdź wyniki filtrowania:
    //var_dump($dane);
    //Sprawdź czy dane w tablicy $dane nie zawierają błędów walidacji:
    $errors = "";
    foreach ($dane as $key => $val) {
        if ($val === false or $val === NULL) {
            $errors .= $key . " ";
        }
    }
    if ($errors === "") {
        $username = $dane['username'];
        $password = $dane['password'];
        $debug = var_export($_POST['jezyki'], true);
        $zawartosc.= "$debug";
        $sql = "INSERT INTO klienci (Id ,username, password)
                 VALUES (NULL, '$username', '$password')";
        if ($bd->insert($sql) === TRUE) {
            $zawartosc .= "Dodano do bazy";
        } else {
            $zawartosc .= "Nie dodano do bazy";
        }
    } else {
        $zawartosc .= "<br>Nie poprawnie dane: " . $errors;
    }
    return $zawartosc;
}

$route = __DIR__;
include_once "$route/../klasy/Baza.php";
$bd = new Baza("localhost", "root", "", "klienci");

if ($_POST["buttonName"] == "submit") {
    $akcja = $_POST["button"];
    switch ($akcja) {
        case "register" : echo dodajdoBD($bd);
            break;
        case "Pokaz" : echo $bd->select("select username,password from klienci", ["username", "password"]);
            break;

    }
}