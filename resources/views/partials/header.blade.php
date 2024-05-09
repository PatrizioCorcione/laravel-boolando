@php
    $section_header = config('header-sections');
    $icons_header = config('header-icons');
@endphp
<div class="header">
    <div class="container flex-top">
        <nav class="nav-text">
            <ul class="flex-ul-txt">
                @foreach ($section_header as $item)
                    <li class="mx-1"><a class="white" href="{{ $item['click'] }}">{{ $item['target'] }}</a></li>
                @endforeach

            </ul>
        </nav>
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/boolean-logo.png') }}"alt="Boolando">
        </div>
        <nav class="nav-icon">
            <ul class="flex-ul text-white ">
                @foreach ($icons_header as $item)
                    <li class="mx-1">
                        <a href="{{ $item['click'] }}"></a>
                        <i class="{{ $item['icon'] }}"></i>
                    </li>
                @endforeach

            </ul>
        </nav>
    </div>

</div>
