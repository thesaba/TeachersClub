@extends('layouts.master')

@section('content')
	<div id="main_container">
		@if(Auth::check() && ! \App\User::isAdmin(Auth::user()->id))
			{!! $data !!}

			@if(sizeof($pupils) > 0)
				@foreach($pupils as $pupil)
					<div class="col-md-4">
						<div class="card card-user">
							<div class="image">
								<img src="{!! asset('assets/img/cover.jpg') !!}" alt="...">
							</div>
							<div class="content">
								<div class="author">
									<a href="#">
										<img class="avatar border-gray" src="{!! asset('assets/img/avatar.png') !!}" alt="...">

										<h4 class="title">{!! $pupil->fname . ' ' . $pupil->lname !!}<br>
											<small><p>{!! $pupil->personal_number !!}</p></small>
											<small><p>{!! $pupil->mobile_number !!}</p></small>
											<small><p>{!! $pupil->email !!}</p></small>
										</h4>
									</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			@endif
		@else
			<div class="col-md-4">
	            <div class="card card-user">
	                <div class="image">
	                    <img src="{!! asset('assets/img/cover.jpg') !!}" alt="...">
	                </div>
	                <div class="content">
	                    <a href="{!! route('getForeign') !!}">
		                    <div id="small_content">
		                    	<h2>უცხო ენა</h2>
		                    </div>
	                    </a>
	                </div>
	            </div>
	        </div>
			<div class="col-md-4">
	            <div class="card card-user">
	                <div class="image">
	                    <img src="{!! asset('assets/img/cover.jpg') !!}" alt="...">
	                </div>
	                <div class="content">
	                <a href="{!! route('getMath') !!}">
	                	<div id="small_content">
	                    	<h2>მათემატიკა</h2>
	                    </div>	
	                </a>                
	                </div>
	            </div>
	        </div>
			<div class="col-md-4">
	            <div class="card card-user">
	                <div class="image">
	                    <img src="{!! asset('assets/img/cover.jpg') !!}" alt="...">
	                </div>
	                <div class="content">
	                <a href="{!! route('getPhysics') !!}">
	                    <div id="small_content">
	                    	<h2>ფიზიკა</h2>
	                    </div>
	                    </a>                   
	                </div>
	            </div>
	        </div>
			<div class="col-md-4">
	            <div class="card card-user">
	                <div class="image">
	                    <img src="{!! asset('assets/img/cover.jpg') !!}" alt="...">
	                </div>
	                <div class="content">
	                <a href="{!! route('getChemistry') !!}">
	                    <div id="small_content">
	                    	<h2>ქიმია</h2>
	                    </div>
	                    </a>                   
	                </div>
	            </div>
	        </div>
			<div class="col-md-4">
	            <div class="card card-user">
	                <div class="image">
	                    <img src="{!! asset('assets/img/cover.jpg') !!}" alt="...">
	                </div>
	                <div class="content">
	                <a href="{!! route('getBiology') !!}">
	                    <div id="small_content">
	                    	<h2>ბიოლოგია</h2>
	                    </div>
	                    </a>	                    
	                </div>
	            </div>
	        </div>
			<div class="col-md-4">
	            <div class="card card-user">
	                <div class="image">
	                    <img src="{!! asset('assets/img/cover.jpg') !!}" alt="...">
	                </div>
	                <div class="content">
	                <a href="{!! route('getGeorgian') !!}">
	                    <div id="small_content">
	                    	<h2>ქართული ენა</h2>
	                    </div>
	                    </a>	                    
	                </div>
	            </div>
	        </div>
			<div class="col-md-4">
	            <div class="card card-user">
	                <div class="image">
	                    <img src="{!! asset('assets/img/cover.jpg') !!}" alt="...">
	                </div>
	                <div class="content">
	                <a href="{!! route('getAbilities') !!}">
	                    <div id="small_content">
	                    	<h2>უნარები</h2>
	                    </div>
	                    </a>	                    
	                </div>
	            </div>
	        </div>
			<div class="col-md-4">
	            <div class="card card-user">
	                <div class="image">
	                    <img src="{!! asset('assets/img/cover.jpg') !!}" alt="...">
	                </div>
	                <div class="content">
	                <a href="{!! route('getGeography') !!}">	                
	                    <div id="small_content">
	                    	<h2>გეოგრაფია</h2>
	                    </div>
	                    <a href="#">	                    
	                </div>
	            </div>
	        </div>
			<div class="col-md-4">
	            <div class="card card-user">
	                <div class="image">
	                    <img src="{!! asset('assets/img/cover.jpg') !!}" alt="...">
	                </div>
	                <div class="content">
	                <a href="{!! route('getHistory') !!}">
	                    <div id="small_content">
	                    	<h2>ისტორია</h2>
	                    </div>
	                    </a>	                    
	                </div>
	            </div>
	        </div>
	        	        	        	        	        	        	        	        
		@endif
	</div>
@endsection