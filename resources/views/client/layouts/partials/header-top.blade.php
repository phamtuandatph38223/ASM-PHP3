<div class="site-navbar-top">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                <form action="{{route('search')}}" class="site-block-top-search" method="GET">
                    <span class="icon icon-search2"></span>
                    <input type="text" class="form-control border-0" placeholder="Search" name="search">
                </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                <div class="site-logo">
                    <a href="index.html" class="js-logo-clone">Shoppers</a>
                </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                <div class="site-top-icons">
                    <ul>
                        @if (empty(Auth::user()->name))
                            <li><a href="{{ route('login') }}"><span class="icon icon-person"></span></a></li>
                        @else
                            <li><a href="{{ route('profile.edit') }}">Xin chào {{ Auth::user()->name }}</a></li>
                        @endif
                        <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                        <li>
                            <a href="cart.html" class="site-cart">
                                <span class="icon icon-shopping_cart"></span>
                                <span class="count">2</span>
                            </a>
                        </li>
                        <li class="d-inline-block d-md-none ml-md-0"><a href="#"
                                class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
