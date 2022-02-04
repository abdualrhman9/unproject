@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-admin.disease-form-component 
                :disease="$disease" 
                action="{{route('admin.diseases.store')}}" 
                method="POST" 
                :sections="$sections"
                ></x-admin.disease-form-component>
            </div>
        </div>
    </div>
@endsection