@guest
    @extends('layouts.app2') 
@endguest

@section('titre')
    VRT - HOME
@endsection

@guest
    @section('content')
    <div class="centre row">
        <div class="container">
            <a href="{{ route('login') }}">  
              <button type="button"  class="butlog" > Se connecter</button>
            </a>
        </div>
        <div class="container">
            <a href="{{ route('register') }}">
                <button type="button" class="butreg">S'enregistrer</button>
            </a>
        </div>
    </div>
    @endsection
@endguest



