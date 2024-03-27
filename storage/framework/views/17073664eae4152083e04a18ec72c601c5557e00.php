<div class="featured-listing container-fluid">
    <div class="container">
        <div class="section-title mb-3 row">
            <h2>Latest Listings</h2>
            <p>Take a look at the Newly Added Listings. Don’t  find What you looking for ? <a class="text-primary" href="<?php echo e(route('all-listings')); ?>">View All Listings</a>
        </div>
        <div class="featuredrow row">
            <?php if(!empty($listings)): ?> <?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6">
                <?php if (isset($component)) { $__componentOriginal6bf0db65f83b5abc42f92cc2d85541e5a3fb7375 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Card\GridCard::class, ['list' => $list,'footTyp' => 'user'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card.grid-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Card\GridCard::class))->getConstructor()): ?>
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
    </div>
</div><?php /**PATH /home/customer/www/abhijeetm14.sg-host.com/public_html/resources/views/components/home/latest-listings.blade.php ENDPATH**/ ?>