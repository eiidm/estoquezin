<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./aquisicao.css">
    <link rel="stylesheet" href="./menu.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/02a8c7e6b8.js" crossorigin="anonymous"></script>
    <title>Saída do Item</title>
</head>

<body>
    <div class='cabecalho'>
        <input id='menu_to' type='checkbox' />
        <label class='menu_btn' for='menu_to'>
            <span></span>
        </label>
            <ul class='menu_box'>
                <li><a class='menu_item' href='../home/home_front.php'>Home</a></li>
                <li><a class='menu_item' href="../login_colaborador/login_colaborador_front.php">Colaborador</a></li>

                <li><a class='menu_topico'>Empresas</a></li>
                    <li><a class='menu_item' href='../login_empresa/cadastro_empresa_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_empresa/alterar_empresas_front.php'>Alteração/Exclusão</a></li>

                <li><a class='menu_topico'>Grupos</a></li>
                    <li><a class='menu_item' href="../cadastro_grupo/cadastro_grupo_front.php">Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_grupo/alterar_grupos_front.php'>Alteração/Exclusão</a></li>

                <li><a class='menu_topico'>Produtos</a></li>
                    <li><a class='menu_item' href='../cadastro_produtos/cadastro_produtos_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_produtos/alterar_produtos_front.php'>Alteração/Exclusão</a></li>
                    <li><a class='menu_item' href='../consulta_produtos/consulta_produtos_front.php'>Consulta</a></li>

                <li><a class='menu_topico'>Item</a></li>
                    <li><a class='menu_item' href='./cadastro_item_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='./entrada_front.php'>Entrada</a></li>
                    <li><a class='menu_item' href='./saida_front.php'>Saída</a></li>

                <li><a class='menu_topico'>Fornecedores</a></li>
                    <li><a class='menu_item' href="./cadastro_fornecedor_front.php">Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_fornecedor/alterar_fornecedores_front.php'>Alteração/Exclusão</a></li>
            </ul>
        </div>
        <?php
            include ("../utils/conexao.php"); 

            $sql= $conecta->query("SELECT * FROM item");
            $qtd= $sql->num_rows; 

            if($qtd > 0)
            {
                print "<table>";

                print "<tr>";
                    print "<th>ID</th>";
                    print "<th>Nome do Item</th>";
                    print "<th>Código do item</th>";
                    print "<th>Descrição</th>";
                    print "<th>Valor de Aquisição</th>";
                    print "<th>Valor de Venda</th>";
                    print "<th>Quantidade de estoque </th>";
                    print "<th>Quantidade de Venda</th>";
                    print "<th>Saldo do item</th>";
                print "</tr>";

                while($row = $sql->fetch_object())
                {
                    print "<tr>";
                    print "<td>".$row->id_item."</td>";
                    print "<td>".$row->nomeitem."</td>";
                    print "<td>".$row->codigo."</td>";
                    print "<td>".$row->descricao."</td>";
                    print "<td>".$row->valoraquisicao."</td>";
                    print "<td>".$row->valorvenda."</td>";
                    print "<td>".$row->quantiade_estoque."</td>";
                    print "<td>".$row->quantidade_vendida."</td>";
                    print "<td>".$row->saldo."</td>";
                    print "</tr>";                                 
                }
                print "</table>";
            }
            
            else
            {
                print "<p>Não encontrou resultados</p>";
            }
            mysqli_close($conecta); 
        ?>            



    </body>
</html>