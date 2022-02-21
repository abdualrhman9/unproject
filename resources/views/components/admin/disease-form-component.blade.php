
<div class="row">
    @if(session()->has('message'))
    <div class="alert alert-primary" role="alert">
        {{ session('message') }}
    </div>
    @endif
</div>
    <form action="{{ $action }}" method="POST">
    @csrf
    @method($method)
        <div class="form-group">
            <label for="diseaseName">Disease Name</label>
            <input type="text" value="{{ $disease->name ?? old('name') }}" name="name" class="form-control @error('name') is-invalid @enderror" id="diseaseName" aria-describedby="nameHelp" placeholder="Enter Name">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="diseaseSection">Disease Section</label>
            <select name="section_id" 
                class="form-control @error('section_id') is-invalid @enderror" 
                id="diseaseSection" 
                aria-describedby="nameHelp">
                <option selected disabled> Pleases Select Section </option>
                @foreach($sections as $key=>$section)
                    <option 
                    value="{{ $section->id }}" 
                    > 
                    {{ $section->name }} 
                </option>
                @endforeach
            </select>
            @error('section_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
      
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
