@extends('layouts.master')

@section('content')
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/ka_GE/sdk.js#xfbml=1&version=v2.9&appId=855131794639394";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
	<div class="col-md-4">
        <div class="card card-user">
            <div class="image">
                <img src="http://teachersclub.dev/assets/img/cover.jpg" alt="...">
            </div>
            <div class="content">
                <div class="author">
                    <img class="avatar border-gray" src="http://teachersclub.dev/assets/img/teacher_avatar.png" alt="...">
                    <h4 class="title">{!! $teacher->fname . ' ' . $teacher->lname !!}<br>
                    <small><p>{!! $teacher->personal_number !!}</p></small>
                    <small><p>{!! $teacher->mobile_number !!}</p></small>
                    <h4 style="color: #943bea;">რეიტინგის ქულა : {!! $teacher->teacherscore->score !!}</h4>

                	<div class="rate" id="rate">
					    <div class="rate-item" name="1" id="1">☆</div>
					    <div class="rate-item" name="2" id="2">☆</div>
					    <div class="rate-item" name="3" id="3">☆</div>
					    <div class="rate-item" name="4" id="4">☆</div>
					    <div class="rate-item" name="5" id="5">☆</div>
					</div>
					
					<script>
						var rate = document.getElementById("rate");
						rate.onclick = function(e) {
							rate.style.color = "red";
						};
					</script>
                </div>
            </div>
        </div>
    </div>

    <div class="fb-comments" data-href="{!! Request::url() !!}" data-width="642" data-numposts="5"></div>
@endsection