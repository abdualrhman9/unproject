@extends('layouts.app')

@section('content')
    <section class="navigator" ></section>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-start">
            @include('layouts.patient-sidebar')
            <div class="col-md-8">
                <h1>Settings</h1>
            </div>
        </div>
    </div>
@endsection