<?php

try{
    $bdd = new PDO("mysql:host=localhost;dbname=web;charset=utf8", "root", "");
}
catch(Exception $e)
{
    die("Impossible d'accéder à la bdd");
}
?>


<html>
<head>
    <meta charset="utf-8">
    <title>Escape game</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript">
        document.onselectstart=new Function("return false");
        document.oncontextmenu= new Function("return false");
        document.ondragstart= new Function("return false");
    </script>

</head>
<body onload="timer">
<!--audio controls style="visibility: hidden;" autoplay>
    <source src="sfx/audio/fts.mp3" >
</audio-->

<?php
        //initialisation des variables principales
$heures   = 0;
$minutes  = 3;
$secondes = 0;
        //utilisation de la fonction data pour récupérer ses variables automatiques
$annee = date("Y");
$mois  = date("m");
$jour  = date("d");
        //création de la page perdante
$redirection = "pages/youvelost.php";
        //seconde est inmplémenté avec mktime()-time()
$secondes = mktime(date("H") + $heures, date("i") + $minutes, date("s") + $secondes, $mois, $jour, $annee) - time();

        //tant que seconde ne dépasse pas le nombre qu'il y'a dans 24h
        //on affiche la fonction minutes qui décompte les secondes
if ($secondes <= 3600*24) {
    ?>
    <span style="font-size: 10px;left:100%;">Il vous reste comme temps :
    <div id="minutes" style="font-size: 12pt;"></div></span>
    <?php
}
        //affiche les différentes pages via méthode ob_start()
echo $content;


?>

<script type="text/javascript">
/*recuperation de la variable seconde*/
    var temps = <?php echo $secondes;?>;

    var timer =setInterval('CompteaRebour()',1000);
/*interactite page */
    function CompteaRebour(){

        temps-- ;
        j = parseInt(temps) ;
        h = parseInt(temps/3600) ;
        m = parseInt((temps%3600)/60) ;
        s = parseInt((temps%3600)%60) ;
        document.getElementById('minutes').innerHTML= (m<10 ? "0"+m : m) + ' min : ' +
            (s<10 ? "0"+s : s) + ' s ';
        if ((s == 0 && m ==0)) {
            clearInterval(timer);
            url = "<?php echo $redirection;?>"
            Redirection(url)
        }
    }
    function Redirection(url) {
        setTimeout("window.location=url", 500)
    }
</script>


<script src="script.js"></script>



<?php

/*var_dump(json_decode($json, true));
*/

$parted_json = json_decode($json);
$id_niveau = $parted_json->{'idNiveau'};

if(isset($_POST['submit'])) {
    $_answer = $_POST['answer'];
    $_level = $id_niveau;

    $requete = $bdd->query("SELECT solution FROM niveau where idNiveau='$_level'");

    $s=$requete->fetch(PDO::FETCH_ASSOC);
    $new_s = $s['solution'];



    if($_answer == $new_s){
        print("Bien joué ! tu peux maintenant passer au chapitre suivant.");
        echo $divbutton;
    }else{
        print("Faux ! Réessaie !");
    }
    }

?>

<br><button id="reponse">Réponse</button>
<form method="POST" action="#">
    <div id="answer"><input type="text" name="answer" placeholder="Ecris la réponse ici..."/></div>
    <br><input type="submit" name="submit" value="Validez.">
    <input type="reset" name="reset" value="Revenir au jeu.">

</form>

</body>
</html>

<script>
    document.querySelector("#reponse").onclick = function() {
        document.querySelector("#answer").style.display=(window.getComputedStyle(document.querySelector('#answer')).display=='none') ? "block" : "none";
    }
</script>