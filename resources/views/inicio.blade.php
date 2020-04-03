@extends('layout')

@section('contenido')

<div class="card  border-primary mb-3">

    <div class="card-body">
        <div class="media">
            <img src="assets/img/logo.png" class="align-self-start mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">Nombre de su empresa</h5>
                <P>ESLOGAN</P>
            </div>
        </div>


        <h6><strong>Productos de alta calidad, variedad y precio.</strong></h6>
        <p class="card-text">


            Ofrecemos jamones, mortadelas, salchichones, chorizos, salchichas y productos larga vida.

            Somos una empresa productora y comercializadora de alimentos, que provee productos en los que el
            consumidor percibe más valor que el precio que paga por ellos. Opera una red de distribución
            minuciosa, que atiende permanentemente los puntos de venta en los que se ofrece el producto a sus
            clientes.

        </p>



        <ul class=" list-group list-group-horizontal-xl">

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="tel:+34678567876">300 1233256 </a>
                <span class="badge badge-warning badge-pill"><a href="tel:+34678567876">Llamar</a></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">correo@correo.com</li>
            <li class="list-group-item d-flex justify-content-between align-items-center">correo@correo.com</li>


            <li class="list-group-item d-flex justify-content-between align-items-center">
                Calle 5 frente al terminal Calle 5 frente al terminal

            </li>

        </ul>
    </div>
</div>


@endsection