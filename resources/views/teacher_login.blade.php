@extends('layouts.master')

@section('content')
	<div class="row">
		<form method="post" action="{!! route('postTeacherLogin') !!}">
		    <div class="row" style="margin-left: auto;">
		    	<div class="col-md-4">
			        <div class="form-group">
			            <label>მომხმარებლის სახელი</label>
			            <input type="text" class="form-control" placeholder="მომხმარებლის სახელი" name="username" required>
			        </div>
			    </div>
		    </div>
			
			<div class="row" style="margin-left: auto;">
				<div class="col-md-4">
			        <div class="form-group">
			            <label>პაროლი</label>
			            <input type="password" class="form-control" placeholder="პაროლი" name="password" required>
			        </div>
			    </div>
			</div>

		    <div class="col-md-6" style="float: left !important;">
		    	<div class="form-group">
		    		<input type="submit" class="btn btn-info btn-fill pull-right" value="შესვლა" style="float: left !important;">
		    	</div>
		    </div>

		    {!! csrf_field() !!}
		</form>
	</div>
@endsection