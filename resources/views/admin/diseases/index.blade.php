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
                            <td>section</td>
                            <!-- <td>role</td>
                            <td>edit</td> -->
                        </th>
                    </thead>
                    <tbody>
                        @forelse($diseases as $key=>$disease)
                        <tr>
                            <th>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $disease->name }}</td>
                            <td>{{ $disease->section->name }}</td>
                            <!-- <td>{{ $disease->role }}</td> -->
                            @can('update',$disease)
                                <td><a href="{{ route('admin.diseases.edit',$disease) }}" class="btn btn-warning" > edit </a></td>
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
            {{ $diseases->links() }}
        </div>
    </div>
@endsection