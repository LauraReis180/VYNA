<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VYNA - Login</title>
    <!-- Fonte Cinzel Decorative e Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Ícones Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../styles/login.css">
</head>
<body>
    <header>
        <div class="logo">VYNA</div>
        <div class="search-bar">
            <input type="text" placeholder="Pesquisar...">
            <button><i class="fas fa-search"></i></button>
        </div>
        <div class="icons">
            <a href="#" id="abrir-login" title="Minha Conta"><i class="fas fa-user"></i></a>
            <a href="#" title="Sacola de Compras"><i class="fas fa-shopping-bag"></i></a>
            <a href="#" title="Favoritos"><i class="fas fa-heart"></i></a>
            <a href="#" title="Configurações"><i class="fas fa-cog"></i></a>
        </div>
    </header>

    <div class="promo-bar">
        ELEGÂNCIA EM DOBRO: LEVE 2 ACESSÓRIOS E GANHE 10% OFF NO SEGUNDO ITEM!
    </div>

    <div class="category-bar">
        <a href="#" class="icon-btn" title="Acessibilidade"><i class="fas fa-universal-access"></i></a>
        <button>BOLSAS</button>
        <button>ÓCULOS DE SOL</button>
        <button>COLARES</button>
        <button>ANEIS</button>
        <button>PULSEIRAS</button>
        <a href="#" class="icon-btn" title="Ajuda"><i class="fas fa-question-circle"></i></a>
    </div>

    <!-- Modal de Login -->
    <div id="modal-login" class="modal-login">
        <div class="login-box">
            <span class="fechar" onclick="fecharLogin()">&times;</span>
            <h2>LOGIN</h2>
            <form action="#" method="post">
                <label for="email">Email</label>
                <input type="email" id="email" required>

                <label for="senha">Senha</label>
                <div class="senha-box">
                    <input type="password" id="senha" required>
                    <i class="fas fa-eye" onclick="mostrarSenha()"></i>
                </div>

                <div class="esqueci">
                    <a href="#">Esqueci a senha?</a>
                </div>

                <button type="submit" class="btn-entrar">ENTRAR</button>
            </form>

            <div class="social-login">
                <button class="google"><i class="fab fa-google"></i></button>
                <button class="facebook"><i class="fab fa-facebook-f"></i></button>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        const modal = document.getElementById('modal-login');
        const abrir = document.getElementById('abrir-login');

        abrir.addEventListener('click', function (e) {
            e.preventDefault();
            modal.style.display = 'flex';
        });

        function fecharLogin() {
            modal.style.display = 'none';
        }

        function mostrarSenha() {
            const senhaInput = document.getElementById('senha');
            const tipo = senhaInput.getAttribute('type');
            senhaInput.setAttribute('type', tipo === 'password' ? 'text' : 'password');
        }
    </script>
</body>
</html>
