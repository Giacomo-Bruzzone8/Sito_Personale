<x-layout>
    <div class="container pt-5">
        <div class="row vh-100 justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4 pt-5">Registrati</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center heightCustom">
            <div class="col-12 col-md-6">
                <form class="bg-secondary-subtle shadow rounded p-5" method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Utente</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">Indirizzo Email</label>
                        <input type="email" name="email" class="form-control" id="registerEmail">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark">Registrati</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>