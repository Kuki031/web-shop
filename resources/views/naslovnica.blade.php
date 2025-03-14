<head>
    <title>Naslovnica</title>
</head>
<x-header />
<section class="most-sold-products">
    <div class="most-sold-products-div">
        <h1 class="most-sold-products-div__heading">Dobrodošli u Tech Shop!</h1>
    </div>
    <div class="most-sold-products-div">
        <table class="most-sold-products__table">
            <thead>
                <tr class="thead-row">
                    <th colspan="3">Najprodavaniji proizvodi</th>
                </tr>
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
</section>
