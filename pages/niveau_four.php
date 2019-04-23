<div class="next">
    <li><a href="index.php?p=niveau_three">PREVIOUS</a></li>
</div>

<div id = "sceneRef">


    <div id="ecranNoir">
    </div>


    <!-- Boite de dialogue -->
    <!--div id="boiteDialogue" onclick="fermerDialogue()">
        <div id="texteDialogue">

        </div>
        <button id="boutonFermer" >Fermer</button>
    </div>

    <!--tableau-->


    <!--div id="tableau" class="animations"  >
        <!--img src="images/tableau.png">
    </div-->


    <!-- Placard -->

    <!--div id="placardferme">
        <img src="images/placard_ferme.png">
    </div-->

    <!--div id="placardOuvert">
        <img src="images/placard_ouvert.png"-->


        <!--div id="id_bottle">
            <img src="images/bottle.png" id="bottle" alt="bottle">
        </div>
    </div-->
    <div id="boiteDialogue" pnjid=0>
        <h3>---</h3>
        <p>---</p>
        <div id="texteDialogue"></div>
        <button id="boutonFermer" onclick="fermerDialogue();eteindreLumiere()">Fermer</button>
    </div>

</div>

    <script src="json_c/datac4.json"></script>


<?php
$json = file_get_contents("json/data4.json");
$divbutton = 'BRAAAVOOOO';
?>