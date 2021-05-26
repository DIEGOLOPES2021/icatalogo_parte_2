<?php session_start(); 

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <link rel="stylesheet" href="./produtos.css" />
    <title>Administrar Produtos</title>
</head>

<?php
  include("../componentes/header/header.php");

?>

<!--<header>
        <input type="search" placeholder="Pesquisar" />
</header>-->
<body>
   
    <div class="content">
        <section class="produtos-container">
        <?php 
               if(isset($_SESSION["usuarioId"])   ){
        ?>
            <header>
                <button onclick="javascript:window.location.href ='./novo'">Novo Produto</button>
                <button  onclick="javascript:window.location.href ='../categorias'">Nova Categoria </button>
            </header>
        <?php
            }
        ?>
            <main>
                <article class="card-produto">
                    <figure>
                        <img src="../imgs/air.jpg" />
                    </figure>
                    <section>
                        <span class="preco">R$ 1000,00</span>
                        <span class="parcelamento">ou em <em>10x R$100,00 sem juros</em></span>

                        <span class="descricao">Produto xyz cor preta novo perfeito estado 100%</span>
                        <span class="categoria">
                            <em>Calçados</em> <em>Vestuário</em><em>Calçados</em>
                        </span>
                    </section>
                    <footer>

                    </footer>
                </article>
                <article class="card-produto">
                    <figure>
                        <img src="../imgs/jordan.jpg" />
                    </figure>
                    <section>
                        <span class="preco">R$ 1000,00</span>
                        <span class="parcelamento">ou em <em>10x R$100,00 sem juros</em></span>

                        <span class="descricao">Produto xyz cor preta novo perfeito estado 100%</span>
                        <span class="categoria">
                            <em>Calçados</em> <em>Vestuário</em><em>Calçados</em>
                        </span>
                    </section>
                    <footer>

                    </footer>
                </article>
                <article class="card-produto">
                    <figure>
                        <img src="https://importsbaby.com/product_images/e/466/Super-Mario-Nike-Dunk-Shoes-White-Red-Blue__05753_zoom.jpg" />
                    </figure>
                    <section>
                        <span class="preco">R$ 1000,00</span>
                        <span class="parcelamento">ou em <em>10x R$100,00 sem juros</em></span>

                        <span class="descricao">Produto xyz cor preta novo perfeito estado 100%</span>
                        <span class="categoria">
                            <em>Calçados</em> <em>Vestuário</em><em>Calçados</em>
                        </span>
                    </section>
                    <footer>

                    </footer>
                </article>
                <article class="card-produto">
                    <figure>
                        <img src="https://sneakerbardetroit.com/wp-content/uploads/2019/11/Air-Jordan-4-What-The-CI1184-146-2019-Release-Date-Price-4.jpg" />
                    </figure>
                    <section>
                        <span class="preco">R$ 1000,00</span>
                        <span class="parcelamento">ou em <em>10x R$100,00 sem juros</em></span>

                        <span class="descricao">Produto xyz cor preta novo perfeito estado 100%</span>
                        <span class="categoria">
                            <em>Calçados</em> <em>Vestuário</em><em>Calçados</em>
                        </span>
                    </section>
                    <footer>

                    </footer>
                </article>
                <article class="card-produto">
                    <figure>
                        <img src="../imgs/jordan2.jpg" />
                    </figure>
                    <section>
                        <span class="preco">R$ 1000,00</span>
                        <span class="parcelamento">ou em <em>10x R$100,00 sem juros</em></span>

                        <span class="descricao">Produto xyz cor preta novo perfeito estado 100%</span>
                        <span class="categoria">
                            <em>Calçados</em> <em>Vestuário</em><em>Calçados</em>
                        </span>
                    </section>
                    <footer>

                    </footer>
                </article>
                <article class="card-produto">
                    <figure>
                        <img src="https://static.wixstatic.com/media/f7a3b9_1f9d7540176a4c83a62736921faeaf39~mv2.jpg/v1/fill/w_1135,h_722,al_c,q_85/f7a3b9_1f9d7540176a4c83a62736921faeaf39~mv2.jpg" />
                    </figure>
                    <section>
                        <span class="preco">R$ 1000,00</span>
                        <span class="parcelamento">ou em <em>10x R$100,00 sem juros</em></span>

                        <span class="descricao">Produto xyz cor preta novo perfeito estado 100%</span>
                        <span class="categoria">
                            <em>Calçados</em> <em>Vestuário</em><em>Calçados</em>
                        </span>
                    </section>
                    <footer>

                    </footer>
                </article>
                <article class="card-produto">
                    <figure>
                        <img src="https://cdn.awsli.com.br/800x800/257/257889/produto/83117245/d4177f9b94.jpg" />
                    </figure>
                    <section>
                        <span class="preco">R$ 1000,00</span>
                        <span class="parcelamento">ou em <em>10x R$100,00 sem juros</em></span>

                        <span class="descricao">Produto xyz cor preta novo perfeito estado 100%</span>
                        <span class="categoria">
                            <em>Calçados</em> <em>Vestuário</em><em>Calçados</em>
                        </span>
                    </section>
                    <footer>

                    </footer>
                </article>
                <article class="card-produto">
                    <figure>
                        <img src="https://images.tcdn.com.br/img/img_prod/680475/tenis_nike_air_jordan_retro_4_black_cat_845_1_20200304235222.jpg" />
                    </figure>
                    <section>
                        <span class="preco">R$ 1000,00</span>
                        <span class="parcelamento">ou em <em>10x R$100,00 sem juros</em></span>

                        <span class="descricao">Produto xyz cor preta novo perfeito estado 100%</span>
                        <span class="categoria">
                            <em>Calçados</em> <em>Vestuário</em><em>Calçados</em>
                        </span>
                    </section>
                    <footer>

                    </footer>
                </article>


            </main>
        </section>
    </div>
    <footer>
        SENAI 2021 - Todos os direitos reservados
    </footer>
</body>

</html>