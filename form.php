<?php

    if(isset($POST['submit'])) {

        $IdNiveau = $_POST['IdNiveau'];
        $background = $_POST['background'];

        $IdElement = $_POST['IdElement'];
        $Nom = $_POST['Nom'];
        $Dialogue = $_POST['dialogue'];
        $effetSonoreSrc = $_POST['effetSonoreSrc'];
        $imageSrc = $_POST['imageSrc'];
        $PositionX = $_POST['PositionX'];
        $PositionY = $_POST['PositionY'];
        $width = $_POST['width'];
        $height = $_POST['height'];
        $zIndex = $_POST['zIndex'];
        $display = $_POST['display'];
        $lesfonctions = $_POST['lesfonctions'];

        if ($IdNiveau <= 3) {
            echo 'Le niveau doit être supérieur à 3.';
        }
        /*for ($i = 4; $i = 7; $i++) {*/
            $all = array(

                "IdNiveau" => $IdNiveau,
                "Background" => $Background,

                 "LesElements"=>array(
                                    "IdElement" => $IdElement,
                                    "Nom" => $Nom,
                                    "dialogue" => $dialogue,
                                    "effetSonoreSrc" => $effetSonoreSrc,
                                    "imageSrc" => $imageSrc,
                                    "PositionX" => $PositionX,
                                    "PositionY" => $PositionY,
                                    "width" => $width,
                                    "height" => $height,
                                    "zIndex" => $zIndex,
                                    "display" => $display,
                                    "lesfonctions" => $lesfonctions
                            )
                );
            var_dump($all);

            $fp = fopen('$new.json', 'a');
            print('ok open');
            fwrite($fp, json_encode($all));
            print('ok write');
            fclose($fp);
            print('ok close');
        //}
}
?>


</br><form method="POST" action="#" >

    </br><label for="IdNiveau">IdNiveau:</label>
    <input type="int" name="IdNiveau" id="IdNiveau"/>

    </br><label for="Background">Background:</label>
    <input type="url" name="Background" id="Background"/>

    </br><label for="Les Elements">Les elements:</label>
    <input type="hidden" name="LesElements" id="LesElements"/>

    </br><label for="IdElement">IdElement:</label>
    <input type="text" name="IdElement" id="IdElement"/>

    </br><label for="Nom">Nom:</label>
    <input type="text" name="Nom" id="Nom"/>

    </br><label for="Dialogue">Dialogue:</label>
    <input type="text" name="dialogue" id="dialogue"/>

    </br><label for="effetSonoreSrc">effetSonoreSrc:</label>
    <input type="text" name="effetSonoreSrc" id="effetSonoreSrc" placeholder="Il faudra encadrer l'url avec : un tableau et des quotes. "/>

    </br><label for="imageSrc">imageSrc:</label>
    <input type="url" name="imageSrc" id="imageSrc"/>

    </br><label for="positionX">PositionX:</label>
    <input type="int" name="positionX" id="positionX"/>

    </br><label for="positionY">PositionY:</label>
    <input type="int" name="positionY" id="positionY"/>

    </br><label for="width">width:</label>
    <input type="int" name="width" id="width"/>

    </br><label for="height">height:</label>
    <input type="int" name="height" id="height"/>

    </br><label for="zIndex">zIndex:</label>
    <input type="int" name="zIndex" id="zIndex"/>

    </br><label for="display">display:</label>
    <select name="display" id="display" placeholder="...">
        <option value="">block</option>
    </select>

    </br><label for="lesfonctions">Les Fonctions:</label>
    <select name="lesfonctions" id="lesfonctions" placeholder="...">
        <option value="">["afficherDialogue"]</option>
        <option value="">["effetSonore"]</option>
        <option value="">["fadeIn"]</option>
        <option value="">["rotate"]</option>
    </select>


    </br>
    <input type="submit" value="submit">
    <input type="reset" value="reset">
</form>
