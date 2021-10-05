@extends('customers.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit student</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary"  href="{{route('customers.index')}}">Back</a>
        </div>     

    </div>
</div>
@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>There were some problems with your input.<br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
</ul>
</div>
@endif
<form action="{{route('customers.update',$customer->id)}}" method="POST">
    @csrf
    @method("PUT")
    <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>name</strong>
            <input type="text" name="name" value="{{$customer->name}}"
            class="form-control" placeholder="name">
        </div>
       </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>town</strong>
            <input type="text" name="town" value="{{$customer->town}}"
            class="form-control" placeholder="town">

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>pname</strong>
            <input type="text" name="town" value="{{$customer->pname}}" class="form-control" placeholder="pname">

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>tellnumber</strong>
            <input type="text" name="tellnumber" value="{{$customer->tellnumber}}" class="form-control" placeholder="tellnumber">

        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>email</strong>
            <input type="text" name="email" value="{{$customer->email}}" class="form-control" placeholder="email">

        </div>

    </div>
    <div class="col-xs-12 col-ms-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">submit</button>

    </div>
</div>
</form>
@endsection