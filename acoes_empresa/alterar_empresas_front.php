<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./acoes.css">
    <link rel="stylesheet" href="./menu.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="https://kit.fontawesome.com/02a8c7e6b8.js" crossorigin="anonymous"></script>
    <title>Alterar Empresas</title>
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
                    <li><a class='menu_item' href='./alterar_empresas_front.php'>Alteração/Exclusão</a></li>

                <li><a class='menu_topico'>Grupos</a></li>
                    <li><a class='menu_item' href="../cadastro_grupo/cadastro_grupo_front.php">Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_grupo/alterar_grupos_front.php'>Alteração/Exclusão</a></li>

                <li><a class='menu_topico'>Produtos</a></li>
                    <li><a class='menu_item' href='../cadastro_produtos/cadastro_produtos_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_produtos/alterar_produtos_front.php'>Alteração/Exclusão</a></li>
                    <li><a class='menu_item' href='../consulta_produtos/consulta_produtos_front.php'>Consulta</a></li>

                <li><a class='menu_topico'>Item</a></li>
                    <li><a class='menu_item' href='../item/cadastro_item_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../item/entrada_front.php'>Entrada</a></li>
                    <li><a class='menu_item' href='../item/saida_front.php'>Saída</a></li>
                    <li><a class='menu_item' href='../item/relatorio_front.php'>Relatório de entrada</a></li>

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

            $sql= $conecta->query("SELECT * FROM nometabelaempresa");
            $qtd= $sql->num_rows; 

            if($qtd > 0)
            {
                print "<table>";

                print "<tr>";
                    print "<th>ID</td>";
                    print "<th>Razão Social</td>";
                    print "<th>Email</td>";
                    print "<th>CNPJ</td>";
                    print "<th>Endereço</td>";
                    print "<th>Telefone</td>";
                    print "<th>Senha</td>";
                    print "<th>Ações</td>";
                print "</tr>";

                while($row = $sql->fetch_object())
                {
                    print "<tr>";
                    print "<td>".$row->id_empresa."</td>";
                    print "<td>".$row->razaosocial."</td>";
                    print "<td>".$row->email."</td>";
                    print "<td>".$row->cnpj."</td>";
                    print "<td>".$row->endereco."</td>";
                    print "<td>".$row->telefone."</td>";
                    print "<td>".$row->senha."</td>";
                    print "<td>
                    <a class='btn btn_um' href='editar_empresa.php?id_empresa=$row[id_empresa]'> Alterar Empresas </a>   
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