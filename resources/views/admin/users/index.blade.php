@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('layouts.admin-sidebar')
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <th>
                            <td>#</td>
                            <td>name</td>
                            <td>email</td>
                            <td>role</td>
                            <td>edit</td>
                        </th>
                    </thead>
                    <tbody>
                        @forelse($users as $key=>$user)
                        <tr>
                            <th>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            @can('update',$user)
                                <td><a href="{{ route('admin.users.edit',$user) }}" class="btn btn-warning" > edit </a></td>
                            @endcan
                            </th>
                        </tr>
                        @empty
                        <tr>
                            <th>
                                No Users <a href="{{ route('admin.users.create') }}"> Create </a> ?
                            </th>
                        </tr>
                        @endforelse
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            {{ $users->links() }}
        </div>
    </div>
@endsection