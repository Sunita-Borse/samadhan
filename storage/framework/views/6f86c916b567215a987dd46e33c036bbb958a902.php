<div class="col-lg-9 col-md-8">
    <div class="sort-control mb-4 row">
        <div class="col-6">
            <p class="pt-2">Showing <b> 1 - 
                                <?php if($listings->perPage() <= $listings->total()): ?>
                                    <?php echo e($listings->perPage()); ?>  
                                <?php else: ?> 
                                    <?php echo e($listings->total()); ?>

                                <?php endif; ?> of <?php echo e($listings->total()); ?> results</b></p> 
        </div>
        <div class="col-6">
            <ul>
                <a href="<?php echo e(url($curl)); ?>?rating=<?php echo e($rating); ?>&typ=list&key=<?php echo e($key); ?>">
                    <li <?php if($typ != 'grid'): ?> class="border-primary" <?php endif; ?>><i class="bi text-primary bi-list-ul"></i></li>
                </a>
                <a href="<?php echo e(url($curl)); ?>?rating=<?php echo e($rating); ?>&typ=grid&key=<?php echo e($key); ?>">
                    <li <?php if($typ == 'grid'): ?> class="border-primary" <?php endif; ?> class="ms-2"><i class="bi bi-grid"></i></li>
                </a>
               
            </ul>  
        </div>
    </div>

    
        <?php if($typ == 'grid'): ?>
        <div class="featuredrow listgrid row">
                <?php if(!empty($listings)): ?> <?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 ">
                        <?php if (isset($component)) { $__componentOriginal6bf0db65f83b5abc42f92cc2d85541e5a3fb7375 = $component; } ?>
<?php $component = App\View\Components\Card\GridCard::resolve(['list' => $list,'footTyp' => 'review'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card.grid-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card\GridCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6bf0db65f83b5abc42f92cc2d85541e5a3fb7375)): ?>
<?php $component = $__componentOriginal6bf0db65f83b5abc42f92cc2d85541e5a3fb7375; ?>
<?php unset($__componentOriginal6bf0db65f83b5abc42f92cc2d85541e5a3fb7375); ?>
<?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
        </div>
        <?php else: ?>
            <?php if(!empty($listings)): ?> <?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginald23307d10d89ef74124c00a0dba692358409ed78 = $component; } ?>
<?php $component = App\View\Components\Card\ListCard::resolve(['list' => $list] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card.list-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card\ListCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald23307d10d89ef74124c00a0dba692358409ed78)): ?>
<?php $component = $__componentOriginald23307d10d89ef74124c00a0dba692358409ed78; ?>
<?php unset($__componentOriginald23307d10d89ef74124c00a0dba692358409ed78); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
        <?php endif; ?>
   

    <div class="pagination listng-pagination row ">
        <nav>
            <?php echo e($listings->onEachSide(5)->links()); ?>

        </nav>
    </div>
</div><?php /**PATH /home/customer/www/app.samadhanlegal.com/public_html/resources/views/components/business/list-view.blade.php ENDPATH**/ ?>