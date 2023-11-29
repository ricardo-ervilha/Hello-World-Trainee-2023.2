var modalNew = document.getElementById("modalNew");     //MODAL DE NOVO USER/POST
var modalView = document.getElementById("modalView");   //MODAL DE VISUALIZAR USER/POST
var modalEdit = document.getElementById("modalEdit");  //MODAL DE EDITAR USER/POST
var modalDelete = document.getElementById('modalDelete');      //MODAL DE DELETAR USER/POST


var btnNew = document.getElementById("open-new");       //BOTAO NOVO USER/POST
var btnView = document.getElementById("open-view");     //BOTAO VISUALIZAR USER/POST
var btnEdit = document.getElementById("open-edit");     //BOTAO EDITAR USER/POST
var btnDelete = document.getElementById("open-delete"); //BOTAO DELETAR USER/POST

var closeNew = document.getElementsByClassName("close-new")[0];         //FECHAR MODAL DE NOVO USER/POST
var closeView = document.getElementById("close-view");                  //FECHAR MODAL DE VISUALIZAR USER/POST
var closeEdit = document.getElementsByClassName("close-edit")[0];       //FECHAR MODAL DE EDITAR USER/POST
var closeDelete = document.getElementsByClassName("close-delete")[0];   //FECHAR MODAL DE DELETERAR USER/POST

/* Modais do Lucas - NOVO USER/POST  */

btnNew.onclick = function () {
    modalNew.style.display = "block";
}

closeNew.onclick = function () {
    modalNew.style.display = "none";
}


/* Modais do Paulo - VISUALIZAR USER/POST    */

btnView.onclick = function () {
    modalView.style.display = "block";
}

closeView.onclick = function () {
    modalView.style.display = "none";
}


/* Modais do João Pedro  -  EDITAR USER/POST      */

btnEdit.onclick = function () {
    modalEdit.style.display = "block";
}

closeEdit.onclick = function () {
    modalEdit.style.display = "none";
}


/* Modais do João Pedro  -  EDITAR USER/POST      */

btnEdit.onclick = function () {
    modalEdit.style.display = "block";
}

closeEdit.onclick = function () {
    modalEdit.style.display = "none";
}


/* Modais do João Paulo  -  DELETAR USER/POST      */

btnDelete.onclick = function () {
    modalDelete.style.display = "block";
}

closeDelete.onclick = function () {
    modalDelete.style.display = "none";
}


/* Todos */

window.onclick = function(event) {
    if(event.target == modalNew){
        modalNew.style.display= "none";
    } else if(event.target == modalView){
        modalView.style.display= "none";
    } else if(event.target == modalEdit){
        modalEdit.style.display= "none";
    } else if(event.target == modalDelete){
        modalDelete.style.display= "none";
    }
}


