@extends('store.template')

@section('content')

<body>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contáctanos
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="active">Contáctanos</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
              <h3>Mandanos un mensaje</h3>
              {!! Form::open(['route'=>'mail.store', 'method'=>'POST']) !!}
                <form name="sentMessage" id="contactForm" novalidate>

                    <div class="form-group">
                            <label for="name">Nombre:</label>
                            
                            {!! 
                                Form::text(
                                    'name', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el nombre...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Telefono:</label>
                            
                            {!! 
                                Form::text(
                                    'phone', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el Telefono...',
                                    )
                                ) 
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            
                            {!! 
                                Form::text(
                                    'email', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa el Email...',
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <label for="mensaje">Mensaje:</label>
                            
                            {!! 
                                Form::textarea(
                                    'mensaje',
                                    null, 
                                    array(
                                        'class'=>'form-control'
                                    )
                                ) 
                            !!}
                        </div>
                        
                      <div class="form-group">
                            {!! Form::submit('Enviar') !!}
                        </div>
                    
                    {!! Form::close() !!}
            </div>

        </div>        </div>
        <!-- /.row -->
        <hr>

        <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>
@stop