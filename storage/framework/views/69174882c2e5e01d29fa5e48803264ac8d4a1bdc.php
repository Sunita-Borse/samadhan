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

                
                    <div class="alert alert-success">Paymnt Recieved Sucessfully!</div>
                       
                    
                    <div class="row form-row">
                        <div class="col-md-4">
                            <label for="">Package Name</label>
                            <span class="spcol">:</span>
                        </div>
                        <div class="col-md-8">
                           <label for=""><?php echo e($transaction->package->name); ?></label> 
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-4">
                            <label for="">Package Price</label>
                            <span class="spcol">:</span>
                        </div>
                        <div class="col-md-8">
                            <label for=""><?php echo e(currency()); ?><?php echo e($transaction->amount); ?></label> 
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-4">
                            <label for="">Package Validity</label>
                            <span class="spcol">:</span>
                        </div>
                        <div class="col-md-8">
                             <label for=""><?php echo e($transaction->package->validity); ?> Months</label> 
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-4">
                            <label for="">Status</label>
                            <span class="spcol">:</span>
                        </div>
                        <div class="col-md-8">
                             <label class="text-success for="">Success</label> 
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-4">
                            <label for="">Transaction ID</label>
                            <span class="spcol">:</span>
                        </div>
                        <div class="col-md-8">
                             <label for=""><?php echo e($transaction->payment_id); ?></label> 
                        </div>
                    </div>

                    <div class="row form-row">
                      
                        <div class="col-md-12 justify-content-around d-flex">
                            <a href="<?php echo e(route('listing.create')); ?>">
                               <button class="btn ps-5 pe-5 btn-primary">Add New Listing   </button> 
                            </a>
                            <a href="<?php echo e(route('user-dashboard')); ?>">
                               <button class="btn ps-5 pe-5 btn-primary">Go to Dashboard </button> 
                            </a>
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
<?php endif; ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/php-scripts/smart-directory/resources/views/purchase/success.blade.php ENDPATH**/ ?>