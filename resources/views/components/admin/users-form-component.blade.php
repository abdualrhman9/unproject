
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
            <label for="userName">User Name</label>
            <input type="text" value="{{ $user->name ?? old('name') }}" name="name" class="form-control @error('name') is-invalid @enderror" id="userName" aria-describedby="nameHelp" placeholder="Enter Name">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" value="{{ $user->email ?? old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="passwordConfirmation">Password Confirmation</label>
            <input type="password" name="password_confirmation" class="form-control" id="passwordConfirmation" placeholder="Password confirm">
        </div>
        <div class="form-group @error('role') is-invalid @enderror">
            <label for="role">Role</label>
            <select name="role" class="form-control" id="role">
                <option selected disabled > please select role </option>
                <option value="1" {{ ($user->role == '1' or old('role') == '1') ? 'selected' : '' }} > admin </option>
                <option value="2" {{ ($user->role == '2' or old('role') == '2') ? 'selected' : '' }} > patient </option>
                <option value="3" {{ ($user->role == '3' or old('role') == '3') ? 'selected' : '' }} > doctor </option>
            </select>
            @error('role')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
