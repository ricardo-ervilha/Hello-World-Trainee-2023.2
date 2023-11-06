const openUserModalBtn = document.getElementById("openUserModalBtn");
const openPostModalBtn = document.getElementById("openPostModalBtn");
const closeUserModalBtn = document.getElementById("closeUserModalBtn");
const closePostModalBtn = document.getElementById("closePostModalBtn");
const userModal = document.getElementById("userModal");
const postModal = document.getElementById("postModal");

openUserModalBtn.addEventListener("click", () => {
    userModal.style.display = "block";
    userNameInput.value = "João da Silva";
    userDOBInput.value = "15 de maio de 1985";
    userEmailInput.value = "joao.silva@example.com";
    userPhoneInput.value = "(11) 555-1234";
});

closeUserModalBtn.addEventListener("click", () => {
    userModal.style.display = "none";
});

openPostModalBtn.addEventListener("click", () => {
    postModal.style.display = "block";
    postTitleInput.value = "Meu Primeiro Post";
    postContentInput.value = "Este é um post fictício. Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
    postAuthorInput.value = "Autor Anônimo";
    postDateTimeInput.value = "28 de outubro de 2023, 15:30";
});

closePostModalBtn.addEventListener("click", () => {
    postModal.style.display = "none";
});

window.addEventListener("click", (event) => {
    if (event.target === userModal) {
        userModal.style.display = "none";
    }
    if (event.target === postModal) {
        postModal.style.display = "none";
    }
});

// Para exibir os valores nas caixas de entrada quando os modais são abertos
const userNameInput = document.getElementById("userNameInput");
const userDOBInput = document.getElementById("userDOBInput");
const userEmailInput = document.getElementById("userEmailInput");
const userPhoneInput = document.getElementById("userPhoneInput");

const postTitleInput = document.getElementById("postTitleInput");
const postContentInput = document.getElementById("postContentInput");
const postAuthorInput = document.getElementById("postAuthorInput");
const postDateTimeInput = document.getElementById("postDateTimeInput");
