
@auth
    <h4>{{ Auth::user()->name}}</h4>
    <p>{{ Auth::user()->email}}</p>
    <p>{{ Auth::user()->id}}</p>
    <p> Você esta logado </p>
@endauth

@guest
    <p> Você não esta logado </p>
@endguest


