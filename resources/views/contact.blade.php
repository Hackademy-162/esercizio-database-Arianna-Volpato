<x-layout>
    <x-navbar></x-navbar>
    <div class="container mt-5 vh-100">
        <div class="row justify-content-center ">
            <div class="col-12 text-center">
                <h1 class="title3 mt-5">Lasciaci un tuo contatto:</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('contatti.mail')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputUser" class="form-label"> Nome Utente</label>
                      <input type="text" class="form-control" id="exampleInputUser" name="userName">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Indirizzo Email</label>
                      <input type="email" 
                      name="mail" class="form-control"
                      id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="textArea" class="form-label">Messaggio</label>
                        <textarea name="message" id="textArea" cols="30" rows="10" placeholder="Inserisci qui il tuo messaggio" class="form-control"></textarea>
                      </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>