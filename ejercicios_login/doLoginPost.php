<?php
$users = [
["xavi","1234567890"],
["iker","ikerloco"],
["raul","raulga"]
];
foreach($users as $i) {
    if ($_POST["user"] == $i[0] && $_POST["pswd"] == $i[1]) {
        echo "Login correcte!";
        break;
     }
     else {
        echo "Login incorrecte!";
     } 
}

?>