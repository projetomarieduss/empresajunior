<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/painel.css"> 
    <title>Painel</title>
</head>
<body>
<div class="hero">
        <div class="hero-content">
            <div class="hero-title">Bem-vindo aos Nossos Serviços!</div>
            <div class="hero-subtitle">Estamos felizes em tê-lo aqui. Explore e divirta-se!</div>
        </div>
    </div> <?php echo $_SESSION['nome']; ?>
    <div class="container">
        <h1>Serviços Oferecidos:</h1>
    <div class="services-section">
        <div class="service-card">
            <div class="service-title">Avaliação e diagnóstico</div>
            As avaliações de deficiência física motora são detalhadas e determinam o grau de comprometimento de um indivíduo. São conduzidas por uma equipe multidisciplinar: médicos, fisioterapeutas, terapeutas ocupacionais e especialistas em reabilitação. O processo inicia-se com uma avaliação médica, analisando histórico e realizando exames. Avaliações funcionais medem a capacidade de atividades diárias, incluindo testes específicos de caminhada e força muscular. A duração das avaliações varia conforme a gravidade e complexidade do caso. O time de especialistas fornece uma visão completa das necessidades do paciente. Estas avaliações ocorrem ao longo da vida do indivíduo, permitindo ajustes no tratamento e monitoramento contínuo.             
        
        </div>

        <div class="service-card">
            <div class="service-title">Terapia e reabilitação</div>
            <ul>
                <li>
                    <button id="meuBotao">Fisioterapia</button>
                </li>
                <li>
            2. Terapia Ocupacional: A terapia ocupacional ajuda as pessoas com deficiência física motora a desenvolver habilidades para realizar atividades cotidianas de forma independente. Essa terapia envolve treinamento de autocuidado, adaptação de ambientes, utilização de equipamentos assistivos e atividades que melhoram a coordenação, mobilidade e destreza. Os benefícios da terapia ocupacional incluem maior independência funcional, melhora na qualidade de vida e autonomia nas atividades diárias.
                  </li>
                <li>
            3. Hidroterapia: A hidroterapia é uma terapia que utiliza a água como meio para promover a reabilitação física. A água ajuda a reduzir o impacto nas articulações e oferece resistência suave, permitindo que os pacientes realizem exercícios de forma mais fácil. Os benefícios da hidroterapia incluem melhora da força, flexibilidade, equilíbrio e coordenação motora, além de alívio da dor e relaxamento muscular.
                 </li>
                <li>
            4. Equoterapia: A equoterapia é uma terapia que utiliza cavalos como meio de reabilitação. O movimento tridimensional do cavalo estimula o equilíbrio, coordenação, força muscular e postura dos pacientes. Além disso, o contato com o animal pode proporcionar benefícios emocionais, aumentar a autoestima e motivar os pacientes a se engajarem na terapia. Os benefícios da equoterapia incluem melhora da postura, do equilíbrio, da coordenação motora e do autocontrole emocional.
                </li>
                    
        </ul>
        </div>

        <div class="service-card">
            <div class="service-title">Consultoria</div>
            Se você oferece consultoria para tornar ambientes mais acessíveis ou treinamento para cuidadores e familiares, detalhe os tipos de consultoria e os benefícios que elas trazem.
        </div>

        <div class="service-card">
            <div class="service-title">Venda ou aluguel de equipamentos</div>
            Se você fornece cadeiras de rodas, andadores, próteses, ou outros dispositivos de assistência, liste os principais produtos e como eles ajudam as pessoas.
        </div>
    </div>

        <h2>Recursos Educacionais:</h2>
        <ul>
        <div class="services-section">
            <div class="service-card">
                <div class="service-title">Workshops e treinamentos</div>
                Informações sobre cursos oferecidos, focados em habilidades motoras, uso de equipamentos, etc.
            </div>
            <div class="service-card">
                <div class="service-title">Materiais educativos</div>
                Guias, vídeos, e outros recursos que ajudam a entender e lidar com deficiência motora.
            </div>
            
        </ul>

        <h2>Histórias de Sucesso:</h2>
        <p>Testemunhos de pessoas que utilizaram seus serviços e tiveram progressos significativos.</p>

        <h2>FAQ (Perguntas Frequentes):</h2>
        <ul>
    <div class="faq-section">
        <div class="faq-item">
            <div class="faq-question">O que causa deficiência motora?</div>
            <div class="faq-answer">Resposta sobre a causa da deficiência motora...</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Quais são os sinais e sintomas?</div>
            <div class="faq-answer">Resposta sobre os sinais e sintomas...</div>
        </div>
        <div class="faq-item">
            <div class="faq-question">Como posso ajudar alguém com deficiência motora?</div>
            <div class="faq-answer">Resposta sobre como ajudar...</div>
        </div>
        <!-- Adicione mais perguntas e respostas conforme necessário -->
    </div>
        </ul>

        <h2>Galeria de Fotos e Vídeos:</h2>
        <div class="gallery">
            <!-- Adicione imagens conforme necessário -->
            <img src="caminho_para_sua_imagem1.jpg" alt="Descrição da Imagem 1">
            <img src="caminho_para_sua_imagem2.jpg" alt="Descrição da Imagem 2">
            <!-- Adicione mais imagens conforme necessário -->
        </div>
        <p>
        <a href="logout.php">Sair</a>
    </p>
    </div>

    <script>
    // JavaScript para implementar a funcionalidade de acordeão
    document.addEventListener('DOMContentLoaded', function() {
        let faqItems = document.querySelectorAll('.faq-item');
        
        faqItems.forEach(function(item) {
            item.addEventListener('click', function() {
                let answer = this.querySelector('.faq-answer');
                if (answer.style.display === "none") {
                    answer.style.display = "block";
                } else {
                    answer.style.display = "none";
                }
            });
        });
    });
    // Obtém o botão por ID
    const meuBotao = document.getElementById("meuBotao");

    // Adiciona um ouvinte de evento para o clique no botão
    meuBotao.addEventListener("click", function() {
        // Exibe um alerta quando o botão é clicado
        alert("A fisioterapia é uma terapia que utiliza exercícios e técnicas manuais para melhorar a mobilidade, fortalecer músculos enfraquecidos e aliviar dores musculares. Os benefícios da fisioterapia incluem o aumento da força e resistência muscular, melhora da coordenação motora, diminuição da dor e aumento da independência nas atividades diárias.");
    });

</script>
    
</body>
</html>