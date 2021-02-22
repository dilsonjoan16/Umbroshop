@extends('layouts.plantilla')
@section('title','Nosotros')
@section('content')
<div class="d-flex flex-column justify-content-between umbroalto">
    <div class="container py-3 mx-auto">
        <h1 class="display-4">
            Umbro Shop Info
        </h1>
    </div>   
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h3>
                    Mision
                </h3>
                <p class="lead text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto placeat ea unde, veniam voluptatum, blanditiis facilis iure consequuntur quis atque, mollitia odio ratione sed? Molestias veritatis alias optio! Distinctio, ad.
                </p>
            </div>
            <div class="col-12 col-lg-6">
                <h3>
                    Vision
                </h3>
                <p class="lead text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique eaque dolor illo sunt. Rerum magnam est corrupti quos, quidem totam, ullam doloremque enim pariatur similique voluptas error aperiam laudantium ut?
                </p>
            </div>
            <div class="col-12 col-lg-6">
                <h3>
                    Alcance
                </h3>
                <p class="lead text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, tempora! Maxime, laborum dolorum rem veniam voluptatum accusamus ut distinctio! Placeat possimus quod quia asperiores saepe, aspernatur aliquid ullam culpa eius?
                </p>
            </div>
            <div class="col-12 col-lg-6">
                <h3>
                    Presencia en el mundo
                </h3>
                <p class="lead text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora voluptatum sequi eligendi eos! Eum repellendus quasi delectus quas numquam, officia fugit. Temporibus tempore blanditiis libero mollitia corrupti itaque perspiciatis necessitatibus?
                </p>
            </div>
        </div>
    </div>
    <h1 class="container py-3 mx-auto display-5">
        Personal Administrativo
    </h1>
    <div class="container d-flex flex-col justify-content-center">
        <ul class="list-group">
            <div class="row">
            <li class="list-group-item umbroboton mb-3 shadow-sm mx-3">
                <h3>
                    Gerencia General
                </h3>
                <a href="#"> <!--route('umbroshop.contactanos.nosotros')-->
                    <img src="./img/umbro_green.ico" alt="Gerente-General">
                </a>
                    <strong>
                        <br> Lorenzo Mendoza
                    </strong>
            </li>
            <li class="list-group-item umbroboton mb-3 shadow-sm mx-3">
                <h3>
                    Gerencia de Ventas
                </h3>
                <a href="#"> <!--route('umbroshop.contactanos.nosotros')-->
                    <img src="./img/umbro_red.ico" alt="Gerente-Ventas">
                </a>    
                    <strong>
                        <br> Robert Kiyosaki
                    </strong>
            </li>
            <li class="list-group-item umbroboton mb-3 shadow-sm mx-3">
                <h3>
                    Gerencia de Recursos
                </h3>
                <a href="#"> <!--route('umbroshop.contactanos.nosotros')-->
                    <img src="./img/umbro_blue.ico" alt="Gerente-Recursos">
                </a>       
                    <strong>
                        <br> T. Harv Eker
                    </strong>
            </li>
        </div>
        <div class="row">
            <li class="list-group-item umbroboton mb-3 shadow-sm mx-3">
                <h3>
                    Gerencia de Informatica
                </h3>
                <a href="#"> <!--route('umbroshop.contactanos.nosotros')-->
                    <img src="./img/umbro_violet.ico" alt="Gerente-Informatica">
                </a>
                    <strong>
                        <br> Elon Musk
                    </strong>
            </li>
            <li class="list-group-item umbroboton mb-3 shadow-sm mx-3">
                <h3>
                    Gerencia de Infraestructura
                </h3>
                <a href="#"> <!--route('umbroshop.contactanos.nosotros')-->
                    <img src="./img/umbro_white.ico" alt="Gerente-Infraestructura">
                </a>
                    <strong>
                        <br> Herman Melville
                    </strong>
            </li>
        </div>
        </ul>
    </div>
</div>
@endsection