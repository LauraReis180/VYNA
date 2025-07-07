<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VYNA - Elegância e Estilo</title>
    <!-- Fonte Cinzel Decorative e Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Ícones Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="./styles/all.css">
</head>
<body>
    <header>
        <div class="logo">VYNA</div>
        <div class="search-bar">
            <input type="text" placeholder="Pesquisar...">
            <button><i class="fas fa-search"></i></button>
        </div>
        <div class="icons">
            <a href="#" title="Minha Conta"><i class="fas fa-user"></i></a>
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

    <!-- Banner -->
    <div class="banner">
        <img src="imagens/banner.jpg" alt="Banner VYNA">
    </div>

    <!-- Filtros -->
    <div class="filter-bar">
        <div class="dropdown">
            <button class="filter-btn">Ordenar <i class="fas fa-chevron-down"></i></button>
            <div class="dropdown-content">
                <a href="#">Relevância</a>
                <a href="#">Novidades</a>
                <a href="#">Mais Vendidos</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="filter-btn">Ordenar A-Z <i class="fas fa-chevron-down"></i></button>
            <div class="dropdown-content">
                <a href="#">A-Z</a>
                <a href="#">Z-A</a>
                <a href="#">Preço Crescente</a>
                <a href="#">Preço Decrescente</a>
            </div>
        </div>
    </div>

    <!-- Produtos -->
    <div class="product-section">
        <div class="product-card">
            <img src="imagens/produto1.jpg" alt="Produto 1">
            <h3>Produto 1</h3>
            <p>R$ 199,00</p>
        </div>
        <div class="product-card">
            <img src="imagens/produto2.jpg" alt="Produto 2">
            <h3>Produto 2</h3>
            <p>R$ 249,00</p>
        </div>
        <div class="product-card">
            <img src="imagens/produto3.jpg" alt="Produto 3">
            <h3>Produto 3</h3>
            <p>R$ 299,00</p>
        </div>
        <div class="product-card">
            <img src="imagens/produto4.jpg" alt="Produto 4">
            <h3>Produto 4</h3>
            <p>R$ 349,00</p>
        </div>
    </div>
</body>
</html>
