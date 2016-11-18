@extends('store.template')

@section('content')

<body>

    <!-- Page Content -->
<div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sucursales
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="active">Sucursales</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Villahermosa, Tabasco.</h2>
                <br></br>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h3>Dirección</h3>
                        <p>Av. Usumacinta Esq. Calle Chiapas, Col. lindavista.</p>
                        <p>(Enfrente del Oxxo)</p>
                        <p>Villahermosa, Tabasco.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h3>Teléfono</h3>
                        <p>(993) 3-52-27-02.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h3>Correo</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
            </div>
        </div>
        <br></br>
         <div class="row">
            <div class="col-lg-12">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3794.773142225749!2d-92.9422325933483!3d17.98928848725748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edd78609329d4d%3A0x7766df8d29f26047!2sAv+Paseo+Usumacinta+%26+Chiapas%2C+Linda+Vista%2C+86050+Villahermosa%2C+Tab.!5e0!3m2!1ses-419!2smx!4v1478106413177"></iframe>
            </div>
        </div>
        <br></br>
        <hr>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Villahermosa, Tabasco.</h2>
                <br></br>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h3>Dirección</h3>
                        <p>Av. Adolfo Ruiz Cortinez 1418, Col. lindavista.</p>
                        <p>(Pasando Plaza Olmeca, en el edificio de Ramagas)</p>
                        <p>Villahermosa, Tabasco.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h3>Teléfono</h3>
                        <p>(993) 3-13-94-05.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                    <div class="media-body">
                        <h3>Correo</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                    </div>
                </div>
            </div>
        </div>
        <br></br>
         <div class="row">
            <div class="col-lg-12">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3794.654729335749!2d-92.94483648595181!3d17.994788489740692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edd826e0d80917%3A0x7e171b8ea419e06d!2sBoulevard+Adolfo+Ruiz+Cortines%2C+Villahermosa%2C+Tab.!5e0!3m2!1ses-419!2smx!4v1478110142544"></iframe>
            </div>
        </div>
        <br></br>
        <hr>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
@stop