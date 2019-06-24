@extends('frontend.app')

@section('content')
 <!-- Header Area End -->  
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-area ptb-60 ptb-sm-30">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active"><a href="{{route('policy')}}">Politica de Privacidade</a></li>
                    </ul>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Breadcrumb End -->
        <!-- About Main Area Start -->
        <div class="about-main-area">
			<div class="container">
				<div class="row">
					<!--div class="col-lg-7 col-md-12">
						<div class="about-img">
							<img class="img" src="img/banner/about.jpg" alt="about-us">
						</div>
					</div-->
					<div class="col-lg-12 col-md-12 text-center">
						<div class="about-content">
							<h3>{{$pagepolicy->titulo}}</h3>
							 {!! $pagepolicy->descricao !!}
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="about-main-area" style="margin-bottom: 10%;margin-top: 5%;">
             <div class="container">
                <div class="accordion" id="accordionExample">
                     @foreach ($desc as $key => $item)
                      <div class="card">
                        <div class="card-header" id="heading{{$key}}">
                          <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse{{$key}}">
                             {!! $item->titulo !!}
                            </button>
                          </h2>
                        </div>

                        <div id="collapse{{$key}}" class="collapse" aria-labelledby="heading{{$key}}" data-parent="#accordionExample">
                          <div class="card-body">
                               {!! $item->descricao !!}
                          </div>
                        </div>
                      </div>
                      @endforeach

                </div>
             </div>
        </div>
@stop