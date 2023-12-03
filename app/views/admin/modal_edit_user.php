<link rel="stylesheet" href="../../../public/css/edit_modal.css">

<div class="modal" id="modal-edit<?=$row['id']?>" style="display: none;">
    <form action="update" method="POST">
    <input hidden value='<?=$row['id']?>' name="id">
    <div class="modal-content" id="modal-content-user">
        <div class="modal-head">
            <div class="close-container">
                <span class="closeEdit">&times;</span>
            </div>
            <div class="title-container">
                <h1>Edição de usuários</h1>
            </div>
        </div>

        <div class="content-bodyy" id="content-body-user">
            <div class="name">
                <h2 class="h2-edit">Nome</h2>
                <input class="input-user input-user2" type="text" placeholder="Primeiro nome" name="name">
                <input class="input-user" type="text" placeholder="Sobrenomes" name="sobrenome">
            </div>

            <div class="celular">
                <h2 class="h2-edit">Telefone</h2>
                <input class="input-user" type="tel" name="phone">
            </div>

            <div class="email">
                <h2 class="h2-edit">E-mail</h2>
                <input class="input-user" type="email" name="email">
            </div>

            <div class="senha">
                <h2 class="h2-edit">Senha</h2>
                <input class="input-user" type="password" name="password">
            </div>

            <button class="save">Salvar</button>
        </div>
    </div>
    </form>
</div>