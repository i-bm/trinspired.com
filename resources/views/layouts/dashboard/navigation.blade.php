@include('pages.partials.top-header')

<!-- [ Sidebar Menu ] start -->
<div class="adminuiux-wrap">
    <div class="adminuiux-sidebar">
       <div class="adminuiux-sidebar-inner">
          <div class="px-3 not-iconic mt-3">
             <div class="row">
                <div class="col align-self-center">
                   <h6 class="fw-medium">Main Menu</h6>
                </div>
                <div class="col-auto"><a class="btn btn-link btn-square" data-bs-toggle="collapse" data-bs-target="#usersidebarprofile" aria-expanded="false" role="button" aria-controls="usersidebarprofile"><i data-feather="user"></i></a></div>
             </div>
             <div class="text-center collapse" id="usersidebarprofile">
                <figure class="avatar avatar-100 rounded-circle coverimg my-3"><img src="{{ asset('assets/img/modern-ai-image/user-6.jpg') }}" alt=""></figure>
                <h5 class="mb-1 fw-medium">{{ Str::title(Auth::user()->full_name) }}</h5>
                <p class="small">{{ Auth::user()->client_id }}</p>
             </div>
          </div>
          <ul class="nav flex-column menu-active-line">
             <li class="nav-item mb-2"><a href="{{ route('home') }}" class="nav-link"><i class="menu-icon bi bi-columns-gap"></i> <span class="menu-name">Dashboard</span></a></li>
             <li class="nav-item dropdown"><a href="javascrit:void(0)" class="nav-link dropdown-toggle"
               data-bs-toggle="dropdown"><i class="menu-icon bi bi-piggy-bank"></i> <span
                   class="menu-name">My Orders</span></a>
           <div class="dropdown-menu">
               <div class="nav-item"><a href="#" class="nav-link"><i
                           class="menu-icon bi bi-bank"></i> <span class="menu-name">Treasury Bills</span></a>
               </div>
               <div class="nav-item"><a href="#" class="nav-link"><i
                           class="menu-icon bi bi-cash-coin"></i> <span class="menu-name">Bonds</span></a></div>
               <div class="nav-item"><a href="#" class="nav-link"><i
                           class="menu-icon bi bi-percent"></i> <span class="menu-name">Stocks</span></a>
               </div>
           </div>
       </li>

       <li class="nav-item dropdown"><a href="javascrit:void(0)" class="nav-link dropdown-toggle"
         data-bs-toggle="dropdown"><i class="menu-icon bi bi-piggy-bank"></i> <span
             class="menu-name">My Statements</span></a>
     <div class="dropdown-menu">
         <div class="nav-item"><a href="#" class="nav-link"><i class="menu-icon bi bi-file-earmark-text"></i> <span class="menu-name">Portfolio Investment Statement</span></a>
         </div>
         <div class="nav-item"><a href="#" class="nav-link"><i class="menu-icon bi bi-file-earmark-text"></i> <span class="menu-name">Treasury Bills Statement</span></a></div>
         <div class="nav-item"><a href="#" class="nav-link"><i class="menu-icon bi bi-file-earmark-text"></i> <span class="menu-name">Bond Contract Note</span></a>
         </div>
         <div class="nav-item"><a href="#" class="nav-link"><i class="menu-icon bi bi-file-earmark-text"></i> <span class="menu-name">Bond Holdings</span></a>
      </div>
      <div class="nav-item"><a href="#" class="nav-link"><i class="menu-icon bi bi-file-earmark-text"></i> <span class="menu-name">Stock Contract Note</span></a>
      </div>
      <div class="nav-item"><a href="#" class="nav-link"><i class="menu-icon bi bi-file-earmark-text"></i> <span class="menu-name">Stock Holdings</span></a>
      </div>
      <div class="nav-item"><a href="#" class="nav-link"><i
         class="menu-icon bi bi-percent"></i> <span class="menu-name">Statement of Account</span></a>
      </div>
         </div>
 </li>

 <li class="nav-item"><a href="#" class="nav-link"><i
   class="menu-icon bi bi-calculator"></i> <span class="menu-name">Calculators</span></a></li>

   <li class="nav-item">
      <a href="{{ route('logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();" class="nav-link">
          <i class="menu-icon" data-feather="power"></i> <span class="menu-name">Logout</span>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
  </li> 
             {{-- <li class="nav-item"><a href="investment-wallet.html" class="nav-link"><i class="menu-icon bi bi-wallet"></i> <span class="menu-name">Wallet</span></a></li>
             <li class="nav-item"><a href="investment-goals.html" class="nav-link"><i class="menu-icon bi bi-bullseye"></i> <span class="menu-name">My Goals</span></a></li>
             <li class="nav-item">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="nav-link">
                    <i class="menu-icon" data-feather="power"></i> <span class="menu-name">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li> --}}
          </ul>
          <div class="mt-auto"></div>
        
          {{-- <div class="card nav-action-card bg-brand-color-4">
            <div class="card-body" style="background-image: url('../assets/images/layout/nav-card-bg.svg')">
                <h5 class="text-dark">Help Center</h5>
                <p class="text-dark text-opacity-75">Please contact us for more questions.</p>
                <a href="#" class="btn btn-primary" target="_blank">Go to help Center</a>
            </div>
        </div>
        
          <ul class="nav flex-column menu-active-line">
           
             <li class="nav-item"><a href="investment-settings.html" class="nav-link"><i class="menu-icon" data-feather="settings"></i> <span class="menu-name">Settings</span></a></li>
          </ul> --}}
       </div>
    </div>
 
    <!-- [ Sidebar Menu ] end -->
