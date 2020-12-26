<header class="page-header">
    <nav class="container">
        <div class="nav-wrapper">
            <a href="{{ route('home') }}" class="brand-logo"><i class="material-icons">library_books</i> education</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">

                @foreach ($common_data['header_menu'] as $item)

                    <li><a href="{{ route($item['alias']) }}">{{ $item['name'] }}</a></li>

                @endforeach
            </ul>
        </div>
    </nav>
</header>
