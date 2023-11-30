<div id="userModal<?=$function->id?>" class="modal-view" style="display: none;">
    <div class="modal-view-content">
        <div class="modal-head">
            <h2>Informações do Usuário</h2>
        </div>
        <div class="content-body">

            <div class="imputNome">
                <label for="userNameInput">
                    <h2>Nome:</h2>
                </label>
                <input disabled type="text" id="userNameInput" class="imp" value="<?=$function->name?>">
            </div>

            <div class="imputEmail">
                <label for="userEmailInput">
                    <h2>Email:</h2>
                </label>
                <input disabled type="text" id="userEmailInput" class="imp"  readonly value="<?=$function->email?>">
            </div>

            <div class="imputData">
                <label for="userDOBInput">
                    <h2>Senha:</h2>
                </label>
                <input disabled type="text" id="userDOBInput" class="imp" readonly value="<?=$function->password?>">
            </div>

            <div class="imputPhone">
                <label for="userPhoneInput">
                    <h2>Telefone:</h2>
                </label>
                <input disabled type="text" id="userPhoneInput" class="imp"  readonly value="<?=$function->phone?>">
            </div>

            <span class="close" id="closeUserModalBtn">&times;</span>
        </div>
    </div>
</div>