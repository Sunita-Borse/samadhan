<?php if (isset($component)) { $__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\HomeLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\HomeLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginalfab99f1b1af92f2ae3b8d40bd2b476f8b331befa = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Common\Breadcrumb::class, ['title' => 'Add Payment','path' => 'Choos Package','pathUrl' => url('choos-package')] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Common\Breadcrumb::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfab99f1b1af92f2ae3b8d40bd2b476f8b331befa)): ?>
<?php $component = $__componentOriginalfab99f1b1af92f2ae3b8d40bd2b476f8b331befa; ?>
<?php unset($__componentOriginalfab99f1b1af92f2ae3b8d40bd2b476f8b331befa); ?>
<?php endif; ?>
    <div class="container-fluid featured-category">
        <div class="container">
            <div class="row fcatrow auth-container pt-5 pb-5">
                <div class="col-lg-6 col-md-10 mx-auto shadow authcard">

                    <?php if(\Session::has('error')): ?>
                        <div class="alert alert-danger"><?php echo e(\Session::get('error')); ?></div>
                        <?php echo e(\Session::forget('error')); ?>

                    <?php endif; ?>
                    <?php if(\Session::has('success')): ?>
                        <div class="alert alert-success"><?php echo e(\Session::get('success')); ?></div>
                        <?php echo e(\Session::forget('success')); ?>

                    <?php endif; ?>
                    
                    <div class="row form-row">
                        <div class="col-md-4">
                            <label for="">Package Name</label>
                            <span class="spcol">:</span>
                        </div>
                        <div class="col-md-8">
                           <label for=""><?php echo e($pack->name); ?></label> 
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-4">
                            <label for="">Package Price</label>
                            <span class="spcol">:</span>
                        </div>
                        <div class="col-md-8">
                            <label for=""><?php echo e(currency()); ?><?php echo e($pack->price); ?></label> 
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-4">
                            <label for="">Package Validity</label>
                            <span class="spcol">:</span>
                        </div>
                        <div class="col-md-8">
                             <label for=""><?php echo e($pack->validity); ?> Months</label> 
                        </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-4">
                           
                        </div>
                        <div class="col-md-8">
                            <?php $__empty_1 = true; $__currentLoopData = $paymentGateway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <?php if($pg->slug == 'razorpay'): ?>
                                    <button class="btn btn-primary p-1 px-3 ms-2">
                                        <form action="<?php echo e(route('razorpay/payment')); ?>" method="POST" >
                                            <?php echo csrf_field(); ?>
                                            <script src="https://checkout.razorpay.com/v1/checkout.js"
                                                    data-key="<?php echo e($pg->key); ?>"
                                                    data-amount="<?php echo e($pack->price * 100); ?>"
                                                    data-buttontext="Pay with Razorpay"
                                                    data-name="<?php echo e($siteinfo->title); ?>"
                                                    data-description="<?php echo e($siteinfo->description); ?>"
                                                    data-image="<?php echo e($fav); ?>"
                                                    data-prefill.name="name"
                                                    data-prefill.email="email"
                                                    data-theme.class="btn"
                                                    data-theme.color="#263da6">
                                            </script>
                                            <input type="hidden" name="pid" value="<?php echo e($pack->id); ?>">
                                            <input type="hidden" name="uid" value="<?php echo e($uid); ?>">
                                            <input type="hidden" name="amount" value="<?php echo e($pack->price); ?>">
                                        </form>
                                    </button>
                                <?php else: ?>
                                    <a href="<?php echo e(route($pg->slug)); ?>">
                                        <button class="btn btn-primary">Pay with <?php echo e($pg->name); ?></button>   
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                 
                            <?php endif; ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597)): ?>
<?php $component = $__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597; ?>
<?php unset($__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597); ?>
<?php endif; ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/php-scripts/smart-directory/resources/views/purchase/payment.blade.php ENDPATH**/ ?>