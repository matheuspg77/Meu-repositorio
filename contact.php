<?php
$mensagem = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars($_POST['nome'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $msg = htmlspecialchars($_POST['mensagem'] ?? '');
    
    // Configurações do e-mail
    $to = 'matheusqls150@gmail.com'; // E-mail para receber as mensagens do formulário
    $subject = 'Novo contato do portfólio';
    $body = "Nome: $nome\nE-mail: $email\nMensagem: $msg";
    $headers = "From: $email\r\nReply-To: $email\r\n";
    
    if (mail($to, $subject, $body, $headers)) {
        $mensagem = '<div style="color:green;margin-bottom:16px;">Mensagem enviada com sucesso!</div>';
    } else {
        $mensagem = '<div style="color:red;margin-bottom:16px;">Erro ao enviar. Tente novamente.</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matheus de Souza Santos | Desenvolvedor Back-end</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Olá, eu sou <span class="highlight">Matheus Santos</span></h1>
                    <h2>Desenvolvedor Back-end</h2>
                    <p class="hero-description">
                        Apaixonado por criar soluções robustas e escaláveis. 
                        Especializado em PHP, Laravel e desenvolvimento de APIs.
                    </p>
                    <div class="hero-buttons">
                        <a href="#projetos" class="btn btn-primary">Ver Projetos</a>
                        <a href="#contato" class="btn btn-secondary">Contato</a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="avatar">
                        <img src="assets/images/Imagem do WhatsApp de 2025-07-08 à(s) 18.27.05_78eafa58.jpg" alt="Matheus Santos" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="sobre">
        <div class="section-title">Sobre Mim</div>
        <div class="about">
            Sou apaixonado por tecnologia e desenvolvimento web, com experiência em projetos de front-end e back-end. Busco sempre aprender novas ferramentas e entregar soluções eficientes.
        </div>
        <div class="section-title">Skills</div>
        <div class="skills">
            <div class="skill"><i class="fab fa-html5"></i><span>HTML5</span></div>
            <div class="skill"><i class="fab fa-css3-alt"></i><span>CSS3</span></div>
            <div class="skill"><i class="fab fa-js"></i><span>JavaScript</span></div>
            <div class="skill"><i class="fab fa-php"></i><span>PHP</span></div>
            <div class="skill"><i class="fab fa-laravel"></i><span>Laravel</span></div>
            <div class="skill"><i class="fab fa-git-alt"></i><span>Git</span></div>
        </div>
    </section>

    <section id="projetos">
        <div class="section-title">Projetos</div>
        <div class="projects">
            <div class="card">
                <img src="https://via.placeholder.com/270x140?text=Projeto+1" alt="Projeto 1">
                <div class="card-body">
                    <div class="card-title">Projeto 1</div>
                    <a class="card-link" href="https://github.com/matheuspg77/projeto1" target="_blank">Ver no GitHub</a>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/270x140?text=Projeto+2" alt="Projeto 2">
                <div class="card-body">
                    <div class="card-title">Projeto 2</div>
                    <a class="card-link" href="https://github.com/matheuspg77/projeto2" target="_blank">Ver no GitHub</a>
                </div>
            </div>
            <!-- Adicione mais projetos conforme necessário -->
        </div>
    </section>

    <section id="contato">
        <div class="section-title">Contato</div>
        <div class="contact-links">
            <a href="https://www.linkedin.com/in/matheus-de-souza-santos-93343a34a/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
            <a href="https://github.com/matheuspg77" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
            <a href="https://www.instagram.com/otheus063/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="mailto:matheusqls150@gmail.com" title="E-mail"><i class="fas fa-envelope"></i></a>
        </div>
        <?php echo $mensagem; ?>
        <form action="contact.php" method="POST">
            <input type="text" name="nome" placeholder="Seu nome" required>
            <input type="email" name="email" placeholder="Seu e-mail" required>
            <textarea name="mensagem" rows="4" placeholder="Sua mensagem" required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </section>

    <script>
        // Animação de texto digitando
        const texts = ["PHP", "Laravel", "Front-end", "Back-end"];
        let count = 0, index = 0, currentText = '', letter = '';
        (function type(){
            if(count === texts.length) count = 0;
            currentText = texts[count];
            letter = currentText.slice(0, ++index);
            document.getElementById('typing').textContent = letter + (index % 2 === 0 ? '|' : '');
            if(letter.length === currentText.length){
                setTimeout(() => {
                    index = 0;
                    count++;
                    setTimeout(type, 700);
                }, 900);
            } else {
                setTimeout(type, 120);
            }
        })();
    </script>
</body>
</html>
