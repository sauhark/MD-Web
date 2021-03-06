@extends('layouts.app')
@section('title')
<title>{{ $ourpage->title }}</title>
@endsection

@section('breadcump')
				<!-- Breadcrumb Area -->
				<div id="cr-breadcrumb-area" class="cr-breadcrumb-area bg-image--2 section-padding--md" data-overlay="8">
					<div class="container">
						<div class="cr-breadcrumb">
							<div class="cr-breadcrumb__left">
								<h2>{{ $ourpage->title }}</h2>
								
							</div>
							
						</div>
					</div>
				</div>
				<!--// Breadcrumb Area -->
@endsection

@section('content')



{{-- <h1>Create Post</h1>

{!! Form::open(['action' => 'PostsController@store' , 'method' => 'POST' , 'enctype'=>'multipart/form-data']) !!}
<div class="form-group">
    {{Form::label('title', 'Title')}}  
    {{Form::text('title', '' , ['class'=>'form-control', 'placeholder' =>'Title'])}}  
</div>

<div class="form-group">
        {{Form::label('body', 'Body')}}  
        {{Form::textarea('body', '' , ['class'=>'form-control', 'placeholder' =>'Body Text'])}}  
    </div>
    
    <div class="form-group">
  {{Form::file('cover_image')}}
    </div>

{{Form::submit('Submit',['class' => 'btn btn-primary'])}}

{!! Form::close() !!} --}}

    
		<!-- Page Conent -->
		<main class="page-content">
			{{-- <div class="cr-section pg-blogs-area section-padding--xlg bg--white"> --}}
                <div id="portfolio-area" class="portfolio-area bg--grey section-padding--xlg">
				<div class="container">
				<div class="row">
					<div class="col-lg-8">
					<div class="widgets sidebar-widgets">

						<section class="single-widget widget-categories">

								<h6>{{ $ourpage->title }}</h6>
								{{-- {!! $ourpage->body !!}
								<img src="{{ Voyager::image($ourpage->image) }}" alt=""> --}}
							

                        </section>
                        

                        <div class="row portfolio-wrap portfolio-gallery-active">

                            {{-- <div class="col-lg-4 col-md-6 col-12 portfolio-item filter-recent filter-running">
                                <div class="portfolio">
                                    <div class="portfolio-image">
                                        <img src="images/portfolio/portfolio-image-1.jpg" alt="portofolio image">
                                    </div>
                                    <div class="portfolio-content">
                                        <h5><a href="portfolio-details.html">Necessitatibus blanditiis.</a></h5>
                                        <h6>Recent</h6>
                                    </div>
                                    <a href="images/portfolio/lg/portfolio-image-lg-1.jpg" class="portfolio-zoomicon"><i class="pe-7s-search"></i></a>
                                </div>
                            </div> --}}
    
                            {{-- <div class="col-lg-4 col-md-6 col-12 portfolio-item filter-running filter-completed">
                                <div class="portfolio">
                                    <div class="portfolio-image">
                                        <img src="images/portfolio/portfolio-image-2.jpg" alt="portofolio image">
                                    </div>
                                    <div class="portfolio-content">
                                        <h5><a href="portfolio-details.html">Necessitatibus blanditiis.</a></h5>
                                        <h6>Recent</h6>
                                    </div>
                                    <a href="images/portfolio/lg/portfolio-image-lg-2.jpg" class="portfolio-zoomicon"><i class="pe-7s-search"></i></a>
                                </div>
                            </div> --}}
                            
                            @foreach($licensecertificates as $licensecertificate)

                            <div class="col-md-3 col-sm-3 col-6 portfolio-item filter-completed">
                                <div class="portfolio">
                                    <div class="portfolio-image">
                                    <img src="{{ Voyager::image( $licensecertificate->photo) }}" alt="licence and cerificate">
                                    </div>
                                    <div class="portfolio-content">
                                    <h5> {{$licensecertificate->title}}</h5>
                                        {{-- <h6>Recent</h6> --}}
                                     </div>
                                    <a href="{{ Voyager::image( $licensecertificate->photo) }}" class="portfolio-zoomicon"><i class="pe-7s-search"></i></a>
                                </div>
                            </div>
                            @endforeach
    
                            {{-- <div class="col-md-6 col-sm-6 col-6 portfolio-item filter-running">
                                <div class="portfolio">
                                    <div class="portfolio-image">
                                        <img src="images/portfolio/malaysia.jpg" alt="portofolio image">
                                    </div>
                                    <div class="portfolio-content">
                                        <h5><a href="/client/malaysia">malaysia</a></h5>
                                        {{-- <h6>Recent</h6> --}}
                                    {{-- </div>
                                    <a href="images/portfolio/lg/malaysia.jpg" class="portfolio-zoomicon"><i class="pe-7s-search"></i></a>
                                </div>
                            </div>  --}}
    
                        </div>



					</div>
					</div>
					<div class="col-lg-4">
						<div class="widgets sidebar-widgets">

							<section class="single-widget widget-categories">
									<h6>{{ $menuitem->title}}</h6>
									<ul>
                                        {{-- @foreach ($ourpages as $ourpage)
                                        
											<li><a href="/pages/{{ $ourpage->slug }}">{{$ourpage->title}}</a></li>
                                        @endforeach --}}
                                        
                                        @foreach ($lists as $list)
										{{-- @if($ourpage->id==1 || $ourpage->id==2 ||$ourpage->id==3 || $ourpage->id==4 || $ourpage->id==5 || $ourpage->id==6) --}}
											<li><a href="/pages/{{ $list->url }}"><b>{{$list->title}}</b></a></li>
											{{-- @endif --}}
										@endforeach

										{{-- <li><a href="blog-with-right-sidebar.html">Our Licence And Certificate</a></li> --}}
										{{-- <li><a href="blog-with-right-sidebar.html">list 5</a></li>
										<li><a href="blog-with-right-sidebar.html">list 6</a></li> --}}
									</ul>
							</section>
						</div>
					</div>
				</div>
				</div>
			</div>

		</main>
@endsection

@section('title')
	About
@endsection