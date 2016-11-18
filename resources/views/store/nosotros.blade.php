@extends('store.template')

@section('content')

<body>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nosotros
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="active">Nosotros</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="img/historia.jpg" alt="">
            </div>
            <div class="col-md-6">
                <h2>Historia</h2>
                <p align="justify">Con la experiencia de más de 25 años en el ramo textil, componentes y materiales para la Industria del descanso, COLCHON CITY incursiona en las redes con la finalidad de ofrecer directamente al consumidor final sistemas de descanso vanguardistas a precios de fábrica.</p>
                <dr>
                <p align="justify">La sinergia y alianzas con diferentes socios comerciales nos permiten ofrecer modelos exclusivos de la más alta tecnología a los mejores precios. </p>
                <dr>
                <p align="justify">
                Nuestros productos los ofrecemos desde pago de contado, depósito bancario y/o transferencia electrónica hasta pagos a meses sin intereses con tarjetas de crédito participantes, además de poder ofrecer a nuestros clientes un sistema de entrega eficaz y seguro.
                </p>
                <dr>
                <p align="justify">También contamos con SHOW ROOMS en el estado de Tabasco con la única y exclusiva zona VIP BY MEMORY FOAM donde podrás encontrar los sistemas de descanso de más alta tecnología a precios de fábrica, todo esto gracias a las alianzas establecidas con productores de este exclusivo material.</p>
            </div>
        </div>
         <br></br>
        <div class="row">
            <div class="col-md-6">
                <h2>Nuestra Misión</h2>
                <p align="justify">Nuestra misión es atender las necesidades de descanso de nuestros clientes, con colchones que tengan el mejor costo beneficio y calidad utilizando materiales innovadores, vanguardistas y desarrollando en cada uno de nuestros colchones la más alta tecnología.  Proporcionando a nuestros clientes el mejor producto que le permita tener “El placer de descansar”</p>
                <br></br>
                <p align="justify">Además como empresa proporcionar confianza, credibilidad y rentabilidad creciente a cada uno de nuestros socios comerciales y accionistas; a nuestros empleados motivación y oportunidad de crecimiento aplicando la sinergia, responsabilidad, honestidad y respeto, ya que contamos con el respaldo de una gran historia y un futuro prometedor.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="img/mision.jpg" alt="">
            </div>
        </div>
         <br></br>
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="img/vision.jpg" alt="">
            </div>
            <div class="col-md-6">
                <h2>Nuestra Visión</h2>
                <p align="justify">Nuestra visión es ser siempre una empresa líder y en continuo crecimiento, con presencia nacional, que se distinga por proporcionar un producto innovador, de alta calidad y un excelente servicio a sus clientes.</p>
                <br></br>
                <p align="justify">También contar con la debida rentabilidad sostenida a sus accionistas, y establecer las bases para un amplio desarrollo profesional y personal de sus empleados contribuyendo positivamente a la sociedad.</p>
            </div>
        </div>
        <!-- /.row -->
        <hr>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
@stop