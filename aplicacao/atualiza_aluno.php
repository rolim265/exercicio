<!DOCTYPE html>
<html lang="pt-br"> <!-- Define o idioma da página como português do Brasil -->

<head>
    <title>Atualiza Curso</title> <!-- Título da página que aparece na aba do navegador -->
    <meta charset="utf-8"> <!-- Define o conjunto de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"> <!-- Configurações de visualização responsiva -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Garante compatibilidade com versões mais antigas do Internet Explorer -->

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <!-- Define palavras-chave para mecanismos de busca -->
    
    <meta name="author" content="Codedthemes" /> <!-- Define o autor da página -->

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> <!-- Ícone que aparece na aba do navegador -->

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"> <!-- Importa a fonte Open Sans do Google Fonts -->

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css"> <!-- Inclui o CSS do Bootstrap -->

    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all"> <!-- Inclui o CSS para efeitos de ondas -->

    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css"> <!-- Inclui ícones do Themify -->

    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome-n.min.css"> <!-- Inclui ícones do Font Awesome (versão alternativa) -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css"> <!-- Inclui ícones do Font Awesome -->

    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css"> <!-- Inclui o CSS para customizar a barra de rolagem -->

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"> <!-- Inclui o estilo principal da página -->
</head>

<body>
    
    <?php include 'menu_principal.php'; ?> <!-- Inclui o arquivo PHP do menu principal -->

    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <!-- Project statustic start -->
                        <div class="col-xl-12"> <!-- Define uma coluna que ocupa 12 colunas no grid do Bootstrap -->
                            <div class="row">
                                <div class="col-xl-8 col-md-10 m-auto"> <!-- Define uma coluna centralizada com largura de 8 em telas grandes e 10 em médias -->
                                    <h2>Atualizar Aluno</h2> <!-- Título da seção -->

                                    <?php
                                        $id = intval($_GET['id']); // Converte o valor do parâmetro 'id' da URL para um inteiro

                                        $url = "http://localhost/exercicio/api.php/alunos/{$id}"; // Monta a URL para a API com o ID do aluno

                                        $response = file_get_contents($url); // Faz uma requisição GET à URL da API
                                        $data = json_decode($response, true); // Decodifica o JSON da resposta para um array associativo

                                        echo $data; // Exibe o conteúdo do array (para debug, deve ser removido em produção)
                                    ?>
                                    
                                    <form action="executa_atualiza_aluno.php?id=<?php echo $id;?>" method="POST">
                                        <!-- Formulário que envia dados para a página PHP responsável pela atualização -->

                                        <div class="mb-3">
                                            <label for="nome" class="form-label">Nome do Aluno</label> <!-- Rótulo do campo de texto -->
                                            <input type="text" id="nome" name="nome" class="form-control" value="<?php echo htmlspecialchars($data['dados_aluno']['nome']); ?>" placeholder="Digite o nome do aluno" required>
                                            <!-- Campo de texto para o nome do aluno, preenchido com o valor atual obtido da API -->
                                        </div> 

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email do Aluno</label> <!-- Rótulo do campo de email -->
                                            <input type="email" id="email" name="email" class="form-control" value="<?php echo htmlspecialchars($data['dados_aluno']['email']); ?>" placeholder="Digite o email do aluno" required>
                                            <!-- Campo de email para o aluno, preenchido com o valor atual obtido da API -->
                                        </div> 

                                        <div class="mb-3">
                                            <label for="cursos-dropdown" class="form-label">Nome do Curso</label> <!-- Rótulo do dropdown para cursos -->
                                            <?php
                                                $url = 'http://localhost/exercicio/api.php/cursos'; // URL da API para obter os cursos
                                                $response = file_get_contents($url); // Faz uma requisição GET à URL da API
                                                $cursos = json_decode($response, true); // Decodifica o JSON da resposta para um array associativo

                                                if (isset($cursos['dados'])) { // Verifica se a chave 'dados' está presente no array de cursos
                                                    echo '<select class="form-select" id="cursos-dropdown" name="curso_id" required>'; // Inicia o dropdown de cursos
                                                    echo '<option value="" disabled>Selecione um curso</option>'; // Opção padrão do dropdown
                                                    foreach ($cursos['dados'] as $curso) { // Itera sobre os cursos disponíveis
                                                        $selected = ($curso['id_curso'] == $data['dados_aluno']['fk_cursos_id_curso']) ? 'selected' : ''; // Verifica se o curso atual é o curso do aluno e marca como selecionado
                                                        echo '<option value="' . $curso['id_curso'] . '" ' . $selected . '>' . htmlspecialchars($curso['nome_curso']) . '</option>'; // Cria uma opção no dropdown para cada curso
                                                    }
                                                    echo '</select>'; // Fecha o dropdown
                                                } else {
                                                    echo '<p>Nenhum curso encontrado.</p>'; // Mensagem de erro se nenhum curso for encontrado
                                                }
                                            ?>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Atualizar</button> <!-- Botão de submissão do formulário -->
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Project statustic end -->
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
            <div id="styleSelector"> </div> <!-- Seletor de estilo (vazio, mas poderia ser utilizado para escolher temas, por exemplo) -->
        </div>
    </div>

    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script> <!-- Importa o jQuery -->
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script> <!-- Importa o jQuery UI para interfaces gráficas -->
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script> <!-- Importa o Popper.js para posicionamento de popovers -->
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script> <!-- Importa o Bootstrap JavaScript -->

    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script> <!-- Importa o Waves.js para efeitos de ondas -->

    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script> <!-- Importa o SlimScroll para barras de rolagem customizadas -->

    <!-- slimscroll js -->
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script> <!-- Importa o CustomScrollbar para mais customizações de barras de rolagem -->

    <!-- menu js -->
    <script src="assets/js/pcoded.min.js"></script> <!-- Importa o script para o menu lateral (parte do tema) -->
    <script src="assets/js/vertical/vertical-layout.min.js"></script> <!-- Script para a organização vertical do layout -->

    <script type="text/javascript" src="assets/js/script.js"></script> <!-- Script principal da página -->
</body>

</html>
