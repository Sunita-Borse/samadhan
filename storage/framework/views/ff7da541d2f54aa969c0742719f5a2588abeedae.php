<header>
         <div class="container head-container">
            <div class="row">
               <div  class="col-lg-3 col-md-4 logo">
                 <a href="<?php echo e(url('/')); ?>" class="cp">
                    <?php if(!empty($logo)): ?>
                        <img src="<?php echo e($logo); ?>" alt="">
                    <?php else: ?>
                        <img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="">
                    <?php endif; ?>
                  </a> 
                  <a class="d-md-none small-menu" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <i class="bi bi-list"></i>
                  </a>

                  <?php if (isset($component)) { $__componentOriginalc0876081435ec6098f443b8690e805ee65288402 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Common\MobileMenu::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.mobile-menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Common\MobileMenu::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc0876081435ec6098f443b8690e805ee65288402)): ?>
<?php $component = $__componentOriginalc0876081435ec6098f443b8690e805ee65288402; ?>
<?php unset($__componentOriginalc0876081435ec6098f443b8690e805ee65288402); ?>
<?php endif; ?>

               </div>
               
               <div  class="col-lg-5 d-none d-lg-block col-md-8 search">
                  <div class="search-row row no-margin">
                     <div x-data="" class="col-md-4 no-padding">
                        <form id="location" action="<?php echo e(route('set-location')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                           <select @change="handleChange" onchange="change_city()" required name="location" id="bb" class="form-control rounded-start">
                              <option value="">All Cities</option>
                              <?php if(!empty($locations)): ?> <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($loc->id); ?>" <?php if($loc->id == $location_id): ?> selected <?php endif; ?> ><?php echo e($loc->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
                           </select>
                        </form>   
                     </div>
                     <form class="display-contents" action="<?php echo e(url('search_listings')); ?>" method="post">
                     <?php echo csrf_field(); ?>
                        <div class="col-md-7 no-padding">
                           <input type="text" name="key" value="<?php echo e($search); ?>" required placeholder="Search Business" class="form-control ">
                        </div>
                        <div class="col-md-1  no-padding">
                           <button type="submit" class="btn rounded-end btn-primary"><i class="bi bi-search"></i></button>
                        </div>
                     </form>
                  </div>
               </div>

               <?php if(Auth::check()): ?>
                  <div class="col-lg-4 col-md-8 slink  d-none d-md-block  login-options right">
                     <div class="dropdown">
                        <a class=" dropdown-toggle" href="#"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <img src="<?php echo e(Auth::user()->resize); ?>" alt="">
                        <span class="d-none d-lg-block"><?php echo e(Auth::user()->name); ?></span> 
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                           <a class="dropdown-item" href="<?php echo e(route('user-dashboard')); ?>"><i class="bi bi-speedometer2"></i> Dashboard</a>
                           <a class="dropdown-item" href="<?php echo e(route('user-settings')); ?>"><i class="bi bi-gear"></i> Settings</a>
                           <a class="dropdown-item" href="<?php echo e(route('listing.create')); ?>"><i class="bi bi-plus-square"></i> New Listing</a>
                           <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>
                                <a class="dropdown-item" href="" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                   <i class="bi bi-box-arrow-in-left"></i> Logout
                                </a>
                            </form>
                        </div>
                     </div>
                  </div>
               <?php else: ?>
                  <div class="col-lg-4 col-md-8 slink  d-none d-md-block  right">
                     <ul class="float-end">
                        <li class="me-3"><a href="<?php echo e(route('listing.create')); ?>"><button type="button" class="btn btn-outline-primary">Add Business</button></a></li>
                        <li ><a href="<?php echo e(route('login')); ?>"><button class="btn btn-primary ">Log In / Sign Up</button></a></li>
                     </ul>
                  </div>
               <?php endif; ?>
            </div>
         </div>
      </header>


<?php if (! $__env->hasRenderedOnce('2fdc44bc-f63f-4011-9e44-7f2295aa55ef')): $__env->markAsRenderedOnce('2fdc44bc-f63f-4011-9e44-7f2295aa55ef');
$__env->startPush('scripts'); ?>
   <script>
         function handleChange(){
            document.getElementById("location").submit();
         }
   </script>
<?php $__env->stopPush(); endif; ?>

      <?php /**PATH /home/customer/www/abhijeetm14.sg-host.com/public_html/resources/views/components/common/header.blade.php ENDPATH**/ ?>