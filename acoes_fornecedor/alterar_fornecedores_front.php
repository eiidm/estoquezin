<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./acoes.css">
    <link rel="stylesheet" href="./menu.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="https://kit.fontawesome.com/02a8c7e6b8.js" crossorigin="anonymous"></script>
    <title>Alterar Fornecedores</title>
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
                    <li><a class='menu_item' href='../acoes_empresa/alterar_empresas_front.php'>Alteração</a></li>
                    <li><a class='menu_item' href='../acoes_empresa/excluir_empresas_front.php'>Exclusão</a></li>

                <li><a class='menu_topico'>Grupos</a></li>
                    <li><a class='menu_item' href="../cadastro_grupo/cadastro_grupo_front.php">Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_grupo/alterar_grupos_front.php'>Alteração</a></li>
                    <li><a class='menu_item' href='../acoes_grupo/excluir_grupos_front.php'>Exclusão</a></li>

                <li><a class='menu_topico'>Produtos</a></li>
                    <li><a class='menu_item' href='../cadastro_produtos/cadastro_produtos_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='../acoes_produtos/alterar_produtos_front.php'>Alteração</a></li>
                    <li><a class='menu_item' href='../acoes_produtos/excluir_produtos_front.php'>Exclusão</a></li>
                    <li><a class='menu_item' href='../consulta_produtos/consulta_produtos_front.php'>Consulta</a></li>
                    <li><a class='menu_item' href=''>Pedido de compra</a></li>

                <li><a class='menu_topico'>Fornecedores</a></li>
                    <li><a class='menu_item' href='../cadastro_fornecedor/cadastro_fornecedor_front.php'>Cadastro</a></li>
                    <li><a class='menu_item' href='./alterar_fornecedores_front.php'>Alteração</a></li>
                    <li><a class='menu_item' href='./excluir_fornecedores_front.php'>Exclusão</a></li>
            </ul>
        </div>

    <div class='home'>
        <img scr=''>
    </div> <!-- ------ MENU ------ -->

    <div class="quadro">
        <div class="nome_fornecedor">
            fornecedor xxxx<!-- colocar nome da empresa através do php -->
        </div> 

        <div class="dados">
            razao social<!-- colocar nome da empresa através do php -->
            <br>cnpj
            <br>telefone
        </div> 

        <div class="btn_ver">
            <a class="texto_btn" href="./form_altera_fornecedores_front.php">Alterar Dados</a>
        </div>
    </div>
    
    
    <div class="quadro">
        <?php
            include ("../utils/conexao.php"); 

            $sql= $conecta->query("SELECT * FROM nometabelafornecedor");
            $qtd= $sql->num_rows; 

            if($qtd > 0)
            {
                print "<table>";
                while($row = $sql->fetch_object())
                {
                    print "<tr>";
                    print "<td>".$row->id_fornecedor."</td>";
                    print "<td>".$row->nomefornecedor."</td>";
                    print "<td>".$row->razaosocial."</td>";
                    print "<td>".$row->contato."</td>";
                    print "<td>".$row->cnpj."</td>";
                    print "<td>".$row->inscricao."</td>";
                    print "<td>".$row->number."</td>";
                    print "<td>
                            <div class='btn_ver'>
                                <a class='texto_btn' location.href='?page=editar&id_fornecedor=".$row->id_fornecedor">Alterar Dados</a>
                            </div>
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