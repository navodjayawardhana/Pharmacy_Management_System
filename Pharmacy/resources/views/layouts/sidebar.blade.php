<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  

  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
    <div class="sidebar-brand-text mx-3">{{ auth()->user()->type }} Page</div>
  </a>
  

  <hr class="sidebar-divider my-0">
  
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  
  @if(auth()->user()->type !== 'manager')
  <li class="nav-item">
    <a class="nav-link" href="{{ route('products') }}">
    <i class="fas fa-capsules "></i>
      <span>Product</span></a>
  </li>
  @endif

  @if(auth()->user()->type !== 'cashier')
  <li class="nav-item">
    <a class="nav-link" href="{{ route('customers') }}">
    <i class="fas fa-user fa-tachometer-alt"></i>
      <span>Customer</span></a>
  </li>
  @endif
  @if(auth()->user()->type !== 'cashier' && auth()->user()->type !== 'manager')
  <li class="nav-item">
    <a class="nav-link" href="/user">
      <span>User</span></a>
  </li>
  @endif
  
  <li class="nav-item">
    <a class="nav-link" href="/profile">
      <span>Profile</span></a>
  </li>

  
  <hr class="sidebar-divider d-none d-md-block">
  <li class="nav-item">
  <a class="nav-link" href="{{ route('logout') }}">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          <span>Logout</span>
  </a>
  </li>
  
  
  
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
</ul>