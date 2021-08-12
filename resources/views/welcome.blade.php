@extends('layouts.template')
@section('content')

        @foreach ($proyectos as $proyecto)
            
                                
             <!-- item -->
            <!-- 
            <div class="project-item">
                    <div class="project-image" data-target="#portfolioModal{{ $proyecto->id }}">
                            <img src="{{ $proyecto->imagen }}" alt="project image">
                    </div>
                    <div class="project-content">
                        <h3>{{ $proyecto->nombre }}</h3>
                        <div class="project-view d-flex">
                            <span>Frontend y Backend</span>
                            <a href="javascript:void(0)" class="btn-view">Ver proyecto </a>
                        </div>
                    </div>
            </div>
    
            <div class="modal-container">
                <div class="modal">
                    <div class="modal-image">
                        <img src="{{ $proyecto->imagen }}" alt="image">
                    </div>
                    <div class="modal-content"  id="portfolioModal{{ $proyecto->id }}">

                        <h3>Cree un sistema web AgroTec para cultivos</h3>
                        <p class="requirments">{{ $proyecto->descripcion }}</p>

                        <ul>
                            <li><span>Skills:-</span> HTML, CSS, BOOTSTRAP 4, JAVASCRIPT, JQuery, Chart.js, API de Google</li>
                            <li><span>Project duration: </span>6 meses</li>
                            <li><span>Project url:-</span> <a
                                    href="{{ $proyecto->url }}">https://agronomicsystem.jalfredodzulhau.com/bienvenida.php</a>
                            </li>
                        </ul>

                        <div class="close-btn">
                            <a href="javascript:void(0)" class="btn btn-blue close-modal">Cerrar Modal</a>
                        </div>
                    </div>
                </div>
            </div>-->
             <!-- Portfolio Item 1-->
             <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1{{ $proyecto->id }}">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ $proyecto->imagen }}" alt="..." />
                        </div>
                    </div>


                    <!-- Portfolio Modal 1-->
            <div class="portfolio-modal modal fade" id="portfolioModal1{{ $proyecto->id }}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{ $proyecto->nombre }}</h2>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                                                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z"/>
                                                <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
                                                </svg></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal - Image-->
                                        <img class="img-fluid rounded mb-5" src="{{ $proyecto->imagen }}" alt="..." />
                                        <!-- Portfolio Modal - Text-->
                                        <p class="mb-4">{{ $proyecto->descripcion }}</p>
                                        <a  href="{{ $proyecto->url }}" class="btn btn-primary">
                                            <i class="fas fa-times fa-fw"></i>
                                            Visitar proyecto
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       <!-- Portfolio Modal 1-->
        @endforeach
@endsection