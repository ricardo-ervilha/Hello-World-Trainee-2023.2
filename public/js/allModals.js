/* Modais do Lucas */

document.querySelectorAll('#add-user').forEach(function (button) {
    button.addEventListener('click', function () {
        
        var modalView = document.querySelector(".modal");
        
        modalView.style.display = "block";

        var span = document.getElementsByClassName("close")[0];

        span.addEventListener("click", () => {
            modalView.style.display = "none";
        });
        
        window.onclick = function(event) {
            if (event.target == modalView) {
                modalView.style.display = "none";
            }
        }
    });
});


/* Modais do Paulo */

document.querySelectorAll('.icon-visualizar').forEach(function (button) {
    button.addEventListener('click', function () {
        var match = button.id.match(/\d+/);
        var rowId = match ? match[0] : null;
        
        var modalId = "userModal" + rowId;
        var modalView = document.getElementById(modalId);
        
        modalView.style.display = "block";

        closeUserModalBtn = modalView.querySelector('.close');

        closeUserModalBtn.addEventListener("click", () => {
            modalView.style.display = "none";
        });
        
        window.onclick = function(event) {
            if (event.target == modalView) {
                modalView.style.display = "none";
            }
        }
    });
});


/* Modais do João Pedro */

document.querySelectorAll('.icon-editar').forEach(function (button) {
    button.addEventListener('click', function () {
        var match = button.id.match(/\d+/);
        var rowId = match ? match[0] : null;
        
        var modalId = "modal-edit" + rowId;
        var modalView = document.getElementById(modalId);
        
        modalView.style.display = "block";

        closeEditModalBtn = modalView.querySelector('.close');
       

        closeEditModalBtn.addEventListener("click", () => {
            modalView.style.display = "none";
        });
        
        window.onclick = function(event) {
            if (event.target == modalView) {
                modalView.style.display = "none";
            }
        }
    });
});

/* Modais do João Paulo */

document.querySelectorAll('.icon-excluir').forEach(function (button) {
    button.addEventListener('click', function () {

        var match = button.id.match(/\d+/);
        var rowId = match ? match[0] : null;
        
        var modalId = "id01" + rowId;
        var modalView = document.getElementById(modalId);
        
        modalView.style.display = "block";

        closeDeleteModalBtn = modalView.querySelector('.close-delete');
       
        cancel = modalView.querySelector('.cancelbtn');

        closeDeleteModalBtn.addEventListener("click", () => {
            modalView.style.display = "none";
        });

        cancel.addEventListener("click", () => {
            modalView.style.display = "none";
        });
        
        window.onclick = function(event) {
            if (event.target == modalView) {
                modalView.style.display = "none";
            }
        }
    });
});