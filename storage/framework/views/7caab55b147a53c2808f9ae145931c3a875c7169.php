<section class="container-fluid featured-city">
    <div class="container">
        <div class="section-title mb-3 row">
            <h2>Explore Hot Locations</h2>
            <p>  Don’t  find What you looking for ? <a class="text-primary" href="<?php echo e(route('all-cities')); ?>">View All Cities</a>
        </div>
        <div class="row cityrow">

            <?php if($featured_city): ?> <?php $__currentLoopData = $featured_city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginal31c4ca9c27db74b213eafeca58435f6773df619e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Card\CityCard::class, ['city' => $fc] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card.city-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Card\CityCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal31c4ca9c27db74b213eafeca58435f6773df619e)): ?>
<?php $component = $__componentOriginal31c4ca9c27db74b213eafeca58435f6773df619e; ?>
<?php unset($__componentOriginal31c4ca9c27db74b213eafeca58435f6773df619e); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>

        </div>
         
    </div>
</section><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/php-scripts/smart-directory/resources/views/components/home/featured-city.blade.php ENDPATH**/ ?>