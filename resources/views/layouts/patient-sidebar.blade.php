<div class="col-md-3">
    <ul class="dashboard-sidebar">
        <li><a href="{{ route('patients.home') }}"> <i class="fa fa-user"></i> Profile</a></li>
        <li>
            <a href="{{ route('patients.diseases.index') }}">
                <i class="fa-solid fa-virus"></i> Diseses  
                @auth
                    @if(auth()->user()->diseases->count() == 0)
                        <span class="text-warning">*  Complete Setup Your Profile </span>
                    @endif
                @endauth
            </a> 
        </li>
        <li><a href="{{ route('patients.sections.index') }}" title="Sections avilable"> <i class="fa-solid fa-section"></i> Sections</a></li>
        <li><a href="{{ route('patients.doctors.index') }}">
            <i class="fa-solid fa-user-doctor"></i> Doctors</a>
            @auth
                @if(auth()->user()->doctors->count() == 0)
                    <span class="text-warning">* Select Doctor To complete Setup Your Profile </span>
                    
                @endif
            @endauth
        </li>
        <li><a href="{{ route('patients.settings') }}"> <i class="fa-solid fa-gear"></i> Settings</a></li>
    </ul>
</div>