@props(["proizvod", "narucitelji"])

<section class="form-wrap">

    <form class="form-wrap-form" action="{{ url('web-shop/kreiraj-narudzbu') }}" method="post">

        @csrf
        <input type="hidden" name="proizvod_id" value="{{ $proizvod->id }}">
        <input class="form-wrap-form__input" type="text" name="naziv" placeholder="Ime proizvoda" value="{{ $proizvod->naziv }}" readonly disabled>
        <input class="form-wrap-form__input" type="number" name="kolicina" placeholder="Količina" min="1" required>

        <select class="form-wrap-form__input" name="narucitelj_id" required>
            <option value="">Naručitelj</option>
            @foreach ($narucitelji as $narucitelj)
                <option value="{{ $narucitelj->id }}">{{ $narucitelj->ime }}</option>
            @endforeach
        </select>
        <input type="submit" class="form-wrap-form__input form-wrap-form__input--button" value="Naruči">
    </form>

</section>
