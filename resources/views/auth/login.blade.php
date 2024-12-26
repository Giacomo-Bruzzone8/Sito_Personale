<x-layout>
    <div class="container mt-5">
        <div class="row vh-100 justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4 pt-5">Accedi</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center heightCustom">
            <div class="col-12 col-md-6">
                <form class="bg-secondary-subtle shadow rounded p-5" method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="loginEmail">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>