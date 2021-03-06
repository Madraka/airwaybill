<aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="{{ route('dashboard') }}" class="brand-link text-center">
          <img src="{{ asset('/assets/images/settings/'. $sitesetting->company_logo) }}" alt="Logo" class="brand-image">
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
                    <!-- Sidebar Menu -->
          <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item">
                         <a href="{{ route('dashboard') }}" class="nav-link active">
                              <i class="nav-icon fas fa-tachometer-alt"></i>
                              <p>Dashboard</p>
                         </a>
                    </li>
                    <li class="nav-item">
                         <a href="{{ route('shipments') }}" class="nav-link">
                         <i class="fas fa-shipping-fast"></i>
                              <p>Shipments</p>
                         </a>
                    </li>
                    <li class="nav-item">
                         <a href="{{ route('manifests') }}" class="nav-link">
                         <i class="fas fa-shipping-fast"></i>
                              <p>Manifests</p>
                         </a>
                    </li>
                    <li class="nav-item">
                         <a href="{{ route('services') }}" class="nav-link">
                         <i class="fas fa-shipping-fast"></i>
                              <p>Services</p>
                         </a>
                    </li>
                    {{-- <li class="nav-item">
                         <a href="/admin/awb" class="nav-link">
                         <i class="fas fa-shipping-fast"></i>
                              <p>Create Awb</p>
                         </a>
                    </li> --}}
                    <li class="nav-item">
                         <a href="{{ route('countries') }}" class="nav-link">
                         <i class="fas fa-shipping-fast"></i>
                              <p>Countries</p>
                         </a>
                    </li>

 
                   @if(Auth::user()->role_id == 1)
                    <li class="nav-item">
                         <a href="{{ route('users') }}" class="nav-link">
                         <i class="fas fa-users"></i>
                              <p>Users</p>
                              <span class="badge badge-info right">2</span>
                         </a>
                    </li>
                    <li class="nav-item">
                         <a href="{{ route('customers') }}" class="nav-link">
                         <i class="fas fa-users"></i>
                              <p>Customers</p>
                         </a>
                    </li>
                   @endif
                   <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                         <i class="fas fa-plane-departure"></i>
                         <p>
                              Website CMS
                              <i class="fas fa-angle-left right"></i>    
                         </p>
                    </a>
                    <ul class="nav nav-treeview">
                         <li class="nav-item">
                              <a href="{{ route('admin.sliders') }}" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Slider</p>
                              </a>
                         </li>
                         <li class="nav-item">
                              <a href="{{ route('admin.welcomesection') }}" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Welcome Section</p>
                              </a>
                         </li>
                         <li class="nav-item">
                              <a href="{{ route('admin.ourserviceSection') }}" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Our Service Section</p>
                              </a>
                         </li>
                         <li class="nav-item">
                              <a href="{{ route('admin.cmsservices') }}" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Services</p>
                              </a>
                         </li>
                         <li class="nav-item">
                              <a href="{{ route('admin.pages') }}" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Pages</p>
                              </a>
                         </li>
                    </ul>
               </li>
                    <li class="nav-header">Settings</li>
                    <li class="nav-item">
                         <a href="{{ route('settings') }}" class="nav-link">
                         <i class="fas fa-cogs"></i>
                              <p>Settings</p>
                         </a>
                    </li>
               </ul>
               <a href="{{ route('user.profile') }}" class="dropdown-item">
                    <i class="far fa-id-badge mr-2"></i> Profile
               </a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt mr-2"></i>
                    {{ __('Logout') }}
               </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
               </form>
          </nav>
          <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
</aside>