
<div class="row">
    @if(session()->has('message'))
    <div class="alert alert-primary" role="alert">
        {{ session('message') }}
    </div>
    @endif
</div>
    <form action="{{ $action }}" method="post">
    @csrf
    @method($method)
        <div class="form-group">
            <label for="sectionName">Section Name</label>
            <input type="text" value="{{ $section->name ?? old('name') }}" name="name" class="form-control @error('name') is-invalid @enderror" id="sectionName" aria-describedby="nameHelp" placeholder="Enter Name">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        </div>
      
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
