@extends('layouts.app')

@section('content')
    <section class="navigator" ></section>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-start">
            @include('layouts.patient-sidebar')
            <x-profile-component :user='$user'></x-profile-component>
        </div>
    </div>
@endsection