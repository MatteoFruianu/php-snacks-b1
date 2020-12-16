<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Snacks b1</title>
</head>
<body>


<!-- DESCRIZIONE:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
    



<?php


//query string ?name=matteo&mail=matteo@gmail.com&age=32


//check params

if ( empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])  ) {


    echo 'Errore, mancano parametri';
}

//check name

elseif (strlen($_GET['name']) <= 3) {
    echo 'accesso negato, nome troppo corto';
}

//check mail



elseif ( strpos( $_GET['mail'], '@') === false || strpos( $_GET['mail'], '.') === false )  {

    echo 'accesso negato, formato mail non corretto';

}

//check age

elseif ( is_numeric($_GET['age']) === false ) {
    echo 'eta non valida';
}

else {
    echo 'accesso riuscito';
}

 

?>


    

</body>
</html>