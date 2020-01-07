@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    List User
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table style="border: 1px solid black;">
                <tr style="border: 1px solid black;">
                    <td class="col-md-3">@sortablelink('f_name', 'Name')</td>
                    <td class="col-md-2">@sortablelink('username', 'UserName')</td>
                    <td class="col-md-3">@sortablelink('email', 'Email')</td>
                    <td class="col-md-1">@sortablelink('active', 'Active')</td>
                    <td class="col-md-2">Action</td>
                </tr>
                @foreach($data as $user)
                    <tr style="border: 1px solid black;">
                        <td>{{$user->f_name}} {{$user->l_name}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->active}}</td>
                        <td>
                            <a href="users/{{$user->id}}/edit"><i class="fa fa-pencil">Edit</i></a>
                            <form method="POST" action="users/{{$user->id}}">
                                @csrf
                                @method('DELETE')
                                    <button type="submit">Delete</button>
                            </form>
                            <form method="GET" action="users/{{$user->id}}">
                                @csrf
                                    <button type="submit">History</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    {{ $data->links() }}
</div>
@endsection
