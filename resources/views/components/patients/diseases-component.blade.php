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
          <button id="select-{{ $disease->id }}" onclick="selectDisease(<?=$disease->id?>)" class="selection btn {{ (auth()->user()->hasDisease($disease)) ? 'btn-success' : 'btn-danger' }}">
            <i class="fa fa-plus"></i>
          </button>
        </td>
      </tr>

    @endforeach
  </tbody>
</table>
</div>

@section('scripts')
  <script>
    function selectDisease(disease){
      
      axios.post('<?=route('patients.diseases.select')?>',{
        disease_id: disease,
      }).then(function(response){

          if(response.data && response.data.message == 'success' && response.data.data.id != 0){
            
            let sbtn = document.getElementById('select-'+disease);
            
            updateSelected(sbtn);
          }
          else
            console.log('error');
      });


    }
    
    
    function updateSelected(sbtn){
      let btns = document.querySelectorAll('button.selection');
      console.log(sbtn.id , btns[0].id);
      for(let i = 0;i<btns.length;i++){
      
        if(btns[i].id == sbtn.id){
          btns[i].classList.remove('btn-danger');
          btns[i].classList.add('btn-success');
        }
        else {
          btns[i].classList.remove('btn-success');
          btns[i].classList.add('btn-danger');
        }
      }

      alert('profile data is updated');

    }

  </script>
@endsection