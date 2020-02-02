@extends('layouts.app')

@section('head')
    <title>Kuršu krogs</title>
@endsection

@section('content')
<header id="home">
    <div class="landing landing-bg">
        <div class="overlay"></div>
        <div class="landing-inner">
            <h1 class="landing-title">Kuršu krogs</h1>
            <p>Iespējams mums te nemaz nebūš aprāķšČts</p>
            <nav class="landing-nav">
                <ul>
                    <li class="">
                        <a href="#edienkarte" class="btn">Ēdienkarte</a>
                    </li>
                    <li>
                        <a href="#!" class="btn">Dzērienkarte</a>
                    </li>
                    <li>
                        <a href="#!" class="btn"><i class="material-icons">call</i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- Main Content -->
<main class="">
@foreach( $dishCategories as $category )
    <!-- varbūt mēs varam uz lielāka ekrāna rādīt 2 lapas paralēli -->
    <section id="edienkarte" class=""> 
        <!-- Header of section -->
        <header class="container section-header">
            <!-- Te vajag uztaisīt sarakstu ar kategorijām:
            Uzkodas, Salāti, Zupas, Gaļas, Zivis, Piedevas, Deserti
            -->
            <!-- Section Title -->
            <div class="section-title">
                <h1 class="p-05">{{ $category->name }}</h1>
                <nav class="landing-nav">
                    <ul>
                        <li class="">
                            <a href="#edienkarte" class="btn">Ēdienkarte</a>
                        </li>
                        <li>
                            <a href="#!" class="btn">Dzērienkarte</a>
                        </li>
                        <li>
                            <a href="#!" class="btn">Zvanīt</a>
                        </li>
                        <li>
                            <a href="#home" class="btn"><i class="material-icons">arrow_upward</i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Section content -->
        <div class="container section-content px-05">
            <!-- Content media -->
            <figure class="box-shadow">
                <!-- Section Image Title -->
                <div class="special">
                    <h2 class="special-title bg-green p-05">Mīdijas</h2>
                    <img class="" src="img/midijas.jpg" alt="Mīdijas baltvīna—saldā krējuma mērcē">
                </div>
            </figure>
            <!-- Content text -->
            <table class="my-1">
                @foreach( $category->dishes as $dish )
                <tr>
                    <td>
                        <h2>{{ $dish->name }}</h2>
                        <p>Burkāni, kartupeļi, sīpoli, bekons,</p>
                    </td>
                    <td><strong>{{ $dish->price }}</strong></td>
                </tr>
                @endforeach
            </table>
        </div>
    </section>
@endforeach
</main>
@endsection