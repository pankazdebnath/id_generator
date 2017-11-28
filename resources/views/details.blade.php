@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>User Details</h2>
        </div>
        <div class="float-right">
            <a href="{{ route('index') }}" class="label label-primary btn btn-warning pull-right"> Back</a>
        </div>
    </div>
</div>

<div class="row" style="margin-left: 100px;">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Photograph</strong><br>
            <img src="{{ asset('img/' . $user->image) }}" alt="" width="auto;" height="150px;">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name &nbsp:&nbsp</strong>
            {{ $user->name }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email &nbsp:&nbsp</strong>
            {{ $user->email }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Cell No &nbsp:&nbsp</strong>
            {{ $user->cell }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Date of Birth &nbsp:&nbsp</strong>
            {{ $user->bday }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Gender &nbsp:&nbsp</strong>
            {{ $user->gender }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Blood Group &nbsp:&nbsp</strong>
            {{ $user->b_group }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Added On &nbsp:&nbsp</strong>
            {{ $user->created_at }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Last Update On &nbsp:&nbsp</strong>
            {{ $user->updated_at }}
        </div>
    </div>
</div>

<div class="float-right">
    <a class="btn btn-info" style="padding: 0" href="{{ url('u_id', $user->id) }}"><i class="fa fa-download fa-2x" aria-hidden="true"></i> <i class="fa fa-id-card fa-2x" aria-hidden="true"></i></a>
</div>


@endsection
