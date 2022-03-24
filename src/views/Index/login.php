<?php 
    $styles = [
        'login.css'
    ]
?>
<?php require_once APPROOT . '/src/views/include/header.php'; ?>

<div class="container">
    <div class="d-flex justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">
                <h3>Login</h3>
                <div class="d-flex justify-content-end social_icon">
                    <span><i class="fa fa-facebook-square"></i></span>
                    <span><i class="fa fa-google-plus-square"></i></span>
                    <span><i class="fa fa-twitter-square"></i></span>
                </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-key"></i></div>
                            <input type="password" class="form-control" placeholder="Senha">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Entrar" class="btn float-right login_btn">
                    </div>
                    <div class="d-flex align-items-center">
                        <a href="#" class="links">Esqueceu a senha?</a>
                    </div>
                </form>
            </div>

            <div class="card-footer">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="<?= URLROOT; ?>" class="links return-link"><i class="fa fa-arrow-circle-left"></i> Voltar a tela principal</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once APPROOT . '/src/views/include/footer.php'; ?>