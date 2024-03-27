<?php if (isset($component)) { $__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597 = $component; } ?>
<?php $component = App\View\Components\HomeLayout::resolve(['title' => 'View All Category'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\HomeLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginalfab99f1b1af92f2ae3b8d40bd2b476f8b331befa = $component; } ?>
<?php $component = App\View\Components\Common\Breadcrumb::resolve(['title' => 'View all Category','path' => '','pathUrl' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Common\Breadcrumb::class))->getConstructor()): ?>
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
            <div class="row fcatrow">
                <?php if($category): ?> <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal203df9247ebb0aa4d0451d53603807921eac806d = $component; } ?>
<?php $component = App\View\Components\Card\Category::resolve(['category' => $c] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597)): ?>
<?php $component = $__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597; ?>
<?php unset($__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597); ?>
<?php endif; ?><?php /**PATH /home/customer/www/app.samadhanlegal.com/public_html/resources/views/pages/view_all_category.blade.php ENDPATH**/ ?>