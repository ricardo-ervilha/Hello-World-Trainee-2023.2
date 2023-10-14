document.addEventListener('DOMContentLoaded', function() {
    const myButton = document.getElementById('lerButton');
    const cardOculto = document.getElementById('cardOculto');
    
    const myButton2 = document.getElementById('tutorialButton');
    const cardOculto2 = document.getElementById('cardTutorial');
    
    myButton.addEventListener('click', function() {
        if (cardOculto.style.display === 'none' || cardOculto.style.display === '') {
            cardOculto.style.display = 'block';
            myButton.innerText = 'Fechar';
        } else {
            cardOculto.style.display = 'none';
            myButton.innerText = 'Ler Mais';
        }
    });
    
    myButton2.addEventListener('click', function() {
        if (cardOculto2.style.display === 'none' || cardOculto2.style.display === '') {
            cardOculto2.style.display = 'block';
            myButton2.innerText = 'Fechar';
        } else {
            cardOculto2.style.display = 'none';
            myButton2.innerText = 'Tutorial';
        }
    });
    
    const commentForm = document.getElementById("commentForm");
    const commentText = document.getElementById("commentText");
    const commentList = document.getElementById("commentList");
    
    commentForm.addEventListener("submit", function (e) {
        e.preventDefault(); // Evite que a página seja recarregada
        const text = commentText.value;
        const ratingSelect = document.getElementById("ratingSelect");
        const ratingValue = ratingSelect.value;
        
        if (!text || !ratingValue) {
            alert("Por favor, preencha todos os campos e selecione uma classificação válida.");
            return;
        }
        
        const commentItem = document.createElement("div");
        commentItem.classList.add("comment-item");
        
        var stars = "";
        
        for (var i = 0; i < ratingValue; i++) {
            stars += " &#11088;&#65039;";
        }
        
    
        commentItem.innerHTML = `
        <p class="comment-username">Admin:</p>
        <p class="comment-text">${text}</p>
        <p class="comment-rating">${stars}</p>
    `;
    
        commentList.appendChild(commentItem);
    
        // Limpar o formulário
        commentText.value = "";
    });
    
    
    });
    