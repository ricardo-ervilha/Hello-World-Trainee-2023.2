document.addEventListener('DOMContentLoaded', function() {
    
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