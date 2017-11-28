@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
    	@if($errors->any())
			<div class="alert alert-denger">
				@foreach($errors->all() as $error)
					<p>{{$error}}</p>
				@endforeach()
			</div>
		@endif
        <div class="panel panel-default">
            <div class="panel-heading col-lg-12 col-md-12 col-sm-12">
                <div class="col-lg-4 col-md-4 col-sm-4" style="padding: 0">
                    <h4>Update User Data</h4>     
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 float-right" style="padding: 0">
                    <a href="{{ route('index') }}" class="label label-primary float-right btn btn-warning" >Back</a>
                </div>
            </div>
            <div class="panel-body">
                <form action="{{ route('update', $user->id) }}" method="POST" class="form-horizontal">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Full Name</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$user->name}}" name="name" id="title" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >E-mail</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$user->email}}" name="email" id="title" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Cell No</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$user->cell}}" name="cell" id="title" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Gender</label>
                        <input type="radio" name="gender" value="male" checked> Male&nbsp;
                        <input type="radio" name="gender" value="female"> Female&nbsp;
                        <input type="radio" name="gender" value="other"> Other 
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Date of Birth</label>
                        <input type="date" value="{{$user->bday}}" name="bday">
                    </div>

                    <div class="form-group ">
                        <label class="control-label col-sm-2" >Blood Group</label>
                        <input type="radio" name="b_group" value="A+" checked> A+&nbsp;
                        <input type="radio" name="b_group" value="B+"> B+&nbsp;
                        <input type="radio" name="b_group" value="O+"> O+ &nbsp;
                        <input type="radio" name="b_group" value="AB+" > AB+&nbsp;
                        <input type="radio" name="b_group" value="A-" > A-&nbsp;
                        <input type="radio" name="b_group" value="B-"> B-&nbsp;
                        <input type="radio" name="b_group" value="O-"> O-&nbsp;
                        <input type="radio" name="b_group" value="AB-" > AB-
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Password</label>
                        <div class="col-sm-10">
                            <input type="password" value="{{$user->password}}" name="password" id="title" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" >Photograph</label>
                        <div class="col-sm-3">
                            <input type="file" value="{{$user->image}}" name="image" accept="image/*" class="form-control">
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-success" value="Update" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection