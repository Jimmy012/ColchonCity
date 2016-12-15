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
                        <b>Preguntas</b> 
                    </div>                                
                </div><!--/ .form-header-->
            </div>
    </div><!--/ .row-->
        
         {!! Form::open(['route'=>'asesor.store', 'method'=>'POST']) !!}
            <div id="SignupForm" action="">
                <div class="form-wizard">
                <div class="row">
                    <div class="col-md-8 col-sm-7">
                        <fieldset class="input-block">
                             <legend>Sistema de Asesoramiento para el Descanso</legend>
                             <label style="text-align: justify">En COLCHON CITY queremos sugerirle el mejor sistema de descanso, por lo cual sugerimos nos apoye con el SEVEN QUEST que es un breve cuestionario, que nos arrojara toda la informacion necesaria para que a través de sencillas formulas podamos sugerirle el sistema de descanso optimo para usted y ademas conforme a su presupuesto.</label>
                                    <br><br>
                         </fieldset>

                        <fieldset class="input-block">  
                            <label for="username">Por mi edad y características, estoy dentro del grupo:</label>
                                    <br><br>
                                <class="container"/>
                                <img src="img/edad.jpg">
                                <input name="pregunta1" type="radio" value="Recién nacido a 18 años." />Recién nacido a 18 años.
                                    <br/><br/>
                                <input name="pregunta1" type="radio" value="18 a 60 años." />18 a 60 años.
                                    <br/><br/>
                                <input name="pregunta1" type="radio" value="60 años en adelante." />60 años en adelante 
                                
                        </fieldset>

                        <fieldset class="input-blocks">
                           
                            <label for="username">Mi colchón es para descansar acompañado o sólo:</label>
                                    <br><br>
                                    <class="container"/>
                                <img src="img/solo.jpg">
                                <input name="pregunta2" type="radio" value="Solo." />Sólo. 
                                    <br/><br/>
                                <input name="pregunta2" type="radio" value="Acompañado." />Acompañado.  
                        </fieldset>

                        <fieldset class="input-block">
                            
                            <label for="username">Presento algún dolor en columna, huesos, insomnio o alguna enfermedad que me incomode al dormir.</label>
                                    <br><br>
                                    <class="container"/>
                                    <img src="img/insomnio.jpg">
                            <input name="pregunta3" type="radio" value="Si." />Si.
                                <br/><br/>
                            <input name="pregunta3" type="radio" value="No." />No.    
                        </fieldset>

                        <fieldset class="input-block">
                             
                            <label for="username">Mi peso es de. (Los colchones resisten un peso corporal de más de 300 kilos, pero es importante la firmeza para un buen descanso y si va proporcional al peso de cada persona)</label>
                                    <br><br>
                                    <class="container"/>
                                    <img src="img/bascula.gif"><br>  
                                <input name="pregunta4" type="radio" value="Menos de 50 kilos." />Menos de 50 kilos.
                                    <br/><br/>
                                <input name="pregunta4" type="radio" value="Entre 50 y 80 kilos." />Entre 50 y 80 kilos.
                                    <br/><br/>
                                <input name="pregunta4" type="radio" value="Entre 80 y 100 kilos." />Entre 80 y 100 kilos.
                                    <br/><br/>    
                                <input name="pregunta4" type="radio" value="Más de 100." />Más de 100.  
                        </fieldset>

                        <fieldset class="input-block">
                            
                            <label for="username">Me gusta dormir en un colchón:</label>
                                    <br><br>
                                    <class="container"/>
                                    <img src="img/dormir.jpg"><br>
                                <input name="pregunta5" type="radio" value="Firme." />Firme.
                                    <br/><br/>
                                <input name="pregunta5" type="radio" value="Suave." />Suave
                                    <br/><br/>
                                <input name="pregunta5" type="radio" value="Medio." />Medio   
                        </fieldset>

                        <fieldset class="input-block">
                            
                            <label for="username">Que tecnología busco en mi colchón:</label>
                                    <br><br><class="container"/>
                                    <img src="img/memory.jpg"><br>
                                <input name="pregunta6" type="radio" value="Resortes Convencionales." />Resortes convencionales.
                                    <br/><br/>
                                <input name="pregunta6" type="radio" value="Resortes Templados (Firmes)." />Resortes templados (Firmes)
                                    <br/><br/>
                                <input name="pregunta6" type="radio" value="Resortes Embolsados." />Resortes embolsados.
                                    <br/><br/>  
                                <input name="pregunta6" type="radio" value="Aglutinado (Espuma firme)." />Aglutinado (Espuma firme).
                                    <br/><br/> 
                                <input name="pregunta6" type="radio" value="Memory Foam." />Memory foam.  
                        </fieldset>
                       
                        <fieldset class="input-block">
                           
                            <label for="username">Tengo un presupuesto de:</label>
                                    <br><br>
                                    <img src="img/bille.jpg"><br>
                                <input name="pregunta7" type="radio" value="Menos de $2,000" />Menos de $2,000.
                                    <br/><br/>
                                <input name="pregunta7" type="radio" value="De $2,000 a $4,000" />De $2,000 a $4,000.
                                    <br/><br/>
                                <input name="pregunta7" type="radio" value="De $4,000 a $8,000" />De $4,000 a $8,000.
                                    <br/><br/>
                                <input name="pregunta7" type="radio" value="Arriba de $8,000." />Arriba de $8,000.    
                        </fieldset>

                        <fieldset class="input-block">
                             <legend>¡GRACIAS!</legend>
                             <label>En COLCHON CITY le agradecemos haya tomado unos minutos para responder el SEVEN QUEST que seguramente nos dará la oportunidad de hacerle la mejor recomendación para su optimo descanso.</label>
                                    <br><br>
                                    <div class="form-group">
                {!! Form::submit('Enviar') !!}
            </div>
                         </fieldset>

                         </div>    
                </div><!--/ .row-->
             </div><!--/ .form-wizard-->    

           
            </div> 
            {!! Form::close() !!}    
    </div>
    <br><br>
</body>
@stop