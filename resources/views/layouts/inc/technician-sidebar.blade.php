<link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">



        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('technician.dashboard') }}"><span class="menu-title">Dashboard</span><i class="mdi mdi-home menu-icon"></i></a></li>
               
                 
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('technicians.index') }}">
                            <span class="menu-title">Technicians</span>
                            <i class="mdi mdi-wrench menu-icon"></i>
                        </a>
                    </li>
                  
                  
               
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('jobBids.index') }}">
                            <span class="menu-title">Job Bids</span>
                            <i class="mdi mdi-gavel menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('escrowPayments.index') }}">
                            <span class="menu-title">Escrow Payments</span>
                            <i class="mdi mdi-cash-multiple menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="{{ route('payments.index') }}">
                            <span class="menu-title">Payments</span>
                            <i class="mdi mdi-credit-card menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reviews.index') }}">
                            <span class="menu-title">Reviews</span>
                            <i class="mdi mdi-star menu-icon"></i>
                        </a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacts.index') }}">
                            <span class="menu-title">Contacts</span>
                            <i class="mdi mdi-email menu-icon"></i>
                        </a>
                    </li>
                  
                </ul>
                
                <!-- Add more items -->
            </ul>
        </nav>
