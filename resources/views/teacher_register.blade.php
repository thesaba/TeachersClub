@extends('layouts.master')

@section('content')
	<div class="row">
		<form method="post" action="{!! route('postTeacherRegister') !!}">
			<div class="col-md-6">
		        <div class="form-group">
		            <label>სახელი</label>
		            <input type="text" class="form-control" placeholder="სახელი" name="fname" required>
		        </div>
		    </div>
		    <div class="col-md-6">
		        <div class="form-group">
		            <label>გვარი</label>
		            <input type="text" class="form-control" placeholder="გვარი" name="lname" required>
		        </div>
		    </div>

		    <div class="col-md-6">
		        <div class="form-group">
		            <label>პირადი ნომერი</label>
		            <input type="text" class="form-control" placeholder="პირადი ნომერი" name="personal_number" required>
		        </div>
		    </div>

		    <div class="col-md-6">
		        <div class="form-group">
		            <label>მობილურის ნომერი</label>
		            <input type="text" class="form-control" placeholder="მობილურის ნომერი" name="mobile_number" required>
		        </div>
		    </div>

		    <div class="col-md-6">
		        <div class="form-group">
		            <label>საგანი</label>
		            <input type="text" class="form-control" placeholder="საგანი" name="subject" required>
		        </div>
		    </div>

		    <div class="col-md-6">
		        <div class="form-group">
		            <label>ელ-ფოსტა</label>
		            <input type="email" class="form-control" placeholder="ელ-ფოსტა" name="email" required>
		        </div>
		    </div>

		    <div class="col-md-6">
		        <div class="form-group">
		            <label>მომხმარებლის სახელი</label>
		            <input type="text" class="form-control" placeholder="მომხმარებლის სახელი" name="username" required>
		        </div>
		    </div>

		    <div class="col-md-6">
		        <div class="form-group">
		            <label>პაროლი</label>
		            <input type="password" class="form-control" placeholder="პაროლი" name="password" required>
		        </div>
		    </div>

		    <div class="col-md-6" style="float: right !important;">
		    	<div class="form-group">
		    		<input type="submit" class="btn btn-info btn-fill pull-right" value="რეგისტრაცია" style="float: right !important;">
		    	</div>
		    </div>

		    {!! csrf_field() !!}
		</form>
	</div>
@endsection