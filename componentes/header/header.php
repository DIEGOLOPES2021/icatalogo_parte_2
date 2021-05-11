    <link rel="stylesheet" href="../componentes/header/header.css" />

<header class="header">

<figure>
    <img src="../imgs/logo.png" />
</figure>

        <input type="search" placeholder="Pesquisar" />
    <nav>
        <ul>
            <a id="menu-admin">Administrador</a>
        </ul>
    </nav>

<div class="container-login" id="container-login">
    <h1>Fazer login</h1>

        <form method="POST" action="../componentes/header/acoes-do-usuario.php">
            <input type="hidden" name="acao" value="login"/>
             <input type="text" name="usuario"  placeholder="Usuário" />
             <input type="password" name="senha"  placeholder="Senha" />
             <button>Entrar</button>
        </form>

</div>

</header>

<script lang="javascript">

    //selecionamos o botão administrar e adicionamos o evento de click para ele

    document.querySelector("#menu-admin").addEventListener("click", toggleLogin);

    //função do evento do click

    function toggleLogin() {

        let containerLogin = document.querySelector("#container-login");

        let formContainer = document.querySelector("#container-login > form");

        let h1Container = document.querySelector("#container-login > h1");

        //se o container estiver oculto, motramos

        if (containerLogin.style.opacity == 0) {

            formContainer.style.display = "flex";

            h1Container.style.display = "block";

            containerLogin.style.opacity = 1;

            containerLogin.style.height = "200px";

        } else {

            //se não, ocultamos

            formContainer.style.display = "none";

            h1Container.style.display = "none";

            containerLogin.style.opacity = 0;

            containerLogin.style.height = "0px";

        }

    }

</script>