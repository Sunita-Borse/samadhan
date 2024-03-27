<div class="slider-contaienr container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 searchcol">
                <h1>What you are Looking For</h1>
                <p>Explore  top-rated attractions, activities and more...</p>

                <form action="search_with_cat_loc" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="search-box-card no-margin row">
                        <div class="col-md-3 no-padding">
                            <select name="location" id="" class="form-control selcmk">
                                <option value="">Select Location</option>
                                <?php if(!empty($locations)): ?> <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($loc->id); ?>" <?php if($loc->id == $location_id): ?> selected <?php endif; ?> ><?php echo e($loc->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
                            </select>
                        </div>
                        <div class="col-md-3 no-padding">
                            <select name="cat" id="" class="form-control selcmk">
                                <option value="">Select Category</option>
                                <?php if(!empty($category)): ?> <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
                            </select>
                        </div>
                        <div class="col-md-6 no-padding">
                            <div class="input-group">
                                <input type="text" class="form-control" name="key" placeholder="Search Shops, Services, etc..." aria-label="Search Shops, Services, etc..." aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="input-group-text btn-primary" id="basic-addon2"><i class="fas fa-search"></i> Search</button>
                                </div>
                                </div>
                        </div>
                    </div>
                </form>

                <ul>
                    <li> Popular : </li>
                    <?php if(!empty($category)): ?> <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($loop->index <= 4): ?>
                            <li><a href="<?php echo e(route('cat', $cat->url)); ?>"><?php echo e($cat->name); ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
                </ul>
            </div>
            <div class="col-lg-5 d-none d-lg-block img-col">
                <img src="<?php echo e(asset('assets/images/banner.png')); ?>" alt="">
            </div>
        </div>
       
    </div>
</div><?php /**PATH /home/customer/www/abhijeetm14.sg-host.com/public_html/resources/views/components/home/slider.blade.php ENDPATH**/ ?>