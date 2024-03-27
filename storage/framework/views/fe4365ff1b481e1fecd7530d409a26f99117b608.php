<?php
    $title =''; $description = '';
    if(!empty($key)){
        $title = 'Search results for  '.$key;
    }else{
        if(empty($category)){
            $title = 'View all Listings';
        }else{
            $description = $category->description;
            $title = 'Listings in  '.$category->name;
        }
    }
?>

<?php if (isset($component)) { $__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597 = $component; } ?>
<?php $component = App\View\Components\HomeLayout::resolve(['title' => $title,'description' => $description] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\HomeLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if(!empty($key)): ?>
         <?php if (isset($component)) { $__componentOriginalfab99f1b1af92f2ae3b8d40bd2b476f8b331befa = $component; } ?>
<?php $component = App\View\Components\Common\Breadcrumb::resolve(['title' => 'Search results for  '.$key,'path' => 'All Listings','pathUrl' => url('all-listings?typ='.$typ)] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
    <?php else: ?>
        <?php if(empty($category)): ?>
            <?php if (isset($component)) { $__componentOriginalfab99f1b1af92f2ae3b8d40bd2b476f8b331befa = $component; } ?>
<?php $component = App\View\Components\Common\Breadcrumb::resolve(['title' => 'View all Listings','path' => '','pathUrl' => ''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
        <?php else: ?>
            <?php if (isset($component)) { $__componentOriginalfab99f1b1af92f2ae3b8d40bd2b476f8b331befa = $component; } ?>
<?php $component = App\View\Components\Common\Breadcrumb::resolve(['title' => 'Listings in  '.$category->name,'path' => 'All Listings','pathUrl' => url('all-listings?typ='.$typ)] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
        <?php endif; ?>
    <?php endif; ?>
   

    <div class="container-fluid business-listing">
        <div class="container">
            <div class="row">
                <?php if (isset($component)) { $__componentOriginala1689e377c93a8a79da884b7c4c88f2416587c9f = $component; } ?>
<?php $component = App\View\Components\Business\Filter::resolve(['rating' => $rating,'cat' => $cat,'typ' => $typ,'key' => $key] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('business.filter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Business\Filter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala1689e377c93a8a79da884b7c4c88f2416587c9f)): ?>
<?php $component = $__componentOriginala1689e377c93a8a79da884b7c4c88f2416587c9f; ?>
<?php unset($__componentOriginala1689e377c93a8a79da884b7c4c88f2416587c9f); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal494c250a7d6b52227b6f3af34bfc01dc209dc234 = $component; } ?>
<?php $component = App\View\Components\Business\ListView::resolve(['listings' => $listings,'typ' => $typ,'rating' => $rating,'key' => $key] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('business.list-view'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Business\ListView::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal494c250a7d6b52227b6f3af34bfc01dc209dc234)): ?>
<?php $component = $__componentOriginal494c250a7d6b52227b6f3af34bfc01dc209dc234; ?>
<?php unset($__componentOriginal494c250a7d6b52227b6f3af34bfc01dc209dc234); ?>
<?php endif; ?>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597)): ?>
<?php $component = $__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597; ?>
<?php unset($__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597); ?>
<?php endif; ?><?php /**PATH /home/customer/www/abhijeetm14.sg-host.com/public_html/resources/views/pages/view_all_listings.blade.php ENDPATH**/ ?>