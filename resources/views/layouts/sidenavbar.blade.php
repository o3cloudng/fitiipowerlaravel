<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                {{-- {% if user.is_admin %} --}}
                <div class="sidenav-menu-heading">Dashboard</div>
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                   Dashboard
                </a>
                
                {{-- <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="nav-link-icon"><i data-feather="grid"></i></div>
                Reseller List
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" data-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                    <a class="nav-link" href="{% url 'adminarea:resellers' %}">
                        Resellers
                    </a>
                    <a class="nav-link" href="{% url 'adminarea:add_reseller' %}">
                        Add Reseller
                    </a>
                </nav>
            </div> --}}
            
            <!-- <div class="sidenav-menu-heading">Customer</div> -->
            <div class="sidenav-menu-heading">Customers</div>
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                    data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="nav-link-icon"><i data-feather="users"></i></div>
                    Customers
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                        <a class="nav-link" href="{{ route('customer.index') }}">
                           Customers
                        </a>
                        <a class="nav-link" href="{{ route('customer.create') }}">
                            Add Customer
                        </a>
                    </nav>
                </div>
                <!-- <div class="sidenav-menu-heading">Products</div> -->
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                    data-target="#collapseLayout" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="nav-link-icon"><i data-feather="package"></i></div>
                    Products
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayout" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                        <a class="nav-link" href="{% url 'adminarea:products' %}">
                            Product list
                        </a>
                        <a class="nav-link" href="{% url 'adminarea:add_product' %}">
                            Add Product
                        </a>
                    </nav>
                </div>
                <!-- <div class="sidenav-menu-heading">Products</div>
                <a class="nav-link" href="{% url 'adminarea:products' %}">
                    <div class="nav-link-icon"><i data-feather="package"></i></div>
                    Product list
                </a>
                <a class="nav-link" href="{% url 'adminarea:add_product' %}">
                    <div class="nav-link-icon"><i data-feather="plus-square"></i></div>
                    Add Product
                </a> -->
                <!-- <div class="sidenav-menu-heading">Transaction</div> -->
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                    data-target="#collapseTransaction" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="nav-link-icon"><i data-feather="users"></i></div>
                    Transactions
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseTransaction" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                        <a class="nav-link" href="{% url 'adminarea:transactions' %}">
                           Transactions
                        </a>
                        <a class="nav-link" href="{% url 'adminarea:addtransaction' %}">
                            Add Transaction
                        </a>
                        <a class="nav-link" href="{% url 'adminarea:aggtransactions' %}">
                            Transaction Agg
                        </a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
                    data-target="#collapseLayoutPrice" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="nav-link-icon"><i data-feather="settings"></i></div>
                    Settings
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayoutPrice" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                        <a class="nav-link" href="{% url 'adminarea:amounts' %}">
                            Package List
                        </a>
                        <a class="nav-link" href="{% url 'adminarea:add_amount' %}">
                            Set Package
                        </a>
                    </nav>
                </div>

                
                {{-- {% else %} --}}
                <div class="sidenav-menu-heading">Reseller Dashboard</div>
                <a class="nav-link" href="{% url 'adminarea:my_dashboard' %}">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    My Dashboard
                </a>
                <div class="sidenav-menu-heading">Customers</div>
                <a class="nav-link" href="{% url 'adminarea:my_customers' %}">
                    <div class="nav-link-icon"><i data-feather="users"></i></div>
                    My Customer list
                </a>
                <a class="nav-link" href="{% url 'adminarea:addcustomer' %}">
                    <div class="nav-link-icon"><i data-feather="user-plus"></i></div>
                    Add Customer
                </a>
                <a class="nav-link" href="{% url 'adminarea:comment' %}">
                    <div class="nav-link-icon"><i data-feather="message-square"></i></div>
                    Comment
                </a>
                <!-- <div class="sidenav-menu-heading">Products</div>
                <a class="nav-link" href="{% url 'adminarea:my_products' %}">
                    <div class="nav-link-icon"><i data-feather="package"></i></div>
                    Products
                </a>
                <a class="nav-link" href="#">
                    <div class="nav-link-icon"><i data-feather="key"></i></div>
                    Allocate Product
                </a> -->
                {{-- {% endif %} --}}
            </div>
        </div>
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">{{ Auth::user()->firstname }}</div>
            </div>
        </div>
    </nav>
</div>