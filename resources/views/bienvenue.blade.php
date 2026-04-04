@if(!$langue)
    <h2>Bienvenue !</h2>
@elseif($langue === 'en')
    Welcome!
@elseif($langue === 'es')
    <h2>¡Bienvenido!</h2>
@else
    <h2>Langue non supportée.</h2>
@endif
