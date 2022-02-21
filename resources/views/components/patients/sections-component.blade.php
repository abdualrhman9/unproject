<div class="col-md-8 mt-2">


<table class="table p-4">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">description</th>
        <th scope="col">disease count</th>
        <th scope="col">id</th>
        </tr>
    </thead>
  <tbody>

    @foreach($sections as $key=>$section)

      <tr>
        <th scope="row">{{ $key+1 }}</th>
        <td>
            <a href="{{ route('patients.sections.show',$section) }}">  {{ $section->name }}  </a>    
        </td>
        <td>
            <p>{{ substr($section->desc,0,20) }}</p>
        </td>
        <th scope="row">{{ $section->diseases->count() }}</th>

        <th scope="row">{{ $section->id }}</th>

        <!-- <td>{{ $section->email }}</td> -->
        
      </tr>
    

    @endforeach

  </tbody>
  
</table>

{{$sections->links()}}


</div>
