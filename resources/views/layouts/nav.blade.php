<nav class="navbar navbar-expand-lg navbar-primary bg-dark">
    <a class="navbar-brand" href="{{route('home')}}">Agency</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link {% if current_menu is defined and  current_menu == 'properties' %} active text-warning{% endif  %}" href="{{ route('property.index') }}">Buy <span class="sr-only">(current)</span></a>
            </li>

            @if(isset($menu_admin) && $menu_admin == true)
            <li class="nav-item">
                <a class="nav-link" href="">Create the new property</a>
            </li>
            @endif
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
