<div class="offcanvas home-mobile-menu offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
    <h4>Welcome, Guest</h4>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo e(route('/')); ?>"><i class="bi bi-house-door"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo e(route('listing.create')); ?>"><i class="bi bi-plus-square"></i> Add Business</a>
            </li>
            <?php if(Auth::check()): ?>
            <li class="nav-item">
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <a class="dropdown-item" href="" onclick="event.preventDefault();
                            this.closest('form').submit();">
                        <i class="bi bi-box-arrow-in-left"></i> Logout
                    </a>
                </form>
            </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><i class="bi bi-unlock"></i> Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{ route('registration') }}"><i class="bi bi-person-plus"></i> Sign Up</a>
                </li>
            <?php endif; ?>
        </ul> 
        <div class="search-cover p-3">
            <p><b>Search :</b> </p>
            <select onchange="change_city()" required name="city" id="bb" class="form-control rounded-start">
                <option value="">All Cities</option>
            </select>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Business, Services" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text btn-primary" id="basic-addon2">Search</span>
            </div>
        </div>              
   

    </div>
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/php-scripts/smart-directory/resources/views/components/common/mobile-menu.blade.php ENDPATH**/ ?>