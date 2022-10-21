@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <h1>Hugo<span>Market</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('enterprise.create') }}">Cadastrar Empresa</a></li>
          <li><a href="{{ route('enterprise.index') }}">Ver Empresas</a></li>
          <li><a href="{{ route('institution.create') }}">Cadastrar Instituições</a></li>
          <li><a href="#">Cadastrar Nota Fiscal</a></li>
          <li><a href="#">Fazer Doação</a></li>
        </ul>
      </nav>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header>
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Bem-Vindo ao <span>Hugo Market</span></h2>
          <p>Melhor sistema para gerenciamento de mercados e cupons</p>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-inboxes-fill"></i></div>
              <h4 class="title"><a href="{{ route('enterprise.create') }}"" class="stretched-link">Cadastrar Empresa</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-building"></i></div>
              <h4 class="title"><a href="{{ route('institution.create') }}" class="stretched-link">Cadastrar Instituições</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-card-text"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Cadastrar Nota Fiscal</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-cash-coin"></i></div>
              <h4 class="title"><a href="" class="stretched-link">Fazer Doação</a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection