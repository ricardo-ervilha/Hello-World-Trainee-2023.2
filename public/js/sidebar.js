const sidebar = document.querySelector(".sidebar");
const toggle = document.querySelector(".threeline-div");
const list = document.querySelectorAll(".list");

let podeFechar = true;

toggle.addEventListener('click', () => {
    sidebar.classList.toggle("close");

    list.forEach(addEffect);
    function addEffect(item, index) {
        item.classList.toggle("close-icons");
    }

    podeFechar = !podeFechar;
});