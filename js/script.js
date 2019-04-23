



function fermerDialogue(){

    var boiteDialogue = document.getElementById('boiteDialogue').style.display='none';
    eclairerEcran();
}


function afficherDialogue(){

    var boiteDialogue = document.getElementById('boiteDialogue').style.display='block';
    assombrirEcran();
}

function zoom(){

    var zoom = document.getElementById('emp_bot').style.display='block';
    assombrirEcran();
}

function eclairerEcran(){

    var boiteDialogue = document.getElementById('ecranNoir').style.display='none';
}


function assombrirEcran(){

    var boiteDialogue = document.getElementById('ecranNoir').style.display='block';
}


function messageHomer() {
    var div =document.getElementById('texteDialogue');
    div.innerHTML = '<h3>HOMER SIMPSON :</h3>'+'<p>OH PUNEEEZZZZZ ! qu est ce que c est que ca ? un MORT ?????<p>';

    afficherDialogue();
}


function zoom() {
    var div =document.getElementById('emp_bot');
    div.innerHTML = '<img src="images/scene_one/bottle_scene_one.png" width="200px;" height="400px;" alt="">';
    // div.innerHTML = '<p>Questce qui peut bien se cacher dans cette bouteille???</p> ';
    zoom();

}

/*function placardouvert(){
    var boiteDialogue = document.getElementById('placard_ouvert').style.display='block';
}

function placardferme(){

   document.body.animations = 'fade';
   placardouvert();

}*/

function placardferme() {
    var element = document.getElementById("placardferme");
    var op = 1;  // initial opacity
    var timer = setInterval(function () {
        if (op <= 0.1){
            clearInterval(timer);
            element.style.display = 'none';
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op -= op * 0.1;
    }, 50);
}



function placardouvert(){
    var element = document.getElementById("placardouvert");
    var op = 0;
    var timer = setInterval(function () {
        if (op <= 0.0){
            clearInterval(timer);
            element.style.display = 'none';
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 0 + ")";
        op += op * 0.0;
    }, 50);
    document.getElementById("placardferme").onclick = "placardferme()";
}


function msg_1(){
    var element = document.getElementById("msg_1");
    var op = 0;
    var timer = setInterval(function () {
        if (op <= 0.0){
            clearInterval(timer);
            element.style.display = 'none';
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 0 + ")";
        op += op * 0.0;
    }, 50);
}


function msg_2(){
    var element = document.getElementById("msg_2");
    var op = 0;
    var timer = setInterval(function () {
        if (op <= 0.0){
            clearInterval(timer);
            element.style.display = 'none';
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 0 + ")";
        op += op * 0.0;
    }, 50);
}


function msg_3(){
    var element = document.getElementById("msg_3");
    var op = 0;
    var timer = setInterval(function () {
        if (op <= 0.0){
            clearInterval(timer);
            element.style.display = 'none';
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 0 + ")";
        op += op * 0.0;
    }, 50);
}


function EcranClair(){

    var boiteDialogue = document.getElementById('ecranClair').style.display='block';
}

function EcranClairEnd(){

    var boiteDialogue = document.getElementById('ecranClair').style.display='none';
}

function effetvoit(){
    var div = document.getElementById("effet_voit").style.display="none";
    EcranClair();
}



/*
var level = {
    "idNiveau":1,
    "background":"images/scene_one/ruelle.jpg",
    "solution":"le chiffre",
    "lesElements": [
        {
            "idElement":"emp_bot",
            "nom":"emp_bot",
            "dialogue":"Qu'est-ce qui se cache dans cette bouteille ?",
            "effetsSonoreSrc":[""],
            "imageSrc":"images/scene_one/bottle_scene_one.png",
            "positionX":30,
            "positionY":20,
            "width":0.2,
            "height":1,
            "zIndex":2,
            "display":"block"
        },
        {
            "idElement":"emp_cat",
            "nom":"emp_cat",
            "dialogue":"cat",
            "effetsSonoreSrc":[""],
            "imageSrc":"images/scene_one/cat.png",
            "positionX":2,
            "positionY":2,
            "width":0.1,
            "height":1,
            "zIndex":2,
            "display":"block"
        }
    ]
};


function chargerLevel(level){

    // chargement du background du niveau
    var scene= document.createElement('img');
    scene.src =this.level.background;
    document.getElementById('sceneRef').appendChild(scene);

    // chargement des elements du niveau
    for(var i =0; i < this.level.lesElements.length;i++){
        // chargement des divs et de leurs propriétes
        var div= document.createElement('div');
        div.id = this.level.lesElements[i].idElement;

        // chargement du css
        div.setAttribute('onclick','afficherDialogue('+i+')');
        div.setAttribute('numero', i);
        div.style.position="absolute";
        div.style.bottom=this.level.lesElements[i].positionY+"%";
        div.style.left=this.level.lesElements[i].positionX+"%";
        div.style.height=this.level.lesElements[i].height+"%";
        div.style.width=this.level.lesElements[i].width+"%";
        div.style.zIndex=this.level.lesElements[i].zIndex;
        div.style.display=this.level.lesElements[i].display;
        document.getElementById('sceneRef').appendChild(div);


        // chargement des images des divs
        var divImg =document.createElement('img');
        divImg.src =this.level.lesElements[i].imageSrc;
        document.getElementById(this.level.lesElements[i].idElement).appendChild(divImg);

    }
}

// affichage du dialogue en fonction de l'element selectionne

var i =0;
function afficherDialogue(i){
    document.getElementById('boiteDialogue').style.display='block';

    // remplacement du texte <h3> par le texte de l'émenent corrspondant


    var link = document.querySelector('h3');
    var divText = document.createTextNode(this.level.lesElements[i].nom);
    link.replaceChild(divText , link.firstChild);

    // remplacement du texte <p> par le texte de l'émenent corrspondant

    var linkDialogue = document.querySelector('p');
    var divText = document.createTextNode(this.level.lesElements[i].dialogue);
    linkDialogue.replaceChild(divText , linkDialogue.firstChild);

    assombrirEcran();
}

chargerLevel(level);


*/