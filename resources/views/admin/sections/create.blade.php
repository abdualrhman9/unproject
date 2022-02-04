@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-admin.section-form-component 
                method="post" 
                :action="route('admin.sections.store')" 
                :section="$section"></x-admin.section-form-component>
            </div>
        </div>
    </div>
@endsection
