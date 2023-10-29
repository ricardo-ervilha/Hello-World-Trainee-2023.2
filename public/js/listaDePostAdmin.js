document.addEventListener('DOMContentLoaded', function () {
    const createPostButton = document.getElementById('createPost');
    const postTable = document.getElementById('postTable');
    const postForm = document.getElementById('postForm');
    const titleInput = document.getElementById('title');
    const contentTextarea = document.getElementById('content');
    const savePostButton = document.getElementById('savePost');
    const cancelPostButton = document.getElementById('cancelPost');
    const confirmDelete = document.getElementById('confirmDelete');
    const deleteYesButton = document.getElementById('deleteYes');
    const deleteNoButton = document.getElementById('deleteNo');
    const tbody = postTable.querySelector('tbody');

    // Array para armazenar os posts
    let posts = [];

    // Função para exibir a tabela de posts
function displayPosts() {
    tbody.innerHTML = '';
    posts.forEach((post, index) => {
        // Adicione a propriedade "user" aos objetos de post
        if (!post.user) {
            post.user = 'admin';
        }

        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${post.title}</td>
            <td><div class="content">${post.content}</div></td>
            <td>${post.user === 'admin' ? 'Admin' : post.user}</td>
            <td>${post.createdAt.toLocaleString()}</td>
            <td>
            <button class="viewPost">Visualizar</button>
            <button class="editPost">Editar</button>
            <button class="deletePost">Excluir</button>
            </td>
        `;

        const contentCell = row.querySelector('.content');
        if (post.content.length > 100) {
            createExpandButton(post.content, contentCell);
        }

        const editButton = row.querySelector('.editPost');

        // Ação para editar o post
        editButton.addEventListener('click', () => {
            titleInput.value = post.title;
            contentTextarea.value = post.content;
            savePostButton.dataset.index = index;
            postForm.style.display = 'block';
        });

        tbody.appendChild(row);
    });
}




    // Ação para criar um novo post
    createPostButton.addEventListener('click', () => {
        titleInput.value = '';
        contentTextarea.value = '';
        savePostButton.dataset.index = '';
        postForm.style.display = 'block';
    });

    // Ação para salvar um post
    savePostButton.addEventListener('click', (event) => {
        event.preventDefault(); // Evitar recarga da página
        const index = savePostButton.dataset.index;
        const title = titleInput.value;
        const content = contentTextarea.value;

        if (title && content) {
            const post = { title, content, createdAt: new Date() };
            if (index === '') {
                posts.push(post);
            } else {
                posts[index] = post;
            }
            postForm.style.display = 'none';
            displayPosts();
        }
    });

    // Ação para cancelar a criação ou edição de um post
    cancelPostButton.addEventListener('click', () => {
        postForm.style.display = 'none';
    });

    // Ação para confirmar a exclusão de um post
    deleteYesButton.addEventListener('click', () => {
        const index = deleteYesButton.dataset.index;
        posts.splice(index, 1);
        confirmDelete.style.display = 'none';
        displayPosts();
    });

    // Ação para cancelar a exclusão de um post
    deleteNoButton.addEventListener('click', () => {
        confirmDelete.style.display = 'none';

    });

    // Inicialmente, exibimos a tabela de posts
    displayPosts();
});
