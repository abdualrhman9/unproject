<div class="col-md-8 mt-2">


<table class="table p-4">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <!-- <th scope="col">Handle</th> -->
        </tr>
    </thead>
  <tbody>

    @foreach($doctors as $key=>$doctor)

      <tr>
        <th scope="row">{{ $key+1 }}</th>
        <td>{{ $doctor->name }}</td>
        <td>{{ $doctor->email }}</td>
        <td>
            <form action="{{ route('patients.doctors.select') }}" method="POST">
              @csrf
              <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
              <button class="selection btn {{ (auth()->user()->followDoctor($doctor)) ? 'btn-success' : 'btn-danger' }}">
                <i class="fa fa-plus"></i>
              </button>
            </form>
        </td>
      </tr>

    @endforeach
  </tbody>
</table>
</div>
