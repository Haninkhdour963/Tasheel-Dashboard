<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <!-- Dashboard -->
                <a class="nav-link" href="{{url('admin/dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <!-- Category Section -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCategory" aria-labelledby="headingCategory" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('admin/add-category')}}">Add Category</a>
                        <a class="nav-link" href="{{url('admin/category')}}">View Category</a>
                    </nav>
                </div>

                <!-- Posts Section -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts" aria-expanded="false" aria-controls="collapsePosts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Posts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePosts" aria-labelledby="headingPosts" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('admin/add-post')}}">Add Post</a>
                        <a class="nav-link" href="{{url('admin/posts')}}">View Post</a>
                    </nav>
                </div>

                <!-- Dispute Section -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDispute" aria-expanded="false" aria-controls="collapseDispute">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Dispute
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseDispute" aria-labelledby="headingDispute" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('admin/add-dispute')}}">Add Dispute</a>
                        <a class="nav-link" href="{{url('admin/dispute')}}">View Dispute</a>
                    </nav>
                </div>

                <!-- Escrow Payment Section -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseEscrowPayment" aria-expanded="false" aria-controls="collapseEscrowPayment">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Escrow Payment
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseEscrowPayment" aria-labelledby="headingEscrowPayment" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('admin/add-escrow-payment')}}">Add Escrow Payment</a>
                        <a class="nav-link" href="{{url('admin/escrowPayments')}}">View Escrow Payment</a>
                    </nav>
                </div>
                <!-- Job Bids Section -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseJobBids" aria-expanded="false" aria-controls="collapseJobBids">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Job Bids
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseJobBids" aria-labelledby="headingJobBids" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('admin/add-job-bid') }}">Add Job Bid</a>
                        <a class="nav-link" href="{{ url('admin/job-bids') }}">View Job Bids</a>
                    </nav>
                </div>

                <!-- Job Postings Section -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseJobPostings" aria-expanded="false" aria-controls="collapseJobPostings">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Job Postings
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseJobPostings" aria-labelledby="headingJobPostings" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('admin/add-jobPosting')}}">Add Job Posting</a>
                        <a class="nav-link" href="{{url('admin/jobPosting')}}">View Job Postings</a>
                    </nav>
                </div>

                <!-- Reviews Section -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseReviews" aria-expanded="false" aria-controls="collapseReviews">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Reviews
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseReviews" aria-labelledby="headingReviews" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
{{--                        <a class="nav-link" href="{{url('admin/add-review')}}">Add Review</a>--}}
                        <a class="nav-link" href="{{url('admin/reviews')}}">View Reviews</a>
                    </nav>
                </div>

                <!-- Technician Profiles Section -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTechnicianProfiles" aria-expanded="false" aria-controls="collapseTechnicianProfiles">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Technician Profiles
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseTechnicianProfiles" aria-labelledby="headingTechnicianProfiles" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('admin/add-technician_profile')}}">Add Technician Profile</a>
                        <a class="nav-link" href="{{url('admin/technician_profiles')}}">View Technician Profiles</a>
                    </nav>
                </div>

                <!-- Contacts Section -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseContacts" aria-expanded="false" aria-controls="collapseContacts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Contacts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseContacts" aria-labelledby="headingContacts" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('admin/contacts')}}">View Contacts</a>
                    </nav>
                </div>

                <!-- Users -->
                <a class="nav-link" href="{{url('admin/users')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Users
                </a>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
