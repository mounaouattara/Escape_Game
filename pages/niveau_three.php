    <div>
    <a class="nav" href="index.php?p=niveau_one"><img src="images/nav.gif" id="nav_d" alt=""></a>
   </div>
<div id = "sceneRef">


    <div id="ecranNoir">
    </div>

    <div id="ecranClair">
    </div>


<!--div id="tab_1">
    <img  src="images/scene_three/bon_tab.png" alt="">
</div>

   <div id="cousin_1"><img src="images/scene_three/cousin.png" alt=""></div>

    <div id="cousin_2" ><img src="images/scene_three/second_cousin.png" alt=""></div>

    <div id="ptite_boule"><img src="images/scene_three/ptite_boule.png" alt=""></div>


    <div id="poutre">
        <img  src="images/scene_three/poutre.png" alt="">
    </div>

    <div id="planche" >
    <img  src="images/scene_three/planche.png" alt="">
    </div>

    <div id="porte">
        <img src="images/scene_three/porte.png" alt="">
    </div>


</div-->

    <div id="boiteDialogue" pnjid=0>
        <h3>---</h3>
        <p>---</p>
        <div id="texteDialogue"></div>
        <button id="boutonFermer" onclick="fermerDialogue();eteindreLumiere()">Fermer</button>
    </div>

</div>

<script src="json_c/datac3.json"></script>

<?php
$json = file_get_contents("json/data3.json");

    $divbutton = ' <a id="nav_d" href="index.php?p=niveau_four"><img src="images/nav.gif" id="nav_g" alt=""></a>';
?>