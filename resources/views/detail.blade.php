<x-layout>
    <div class="container-fluid px-0">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <header>
                <!-- Background image -->
                <div class=" text-center bg-image image" id="intro-example">
                    <div class="mask bg-mask">
                    <div class="d-flex justify-content-center align-items-end h-75">
                        <div class="text-white">
                        <h1 class="mb-3">{{$Piatticucina['title']}}</h1>
                        <p>{{$Piatticucina['description']}}</p>
                        <a href="{{route('homepage')}}" class="btn btn-link btn-trasparent text-white mt-3">Torna indietro</a>
                    </div>
                    </div>
                </div>
                <!-- Background image -->
                </header>
            </div>
        </div>
    </div>
  
      
      
      </div>
 </x-layout>