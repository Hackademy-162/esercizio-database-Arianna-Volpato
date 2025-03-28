<x-layout title="Homepage">
    @if (session('messagge'))
        <div class="alert alert-success">
            {{ session ('messagge')}}
        </div>
    @endif

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-blue">
                <h1> Il sito dei contatti </h1>
            </div>
        </div>
    </div>


    <section class="container">
        <div class="row">
          @foreach ($Piatticucina as $Piatticucina)
          <div class="col-12 col-md-3 d-flex justify-content-center mt-4">
            <div class="card card-w shadow rounded">
              <img src="{{$Piatticucina['img']}}" class="card-img-top img-fluid" alt="{{$Piatticucina['title']}}">
              <div class="card-body">
                <h5 class="card-title">{{$Piatticucina['title']}}</h5>
                <p class="card-text">{{$Piatticucina['description']}}</p>
                <a href="{{route('pagina.dettaglio', ['id'=>$Piatticucina['id']])}}" class="btn btn-primary">Scopri di più</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        </section>










</x-layout>