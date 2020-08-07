<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'VentaCatalogo') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        };
        </style>

        <title>MODA</title>
    </head>

    <body>

        <!--Barra principal-->
    </section>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>


        <!--Tendencias-->
        <section id="Tendecia">
        

            <font color="#C2A853" , size="3">
                <h2 id="Tendencia">
                    <p align="center">PRINCIPALES MARCAS</p>
                </h2>
            </font>
            <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="http://catalogomiangel.com/wp-content/uploads/2020/07/INICIO-WEB2.jpg" 
                        alt="MiAngel">
                        </div>
                        <div class="carousel-item">
                        <img src="http://catalogomiangel.com/wp-content/uploads/2020/07/INICIO-WEB4.jpg" 
                        alt="Jolie">
                        </div>
                        <div class="carousel-item">
                        <img src="http://catalogohh.com/sites/default/files/styles/slider/public/slidesinicio/q2.jpg?itok=VTu_8dgl" 
                        alt="New York">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

            </div>
            <font color="#C2A853" , size="3">
                <h2 id="Tendencia">
                    <p align="center">TENDENCIAS DE MODA</p>
                </h2>
            </font>
            <div class="panel-body">
                    <div class="col-md-6 col-md-offset-3">
                        <iframe class="rounded mx-auto d-block" alt="..." width="560" height="315" src="https://www.youtube.com/embed/PZJOdqYeH5w" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    </div>
                </div>
        </section>
        <!--Influencers-->
        <section id="Influencers">
        </p>
        </i>
        <font color="#C2A853" , size="3">
            <h2>
                <p align="center">Influencers</p>
            </h2>
        </font>
        <i>
            <p>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-deck">
                        <div class="col-md-4">
                            <div class="card-body" style="width: 18rem;">
                                <img src="https://instagram.fcue2-1.fna.fbcdn.net/v/t51.2885-15/e35/p1080x1080/82276073_919074191850615_5917245938601193839_n.jpg?_nc_ht=instagram.fcue2-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=rUX1n5sBDU8AX_QcL3S&oh=c5dbbec63efdb911248972f311c8fea3&oe=5F54C9A6" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Julian Campos</h5>
                                    <p  class="card-text">
                                        <a href="https://www.instagram.com/juliancamposl/" target="_blank">@juliancamposl</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-body" style="width: 18rem;">
                                <img src="https://instagram.fcue2-1.fna.fbcdn.net/v/t51.2885-15/e35/116724903_4446417038703470_2248920281726748493_n.jpg?_nc_ht=instagram.fcue2-1.fna.fbcdn.net&_nc_cat=102&_nc_ohc=nlhdv8gkEj4AX-ggWrz&oh=e1ab7fe168d12550740047ab09597e2e&oe=5F56D3BF" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kevlex Pazmiño</h5>
                                    <p class="card-text">
                                    <a href="https://www.instagram.com/kevlexd/" target="_blank">@kevlexd</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-body" style="width: 18rem;">
                                <img src="https://instagram.fcue2-1.fna.fbcdn.net/v/t51.2885-15/e35/p1080x1080/117087151_3677379268940783_9179074001281219016_n.jpg?_nc_ht=instagram.fcue2-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=agWNSWSLPkIAX8A3i2R&oh=e3b9d0a8f90fee69887f823f489737f1&oe=5F55E47D" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vero Sofia Coronel</h5>
                                    <p class="card-text">
                                    <a href="https://www.instagram.com/verosoficoronel/" target="_blank">@verosoficoronel</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    </body>



</html>