@props(['proizvod'])

<div class="product-card" style="background-image: url({{ asset('storage/ph.jpg') }})">
    <div class="product-card-info">
        <div>
            <p class="product-card-info__name">{{ $proizvod->naziv }}</p>
            <p class="product-card-info__price">{{ $proizvod->cijena }} €</p>
        </div>
        <a class="product-card-info__add" href={{ route("proizvod", ["id" => $proizvod->id]) }}>Kupi proizvod</a>
    </div>
</div>
