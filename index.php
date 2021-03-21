<?php require_once('private/config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO meta tags -->
    <meta name="author" content="Gabriel Santos Cardoso">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index,follow">
    <!-- External links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Essential links -->
    <link rel="stylesheet" href="public/css/style.css">
    <!-- Title -->
    <title><?php echo ENTERPRISE_NAME.' | '.ENTERPRISE_DESC; ?></title>
</head>
<body class="fadeIn">
    <header>
        <div class="container">
            <div class="logotype">
                <h2><a href="<?php echo INCLUDE_PATH; ?>" title="<?php echo ENTERPRISE_NAME; ?>"><?php echo ENTERPRISE_NAME; ?></a></h2>
            </div><!-- logotype -->
            <div class="social-medias">
                <h2><a target="__blank" href="https://www.instagram.com/<?php echo ENTERPRISE_INSTAGRAM; ?>"><i class="fa fa-instagram" aria-hidden="true" title="<?php echo TITLE_INSTAGRAM; ?>"></i></a></h2>
                <h2><a target="__blank" href="http://api.whatsapp.com/send?1=pt_BR&phone=<?php echo ENTERPRISE_WHATSAPP; ?>. "><i class="fa fa-whatsapp" aria-hidden="true" title="<?php echo TITLE_WHATSAPP; ?>"></i></a></h2>
                <h2><a target="__blank" href="https://t.me/<?php echo ENTERPRISE_TELEGRAM; ?>"><i class="fa fa-telegram" aria-hidden="true" title="<?php echo TITLE_TELEGRAM; ?>"></i></a></h2>
            </div><!-- social-medias -->
        </div><!-- container -->
    </header>

    <section class="banner">
        <div class="container">
            <div class="headline" id="headlineWrapper">
                <h2>Somos especializados em:</h2>
                <ul>
                    <li>Serviços de gráfica rápida e informática</li>
                    <li>Produção de trabalhos acadêmicos e documentações</li>
                    <li>Produção de designs e conteúdos digitais</li>
                    <li>Desenvolvimento de sistemas para a web</li>
                    <p>E muito mais, venha conferir!</p>
                </ul>
            </div><!-- headline -->
            <div class="form-wrapper" id="formWrapper">
                <form method="POST" id="form" action="private/components/form.php">
                    <h2>Preencha o formulário e peça seu orçamento!</h2>
                    <div class="group-input">
                        <label for="nameForm">Nome*</label>
                        <input type="text" name="nameForm" id="nameForm" maxLength=30 required>
                    </div><!-- group-input -->
                    <div class="group-input">
                        <label for="emailForm">E-mail*</label>
                        <input type="text" name="emailForm" id="emailForm" required>
                    </div><!-- group-input -->
                    <div class="group-input">
                        <label for="phoneForm">Telefone (com DDD)*</label>
                        <input type="text" name="phoneForm" id="phoneForm" maxLength=18 minLength=11 required>
                    </div><!-- group-input -->
                    <p>* Campos obrigatório</p>
                    <input type="submit" value="Enviar" id="submitForm" name="submitForm">
                </form>
            </div><!-- form-wrapper -->
        </div><!-- container -->
    </section><!-- banner -->

    <section class="info" id="infoWrapper">
        <div class="container">
            <h1>Não oferecemos apenas serviço, oferecemos valores</h1>
            <p>
                <?php echo GENDER_ENTERPRISE_UPPERCASE.' '.ENTERPRISE_NAME; ?> é uma empresa de prestação de serviços especializada em gráfica rápida, conteúdo digital e desenvolvimento web. Agilidade, criatividade, comprometimento e valores são os principais valores desse empreendimento familiar. Lançada em mercado em 2020, <?php echo GENDER_ENTERPRISE_LOWCASE.' '.ENTERPRISE_NAME; ?> está presente em <?php echo ENTERPRISE_ADDRESS; ?>, atendendo a demanda regional, alcançando cidades como Abaetetuba e Belém. Estamos sempre preparados para os novos desafios do mercado e para propor soluções para nosso clientes.
            </p>
            <h2><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></h2>
        </div><!-- container -->
    </section><!-- info -->
    
    <section class="diferentials" id="diferentialsWrapper">
        <h1>O que podemos oferecer a você?</h1>
        <div class="container">
            <div class="group-diferential">
                <h1><i class="fa fa-usd" aria-hidden="true"></i></h1>
                <h3>Melhor custo benefício</h3>
                <p><?php echo GENDER_ENTERPRISE_UPPERCASE.' '.ENTERPRISE_NAME; ?> oferece o melhor em termos de serviço e atendimento, pelo melhor custo benefício do mercado. </p>
            </div><!-- group-diferential -->
            <div class="group-diferential">
                <h1><i class="fa fa-users" aria-hidden="true"></i></h1>
                <h3>Equipe dedicada e com foco</h3>
                <p>Nosso time conta com profissionais especializados e comprometidos a fornecer aos nossos cliente o melhor atendimento, reconhecimento e cuidado.</p>
            </div><!-- group-diferential -->
            <div class="group-diferential">
                <h1><i class="fa fa-envelope" aria-hidden="true"></i></h1>
                <h3>Atendimento e comunicação</h3>
                <p>Nossa organização conta com canais próprios de comunicação para evitar longos períodos de espera. Não gostamos que nossos clientes percam tempo!</p>
            </div><!-- group-diferential -->
        </div><!-- container -->
    </section><!-- diferential -->

    <footer>
        <div class="container">
            <p>&copy;Desenvolvido por <b>Gabriel Santos Cardoso</b></p>
            <p><?php echo ENTERPRISE_NAME.' | '.ENTERPRISE_ADDRESS; ?></p>
        </div><!-- container -->
    </footer>

    <!-- Essential scripts -->
    <script src="public/js/script.js"></script>
</body>
</html>
