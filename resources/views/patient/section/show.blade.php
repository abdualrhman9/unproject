@extends('layouts.app')

@section('content')
    <section class="navigator" ></section>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-start">
            @include('layouts.patient-sidebar')

            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header" style="background-color: #4b86db">
                        <h2> {{ $section->name }} </h2>
                    </div>
                    <div class="card-body" style="background-color: #e5ecf2;">
                        <p> {{ $section->desc }} </p>
                    </div>
                </div>
            </div>


            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h2>Diseases</h2>
                    </div>
                    <div class="card-body">
                        @foreach($section->diseases as $disease)

                        <div>{{ $disease->name }}</div>

                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection