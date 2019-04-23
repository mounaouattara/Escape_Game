/*
function fermerDialogue(){
    var boiteDialogue = document.getElementById('boiteDialogue').style.display='none';

    eclairerEcran();
}

function eclairerEcran(){
    var boiteDialogue = document.getElementById('ecranNoir').style.display='none';
}

function assombrirEcran(){
    var boiteDialogue = document.getElementById('ecranNoir').style.display='block';
}



// allumer la lumiere

function allumerLumiere(){

    var boiteDialogue = document.getElementById('ecranClair').style.display='block';
}

// eteindre la lumiere

function eteindreLumiere(){

    var boiteDialogue = document.getElementById('ecranClair').style.display='none';
}

// affichage du dialogue en fonction de l'element selectionne

var i =0;
function afficherDialogue(i){
    var boiteDialogue =document.getElementById('boiteDialogue');

    // recuperation de l'element clique
    var divElement =document.getElementById(this.level.lesElements[i].idElement);

    // desactiation des fonctions de l'element

    divElement.onclick='';

    var num =divElement.getAttribute('numero');

    //recuperation du numero de l'element clique pour l'affecter au pnjid

    boiteDialogue.setAttribute('pnjid',num);
    boiteDialogue.style.display='block';


    // remplacement du texte <h3> par le texte de l'émenent corrspondant

    var link = document.querySelector('h3');
    var divText = document.createTextNode(this.level.lesElements[i].nom);
    link.replaceChild(divText , link.firstChild);

    // remplacement du texte <p> par le texte de l'émenent corrspondant

    var linkDialogue = document.querySelector('p');
    var divText = document.createTextNode(this.level.lesElements[i].dialogue);
    linkDialogue.replaceChild(divText , linkDialogue.firstChild);
}

// effet sonore

var iEffetSonore = 0;
var cheminSon = '';
var audio = new Audio(cheminSon);
function effetSonore(i){
    if(audio instanceof Audio){
        audio.pause();
        audio.currentTime=0;
        audio = new Audio(cheminSon);
    }
    cheminSon = this.level.lesElements[i].effetSonoreSrc;
    audio= new Audio(cheminSon);
    audio.play();
}

// grossir et centre un element

function grossirPnj(i){
    //selection du pnj

    var pnjSelect = document.getElementById(this.level.lesElements[i].idElement);

    //grossisement du pnj

    pnjSelect.style.left=15+'%';
    pnjSelect.style.bottom=5+'%';

    pnjSelect.style.zIndex=15;

    var pos = 0;

    //nombre de changement d'image
    var id = setInterval(frame,3);
    function frame() {
        if (pos == 70 ) {
            clearInterval(id);
        } else {
            pos++;
            pnjSelect.style.width = pos + '%';
            pnjSelect.style.height  = pos + '%';
        }
    }

    assombrirEcran();

}

// fermer le dialogue

function fermerDialogue(){
    var num = document.getElementById('boiteDialogue');

    // recuperation de l'element reference par pnjid de boite dialogue
    var pnj = document.getElementById(this.level.lesElements[num.getAttribute('pnjid')].idElement);


    // proprietes css remis a 0
    pnj.style.width=this.level.lesElements[num.getAttribute('pnjid')].width +'%';
    pnj.style.height=this.level.lesElements[num.getAttribute('pnjid')].height +'%';
    pnj.style.bottom=this.level.lesElements[num.getAttribute('pnjid')].positionY +'%';
    pnj.style.left=this.level.lesElements[num.getAttribute('pnjid')].positionX +'%';
    pnj.style.zIndex=this.level.lesElements[num.getAttribute('pnjid')].zIndex;


    // chargement des fonctions du div

    var fonctions = '';
    for(var i2 = 0; i2<this.level.lesElements[num.getAttribute('pnjid')].lesFonctions.length; i2++){
        fonctions = fonctions+this.level.lesElements[num.getAttribute('pnjid')].lesFonctions[i2]+'('+num.getAttribute('pnjid')+');';

    }

    pnj.setAttribute('onclick',fonctions);

    //fermeture de la boite de dialogue
    num.style.display='none';




    eclairerEcran();
}

// afficher un Element

function afficherElement(i) {

    var idElement=this.level.lesElements[i];
    var element='';

    //parcours de la liste des elements pointés

    for(var i2 = 0 ; i2< idElement.affichageElements.length;  i2++){
        element = document.getElementById(idElement.affichageElements[i2]);
        element.style.display = 'block';

    }
    cacherElement(i);
}

// cacher un Element

function cacherElement(i) {
    var element = document.getElementById(this.level.lesElements[i].idElement);
    element.style.display = 'none';
}

// desactiver les fonctions

function desactiverFonction(i) {
    // recuperation de l'element clique
    var divElement =document.getElementById(this.level.lesElements[i].idElement);

    // desactiation des fonctions de l'element

    divElement.onclick='';
}
*/