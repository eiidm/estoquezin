<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../home/home.css">
    <link rel="stylesheet" href="./menu.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="https://kit.fontawesome.com/02a8c7e6b8.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>

<body>
    <div class= 'mae'>
    <div class='cabecalho'>
        <input id='menu_to' type='checkbox' />
        <label class='menu_btn' for='menu_to'>
            <span></span>
        </label>
            <ul class='menu_box'>
                <li><a class='menu_item' href='./home_front.php'>Home</a></li>
                <li><a class='menu_item' href='../login_colaborador/login_colaborador_front.php'>Colaborador</a></li>

                <li><a class='menu_topico'>Empresas</a></li>
                    <li><a class='menu_item' href='../login_empresa/cadastro_empresa_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_empresa/alterar_empresas_front.php'>Alteração/Exclusão</a></li>
            
                <li><a class='menu_topico'>Grupos</a></li>
                    <li><a class='menu_item' href="../cadastro_grupo/cadastro_grupo_front.php">Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_grupo/alterar_grupos_front.php'>Alteração/Exclusão</a></li>

                <li><a class='menu_topico'>Produtos</a></li>
                    <li><a class='menu_item' href='../cadastro_produtos/cadastro_produtos_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_produtos/alterar_produtos_front.php'>Alteração/Exclusão</a></li>

                <li><a class='menu_topico'>Item</a></li>
                    <li><a class='menu_item' href='../item/cadastro_item_front.php'>Saída</a></li>
                    <li><a class='menu_item' href='../item/entrada_front.php'>Entrada</a></li>
                    <li><a class='menu_item' href='../item/saida_front.php'>Relatório de saída</a></li>
                    <li><a class='menu_item' href='../item/relatorio_front.php'>Relatório de entrada</a></li>

                <li><a class='menu_topico'>Fornecedores</a></li>
                    <li><a class='menu_item' href='../cadastro_fornecedor/cadastro_fornecedor_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_fornecedor/alterar_fornecedores_front.php'>Alteração/Exclusão</a></li>
            </ul>
        </div>
 <!-- ------ MENU ------ -->
    <div class="corpo">
        
    <div class='colunadois'>
        <img src="imgnova.png" alt='imagem da home' class='imghome'>
    </div>
            <a name="topo"></a>
            <div class="Colunaum">
                <div class="descricao"> 
                    <h1 class="desc_txt2">Organize seu estoque</h1>
                    <p class="desc_txt1">No mercado atual, as empresas necessitam se manter competitivas, frente aos seus concorrentes.
                        Assim, a gestão de materiais promove um equilíbrio que contribui para a sustentabilidade organizacional.</p>

                    <div class="btn_ver">
                        <a class="texto_btn" href="../login_empresa/cadastro_empresa_front.php">Faça o cadastro</a>
                    </div>        
             </div>
        </div>

        </div>
        <div class="footer">

<div class="prod1">
    <div class="prod_txt1">
        <div class="center1">
            <p class="prod_txt">
            Eficiência: Permite localizar e acessar os produtos de forma rápida e precisa, otimizando processos operacionais e economizando tempo.
            </p>
        </div>
    </div>
</div>

<div class="prod2">

    <div class="prod_txt1">
        <div class="center2">
            <p class="prod_txt">
            Controle: Possibilita um controle efetivo do inventário, permitindo identificar discrepâncias e corrigi-las, evitando faltas ou excessos de produtos.
            </p>
        </div>    
    </div>
</div>
<div class="prod3">

    <div class="prod_txt1">
        <div class="center3">
            <p class="prod_txt">
            Satisfação do cliente: Um estoque organizado contribui para cumprir prazos de entrega, evitar erros de envio e garantir a disponibilidade dos produtos desejados pelos clientes.
            </p>
        </div>
    </div>
</div>
</div>
   
  
</div>

</body>
</html>