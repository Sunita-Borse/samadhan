<section class="latest-blog container-fluid">
    <div class="container">
        <div class="section-title mb-3 row">
            <h2>News & Tips</h2>
            <p>Check out Latest article from Our Blog. Want to read more? <a class="text-primary" href="<?php echo e(route('view-blogs')); ?>">View All Blogs</a></p>
        </div>
        <div class="blogrow row">
            <?php if(!empty($latestBlog)): ?> <?php $__currentLoopData = $latestBlog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginal24e00db8951525db6a26e481c4c4a65d55480f62 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Card\BlogCard::class, ['blog' => $b] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card.blog-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Card\BlogCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal24e00db8951525db6a26e481c4c4a65d55480f62)): ?>
<?php $component = $__componentOriginal24e00db8951525db6a26e481c4c4a65d55480f62; ?>
<?php unset($__componentOriginal24e00db8951525db6a26e481c4c4a65d55480f62); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
        </div>
    </div>
</section><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/php-scripts/smart-directory/resources/views/components/home/latest-blog.blade.php ENDPATH**/ ?>