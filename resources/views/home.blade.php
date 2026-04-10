@extends('layouts.app')

@section('content')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        color: white;
        background: #1f1f1f;
    }

    .home-page {
        min-height: 100vh;
        background-image: linear-gradient(rgba(20, 0, 20, 0.35), rgba(20, 0, 20, 0.35)), url('{{ asset('images/sushi1.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        padding-top: 90px;
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px 30px 80px;
    }

    .hero {
        text-align: center;
        margin-top: 90px;
        margin-bottom: 140px;
    }

    .hero-script {
        font-family: "Times New Roman", serif;
        font-style: italic;
        font-size: 92px;
        line-height: 1;
        font-weight: 400;
    }

    .hero-title {
        font-size: 62px;
        font-weight: 300;
        margin-top: 10px;
    }

    .info-card {
        width: 78%;
        margin: 0 auto 160px;
        background: rgba(255, 255, 255, 0.28);
        display: grid;
        grid-template-columns: 320px 1fr;
        align-items: stretch;
    }

    .info-card .image-box {
        background: rgba(255, 255, 255, 0.18);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 28px;
    }

    .info-card .image-box img {
        width: 100%;
        max-width: 240px;
        object-fit: contain;
    }

    .info-card .text-box {
        padding: 38px 40px;
    }

    .info-card .text-box h2 {
        font-size: 28px;
        margin-bottom: 24px;
        font-family: "Times New Roman", serif;
        font-weight: 500;
    }

    .info-card .text-box p {
        font-size: 17px;
        line-height: 1.8;
        color: #f2eaf0;
        max-width: 520px;
        margin-bottom: 20px;
    }

    .bottom-card {
        width: 82%;
        margin: 0 auto;
        background: rgba(255, 255, 255, 0.28);
        display: grid;
        grid-template-columns: 1fr 320px;
        align-items: stretch;
    }

    .bottom-card .text-box {
        padding: 38px 36px;
    }

    .bottom-card .text-box h2 {
        font-size: 26px;
        margin-bottom: 24px;
        font-family: "Times New Roman", serif;
        font-weight: 500;
    }

    .bottom-card .text-box p {
        font-size: 17px;
        line-height: 1.8;
        color: #f2eaf0;
        max-width: 420px;
    }

    .bottom-card .image-box {
        background: rgba(255, 255, 255, 0.14);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 28px;
    }

    .bottom-card .image-box img {
        width: 100%;
        max-width: 210px;
        opacity: 0.55;
        object-fit: contain;
    }

    @media (max-width: 900px) {
        .hero-script {
            font-size: 58px;
        }

        .hero-title {
            font-size: 36px;
        }

        .info-card,
        .bottom-card {
            width: 95%;
            grid-template-columns: 1fr;
        }

        .info-card .text-box,
        .bottom-card .text-box {
            padding: 24px;
        }
    }
</style>

<div class="home-page">
    <div class="container">
        <section class="hero">
            <div class="hero-script">Welcome Bij</div>
            <div class="hero-title">Pink Ambiance Sushi</div>
        </section>

        <section class="info-card">
            <div class="image-box">
                <img src="{{ asset('images/lady.png') }}" alt="Lady illustration">
            </div>

            <div class="text-box">
                <h2>🌸 Authentieke Japanse Sfeer</h2>
                <p>
                    Stap binnen in een wereld van zachte sakura-tinten en traditionele Japanse invloeden.
                </p>
                <p>
                    Bij Pink Ambiance Sushi draait alles om beleving, sfeer en verfijnde smaken.
                </p>
            </div>
        </section>

        <section class="bottom-card">
            <div class="text-box">
                <h2>🍣 Vers &amp; Met Liefde Bereid</h2>
                <p>
                    Onze sushi wordt dagelijks vers bereid met hoogwaardige ingrediënten.
                    Kwaliteit en presentatie staan bij ons centraal.
                </p>
            </div>

            <div class="image-box">
                <img src="{{ asset('images/lady.png') }}" alt="Decoration">
            </div>
        </section>
    </div>
</div>
@endsection