<x-header />
<title>{{ $title }}</title>

<div class="singe-product-wrap">
    <div class="single-product-container">
        <div class="single-product-info">

            <div>
                <img class="single-product-info__img" src="{{ asset('storage/ph.jpg') }}" alt="nema slike">
            </div>
            <div>
                <h2 class="single-product-info__name">{{ $proizvod->naziv }}</h2>
                <p class="single-product-info__price">{{ $proizvod->cijena }} €</p>
            </div>
            <div>
                <button class="single-product-info__order" type="button">Naruči</button>
            </div>
        </div>

        <div class="single-product-info">
            <h2>Opis</h2>
            <p class="single-product-info__about">{{ $proizvod->opis }}</p>
        </div>
    </div>
</div>
