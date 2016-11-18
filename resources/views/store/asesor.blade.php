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
                <h2 class="form-login-heading">ASESOR<span>DEL DESCANSO</span></h2>
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

        {!! Form::open(['route'=>'mail.store','method'=>'POST']) !!}
            <div class="form-wizard">
                <div class="row">
                    <div class="col-md-8 col-sm-7">
                        <fieldset class="input-block">
                            <legend>Edad</legend>
                            <label for="username">Por mi edad y características, estoy dentro del grupo</label>
                                    <br><br>
                                <input name="pregunta1" type="radio" value="chico" />Recién nacido a 18 años.
                                    <br/><br/>
                                <input name="pregunta1" type="radio" value="mediano" />18 a 60 años.
                                    <br/><br/>
                                <input name="pregunta1" type="radio" value="grande" />60 años en adelante    
                        </fieldset>

                        <fieldset class="input-blocks">
                            <legend>Tamaño</legend>
                            <label for="username">Mi colchón es para descansar acompañado o sólo.</label>
                                    <br><br>
                                <input name="pregunta2" type="radio" value="solo" />Sólo. 
                                    <br/><br/>
                                <input name="pregunta2" type="radio" value="acompañado" />Acompañado.  
                        </fieldset>

                        <fieldset class="input-block">
                            <legend>Informacio AdicionalL</legend>
                            <label for="username">Presento algún dolor en columna, huesos, insomnio o alguna enfermedad que me incomode al dormir</label>
                                    <br><br>
                            <input name="pregunta3" type="radio" value="si" />Si.
                                <br/><br/>
                            <input name="pregunta3" type="radio" value="no" />No.    
                        </fieldset>

                        <fieldset class="input-block">
                             <legend>Peso</legend>
                            <label for="username">Mi peso es de. (Los colchones resisten un peso corporal de más de 300 kilos, pero es importante la firmeza para un buen descanso y si va proporcional al peso de cada persona)</label>
                                    <br><br>
                                <input name="pregunta4" type="radio" value="50" />Menos de 50 kilos.
                                    <br/><br/>
                                <input name="pregunta4" type="radio" value="80" />Entre 50 y 80 kilos.
                                    <br/><br/>
                                <input name="pregunta4" type="radio" value="100" />Entre 80 y 100 kilos.
                                    <br/><br/>    
                                <input name="pregunta4" type="radio" value="120" />Más de 100.  
                        </fieldset>

                        <fieldset class="input-block">
                            <legend>Firmesa</legend>
                            <label for="username">Me gusta dormir en un colchón.</label>
                                    <br><br>
                                <input name="pregunta5" type="radio" value="firme" />Firme.
                                    <br/><br/>
                                <input name="pregunta5" type="radio" value="Suave" />Suave
                                    <br/><br/>
                                <input name="pregunta5" type="radio" value="medio" />Medio   
                        </fieldset>

                        <fieldset class="input-block">
                            <legend>Tecnologia</legend>
                            <label for="username">Que tecnología busco en mi colchón.</label>
                                    <br><br>
                                <input name="pregunta6" type="radio" value="convencionales" />Resortes convencionales.
                                    <br/><br/>
                                <input name="pregunta6" type="radio" value="templados" />Resortes templados (Firmes)
                                    <br/><br/>
                                <input name="pregunta6" type="radio" value="embolsados" />Resortes embolsados.
                                    <br/><br/>  
                                <input name="pregunta6" type="radio" value="Espuma" />Aglutinado (Espuma firme).
                                    <br/><br/> 
                                <input name="pregunta6" type="radio" value="Memory" />Memory foam.  
                        </fieldset>
                       
                        <fieldset class="input-block">
                            <legend>Presupuesto</legend>
                            <label for="username">Tengo un presupuesto de.</label>
                                    <br><br>
                                <input name="pregunta7" type="radio" value="2000" />Menos de $2,000.
                                    <br/><br/>
                                <input name="pregunta7" type="radio" value="4000" />De $2,000 a $4,000.
                                    <br/><br/>
                                <input name="pregunta7" type="radio" value="8000" />De $4,000 a $8,000.
                                    <br/><br/>
                                <input name="pregunta7" type="radio" value="10000" />Arriba de $8,000..    
                        </fieldset>
                    </div>    
                </div><!--/ .row-->
             </div><!--/ .form-wizard-->          
            <div class="form-group">
                {!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
            </div>
                    
        {!! Form::close() !!}
    </div>
    <br><br>
</body>
@stop