@extends('customers.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
    <a class="btn btn-primary"  href="{{route('customers.index')}}">Back</a>
     </div>
    </div>
</div>
@if($errors->any())
<div class="alert alert-danger">
    <strong> Whoops!</strong>there was a problem with the customer input.<br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
</ul>
</div>
@endif
<form action="{{route('customers.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>name:</strong>
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>town</strong>
                <input type="text" name="town" class="form-control" placeholder="town">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>pname</strong>
                <input type="text" name="pname" class="form-control" placeholder="pname">
            </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>tellnumber</strong>
                <input type="text" name="tellnumber" class="form-control" placeholder="tellnumber">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email</strong>
                <input type="text" name="email" class="form-control" placeholder="email">

            </div>
        </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">submit</button>
   </div>
</div>
</form>
@endsection
