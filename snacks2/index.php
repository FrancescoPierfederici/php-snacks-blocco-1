<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php
$name = $_GET["name"];
$mail =$_GET["mail"];
$age =$_GET["age"];


// ESERCIZIO FLORIAN
// $name=" ";
// $age=" ";
// $mail=" ";

// cosi perchè se non scrivi il nome ti da errore



// if(key_exists("name", $_GET)){
//     $name=$_GET["name"];
// }
// if(key_exists("age", $_GET)){
//     $age=$_GET["age"];
// }
// if(key_exists("mail", $_GET)){
//     $mail=$_GET["mail"];
// }
// $valid=true;



$valid = true;

if (strrpos($mail, "@") === false) {
    $valid= false;
} else if (strrpos($mail, ".",strrpos($mail, "@") ) === false) {
    $valid = false;
}


if(strlen($name) <= 3) {
    $valid= false;
}

if (!is_numeric( $age)){
    $valid=false;

}



$result = $valid ? 'Accesso riuscito' : 'Accesso Negato';






?>



<div>
    <header>
        <nav>
            <ul>
                
                <li><?php echo $valid ? 'Accesso riuscito' : 'Accesso Negato';?></li>
                
            </ul>
        </nav>
    </header>
