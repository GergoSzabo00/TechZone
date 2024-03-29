<nav class="navbar-dark bg-dark">
    <ul class="navbar-nav sidebar" id="sidebar">
        <a href="{{route('home')}}" class="sidebar-brand d-flex align-items-center justify-content-center p-3">
            <img class="logo" src={{url('/images/logo.svg')}} width="40" height="40" alt="Logo">
            <div class="sidebar-brand-text">TechZone</div>
        </a>
        <hr class="bg-light mx-3 my-1">
        <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">
                <i class="fa fa-fw fa-shop"></i> 
                <span>{{__('Visit shop')}}</span>
            </a>
        </li>
        <hr class="bg-light mx-3 my-1">
        <li class="nav-item">
            <a class="nav-link{{request()->routeIs('admin') ? ' active': ''}}" href="{{route('admin')}}">
                <i class="fa fa-fw fa-chart-line"></i>
                <span>{{__('Analytics')}}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link{{request()->routeIs('orders', 'order.edit', 'order.details') ? ' active': ''}}" href="{{route('orders')}}">
                <i class="fa fa-fw fa-basket-shopping"></i>
                <span>{{__('Orders')}}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed{{request()->routeIs('manufacturers', 'manufacturer.create', 'manufacturer.edit') ? ' active': ''}}" href="#collapseManufacturers" role="button" data-bs-toggle="collapse" data-bs-target="#collapseManufacturers" aria-expanded="false" aria-controls="collapseManufacturers">
                <i class="fa fa-fw fa-screwdriver-wrench"></i>
                <span>{{__('Manufacturers')}}</span>
            </a>
            <div class="collapse" id="collapseManufacturers" data-bs-parent="#sidebar">
                <div class="card bg-black">
                    <a href="{{route('manufacturers')}}" class="nav-link{{request()->routeIs('manufacturers') ? ' active': ''}}">
                        <i class="fa fa-fw fa-list-ul"></i> {{__('All Manufacturers')}}
                    </a>
                    <a href="{{route('manufacturer.create')}}" class="nav-link{{request()->routeIs('manufacturer.create') ? ' active': ''}}">
                        <i class="fa fa-fw fa-circle-plus"></i> {{__('Add Manufacturer')}}
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed{{request()->routeIs('categories', 'category.create', 'category.edit') ? ' active': ''}}" href="#collapseCategories" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseCategories">
                <i class="fa fa-fw fa-tags"></i>
                <span>{{__('Categories')}}</span>
            </a>
            <div class="collapse" id="collapseCategories" data-bs-parent="#sidebar">
                <div class="card bg-black">
                    <a href="{{route('categories')}}" class="nav-link{{request()->routeIs('categories') ? ' active': ''}}">
                        <i class="fa fa-fw fa-list-ul"></i> {{__('All Categories')}}
                    </a>
                    <a href="{{route('category.create')}}" class="nav-link{{request()->routeIs('category.create') ? ' active': ''}}">
                        <i class="fa fa-fw fa-circle-plus"></i> {{__('Add Category')}}
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed{{request()->routeIs('products', 'product.details', 'product.create', 'product.edit') ? ' active': ''}}" href="#collapseProducts" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseProducts">
                <i class="fa fa-fw fa-box"></i>
                <span>{{__('Products')}}</span>
            </a>
            <div class="collapse" id="collapseProducts" data-bs-parent="#sidebar">
                <div class="card bg-black">
                    <a href="{{route('products')}}" class="nav-link">
                        <i class="fa fa-fw fa-list-ul"></i> {{__('All Products')}}
                    </a>
                    <a href="{{route('product.create')}}" class="nav-link{{request()->routeIs('product.create') ? ' active': ''}}">
                        <i class="fa fa-fw fa-circle-plus"></i> {{__('Add Product')}}
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed{{request()->routeIs('coupons', 'coupon.details', 'coupon.create', 'coupon.edit') ? ' active': ''}}" href="#collapseCoupons" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseCoupons">
                <i class="fa fa-fw fa-gifts"></i>
                <span>{{__('Coupons')}}</span>
            </a>
            <div class="collapse" id="collapseCoupons" data-bs-parent="#sidebar">
                <div class="card bg-black">
                    <a href="{{route('coupons')}}" class="nav-link">
                        <i class="fa fa-fw fa-list-ul"></i> {{__('All Coupons')}}
                    </a>
                    <a href="{{route('coupon.create')}}" class="nav-link{{request()->routeIs('coupon.create') ? ' active': ''}}">
                        <i class="fa fa-fw fa-circle-plus"></i> {{__('Add Coupon')}}
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link{{request()->routeIs('users', 'user.edit') ? ' active': ''}}" href="{{route('users')}}">
                <i class="fa fa-fw fa-users"></i>
                <span>{{__('Users')}}</span>
            </a>
        </li>
        <hr class="bg-light mx-3 my-1">
        <li class="nav-item">
            <a class="nav-link{{request()->routeIs('storesettings.edit') ? ' active': ''}}" href="{{route('storesettings.edit')}}">
                <i class="fa fa-fw fa-cog"></i>
                <span>{{__('Store settings')}}</span>
            </a>
        </li>
    </ul>
</nav>