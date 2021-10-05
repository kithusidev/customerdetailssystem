!@extends('customers.layout')
@section('content')
<div class='pull-left'>
    <h2>customers details </h>
</div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('customers.create')}}"> add new customer</a>

        </div>
         
    </div>

</div>
@if($message=Session::get('success'))
<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif
<table class="table table-borderded">
    <tr>
        <th>NO</th>
        <th>name</th>
        <th>town</th>
        <th>pname</th>
        <th>tellnumber</th>
        <th>email</th>
        <th width="280px">Action</th>
    </tr>
    @foreach($customers as $customer)
    <tr>
        <td>{{++$i}}</td>
        <td>{{$customer->name}}</td>
        <td>{{$customer->town}}</td>
        <td>{{$customer->pname}}</td>
        <td>{{$customer->tellnumber}}</td>
        <td>{{$customer->email}}</td>
        <td>
            <form action="{{route('customers.destroy',$customer->id)}}" method="post">
                <a  class="btn btn-primary" href="{{route('customers.edit',$customer->id)}}">Edit</a>
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>

            </form>
        </td>
    </tr>
    @endforeach

</table>