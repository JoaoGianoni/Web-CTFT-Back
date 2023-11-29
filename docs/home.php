<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CTFT</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilos/styles.css">
</head>

<body>
    <!-- Cabeçalho -->

    <header id="home">
        <div class="menu">

            <div class="logo"><img src="./img/logo.jpg" alt=""></div>

            <nav class="desktop-menu">
                <ul>
                    <li><a href="#sobre-nos" id="scroll">Sobre nós</a></li>
                    <li><a href="#modalidades" id="scroll">Modalidades</a></li>
                    <li><a href="#horarios" id="scroll">Horários</a></li>
                    <li><a href="../../web-ctft-back/docs/login/login.php">Login</a></li>
                    <li><a href="#fale-conosco" id="scroll">Fale conosco</a></li>
                </ul>
            </nav>
        </div>

        <div class="call">
            <div class="funcional">
                <h1>Faça parte de <span>nossa academia</span> e mude de vida!</h1>
            </div>
        </div>

        <div class="container">
            <div class="chamada1">
                <h3>Academia funcional</h3>
                <p>Treinar não fica fácil, você que fica melhor!</p>
                <a href="../../web-ctft-back/docs/matricule-se/formulario.php">Matricule-se</a>
            </div>
        </div>
    </header>
    
    <!-- Sobre-Nos -->
    <main>
        <section id="structure">

            <!-- Sobre-Nós-->
            <div class="container">

                <div class="title">
                    <h1 id="sobre-nos">NÓS SOMOS O <span>CENTRO DE TREINAMENTO FABIANO TREVISO</span></h1>
                </div>

            </div>

            <div class="text-container">

                <div class="text">
                    <p>O CTFT é mais do que apenas um lugar para se exercitar; 
                    é um santuário para aqueles que buscam superar limites e alcançar o seu melhor.
                    Aqui, oferecemos uma variedade de modalidades de treinamento de classe mundial 
                    que atendem a todos os níveis de condicionamento físico e objetivos pessoais.</p>
                </div>

                <div class="img-about"><img src="./img/CTFT 1.jpg" alt=""></div>
                
            </div>

            
            <div class="text-container2">

                <div class="img-about"><img src="./img/CTFT 2.jpg" alt=""></div>

                <div class="text">
                    <p>Independentemente de você estar buscando ganhos de força, perda de peso, 
                    melhoria da resistência ou simplesmente desejar se sentir mais energizado e confiante 
                    em seu corpo, o CTFT é o lugar onde seus objetivos se tornam realidade.  </p>
                </div>


            </div>


            <!-- Modalidades -->
            <div class="container-type">
                <div class="title">
                    <h1 id="modalidades">CONHEÇA NOSSAS <span>MODALIDADES</span></h1>
                </div>
                <div class="container-card">
                    <div class="card">
                        <h2>Cross-Training</h2>
                        <div class="img-type" id="img-1"></div>
                    </div>

                    <div class="card">
                        <h2>Fit-Dance</h2>
                        <div class="img-type" id="img-2"></div>
                    </div>

                    <div class="card">
                        <h2>Jiu-Jitsu</h2>
                        <div class="img-type" id="img-3"></div>
                    </div>

                    <div class="card">
                        <h2>Muay-Thai</h2>
                        <div class="img-type" id="img-4"></div>
                    </div>
                </div>    
            </div>
            <script type="text/javascript" src="vanilla-tilt.js"></script>
            <script>
                VanillaTilt.init(document.querySelectorAll(".card"));
            </script>

    <!-- Grade de Horários-->
    <div class="title">
        <h1 id="horarios"> GRADE <span>HORÁRIA</span> </h1>
    </div>

    <div id="container">
    <table border="1">
        <thead> 
            <tr>
                <td>HORÁRIOS</td>
                <td>SEGUNDA</td>
                <td>TERÇA</td>
                <td>QUARTA</td>
                <td>QUINTA</td>
                <td>SEXTA</TD>
                <td>SÁBADO</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="horario">6:00</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
            </tr>
            <tr>
                <td class="horario">7:00</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
            </tr>
            <tr>
                <td class="horario">8:00</td>
                <td class="fundo">Muay Thai</td>
                <td class="fundo">Muay Thai</td>
                <td class="fundo">Muay Thai</td>
                <td class="fundo">Muay Thai</td>
                <td class="fundo">Muay Thai</td>
                <td class="fundo">Fit Dance</td>
            </tr>
            <tr>
                <td class="horario">9:00</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
            </tr>
            <tr>
                <td class="horario">16:00</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
            </tr>
            <tr>
                <td class="horario" rowspan="2">17:00</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
            </tr>
            <tr>
                <td class="fundo">Muay Thai</td>
                <td class="fundo">Muay Thai</td>
                <td class="fundo">Muay Thai</td>
                <td class="fundo">Muay Thai</td>
                <td class="fundo">Muay Thai</td>
            </tr>
            <tr>
                <td class="horario" rowspan="2">18:00</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
            </tr>
            <tr>
                <td class="fundo">Muay Thai-KIDS</td>
                <td class="fundo">Muay Thai-KIDS</td>
                <td class="fundo">Muay Thai-KIDS</td>
                <td class="fundo">Muay Thai-KIDS</td>
                <td class="fundo">Muay Thai-KIDS</td>
            </tr>
            <tr>
                <td class="horario" rowspan="2">19:00</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo" rowspan="2">Fit Dance</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
            </tr>
            <tr>
                <td class="fundo">Muay Thai</td>
                <td class="fundo">Muay Thai</td>
                <td class="fundo">Muay Thai</td>
                <td class="fundo">Muay Thai</td>
            </tr>
            <tr>
                <td class="horario" rowspan="2">20:00</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
                <td class="fundo">Cross</td>
            </tr>
            <tr>
                <td class="fundo">Jiu Jitsu-KIDS</td>
                <td class="fundo">Jiu Jitsu</td>
                <td class="fundo">Jiu Jitsu-KIDS</td>
                <td class="fundo">Jiu Jitsu</td>
                <td class="fundo">Jiu Jitsu</td>
            </tr>
        </tbody>
    </table>
    </div>
</section>
    <!-- Footer -->
    <main></main>
    <footer>
            <div id="footer_contacts" class="footer-row">
                <div class="footer-row">
                    <h1>Entre em Contato</h1>
                </div>

            <div class="flex-container">
                <div id="footer_social_media" class="footer-row">
                    <a href="https://wa.me/5519981203997" class="footer-link" id="whatsapp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    
                    <a href="mailto:crosslifetancredao@gmail.com" class="footer-link" id="envelope">
                        <i class="far fa-envelope"></i>
                    </a>

                    <a href="#" class="footer-link" id="instagram">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="#" class="footer-link" id="facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>

                <div id="footer_location" class="footer-row">
                    <i class="fas fa-location-dot"></i>
                    <p>Av. Tancredo Neves, 343 - Jd. Santa Amália - Campinas,SP</p>
                </div>
                
                <div class="footer-list footer-row">
                    <p>Cintia Zumerle - 202302380891</p>
                    <p>João Pedro Gianoni - 202304362378</p>
                    <p>Marina Zumerle - 202302382371</p>     
                </div>
            </div>    

                <div class="footer_copyright">
                    JMC Tecnology &copy; 2023
                </div>
            </div>
    </footer>
    
</main>
</body>
</html>