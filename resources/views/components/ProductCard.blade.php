@props(['proizvod'])

<div id="{{ $proizvod->id }}" class="product-card"
    style="background-image: url('{{ file_exists(public_path($proizvod->slika)) ? asset($proizvod->slika) : asset("images/ph.png") }}');"
    >


    <div class="product-card-info">
        <div>
            <p class="product-card-info__name">{{ $proizvod->naziv }}</p>
            <p class="product-card-info__price">{{ $proizvod->cijena }} €</p>
        </div>
        <a class="product-card-info__add" href={{ route("proizvod", ["id" => $proizvod->id]) }}>Kupi proizvod</a>
    </div>
</div>
