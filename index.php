<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maria Ramos - Portfólio</title>
    <link rel="icon" type="image/png" href="assets/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <style>
    @import url("https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@500;600&display=swap");html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline
}
        body {
            background-color: #13131F;
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
        }
        
        .btn-custom {
            background-color: #4b0082;
            color: #ffffff;
            border-radius: 25px;
            padding: 10px 25px;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #6a0dad;
        }
        .card {
            background-color: #1e1e1e;
            color: white;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s;
            border: 2px solid #4b0082;
        }
        .card:hover {
            transform: scale(1.05);
            border-color: #6a0dad;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background: #121212;
            color: #ffffff;
        }
        
        
        .skill-card {
    background-color: #1e1e1e;
    color: white;
    text-align: center;
    padding: 15px;
    margin: 10px;
    border-radius: 15px;
    border: 2px solid #4b0082;
    transition: transform 0.3s, border-color 0.3s;
}

.skill-card:hover {
    transform: scale(1.1);
    border-color: #6a0dad;
}

.skill-card img {
    width: 50px;
    height: 50px;
    margin-bottom: 10px;
}

.skill-card p {
    margin: 0;
    font-weight: bold;
}


section#sobre {
    padding-bottom: 7.0rem;
}
.js-section.active {
    transform: translateX(0);
    opacity: 1;
}

section#sobre .container {
    display: flex;
    flex-direction: column;
}
.container {
    margin-right: auto;
    margin-left: auto;
    width: 90%;
}

section#sobre .banner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10rem 2.5rem;
}

section#sobre .banner .intro {
    display: flex;
    flex-direction: column;
    gap: 2.5rem;
}

section#sobre .banner .intro .title {
    display: flex;
    flex-direction: column;
    
}

section#sobre .banner .intro .title h1 {
    font-family: 'Poppins', sans-serif;
    font-size: 2.6rem;
    font-weight: 500;
    color: #F9F9F9;
    
}

section#sobre .banner .intro .title span {
    font-family: 'Poppins', sans-serif;
    font-size: 2.6rem;
    font-weight: 500;
    color: #F9F9F9;
 
    display: block;
    color: #8257E6;
}

section#sobre .banner .intro .title p {
    font-family: 'DM Sans', sans-serif;
    font-size: 1.2rem;
    font-weight: 500;
    color: #828282;
}
section#sobre .banner .intro .actions {
    display: flex;
    gap: 2.5rem;
}

section#sobre .banner .intro .actions a {
    font-family: 'DM Sans', sans-serif;
    font-size: 0.9rem;
    font-weight: 500;
    color: #F9F9F9;
    padding: 0.7rem 1.6rem;
    background-image: linear-gradient(90deg, rgba(130, 87, 230, 0.8) .2%, rgba(121, 48, 190, 0.648) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 2rem;
    transition: 0.3s;
}
a {
    text-decoration: none;
    border: none;
}

section#sobre .banner .intro .actions a:nth-child(2) {
    background-image: none;
    border: 0.1rem solid #8257E6;
}

section#sobre .banner .profile img {
    cursor: pointer;
    transition: 0.2s;
    max-width: 100%;
    animation: scaleDelayed 1s 6.5s;
}

section#sobre .about {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 2.5rem;
}

section#sobre .about h2 {
    font-family: 'DM Sans', sans-serif;
    font-size: 2.0rem;
    color: #F9F9F9;
    font-weight: 600;
}
section#sobre .about p {
    color: #828282;
    font-family: 'DM Sans', sans-serif;
    font-size: 1.1rem;
    text-align: center;
    width: 55%;
    line-height: 180%;
}

.actions a {
  display: inline-block;
  padding: 10px 20px;
  background-color: #000;
  color: #fff;
  text-decoration: none;
  font-weight: bold;
  border-radius: 5px;
  transition: all 0.3s ease;
}

.actions a:hover {
  transform: scale(1.1);
  background-color: #444;
}

.card-img-top {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 10px;
}

.modal-content {
    background-color: #13131F;
    color: #ffffff;
    border: 2px solid #4b0082;
}

.modal-header, .modal-footer {
    border-color: #6a0dad;
}

.btn-close {
    filter: invert(1);
}
    </style>
</head>
<body>
    <section id="sobre" class="js-section active">
    <div class="container">
      <div class="banner">
        <div class="intro">
          <div class="title">
            <h1>Olá, eu sou a </h1>
            <span>Maria Eduarda :)</span>
            <p>Desenvolvedora Júnior</p>
          </div>
          <div class="actions">
            <a href="CurriculoMaria.pdf" download="">Download CV</a>
            <a href="mailto:mariaeduardaramos1907@gmail.com" target="_blank">Entrar em contato</a>
          </div>
        </div>
        <div class="profile">
          <a href="" target="_blank">
            <img src="assets/avatar.png" alt="avatar">
          </a>
        </div>
      </div>
      <div class="about">
        <h2>Sobre mim</h2>
        <p>
          Desenvolvedora web, focada principalmente em PHP, JavaScript e Bootstrap. Durante minha trajetóriaparticipei de projetos que vão desde a criação de funcionalidades até a manutenção de sites,aplicações e microserviços, sempre com foco em entregar a melhor experiência ao usuário final. Souapaixonada por resolver problemas complexos e criar soluções eficientes, o que me motiva a encararnovos desafios e a me manter em constante aprendizado.
        </p>
      </div>
    </div>
  </section>
    
    <div class="container mt-5" id="habilidades">
    <h2 class="text-center mb-4" data-aos="fade-up" style="font-family: 'DM Sans', sans-serif; font-size: 2.0rem; color: #F9F9F9;font-weight: 600;">Habilidades</h2>
    <div class="row justify-content-center">
        <div class="col-md-2 col-4 skill-card" data-aos="fade-up">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5">
            <p>HTML5</p>
        </div>
        <div class="col-md-2 col-4 skill-card" data-aos="fade-up" data-aos-delay="100">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3">
            <p>CSS3</p>
        </div>
        <div class="col-md-2 col-4 skill-card" data-aos="fade-up" data-aos-delay="200">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript">
            <p>JavaScript</p>
        </div>
        <div class="col-md-2 col-4 skill-card" data-aos="fade-up" data-aos-delay="400">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" alt="Bootstrap">
            <p>Bootstrap</p>
        </div>
        <!-- Novas habilidades -->
        <div class="col-md-2 col-4 skill-card" data-aos="fade-up" data-aos-delay="500">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" alt="Java">
            <p>Java</p>
        </div>
        <div class="col-md-2 col-4 skill-card" data-aos="fade-up" data-aos-delay="600">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" alt="Docker">
            <p>Docker</p>
        </div>
        <div class="col-md-2 col-4 skill-card" data-aos="fade-up" data-aos-delay="700">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP">
            <p>PHP</p>
        </div>
    </div>
</div>

<div class="container mt-5" id="projetos">
    <h2 class="text-center mb-4" data-aos="fade-up" style="font-family: 'DM Sans', sans-serif; font-size: 2.0rem; color: #F9F9F9;font-weight: 600;">Projetos Recentes</h2>
    <div class="row">
        <div class="col-md-4" data-aos="zoom-in">
            <div class="card p-3">
                <img src="assets/sysfila.png" alt="Projeto 1" class="card-img-top" data-bs-toggle="modal" data-bs-target="#projeto1Modal">
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="card p-3">
                <img src="assets/balcao.png" alt="Projeto 2" class="card-img-top" data-bs-toggle="modal" data-bs-target="#projeto2Modal">
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="card p-3">
                <img src="assets/sig.png" alt="Projeto 3" class="card-img-top" data-bs-toggle="modal" data-bs-target="#projeto3Modal">
            </div>
        </div>
    </div>
</div>

<!-- Modals -->
<div class="modal fade" id="projeto1Modal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content" style="background-color: #13131F; color: white; border-radius: 10px;">
            <div class="modal-header border-0">
                <h5 class="modal-title">Sistemas de Senhas</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="col-md-6">
                    <img src="assets/sysfila.png" alt="Sistemas de Senhas" class="img-fluid" style="border-radius: 10px;">
                </div>
                <div class="col-md-6 ps-4">
                    <p>
                        Software informatizado ou mecânico usado para gerenciar e organizar o fluxo de pessoas em ambientes de atendimento, garantindo um serviço ordenado e eficiente.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="projeto2Modal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content" style="background-color: #13131F; color: white; border-radius: 10px;">
            <div class="modal-header border-0">
                <h5 class="modal-title">Sistema Gerar Senhas</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="col-md-6">
                    <img src="assets/balcao.png" alt="Projeto 2" class="img-fluid" style="border-radius: 10px;">
                </div>
                <div class="col-md-6 ps-4">
                    <p>
                        Software desenvolvido para emitir e organizar senhas de atendimento, permitindo que usuários sejam chamados de forma ordenada e eficiente.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="projeto3Modal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content" style="background-color: #13131F; color: white; border-radius: 10px;">
            <div class="modal-header border-0">
                <h5 class="modal-title">Sistema Integrado de Gestão</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="col-md-6">
                    <img src="assets/sig.png" alt="Projeto 3" class="img-fluid" style="border-radius: 10px;">
                </div>
                <div class="col-md-6 ps-4">
                    <p>
                        Software que unifica e gerencia diversos processos e informações de uma empresa em um único ambiente, permitindo maior eficiência, controle e tomada de decisão baseada em dados.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


    <footer class="footer">
        <p>&copy; 2025 Maria Eduarda Ramos - Todos os direitos reservados</p>
    </footer>
    

    
    <script>
        AOS.init();
    </script>
    <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
