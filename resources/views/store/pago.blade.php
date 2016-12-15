@extends('store.template')

@section('content')

<body>

    <!-- Page Content -->
<div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Formas De Pago
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="active">Formas De Pago</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
         <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="img/pago.png" alt="">
            </div>
        </div>
        <br></br>
        <!-- Intro Content -->

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Formas De Pago</h2>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="img/paypal4.jpg" alt="">
            </div>
            <div class="col-md-6">
                <h2>Paypal</h2>
                <p align="justify" line-height="18">Puedes pagar tu compra a través de uno de los sistemas de pago en Internet más cómodo, seguro y usado en el mundo. Una vez que registres tu cuenta, PayPal te permite pagar de las siguientes formas.</p>
                <dr>
                <p align="justify">* Paga con TARJETA DE CREDITO en un solo pago o en meses sin intereses de 3,6,9,12 Y 18 MESES
                </p>
                <dr>
                <p align="justify">* Paga con TARJETA DE DEBITO </p>
                <dr>
                <p align="justify">
                Al finalizar el proceso del pedido ingresa a tu cuenta segura de PayPal y después de revisar los detalles de tu compra, libera el pago.
                </p>
                <dr>
            </div>
        </div>
         <hr>
         <br></br>
        <div class="row">
            <div class="col-md-6">
                <h2>Paypal</h2>
                <p align="justify">Una vez efectuado el pago se te enviara un recibo de la transacción.</p>
                </br>
                <p>El monto de pago quedara retenido por PayPal hasta que recibas tu pedido y les autorices a ellos que lo abonen a nuestra cuenta.</p>
                <br>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="img/paypal1.jpg" alt="">
            </div>
        </div>
         <hr>
        <br></br>
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="img/tarjeta.png" alt="">
            </div>
            <div class="col-md-6">
                <h2>Nuestra Visión</h2>
                <p align="justify">Puedes pagar con depósito bancario en cualquiera de los siguientes bancos.
                </p>
                <br></br>
                <p align="justify">
                TRANSFERENCIA ELECTRÓNICA

                Puedes pagar por medio de transferencia electrónica en cualquiera de los bancos que aparecen en el párrafo anterior o por medio de otro banco a través de transferencia interbancaria.</p>
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