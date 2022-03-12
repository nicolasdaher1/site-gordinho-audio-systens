<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cookie.css">
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css">
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/ec4157f063.js" crossorigin="anonymous"></script>
    <title>Gordinho Audio Systens | Loja especializada em elétrica automotiva e instalação de acessórios</title>
</head>
<body>
    <div id="carregamento">
        <div class="box d-flex flex-column">
            <div class="box-loading mt-4">
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
            </div>
        </div>
    </div>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/logo2.png" width="170px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link link" href="#sobre">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link" href="#servicos">Serviços</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link link" href="#contato">Contato</a>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-success d-block btn-whatsapp"><i class="fab fa-whatsapp fa-1x"></i></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>    
    
    <main> 
        <article class="banner" id="sobre">
            <div class="container text-white">
                <div class="d-flex justify-content-right">
                    <div class="me-5 col-lg-6 col-md-12 mt-5">
                        <h2><b>Loja especializada em elétrica automotiva e instalação de acessórios!</b></h2>
                        <p class="mt-5">A Gordinho Audio Systens é uma empresa que trabalha com elétrica automotiva e atua no mercado desde 2017. Desde então vem oferecendo soluções de excelência na área com produtos de altíssima qualidade, ferramentas adequadas, atendimento ágil tudo isso a um preço justo.</p>
                        <div class="d-flex mt-5">
                            <div class="botoes-social w-50">
                                <button type="button" class="btn btn-success d-block btn-whatsapp"><i class="fab fa-whatsapp"></i> WhatsApp</button>
                                <button id="btn-facebook" type="button" class="btn btn-primary d-block"><i class="fab fa-facebook"></i> Facebook</button>
                                <button id="btn-instagram" type="button" class="btn btn-danger d-block"><i class="fab fa-instagram"></i> Instagram</button>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="d-flex justify-content-end">
                                    <img src="img/osram.png" class="img-osram">
                                </div>
                                <div class="d-flex justify-content-end">
                                    <img src="img/shiftpower.png" class="mt-3 img-shiftpower">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article id="som-automotivo">
            <div class="container d-flex mt-5 mb-5">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 d-flex align-items-center">
                    <div>
                        <h2 style="font-family: 'Montserrat-Bold';"><b>Som Automotivo</b></h2>
                        <div class="linha mb-3"></div>
                        <p>Contamos com diversos tipos de equipamentos para montar o seu som automotivo, desde auto-falantes, módulos, subs, trios montados e muito mais. Tudo isso a um preço acessível e claro com uma qualidade incomparável.</p>
                    </div>
                </div>         
                <div class="col-lg-6 col-md-6 col-sm-0 col-0 d-flex justify-content-center">
                    <img id="img-som" class="anime" src="img/som.png">
                </div>
            </div>
        </article>
        <article>
            <div class="container d-flex justify-content-center mt-5 mb-5">
                <div class="d-flex jusitfy-content-center area-marcas">
                    <div><img src="img/marcas/0.jpg"></div>
                    <div><img src="img/marcas/1.jpg"></div>
                    <div><img src="img/marcas/2.jpg"></div>
                    <div><img src="img/marcas/3.jpg"></div>
                    <div><img src="img/marcas/4.jpg"></div>
                    <div><img src="img/marcas/5.jpg"></div>
                    <div><img src="img/marcas/6.jpg"></div>
                    <div><img src="img/marcas/7.jpg"></div>
                </div>
            </div>
        </article>
        <article class="servicos p-5 text-white" id="servicos">
            <div class="container">
                <h2 style="font-family: 'Montserrat-Bold';"><b>Serviços</b></h2>
                <div class="linha mb-5"></div>
                <div class="row row-cols-xl-6 row-cols-md-4 row-cols-sm-3 box-servicos">
                    <div class="col p-3 d-flex flex-column">
                        <i class="fas fa-exclamation-circle fa-2x my-auto"></i>
                        <p class="my-auto">Alarmes</p>
                    </div>
                    <div class="col p-3 d-flex flex-column">
                        <i class="fas fa-volume-up fa-2x my-auto"></i>
                        <p class="my-auto">Som Automotivo</p>
                    </div>
                    <div class="col p-3 d-flex flex-column">
                        <i class="fas fa-desktop fa-2x my-auto m-auto"></i>
                        <p class="my-auto">Multimídias</p>
                    </div>
                    <div class="col p-3 d-flex flex-column">
                        <i class="fas fa-play-circle fa-2x my-auto m-auto"></i>
                        <p class="my-auto">Rádios</p>
                    </div>
                    <div class="col p-3 d-flex flex-column">
                        <i class="fas fa-volume-up fa-2x my-auto m-auto"></i>
                        <p class="my-auto">Caixas Residenciais</p>
                    </div>
                    <div class="col p-3 d-flex flex-column">
                        <i class="fas fa-exclamation-circle fa-2x my-auto m-auto"></i>
                        <p class="my-auto">Anti-Furtos</p>
                    </div>
                    <div class="col p-3 d-flex flex-column">
                        <i class="fas fa-lightbulb fa-2x my-auto m-auto"></i>
                        <p class="my-auto">Luzes Internas</p>
                    </div>
                    <div class="col p-3 d-flex flex-column">
                        <i class="fas fa-lightbulb fa-2x my-auto m-auto"></i>
                        <p class="my-auto">Luzes Externas</p>
                    </div>
                    <div class="col p-3 d-flex flex-column">
                        <i class="fas fa-camera fa-2x my-auto m-auto"></i>
                        <p class="my-auto">Câmeras de Ré</p>
                    </div>
                    <div class="col p-3 d-flex flex-column">
                        <i class="fas fa-car fa-2x my-auto m-auto"></i>
                        <p class="my-auto">Vidros Elétricos</p>
                    </div>
                    <div class="col p-3 d-flex flex-column">
                        <i class="fas fa-exclamation-circle fa-2x my-auto m-auto"></i>
                        <p class="my-auto">Travas Elétricas</p>
                    </div>
                    <div class="col p-3 d-flex flex-column">
                        <i class="fas fa-car fa-2x my-auto m-auto"></i>
                        <p class="my-auto">Interface</p>
                    </div>
                    <div class="col p-3 d-flex flex-column">
                        <i class="fas fa-car fa-2x my-auto m-auto"></i>
                        <p class="my-auto">Acessórios</p>
                    </div>
                    <div class="col p-3 d-flex flex-column">
                        <i class="fas fa-lightbulb fa-2x my-auto m-auto"></i>
                        <p class="my-auto">Anéis de Anjo</p>
                    </div>
                </div>
            </div>
        </article>
        <article class="formulario py-5" id="contato">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 mb-5">
                        <h2 style="font-family: 'Montserrat-Bold';"><b>Entre em contato conosco!</b></h2>
                        <div class="linha mb-3"></div>
                        <form method="post" action="../processa_envio.php">
                            <div class="d-flex">
                                <div class="mb-3 pe-2 col-md-6 col-sm-6 col-6">
                                    <label class="form-label">Nome</label>
                                    <input type="text" name="nome" class="form-control form-control-sm" required>
                                </div>
                                <div class="mb-3 col-md-6 col-sm-6 col-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control form-control-sm" placeholder="email@outlook.com">
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="mb-3 pe-2 col-md-6 col-sm-6 col-6">
                                    <label class="form-label">Assunto</label>
                                    <input type="text" name="assunto" class="form-control form-control-sm">
                                </div>
                                <div class="mb-3 col-md-6 col-sm-6 col-6">
                                    <label class="form-label">Telefone</label>
                                    <input type="text" name="telefone" id="telefone" class="form-control form-control-sm" maxlenght="11" placeholder="(99)99999-9999" required>
                                </div>
                            </div>
                            <div class="mb-3 col-md-12 col-sm-12">
                                <label class="form-label">Mensagem</label>
                                <textarea class="form-control" name="mensagem" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger">Enviar</button>

                            <?php if(isset($_GET['email']) && $_GET['email'] == 1) { 
                                $_GET['email'] = ''; ?>
                                <small class="text-success">E-mail enviado com sucesso.</small>
                            <?php } else if(isset($_GET['email']) && $_GET['email'] == 2) {       
                                $_GET['email'] = ''; ?>                      
                                <small class="text-danger">E-mail não enviado corretamente, tente novamente mais tarde ou envie mensagem no nosso WhatsApp.</small>
                            <?php } ?>

                        </form>
                    </div>
                    <div class="col-md-6 col-sm-12 d-flex justify-content-center">
                        <div class="col-md-12 col-sm-12">
                            <iframe id="mapa" class="anime" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3483.0007452070868!2d-51.16422468555557!3d-29.194104982199626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951ebca09c492397%3A0xabffcd9be291f554!2sR.%20Ant%C3%B4nio%20Sirena%2C%201235%20-%20S%C3%A3o%20Victor%20COHAB%2C%20Caxias%20do%20Sul%20-%20RS%2C%2095088-410!5e0!3m2!1spt-BR!2sbr!4v1631553272634!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="container d-flex mt-5 mb-5">
                <div class="col-md-6 col-sm-12 col-12 d-flex align-items-center">
                    <div>
                        <h2 style="font-family: 'Montserrat-Bold';"><b>Siga-nos</b></h2>
                        <div class="linha mb-3"></div>
                        <p>Nas nossas redes sociais você encontra diversos projetos e trabalhos que realizamos no nosso dia a dia aqui na loja. Nos siga para mais informações e interaja conosco.</p>
                        <span class="d-block mb-3"><b>Instagram: @gordinho.audio.systens</b></span>
                        <span><b>Facebook: Gordinho Audio Systens</b></span>
                    </div>
                </div>         
                <div class="col-md-6 d-flex justify-content-end anime col-sm-0 col-0">
                    <img src="img/siga-nos.png" id="img-insta">
                </div>
            </div>
        </article>
    </main>
    
    <footer id="rodape" class="py-3 m-0">
        <div class="container d-flex">
            <div class="row row-cols-xl-3 row-cols-md-1">
                <div class="col d-flex align-items-center justify-content-center">
                    <div class="d-flex justify-content-center align-items-center p-3">
                        <i class="fas fa-phone-alt fa-3x"></i>
                    </div>    
                    <div class="p-3">
                        <h4>CONTATO</h4>
                        <p>(54) 99918-0087<br>
                        gordinho.eletrica@outlook.com</p>
                    </div>
                </div>
                <div class="col d-flex align-items-center justify-content-center">
                    <div class="d-flex justify-content-center align-items-center p-3">
                        <i class="fas fa-location-arrow fa-3x"></i>
                    </div>
                    <div class="p-3">
                        <h4>LOCALIZAÇÃO</h4>
                        <p>Rua Antonio Sirena, 1235 - São Victor Cohab, <br>Caxias do Sul - RS, 95088410, Brasil</p>
                    </div>
                </div>
                <div class="col d-flex align-items-center justify-content-center">
                    <div class="d-flex justify-content-center align-items-center p-3">
                        <i class="fas fa-clock fa-3x"></i>
                    </div>
                    <div class="p-3">
                        <h4>HORÁRIO DE ATENDIMENTO</h4>
                        <p>Segunda à Sexta - 08h às 12:00h e 13:30h às 19:00h<br>
                            Sábados - 08h às 12:00h e 13:30h às 17:00h</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="copyright py-1">
        <div class="container d-flex">
            <p class="text-white m-auto">© Copyright 2022 Gordinho Audio Systens | Todos os direitos reservados</p>
        </div>
    </div>

    <!-- JavaScript BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Slick -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/script.js"></script>
</body>
</html>