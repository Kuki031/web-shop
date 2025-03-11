<title>{{ $title }}</title>
<x-header />

<div class="product-list-wrap">
    <div class="product-list">
    @foreach($proizvodi as $proizvod)
        <x-product :proizvod="$proizvod" />
    @endforeach
    </div>
</div>
