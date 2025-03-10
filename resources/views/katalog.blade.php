<x-header />
<div>
    @foreach ($proizvodi as $p)
    <p>{{ $p->naziv }}</p>
    @endforeach
</div>
