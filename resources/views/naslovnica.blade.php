<head>
    <title>{{ $title }}</title>
</head>
<x-header />

<div class="most-sold-products">
<h1 class="most-sold-products__heading">Top 10 najprodavanijih proizvoda</h1>
<table class="most-sold-products__table">

    <thead>
        <tr class="thead-row">
            <th>Naziv</th>
            <th>Cijena</th>
            <th>Broj kupnji</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($proizvodi as $proizvod)
        <tr>
            <td><a href={{ route("proizvod", ["id" => $proizvod->id]) }}>{{ $proizvod->naziv }}</a></td>
            <td>{{ $proizvod->cijena }} €</td>
            <td>{{ $proizvod->broj_kupnji }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
