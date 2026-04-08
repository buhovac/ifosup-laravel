<div class="produits" style="display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: flex-start;">
    @foreach ($produits as $produit)
        <x-produit :id="$produit['id']" :nom="$produit['nom']" :prix="$produit['prix']" :promo="$produit['en_promo']" />
    @endforeach
</div>
