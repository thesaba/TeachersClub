@extends('layouts.master')

@section('content')
	@if(sizeof($teachers) > 0)
		@foreach($teachers as $teacher)
			<div class="col-md-4">
	            <div class="card card-user">
	                <div class="image">
	                    <img src="{!! asset('assets/img/cover.jpg') !!}" alt="...">
	                </div>
	                <div class="content">
	                    <div class="author">
	                        <img class="avatar border-gray" src="{!! asset('assets/img/teacher_avatar.png') !!}" alt="...">
	                          <a href="/teacher/get/{!! $teacher->id !!}"><h4 class="title">{!! $teacher->fname . ' ' . $teacher->lname !!}</h4></a><br>
	                             <small><p>{!! $teacher->personal_number !!}</p></small>
	                             <small><p>{!! $teacher->mobile_number !!}</p></small>
	                             <small><p>{!! $teacher->email !!}</p></small>
	                             <p><h4 style="color: #943bea;">რეიტინგის ქულა : {!! $teacher->teacherscore->score !!}</h4></p>
	                          </h4>
	                    </div>
	                </div>
	            </div>
	        </div>
		@endforeach
	@endif
@endsection