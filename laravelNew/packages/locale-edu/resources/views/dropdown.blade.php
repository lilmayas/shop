<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle"
            type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Locales
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach(\LocaleEdu\LocaleService::availableLocales() as $locale)
            <li><a class="dropdown-item"
                   href="{{ route('locale', ['code' => $locale->code]) }}">{{ $locale->name }}</a></li>
        @endforeach
    </ul>
</div>
