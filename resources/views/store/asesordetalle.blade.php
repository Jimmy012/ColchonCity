@extends('store.template')

@section('content')
<link type='text/css' rel='stylesheet' href="{{ asset('css/asesor.css') }}"/>
<script type="text/javascript" src="{{ asset('js/formToWizard.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#SignupForm").formToWizard({ submitButton: 'SaveAccount' })
        });
    </script>
<body>
<br>
    <div id="wizard" class="container substrate">

        <div class="row">
            <div class="col-xs-12">
                <h2 class="form-login-heading"><span>ASESOR DEL DESCANSO</span></h2>
            </div>

        </div><!--/ .row-->

        <div class="row">

            <div class="col-xs-12">

                <div class="form-header">
                                
                    <div class="form-title form-icon title-icon-lock">
                        <b>Información</b> 
                    </div>                                
                </div><!--/ .form-header-->

            </div>

    </div><!--/ .row-->
    <div class="row">
            <div class="col-md-8">
              <h3>Mandanos un mensaje</h3>
              <label>Favor de proporcionar los siguientes datos para darle la mejor recomendación del producto:</label>
                                    <br><br>
              {!! Form::open(['route'=>'mail.store', 'method'=>'POST']) !!}
                <form name="sentMessage" id="contactForm" novalidate>

                    <div class="form-group">
                           <img src="img/contact.png"><label for="name">Nombre:</label>
                           
                            {!! 
                                Form::text(
                                    'name', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa tu nombre...',
                                        'autofocus' => 'autofocus'
                                    )
                                ) 
                            !!}
                        </div>
                        
                        <div class="form-group">
                            <img src="img/tel.png"<label for="phone">Teléfono:</label>
                            
                            {!! 
                                Form::text(
                                    'phone', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa tu teléfono...',
                                    )
                                ) 
                            !!}
                        </div>

                        <div class="form-group">
                            <img src="img/mail.png"<label for="email">Email:</label>
                            
                            {!! 
                                Form::text(
                                    'email', 
                                    null, 
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Ingresa tu Email...',
                                    )
                                ) 
                            !!}
                        </div>
                        <div class="form-group">
                            <img src="img/usuario.png"<label for="mensaje">Mi Perfil:</label>
                             {!! 
                                Form::textarea(
                                    'mensaje', 
                                    "Por mi edad y características, estoy dentro del grupo:".' '.$pregunta1.' '.
                                    "Mi colchón es para descansar acompañado o sólo:".' '.$pregunta2.' '.
                                    "Presento algún dolor en columna, huesos, insomnio o alguna enfermedad que me incomode al dormir:".' '.$pregunta3.' '.
                                    "Mi peso es de:".' '.$pregunta4.' '.
                                    "Me gusta dormir en un colchón:".' '.$pregunta5.' '.
                                    "Que tecnología busco en mi colchón:".' '.$pregunta6.' '.
                                    "Tengo un presupuesto de:".' '.$pregunta7, 
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
        
    </div>
    <br><br>
</body>
@stop