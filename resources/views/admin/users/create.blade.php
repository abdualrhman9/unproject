@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-admin.users-form-component method="post" :action="route('admin.users.store')" :user="$user"></x-admin.users-form-component>
            </div>
        </div>
    </div>
@endsection