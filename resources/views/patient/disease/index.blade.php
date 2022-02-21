@extends('layouts.app')

@section('content')
    <section class="navigator" ></section>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-start">
            @include('layouts.patient-sidebar')
            <x-patients.diseases-component></x-patients.diseases-component>
        </div>
    </div>
@endsection