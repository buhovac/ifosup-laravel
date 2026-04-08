@props(['id', 'nom', 'prix', 'promo'])
<div style="flex: 0 0 calc(25% - 15px);
    box-sizing: border-box;
    border: 1px solid #ccc;
    padding: 20px;
    background-color: #cffff2;
    margin-bottom: 20px;">
    <h2>{{$nom}}</h2>
    <p>Prix: <strong>{{ $prix}}</strong></p>

    @if ($promo)
        <p style="padding: 10px 15px; background-color: #1a1d20; color: #aacd4e;">Status: 🔥 Promo!</p>
    @endif
    <a href="/produit/{{$id}}">Details</a>
</div>
