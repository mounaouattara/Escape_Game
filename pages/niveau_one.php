<script src="json_c/datac.json"></script>

<div id="sceneRef">

    <div id="ecranNoir">
    </div>

    <div id="ecranClair">
    </div>


    <div id="boiteDialogue" pnjid=0>
        <h3>---</h3>
        <p>---</p>
        <div id="texteDialogue"></div>
        <button id="boutonFermer" onclick="fermerDialogue();eteindreLumiere()">Fermer</button>
    </div>


</div>
<a href="index.php?p=niveau_three" style="display:none;"><img src="images/nav.gif" id="nav_g" alt=""/></a>


<?php
$json = file_get_contents("json/data.json");

$divbutton = ' <a id="nav_d" href="index.php?p=niveau_three"><img src="images/nav.gif" id="nav_g" alt=""></a>';
?>




