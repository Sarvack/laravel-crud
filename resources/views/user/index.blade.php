@extends('layouts.app')

@section('title')
User
@endsection

@section('content')

    <div class="card">
        <div class="card-header">Data User</div>

        <div class="card-body">
            <a href="user/create" class="btn btn-primary">Add Data</a>
            <br /> <br />

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($user as $user)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="/user/edit/{{ $user->id}}" class="btn btn-info">Edit</a>
                                <a href="/user/delete/{{ $user->id}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @php $i++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection