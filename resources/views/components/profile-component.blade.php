<div class="col-md-8">
    <div class="row mt-2">
        <div class="col-xl-3 col-md-3 col-sm-12" style="height: 200px;">
        <div class="profile-img"> <img src="{{asset('hero.jpg')}}" class="" alt=""> </div>

            <!-- <div class="row"> -->
            <!-- </div> -->
        </div>
        <div class="col-md-8">
            <p class="profile-text">{{ $user->name }}</p>
            <p class="profile-text">{{ $user->email }}</p>
            <div class="alert alert-warning">
                <p class="profile-text">Diseses <span>{{ $user->disease ?? 'Not Set Yet' }}</span></p>
                <p class="profile-text">{{ $user?->doctors->first()?->name }}</p>
                <p class="profile-text"> {{ $user?->diseases->first()?->section?->name }} </p>
            </div>
            @if(! $user->hasCompleteProfile())
                <p class="alert alert-danger">  Complete your profile </p>
            @endif
        </div>
    </div>
</div>