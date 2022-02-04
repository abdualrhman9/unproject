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
                            <!-- <td>email</td>
                            <td>role</td>
                            <td>edit</td> -->
                        </th>
                    </thead>
                    <tbody>
                        @forelse($sections as $key=>$section)
                        <tr>
                            <th>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $section->name }}</td>
                            <!-- <td>{{ $section->email }}</td>
                            <td>{{ $section->role }}</td> -->
                            @can('update',$section)
                                <td><a href="{{ route('admin.sections.edit',$section) }}" class="btn btn-warning" > edit </a></td>
                            @endcan
                            </th>
                        </tr>
                        @empty
                        <tr>
                            <th>
                                No Sections <a href="{{ route('admin.sections.create') }}"> Create </a> ?
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
            {{ $sections->links() }}
        </div>
    </div>
@endsection