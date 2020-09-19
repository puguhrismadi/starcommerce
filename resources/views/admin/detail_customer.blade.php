@extends('index')
@section('title',"Detail Customer ")

@section('content')
    

<div class="container">
    <table class="table table-bordered">
        <tr>
            <th colspan="2"><h2>Detail Customer</h2></th>
            
        </tr>
        <tr>
            <td>Name</td>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <td>email</td>
            <td>{{$user->email}}</td>
        </tr>
        <tr>
            <td colspan="2"><a class="btn btn-success" href="{{url('/customer')}}">Kembali</a></td>
            
        </tr>
    </table>
</div>
@endsection