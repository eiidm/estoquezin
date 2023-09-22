<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./acoes.css">
    <link rel="stylesheet" href="./menu.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="https://kit.fontawesome.com/02a8c7e6b8.js" crossorigin="anonymous"></script>
    <title>Excluir Produtos</title>
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
                    <li><a class='menu_item' href='./alterar_produtos_front.php'>Alteração/Exclusão</a></li>
                    <li><a class='menu_item' href='../consulta_produtos/consulta_produtos_front.php'>Consulta</a></li>

                <li><a class='menu_topico'>Item</a></li>
                    <li><a class='menu_item' href='../item/cadastro_item_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../item/entrada_front.php'>Entrada</a></li>
                    <li><a class='menu_item' href='../item/saida_front.php'>Saída</a></li>

                <li><a class='menu_topico'>Fornecedores</a></li>
                    <li><a class='menu_item' href='../cadastro_fornecedor/cadastro_fornecedor_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_fornecedor/alterar_fornecedores_front.php'>Alteração/Exclusão</a></li>
            </ul>
        </div>

    <div class='home'>
        <img scr=''>
    </div> <!-- ------ MENU ------ -->

    <?php
            include ("../utils/conexao.php"); 

            $sql= $conecta->query("SELECT * FROM material");
            $qtd= $sql->num_rows; 

            if($qtd > 0)
            {
                print "<table>";

                print "<tr>";
                    print "<th>ID</td>";
                    print "<th>Nome Produto</td>";
                    print "<th>Nome Grupo</td>";
                    print "<th>Unidade</td>";
                    print "<th>Local</td>";
                    print "<th>NCM</td>";
                    print "<th>OBS</td>";
                    print "<th>Est. Max.</td>";
                    print "<th>Est. Min.</td>";
                    print "<th>Est. Ideal</td>";
                    print "<th>Valor</td>";
                    print "<th>Imagem</td>";
                    print "<th>Ações</td>";
                print "</tr>";

                while($row = $sql->fetch_object())
                {
                    print "<tr>";
                    print "<td>".$row->id."</td>";
                    print "<td>".$row->nomematerial."</td>";
                    print "<td>".$row->nomegrupo."</td>";
                    print "<td>".$row->unidade."</td>";
                    print "<td>".$row->local."</td>";
                    print "<td>".$row->id_NCM."</td>";
                    print "<td>".$row->estoquemax."</td>";
                    print "<td>".$row->estoquemin."</td>";
                    print "<td>".$row->estoqueideal."</td>";
                    print "<td>".$row->valor_custo."</td>";
                    print "<td>".$row->fotomaterial."</td>";
                    print "<td>".$row->obs."</td>";
                    print "<td>
                    <a class='btn btn-sm btn-primary' href='excluir_produtos_back.php?id=$row[id]'>Excluir Produtos
                    </a>   
                    </td>";
                    
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