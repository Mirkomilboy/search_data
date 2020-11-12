<?php
    // People array @TODO - Get from DB
    $people[] = "Ziyoviddin";
    $people[] = "Husniddin";
    $people[] = "Turgunboy";
    $people[] = "Musliddin";
    $people[] = "Nishonboy";
    $people[] = "Abdulaziz";
    $people[] = "Shahzod";
    $people[] = "Sarvartoy";
    $people[] = "Mirkomilboy";
    $people[] = "Ravshanbek";
    $people[] = "Javohir";
    $people[] = "Shahboz";
    $people[] = "Ziyodbek";
    $people[] = "Shohruh";
    $people[] = "Mirolim";
    $people[] = "Asilbek";
    $people[] = "Muhammadjon";
    $people[] = "Doniyor";
    $people[] = "Dilmurod";
    $people[] = "Hakimjon";
    $people[] = "Hayotbek";
    $people[] = "Murodil";
    $people[] = "Komiljon";
    $people[] = "Javlon";
    $people[] = "Abbos";
    $people[] = "Abdusoli";
    $people[] = "Baxtiyor";
    $people[] = "Asili";
    $people[] = "Islom";
    $people[] = "Izzatillo";
    $people[] = "Mavlonjon";
    $people[] = "Ibrohimjon";
    $people[] = "Tursunboy";
    $people[] = "Rustam";
    $people[] = "Ziyodillo";
    $people[] = "Saidjahon";
    $people[] = "Nurilloh";
    $people[] = "Farruh";
    $people[] = "Rahimjon";
    $people[] = "Abduvohid";
    $people[] = "Sardor";
    $people[] = "Omad";
    $people[] = "Xurshid";
    $people[] = "Farohiddin";
    $people[] = "Mavludbek";
    $people[] = "Biloliddin";
    $people[] = "Sadulla";
    $people[] = "Sanjar";
    $people[] = "Muslimbek";
    $people[] = "Shohjahon";
    $people[] = "Behzod";
    $people[] = "Nodir";

    // Get query string
    $q = $_REQUEST['q'];
    $suggestion = "";

    // Get suggestion
    if($q !== "") {
        $q = strtolower($q);
        $length = strlen($q);
        foreach($people as $person) {
            if(stristr($q, substr($person, 0, $length))) {
                if($suggestion === "") {
                    $suggestion = $person;
                } else {
                    $suggestion .= ", $person";
                }
            }
        }
    }
    echo $suggestion === "" ? "No Suggestion" : $suggestion;
?>