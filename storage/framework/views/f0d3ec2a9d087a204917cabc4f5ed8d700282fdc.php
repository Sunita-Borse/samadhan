<section class="container-fluid featured-category">
    <div class="container">
        <div class="section-title mb-3 row">
            <h2>Featured Category</h2>
            <p>Take a look at the Featured Category. Don’t  find What you looking for ? <a class="text-primary" href="<?php echo e(route('all-categories')); ?>">View All Category</a>
        </div>
        <div class="fcatrow row">
            <?php if(!empty($featuredCategory)): ?> <?php $__currentLoopData = $featuredCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <?php if (isset($component)) { $__componentOriginal203df9247ebb0aa4d0451d53603807921eac806d = $component; } ?>
<?php $component = App\View\Components\Card\Category::resolve(['category' => $fc] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card.category'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Card\Category::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal203df9247ebb0aa4d0451d53603807921eac806d)): ?>
<?php $component = $__componentOriginal203df9247ebb0aa4d0451d53603807921eac806d; ?>
<?php unset($__componentOriginal203df9247ebb0aa4d0451d53603807921eac806d); ?>
<?php endif; ?>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
        </div>
       
    </div>
</section><?php /**PATH /home/customer/www/app.samadhanlegal.com/public_html/resources/views/components/home/featured-category.blade.php ENDPATH**/ ?>