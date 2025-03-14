<title>Katalog proizvoda</title>
<x-header />

<section class="product-list-wrap">
    <div class="product-list">
    @foreach($proizvodi as $proizvod)
        <x-ProductCard :proizvod="$proizvod" />
    @endforeach
    </div>
</section>
