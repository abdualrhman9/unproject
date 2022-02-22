<div class="col-md-8 mt-2">


<table class="table p-4">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Disease</th>
        <th scope="col">Section</th>
        <!-- <th scope="col">Handle</th> -->
        </tr>
    </thead>
  <tbody>

    @foreach($diseases as $key=>$disease)

      <tr>
        <th scope="row">{{ $key+1 }}</th>
        <td>{{ $disease->name }}</td>
        <td>{{ $disease->section->name }}</td>
        <td>
          <form action="{{ route('patients.diseases.select') }}" method="post">
            @csrf
            <button class="selection btn {{ (auth()->user()->hasDisease($disease)) ? 'btn-success' : 'btn-danger' }}">
              <input type="hidden" name="disease_id" value="{{ $disease->id }}">
              <i class="fa fa-plus"></i>
            </button>
          </form>
        </td>
      </tr>

    @endforeach
  </tbody>
</table>
</div>
