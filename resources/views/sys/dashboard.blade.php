@extends('sys.layouts.master')

@section('content')
    <div class="col-md-4">
        <div class="card card-profile">
            <div class="card-avatar">
                <a href="#pablo">
                    <img class="img" src="{!! asset('assets/sys/img/tim_80x80.png') !!}" />
                </a>
            </div>

            <div class="content">
                <h6 class="category text-gray">ადმინისტრატორი</h6>
                <h4 class="card-title">{!! Auth::user()->admin->fname . ' ' . Auth::user()->admin->lname !!}</h4>
                <p class="card-content">
                    <p>{!! Auth::user()->admin->mobile_number !!}</p>
                    <p>{!! Auth::user()->email !!}</p>
                </p>
                <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
            </div>
        </div>
    </div>
@endsection