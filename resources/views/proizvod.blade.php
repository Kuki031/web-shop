<x-header />
<title>{{ $title }}</title>

<section class="singe-product-wrap">
    <x-flash />
    <div class="single-product-container">

        <div class="single-product-info">

            <div>
                <img class="single-product-info__img" src="{{ file_exists(public_path($proizvod->slika)) ? asset($proizvod->slika) : asset("images/ph.png") }}">
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
        <x-form :proizvod="$proizvod" :narucitelji="$narucitelji" />
    </div>
</section>
