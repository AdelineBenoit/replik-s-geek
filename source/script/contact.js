let regExpNonVide = /./;
let regEXNomPrenomValide = /^[a-zA-Z\s\-\'_]+$/;
let regExEmail = /^[a-z][a-z_0-9\.\-]+@[a-z_0-9\.\-]+\.[a-z]{2,3}$/;
let regExTel = /^\d{10}$/;
// function de saisie obligatoire
function saisieObligatoire(inputDeclencheur){
    let valeurControler = inputDeclencheur.value.trim();
    if (regExpNonVide.test(valeurControler)==false) {
        console.log("Ce champs est obligatoire");
    //modification visuelle en cas d'erreur
        inputDeclencheur.style.border="2px solid red";
        inputDeclencheur.setAttribute("placeholder","Ce champs est obligatoire");
        return false;
    }
     //modification visuelle si la saisie est valide
    else {
        inputDeclencheur.style.border="2px solid green";
        return true;
        }
    }
    //function qui permet de vérifier l'Email
function controleEmail(inputDeclencheur){
    if (inputDeclencheur.value!=""){
        if (regExEmail.test(inputDeclencheur.value)== false) {
            console.log("L'adresse saisie n'est pas valide.");
//modification visuelle si l'adresse n'est pas valide
            inputDeclencheur.style.border="2px solid red";
            inputDeclencheur.value="";
            inputDeclencheur.setAttribute("placeholder", "Email non valide");
            return false;
        }
        //modification visuelle si l'adresse est valide

        else{inputDeclencheur.style.border="2px solid green";
        return true;
    } }
    else {
        return true
    }
}
function controleFormulaire (){
    if (saisieObligatoire(document.getElementById("FIRST_NAME_CUSTOMER"))===false||
        saisieObligatoire(document.getElementById("MAIL_CUSTOMER"))===false||
        saisieObligatoire(document.getElementById("TEL_CUSTOMER"))===false||
        saisieObligatoire(document.getElementById("MAIL_CUSTOMER"))===false||
        controleEmail(document.getElementById("MAIL_CUSTOMER"))===false) {
        window.alert("erreur dans le formulaire");
        return false;
        }
        else { return true;
        }
}

//j'ajoute un ecouteur de son qui au chargement de la page permet de verifier la saisie des champs
window.addEventListener("load", function(){
    document.getElementById("formContact").addEventListener("blur", function(){
        saisieObligatoire(this);
        formatLettre(this);
    });   

     document.getElementById("formContact").addEventListener("submit",function(e){
        let etatFFormulaire =controleFormulaire();
        if(!etatFFormulaire){
            e.preventDefault();
            };
    });
});