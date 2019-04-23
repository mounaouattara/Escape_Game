<?php

$json = '{
	"idNiveau":3,
	"background":"images/new_background.png",
	"solution":"le chiffre",
	"lesElements":[
		{
			"idElement":"homer",
			"nom":"HOMER SIMPSON",
			"dialogue":"OH PUNEEEZZZZZ ! qu est ce que c est que ca ? un MORT ?????",
			"effetsSonoreSrc":"sfx/homer.mp3",
			"imageSrc":"images/homer.svg",
			"positionX":5,
			"positionY":20,
			"width":25,
			"height":25,
			"zIndex":2,
			"display":"block"
		},
		{
			"idElement":"inspecteur",
			"nom":"INSPECTEUR",
			"dialogue":"Hmmm ... Y a t-il un symbole pour expliquer cette mort ?",
			"effetsSonoreSrc":"sfx/inspecteur.mp3",
			"imageSrc":"images/inspecteur.png",
			"positionX":70,
			"positionY":10,
			"width":25,
			"height":25,
			"zIndex":2,
			"display":"block"	
		},
		{
			"idElement":"cadavre",
			"nom":"MONSIEUR LE CADAVRE",
			"dialogue":"AAARRRGGHH X/ (mais je suis déjà mort moi ...)",
			"effetsSonoreSrc":"sfx/body.mp3",
			"imageSrc":"images/body.svg",
			"positionX":30,
			"positionY":5,
			"width":25,
			"height":25,
			"zIndex":2,
			"display":"block"	
		}
	]
}';
$elements;
$data = json_decode($json, true);
	foreach ($data['lesElements'] as $item) {
		foreach ($item as $key => $value) {
			$elements = $key.': '.$value.' ';
			$id_level = $data["idNiveau"];
			$solution = $data["solution"];
			echo $elements;
		}	
	}


try {
    $conn = new PDO('mysql:host=localhost;dbname=egp;charset=utf8', 'root', '');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$req = $conn->prepare('INSERT INTO level (id_level,Solution, Json) VALUES (:id_level, :Solution, :Json)');
			$req->execute(array(
				'id_level' => $id_level,
				'Solution' => $solution,
				'Json' => $elements));

			echo "bon!!";
	}
catch(PDOException $e)
    {echo $e->getMessage();}

$conn = null;
?>