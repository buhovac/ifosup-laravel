<h1>Details</h1>

<div style="border: 1px solid #ccc; padding: 20px;">
    <h2>{{ $produit['nom'] }}</h2>
    <p>Prix: <strong>{{ $produit['prix'] }}</strong></p>

    @if ($produit['en_promo'])
        <p>Status: 🔥 Promo!</p>
    @endif

    <hr>
    <a href="/produits">retour</a>
</div>
