<div class="sidebar">
    <nav class="sidebar-nav ps ps--active-y">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle">
                    <i class="fas fa-users nav-icon">

                    </i>
                    {{ trans('global.userManagement.title') }}
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                            <i class="fas fa-unlock-alt nav-icon">

                            </i>
                            {{ trans('global.permission.title') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                            <i class="fas fa-briefcase nav-icon">

                            </i>
                            {{ trans('global.role.title') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                            <i class="fas fa-user nav-icon">

                            </i>
                            {{ trans('global.user.title') }}
                        </a>
                    </li>
                </ul>
            </li>
{{--                            Sales--}}
            <li class="nav-item">
                <a href="{{ route("admin.sales.index") }}" class="nav-link {{ request()->is('admin/sales') || request()->is('admin/sales/*') ? 'active' : '' }}">
                    <i class="fas fa-check-circle nav-icon">

                    </i>
                    {{ trans('global.sale.title') }}
                </a>
            </li>
{{--                            Exchanges--}}
            <li class="nav-item">
                <a href="{{ route("admin.exchanges.index") }}" class="nav-link {{ request()->is('admin/exchanges') || request()->is('admin/exchanges/*') ? 'active' : '' }}">
                    <i class="fas fa-check-circle nav-icon">

                    </i>
                    Exchanges
                </a>
            </li>
{{--                                Product--}}
            <li class="nav-item">
                <a href="{{ route("admin.products.index") }}" class="nav-link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' }}">
                    <i class="fas fa-female nav-icon">

                    </i>
                    {{ trans('global.product.title') }}
                </a>
            </li>
{{--                                Customer--}}
            <li class="nav-item">
                <a href="{{ route("admin.customers.index") }}" class="nav-link {{ request()->is('admin/customers') || request()->is('admin/customers/*') ? 'active' : '' }}">
                    <i class="fas fa-child nav-icon">

                    </i>
{{--                    {{ trans('global.customers.title') }}--}}
                    Customers
                </a>
            </li>
{{--                                Suppliers--}}
            <li class="nav-item">
                <a href="{{ route("admin.suppliers.index") }}" class="nav-link {{ request()->is('admin/suppliers') || request()->is('admin/suppliers/*') ? 'active' : '' }}">
                    <i class="fas fa-truck nav-icon">

                    </i>
                    {{--                    {{ trans('global.customers.title') }}--}}
                    Suppliers
                </a>
            </li>
{{--                                Tags--}}
            <li class="nav-item">
                <a href="{{ route("admin.tags.index") }}" class="nav-link {{ request()->is('admin/tags') || request()->is('admin/tags/*') ? 'active' : '' }}">
                    <i class="fas fa-tags nav-icon">

                    </i>
                    {{--                    {{ trans('global.customers.title') }}--}}
                    Tags
                </a>
            </li>
{{--                                Reports--}}
            <li class="nav-item">
                <a href="{{ route("admin.reports.index") }}" class="nav-link {{ request()->is('admin/reports') || request()->is('admin/reports/*') ? 'active' : '' }}">
                    <i class="fas fa-file nav-icon">

                    </i>
                    {{--                    {{ trans('global.customers.title') }}--}}
                    Reports
                </a>
            </li>
{{--                                Settings--}}
            <li class="nav-item">
                <a href="{{ route("admin.settings.index") }}" class="nav-link {{ request()->is('admin/settings') || request()->is('admin/settings/*') ? 'active' : '' }}">
                    <i class="fas fa-cog nav-icon">

                    </i>
                    {{--                    {{ trans('global.customers.title') }}--}}
                    Settings
                </a>
            </li>
{{--            Logout--}}
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 869px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 415px;"></div>
        </div>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
