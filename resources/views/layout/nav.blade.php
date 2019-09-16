<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="{{url('/')}}">
        <i class="fa fa-coffee"></i>
        ShopGo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-5">
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fa fa-home"></i>
                    Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-tags"></i>
                    Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-heart"></i>
                    Brand</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{action('PageController@all_cart')}}">
                    <i class="fa fa-shopping-cart"></i>
                    Cart
                    @if(session('items'))
                        <span class="badge badge-pill badge-info">{{count(session('items'))}}</span>
                    @endif
                </a>
            </li>
            <li class="nav-item">
                <a href="{{action('PageController@clear_cart')}}" class="nav-link">Clear cart</a>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Product
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{url('products/create')}}">Create</a>
                    <a class="dropdown-item" href="#">View All</a>
                    <a class="dropdown-item" href="#">Edit</a>
                </div>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-users"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Login</a>
                    <a class="dropdown-item" href="#">Logout</a>
                    <a class="dropdown-item" href="#">Register</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
