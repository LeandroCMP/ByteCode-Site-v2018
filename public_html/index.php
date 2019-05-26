<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <title>ByteCode</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link href="css/swiper.css" rel="stylesheet" type="text/css" />
        <script src="css/swiper.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="icon" type="image/jpg" href="img/logoIcone.png">
        <link href="css/index.css" rel="stylesheet" type="text/css" />
        <link href="css/responsividade.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Markazi+Text:400,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <link rel="shortcut icon" href="img/favicon.png" />

    </head>

    <body>
        <header>

            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed; width: 100%; z-index: 40; background-color: black;" id="menu">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="background-color: white; border-radius: 5px;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link scroll" href="#servicos" id="01" style="color: white;">Serviços</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link scroll" href="#secaoCliente" id="02" style="color: white;">Cliente</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link scroll" href="#secaoProjetos" id="03" style="color: white;">Projetos</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link scroll" href="#sobre"  id="04" style="color: white;">Sobre</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link scroll" href="#contato"  id="05" style="color: white;">Contato</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <section class="header-site" id="topSite">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <br>
                        <br>
                        <div id="bemVindo">
                            <h1 class="text-center" id="bemVindo">BEM-VINDO</h1>
                            <h1>Nós Somos a ByteCode</h1>
                            <p class="text-center">
                                <a href="#servicos" class="btn badge-primary scroll conheca">Conheça-nos</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="servicosComp">
            <div id="servicos">
                <h1 class="text-center" style="font-family: 'Oswald', sans-serif; color: white;"> Nossos Serviços</h1>
                <br/>
                <center>

                    <div class="col-md-10 container row">



                        <div class="col-md-5" id="sisweb">
                            <div class="img-fluid">
                                <img src="img/iconeWeb.png" alt=""/>
                            </div>
                            <br/><br/>
                            <h1>Sistemas Web</h1>
                            <br/><br/>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalLong5">Saiba Mais</button> 
                            </div>
                        </div>

                        <div class="col-md-5" id="sisdesk">
                            <div class="img-fluid">
                                <img src="img/monitor.png" alt=""/>
                            </div>
                            <br/><br/>
                            <h1>Sistemas Desktop</h1>
                            <br/><br/>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalLong3">Saiba Mais</button> 
                            </div>
                        </div>

                        <div class="col-md-5" id="sisapp">
                            <div class="img-fluid">
                                <img src="img/iconeApp.png" alt=""/>
                            </div>
                            <br/><br/>
                            <h1>Aplicativos</h1>
                            <br/><br/>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalLong4">Saiba Mais</button> 
                            </div>
                        </div>

                    </div>
                </center>
            </div>

        </section>
        <div class="modal fade" id="exampleModalLong5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Sistemas Web</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Adquira um Sistema Web com a ByteCode e tenha seu trabalho divulgado de forma eficiente e prática, tendo com força um sistema atrativo para seus clientes.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Ok</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Sistemas Desktop</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Tenha um Sistema Desktop no seu computador, e tenha um gerenciador com alta qualidade e precisão.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Ok</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalLong4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Aplicativos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Tenha um aplicativo no seu smartphone, para levar aos seus clientes mais praticidade na hora de fazer uma operação, tendo a ferramenta na palma da mão.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Ok</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalLong8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Descontos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Ao indicar um cliente para nossa empresa, você tem direito de fazer uma negociação de desconto com a gente, sendo um valor diretamente proporcional ao seu plano. Então não perca tempo, indique amigos, conhecidos e familiares e ganhe um desconto!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Ok</button>

                    </div>
                </div>
            </div>
        </div>

        <section id="secaoCliente">


            <div id="clientePremio" class="col-md-12" id="cliente">
                <h1 class="text-center" id="texto-cliente" style="font-family: 'Oswald', sans-serif; color: black">
                    Para os Clientes</h1>
                <br/><br/><br/><br/>
                <center>
                    <div class="col-md-10 container row">
                        <div class="col-md-5" id="ganheDesconto">
                            <div class="img-fluid">
                                <img src="img/desconto.png" alt=""/>
                            </div>
                            <br/><br/>
                            <h1>Ganhe um Desconto!</h1>
                            <br/><br/>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalLong8">Saiba Mais</button> 
                            </div>
                        </div>

                        <div class="col-md-5" id="comoContratar">
                            <div class="img-fluid">
                                <img src="img/contrato.png" alt=""/>
                            </div>
                            <br/><br/>
                            <h1>Confira os Preços!</h1>
                            <br/><br/>
                            <div class="col-md-12">
                                <a href="img/Nossos Serviços.pdf" target="_blank"><button type="button" class="btn btn-outline-secondary" data-toggle="modal">Saiba Mais</button></a> 
                            </div>
                        </div>

                    </div>
                </center>
            </div>



        </section>

        <section id="secaoProjetos">

            <div id="NossosProjetos">
                <h1 class="text-center" style="font-family: 'Oswald', sans-serif; color: black;"> Nossos Projetos</h1>
            </div>
            <br/>
            <div id="slide">
                <div id="carouselExampleIndicators" class="carousel slide col-md-8 container" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/projeto1.png">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>...</h5>
                                <p>...</p>
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>


        </section>
        <section id="sobre">

            <div id="SobreNos">
                <h1 class="text-center" style="font-family: 'Oswald', sans-serif; color: white;">Sobre Nós</h1>
            </div>
            <br/>
            <center>
                <div class="col-md-12">


                    <div class="col-md-12">

                        <div class="row" id="bloco">
                            <div class="col-md-5" id="visao">
                                <h1 style="text-align: center;">Visão</h1>
                                <p>Ajudar empresas a resolverem os problemas do dia-a-dia, atingindo assim todo o seu potencial!</p>
                            </div>
                            <div class="col-md-5" id="missao">
                                <h1 style="text-align: center;">Missão</h1>
                                <p>Maximizar a produtividade de nossos clientes, criando softwares de excelente qualidade, com foco em interatividade e fácil manuseio!</p>
                            </div>
                        </div>

                    </div>

                    <div class="row">   
                        <div class="col-md-12" id="teste">
                            <div class="col-md-6 container" id="valores">
                                <h1 style="text-align: center;">Valores</h1>
                                <p> • Integridade e honestidade.</p>
                                <p> • Melhor atendimento aos clientes.</p>
                                <p> • Contribuir para o crecimento de nossos clientes.</p>
                                <p> • Dedicação para desenvolvermos sistemas com qualidade.</p>
                                <p> • Assegurar os sistemas, para que nossos clientes não percam seus dados.</p>
                                <p> • Ficamos felizes com os nossos acertos, mas não desmerecemos os erros, pois é onde se adquire experiência.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </center>
        </section>

        <article>
            <section id="contato">

                <div class="col-md-12" id="formularioContato">
                    <br/>
                    <h1 class="text-center" style="font-family: 'Oswald', sans-serif; color: white;">Entre em Contato</h1>
                    <br/>
                    <br/>
                    <div class="col-md-10 container">
                        <form action="EnviarEmail.php" method="POST" id="frm">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">Nome</label>
                                    <input type="text" name="nome" class="form-control" placeholder="Nome" id="nomeCliente" required />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">E-mail</label>
                                    <input type="email" name="e-mail" class="form-control" placeholder="email@email.com" id="emailCliente" required/>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="">Celular</label>
                                    <input type="tel" name="celular" class="form-control" placeholder="(xx) 00000-0000" id="celularCliente" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Endereço</label>
                                    <input type="text" name="endereco" class="form-control" placeholder="Endereço" id="enderecoCliente" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Assunto</label>
                                    <input type="text" name="assunto" class="form-control" placeholder="Assunto" id="assuntoCliente" required />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="">Tipo de Sistema</label>
                                    <select name="cbPlanos" class="custom-select" id="tipoSistema" style="height: 50%" >
                                        <option disabled selected>----Unitário----</option>
                                        <option>Sistema Web</option>
                                        <option>Sistema Desktop</option>
                                        <option>Aplicativo</option>
                                        <option disabled>----Combo----</option>
                                        <option>Sistema Desktop + Sistema Web</option>
                                        <option>Aplicativo + Sistema Web</option>
                                        <option>Sistema Web + Aplicativo</option>
                                        <option>Aplicativo + Sistema Desktop</option>
                                        <option>Sistema Web + Sistema Desktop + Aplicativo</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="">Mensagem</label>
                                    <textarea name="mensagem" class="form-control" placeholder="Mensagem" id="mensagemCliente" required></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success" id="btnEnviar">Enviar</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="reset" class="btn btn-danger" id="btnEnviar">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </article>

        <section id="rodape2">
            <div class="col-md-12">
                <footer id="rodape">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <h2 style="text-align: center;">ByteCode</h2>
                                <hr/>
                                <p>A ByteCode é uma desenvolvedora de software que proporciona sistemas de alta qualidade e performance para seus clientes.</p>
                                <div class="img-fluid container">
                                    <img src="img/logo.png" alt=""/>
                                </div>
                                <br/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <h2 style="text-align: center;">Navegação</h2>
                                <hr/>

                                <a href="#">> Home</a>
                                <br/>
                                <a href="#">> Nossos Serviços</a>
                                <br/>
                                <a href="#">> Para os Clientes</a>
                                <br/>
                                <a href="#">> Nossos Projetos</a>
                                <br/>
                                <a href="#">> Sobre Nós</a>
                                <br/>
                                <a href="#">> Entre em Contato</a>
                                <br/><br/>
                            </div>


                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <h2 style="text-align: center;">Contato</h2>
                                <hr/>
                                <p><strong>E-mail: </strong>suporte@bytecodesoft.com.br</p>
                                <p><strong>Facebook: </strong><a href="https://www.facebook.com/SuporteByteCode/" target="_blank">ByteCode</a></p>
                                <p><strong>Celular: </strong> <br/> +55 (17) 99705-1835 (Leandro) <br/> +55 (17) 99664-8738 (Pedro) <br/> +55 (17) 99763-3377 (Vitor) </p>
                            </div>
                        </div>
                    </div>   
                    <br/>
                    <div class="col-md-8 container">
                        <a class="btn btn-outline-info" href="#" style="width: 100%;">&COPY; Desenvolvido por ByteCode - 2018</a>   
                    </div>
                    <br/>
                </footer>
            </div>

        </section>
        <div id="setaUp">
            <a href="#" class="scroll seta">
                <img src="img/seta.png" alt="" />
            </a>
        </div>


        <?php
        if (!empty($_GET["retorno"]))
        {
            $retorno = $_GET["retorno"];
            switch ($retorno)
            {
                case 1:

                    echo(" <div style='position:fixed; top:8%;left:38%;' class='col-sm-3 alert alert-success alert-dismissible fade show' role='alert'>"
                    . "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"
                    . "<strong>Sucesso!</strong> E-mail enviado com sucesso.</div>");

                    $retorno = null;
                    break;
                case 2:

                    echo(" <div style='position:fixed; top:8%;left:0px;' class='col-sm-3 alert alert-danger alert-dismissible fade show' role='alert'>"
                    . "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"
                    . "<strong>Erro!</strong> Erro ao enviar o e-mail.</div>");

                    $retorno = null;
                    break;
            }
        }
        ?>

        <script src="js/jquery-3.2.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/js.js" type="text/javascript"></script>
        <script src="css/swiper.min.js" type="text/javascript"></script>
        <script src="js/Mask.js" type="text/javascript"></script>
        <script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
    </body>

</html>