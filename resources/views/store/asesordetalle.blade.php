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

        <form id="SignupForm" action="" method="get">
            <div class="form-wizard">
                            
                            <div class="row">

                                <div class="col-md-8 col-sm-7">

                                    <div class="data-container">
                                        <dl>
                                            <dt>Edad</dt>
                                            <dd>John_503in</dd>
                                        </dl>
                                        <dl>
                                            <dt>Acompañado o sólo</dt>
                                            <dd>john_doe@gmail.com</dd>
                                        </dl>
                                        <dl>
                                            <dt>Presento algún dolor en columna</dt>
                                            <dd>John Doe</dd>
                                        </dl>
                                        <dl>
                                            <dt>Mi peso es de</dt>
                                            <dd>Male</dd>
                                        </dl>
                                        <dl>
                                            <dt>Me gusta dormir en un colchón..</dt>
                                            <dd>325-555-1234</dd>
                                        </dl>
                                        <dl>
                                            <dt>Que tecnología busco en mi colchón</dt>
                                            <dd>111 W.App Ave. Suite 123, Sunway, CA</dd>
                                        </dl>
                                        <dl>
                                            <dt>Tengo un presupuesto de. </dt>
                                            <dd>94086</dd>
                                        </dl>
                                    </div><!--/ .data-container-->

                                </div>

                            </div><!--/ .row-->
                            
                        </div><!--/ .form-wizard-->
                        
                        <div class="next">
                            <button class="button button-control" type="button"><span>Submit <b>Your Information</b></span></button>
                            <div class="button-divider"></div>
                        </div>

        </form>
    </div>
    <br><br>
</body>
@stop