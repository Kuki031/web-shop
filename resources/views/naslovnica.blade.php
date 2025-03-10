<x-header />
<div class="bg-amber-600">
    @foreach ($proizvodi as $proizvod)
    <p>{{ $proizvod->naziv }}</p>
    @endforeach
</div>
