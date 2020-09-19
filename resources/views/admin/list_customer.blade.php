@extends('index')
@section('content')

<div class="container">
    <h2>List User Customer</h2>
    @if(session()->has('pesanhapus'))
    <div class="alert alert-danger">{{ session()->get('pesanhapus') }}</div>
    @endif
<table class="table table-bordered">
    <tr>
        <td>No</td>
        <td>Name</td>
        <td>e-mail</td>
        <td>Action</td>
    </tr>
    @forelse ($user as $user)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $user->name}}</td>
        <td>{{ $user->email}}</td>
        <td> <a href="#" class="btn btn-primary">edit</a> <a href="{{ url("/hapus-customer/$user->id")}}" class="btn btn-danger">hapus</a></td>
    </tr>
    @empty
    <td colspan="7">Tidak Ada Data</td>
@endforelse

</table>

</div>
    
@endsection