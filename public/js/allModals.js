var modal = document.getElementById("modal");
var modalView = document.getElementById("userModal");
var modalDelete = document.getElementById('id01');
var modalEdit = document.getElementById("modal-edit");

var btn = document.getElementById("add-user");
var btnView = document.getElementById("openUserModalBtn");
var btnEdit = document.getElementById("open-modal");

var closeUserModalBtn = document.getElementById("closeUserModalBtn");
var span = document.getElementsByClassName("close")[0];
var spanEdit = document.getElementsByClassName("closeEdit")[0];

/* Modais do Lucas */

btn.onclick = function () {
    modal.style.display = "block";
}

span.onclick = function () {
    modal.style.display = "none";
}

/* Modais do Paulo */

btnView.onclick = function () {
    modalView.style.display = "block";
}

closeUserModalBtn.addEventListener("click", () => {
    userModal.style.display = "none";
});

/* Modais do João Pedro */

btnEdit.onclick = function () {
    modalEdit.style.display = "block";
}

spanEdit.onclick = function () {
    modalEdit.style.display = "none";
}

/* Todos */

window.onclick = function(event) {
    if (event.target == modalView) {
        modalView.style.display = "none";
    } else if (event.target == modalDelete) {
        modalDelete.style.display = "none";
    } else if (event.target == modalEdit) {
        modalEdit.style.display = "none";
    } else if (event.target == modal) {
        modal.style.display = "none";
    }
}


