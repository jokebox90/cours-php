<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bases du PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Hello</h1>
    <?php

    /*
    Commentaire sur
    plusieurs lignes
    */

    // commentaire sur une ligne

    echo "Bonjour tout le monde";
    echo "<hr><h2>Affichage</h2>";
    echo 'coucou';
    ?>
    <?= "quelque chose"; ?>
    <br>
    <?php echo "quelque chose"; ?>
    <?php

    echo "<h2>Variables: types / déclaration / affectation </h2>";

    $a = 12; // affectation de la valeur 12 à la variable $a
    $b1 = 'Texte';

    echo gettype($a); // integer
    echo "<br>";
    echo gettype($b1); // string
    echo "<br>";
    $c = true;
    echo gettype($c); // boolean
    echo "<br>";

    // https://www.youtube.com/watch?v= mqo07yVKcbI
    // https://www.youtube.com/watch?v= H9-ekUCFCr0
    // https://www.youtube.com/watch?v= GAW1Yaw4QAY

    echo "<h2>Concaténation</h2>";

    $x = 'Bonjour';
    $y = 'tout le monde';
    echo $x . ' ' . $y . '<br>'; // le point est le symbole de concaténation en php

    // Concaténation à l'affectation
    $fruit = 'pomme';
    $fruit .= 'fraise'; // concaténation à l'affectation

    echo $fruit;

    // Créer une variable prenom et une variable nom, et afficher
    // je m'appelle prenom nom
    echo "<br>";
    $prenom = 'Frédéric';
    $nom = 'Leclercq';
    echo "Je m'appelle " . $prenom . " " . $nom . "<br>";
    echo "Je m'apelle $prenom  $nom<br>"; // entre guillements les variables sont interprêtées
    echo 'Je m\'apelle $prenom $nom<br>'; // entre quotes les variables devienent des chaines de caractère littérales
    echo 'Je m\'apelle ' . $prenom . ' ' . $nom . '<br>';

    echo "<h2>Constantes et Constantes magiques</h2>";
    // déclaration de constante
    define('CAPITALE', 'Paris'); // par convention une constante se déclare en majuscules

    echo CAPITALE . "<br>"; // affichage de la constante
    // define('CAPITALE','Lyon'); Impossible la constante existe déjà
    // CAPITALE = 'Lyon'; Impossible

    // Constantes magiques
    echo __FILE__ . "<br>"; // renvoie le fichier courant
    echo __LINE__ . "<br>"; // renvoie le numéro de ligne
    echo __DIR__ . "<br>"; // renvoie le dossier (directory) physique

    // Constantes spéciales
    var_dump(PHP_EOL); // correspond au retour chariot du système en cours
    // var_dump() est un outil de débugguage (console.log)

    echo "<h2>Opérateurs arithmétiques</h2>";
    $a = 10;
    $b = 5;
    echo $a + $b . "<br>"; // affiche 15
    echo $a - $b . "<br>"; // affiche 5
    echo $a * $b . "<br>"; // affiche 50
    echo $a / $b . "<br>"; // affiche 2
    echo $a % $b . "<br>"; // modulo affiche 0 (reste de la division entière)
    echo 10 % 3; // renvoie 1
    echo "<br>";

    $a += $b; // $a = $a + $b;
    // ici $a vaut 15

    $a -= 3; // $a = 15 -3;  12
    echo "a vaut $a <br>";

    // Si je dois ajouter ou soustraire 1 à ma variable
    $a += 1;
    $a++; // écriture raccourcie quand on incrémente de 1, incrémentation
    // ou
    $a--; // décrementation

    $a .= 1; // concaténation de 13 avec 1
    echo $a;

    echo "<h2>Structures conditionnelles</h2>";

    // if (condition.s qui renvoient un booléen)
    if ($a > $b) {
        echo "a supérieur à b <br>";
    } else {
        echo "a n'est pas supérieur à b <br>";
    }

    // isset() et empty()
    // var_dump(isset($a)); test d'existence d'une variable
    $var1 = 0;
    $var2 = '';
    if (isset($var2)) {
        echo "var2 existe et est défini par une chaine vide<br>";
    }
    if (empty($var2)) {
        echo "Effectivement var2 est vide<br>";
    }
    var_dump(empty($var2));
    var_dump(is_null($var2));

    if (empty($var1)) {
        echo "c'est vrai si c'est 0, vide ou non défini<br>";
    }
    if (empty($var3)) {
        echo "var3 n'existe pas<br>";
    }

    $a = 10;
    $b = 5;
    $c = 2;

    if ($a == 9) {
        echo "A vaut 9<br>";
    }
    if ($a != 9) {
        echo "A est différent de 9<br>";
    }

    // Structure if/elseif/else
    if ($a == 9) {
        echo "A vaut 9<br>";
    } elseif ($a != 10) { // on intercale une condition avec elseif ()
        echo "A différent de 10<br>";
    } else {
        echo "ni l'un ni l'autre<br>";
    }

    // ecriture alternative
    if ($a == 9) :
    // instructions
    else :
    // instructions
    endif;


    // Plusieurs conditions
    if ($a > $b && $b > $c) { // &&, ET
        echo "OK pour les deux conditions<br>";
    }

    if ($a == 9 || $b > $c) { // || Ou inclusif
        echo "OK pour au moins une des deux conditions<br>";
    }

    if ($a == 10 xor $b > $c) { // XOR Ou exclusif
        echo "on ne rentrera pas ici car VRAI XOR VRAI => FAUX";
    }

    // /!\ Quand on combine des conditions ET et OU ,il faut mettre des parenthèses pour prioriser les conditions

    $varA = 1; // integer
    $varB = '1'; // string

    if ($varA === $varB) {
        echo "c'est la même chose";
    }
    /*
        = affectation
        == comparaison en valeur
        === comparaison en valeur ET en type
        != différence en valeur
        !== différence en valeur OU en type
        falsy : false, 0, null
    */


    if ($varA === $varB) echo "c'est la même chose"; // valable si UNE seule instruction
    else echo "c'est different";

    echo "<hr>";
    // Formes contractées

    // Forme ternaire
    $sexe = 'm';
    echo ($sexe == 'm') ? 'Bonjour Monsieur' : 'Bonjour Madame';
    //    condition     ?   si oui          sinon
    $phrase = ($sexe == 'm') ? 'Bonjour Monsieur' : 'Bonjour Madame';

    if ($sexe == 'm') {
        $phrase = 'Bonjour Monsieur';
    } else {
        $phrase = 'Bonjour Madame';
    }

    echo "<br>";
    // Contractée PHP7
    $pays = 'France';
    // $departement = 'Seine et Marne';

    echo (isset($pays)) ? $pays : 'pays non renseigné';
    echo "<br>";
    echo $pays ?? 'pays non renseigné';
    echo "<br>";
    echo $departement ?? $region ?? $pays ?? 'situation géographique inconnue';
    // la première variable qui existe sera affichée
    echo "<br>";

    // la structure switch
    // quand la variable testée est toujours la même
    $console = 'Switch';

    switch($console){
        case 'PS5':
        case 'PS4' : echo "Produit Sony Playstation"; break;

        case 'XBOX Série X':
        case 'XBOX360' : echo "Produit Microsoft"; break;

        case 'Wii':
        case 'Wii U':
        case 'Switch': echo "Produit Nintendo"; break;

        // cas par défaut, si aucune condition préalable n'est remplie
        default: echo "console inconnue";
    }

    echo "<h2>Fonctions prédéfinies</h2>";

    // Dates
    // Fuseau horaire
    // date_default_timezone_set('Europe/Paris');
    date_default_timezone_set('America/Los_Angeles');
    setlocale(LC_ALL,'fr.utf8','fr_FR.utf8','fra.utf8');
    // setlocale(LC_ALL,'es.utf8','es_ES.utf8');
    echo date('l d/m/Y H:i:s');
    echo "<br>";
    echo strftime('%A %d %B %Y'); // Formatage de date dans la langue locale

    echo "<br>";
    echo date('l d/m/Y H:i:s',strtotime('1990-06-14 02:30:00'));
    //                         transforme en timestamp : nbre de secondes écoulées à compter du 01/01/1970 (date unix de réfèrence)

    echo "<br>";
    echo strftime('%A %d %B %Y', strtotime('1912-04-14 23:50:00') );
    echo "<br>";
    echo strtotime('1912-04-14 23:50:00');
    echo "<br>";
    echo strftime('%A %d %B %Y', strtotime('1789-07-14') );

    echo "<br>";
    echo time(); // affiche le timestamp courant

    // chaines de caractère
    echo "<hr>";

    echo iconv_strlen('bonjour'); // renvoie la longueur de chaine
    echo "<br>";
    $email = 'jean.dupond@gmail.com';
    echo strpos($email,'@'); // l'@ commence à la 11ème position
    // renvoie la position de départ de la première ocurrence
    var_dump(strpos($email,'r')); // si la chaine n'est pas trouvée, il renvoie false
    echo strpos($email,'j');
    echo "<br>";
    if( strpos($email,'j') !== false) {
        echo "j se trouve à la position " . strpos($email,'j') . '<br>';
    }

    echo "<hr>";
    // substr() sous-chaine
    $prenom = 'Frédéric';
    echo iconv_substr($prenom, 4); // on extrait à compter de la 4ème position (jusqu'à la fin)
    echo "<br>";
    echo iconv_substr($prenom,4,2); // on extrait à compter de la 4ème position et sur 2 caractères
    echo "<br>";

    // Exercice : extraire la partie nominative d'une adresse mail
    $email1 = 'jean.dupond@gmail.com'; // jean.dupond
    $email2 = 'mariedurantpalefranche@orange.fr'; // mariedurantpalefranche

    echo iconv_substr($email1,0, strpos($email1,'@') );
    echo "<br>";
    echo iconv_substr($email2,0, strpos($email2,'@') );

    echo "<hr>";
    // Bonus : extraire le provider de messagerie
    echo iconv_substr($email1,strpos($email1,'@')+1);
    echo "<br>";
    echo iconv_substr($email2,strpos($email2,'@')+1);

    echo "<hr>";
    // Fonctions sur les nombres
    // Arrondis
    echo round(2.2); //  arrondi à l'entier le plus proche
    echo "<br>";
    echo round(2.6);

    echo "<br>";
    echo floor(2.6); // arrondi à l'entier inférieur
    echo "<br>";
    echo ceil(2.2); // arrondi à l'entier supérieur

    echo "<br>";
    echo sqrt(25); // affiche 5
    echo "<br>";
    echo pow(4,2); // affiche 16 : 4²
    echo "<br>";
    echo 4 ** 2; // affiche 16

    // ALT + 0178 : ²
    // ALT + 0179 : ³
    echo "<br>";
    echo rand(10,20); // rand(borne_mini,borne_maxi); bornes incluses

    echo "<br><hr>";
    /*
    Exercice : Simuler 2 jets de dé(6), un pour l'ordi, un pour vous
    Donnez le resultat en comparant les deux scores
            - vous gagnez
            - vous perdez
            - match null

    rand(), if/elseif/else
    */

    $moi = rand(1,6);
    $ordi = rand(1,6);

    echo "Vous obtenez $moi et l'ordi obtient $ordi<br>";

    if( $moi > $ordi ){
        echo "Vous gagnez !<br>";
    }
    elseif( $ordi > $moi){
        echo "L'ordi gagne !<br>";
    }
    else{
        echo "Match nul !<br>";
    }



    ?>
</body>

</html>