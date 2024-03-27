<?php if (isset($component)) { $__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597 = $component; } ?>
<?php $component = App\View\Components\HomeLayout::resolve(['title' => $list->business_name,'description' => $list->description,'meta' => '','image' => $list->resize] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\HomeLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginalfab99f1b1af92f2ae3b8d40bd2b476f8b331befa = $component; } ?>
<?php $component = App\View\Components\Common\Breadcrumb::resolve(['title' => $list->business_name,'path' => 'Listings','pathUrl' => route('all-listings')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
    <div class="container-fluid single-container">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if (isset($component)) { $__componentOriginal715cfe2258e74f925185c1d2c77e6e31aaddf9ff = $component; } ?>
<?php $component = App\View\Components\Business\Details::resolve(['list' => $list] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('business.details'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Business\Details::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal715cfe2258e74f925185c1d2c77e6e31aaddf9ff)): ?>
<?php $component = $__componentOriginal715cfe2258e74f925185c1d2c77e6e31aaddf9ff; ?>
<?php unset($__componentOriginal715cfe2258e74f925185c1d2c77e6e31aaddf9ff); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal1afca6c144e27046b5df6fdb3dfaafd3bf47cf08 = $component; } ?>
<?php $component = App\View\Components\Business\Overview::resolve(['bname' => $list->business_name,'bid' => $list->id] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('business.overview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Business\Overview::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1afca6c144e27046b5df6fdb3dfaafd3bf47cf08)): ?>
<?php $component = $__componentOriginal1afca6c144e27046b5df6fdb3dfaafd3bf47cf08; ?>
<?php unset($__componentOriginal1afca6c144e27046b5df6fdb3dfaafd3bf47cf08); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalf92ebc19ee598b763a549718f769e4d8793fcde8 = $component; } ?>
<?php $component = App\View\Components\Business\Services::resolve(['bid' => $list->id] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('business.services'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Business\Services::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf92ebc19ee598b763a549718f769e4d8793fcde8)): ?>
<?php $component = $__componentOriginalf92ebc19ee598b763a549718f769e4d8793fcde8; ?>
<?php unset($__componentOriginalf92ebc19ee598b763a549718f769e4d8793fcde8); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal5723ff915e8dd7874dffd6b6e0f47d076102cabc = $component; } ?>
<?php $component = App\View\Components\Business\Products::resolve(['bid' => $list->id] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('business.products'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Business\Products::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5723ff915e8dd7874dffd6b6e0f47d076102cabc)): ?>
<?php $component = $__componentOriginal5723ff915e8dd7874dffd6b6e0f47d076102cabc; ?>
<?php unset($__componentOriginal5723ff915e8dd7874dffd6b6e0f47d076102cabc); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal96cf3c57f92d49d4bbf23841f6427b3b69164e3e = $component; } ?>
<?php $component = App\View\Components\Business\Gallery::resolve(['bid' => $list->id] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('business.gallery'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Business\Gallery::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal96cf3c57f92d49d4bbf23841f6427b3b69164e3e)): ?>
<?php $component = $__componentOriginal96cf3c57f92d49d4bbf23841f6427b3b69164e3e; ?>
<?php unset($__componentOriginal96cf3c57f92d49d4bbf23841f6427b3b69164e3e); ?>
<?php endif; ?>
                    <?php if($isreview): ?>
                        <?php if (isset($component)) { $__componentOriginal2374b6f64b88df8ffb1cd45043790cd72bffb379 = $component; } ?>
<?php $component = App\View\Components\Business\Review::resolve(['bid' => $list->id] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('business.review'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Business\Review::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2374b6f64b88df8ffb1cd45043790cd72bffb379)): ?>
<?php $component = $__componentOriginal2374b6f64b88df8ffb1cd45043790cd72bffb379; ?>
<?php unset($__componentOriginal2374b6f64b88df8ffb1cd45043790cd72bffb379); ?>
<?php endif; ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4 sidecl">
                    <?php if (isset($component)) { $__componentOriginal2f61cd401155e7df68ce6bf8bbe46b4eb5d852af = $component; } ?>
<?php $component = App\View\Components\Business\Postedby::resolve(['user' => $list->user] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('business.postedby'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Business\Postedby::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f61cd401155e7df68ce6bf8bbe46b4eb5d852af)): ?>
<?php $component = $__componentOriginal2f61cd401155e7df68ce6bf8bbe46b4eb5d852af; ?>
<?php unset($__componentOriginal2f61cd401155e7df68ce6bf8bbe46b4eb5d852af); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalfbfe55c0b1afb1c0938f51ae456b85368eeaef4c = $component; } ?>
<?php $component = App\View\Components\Business\Location::resolve(['address' => $list->address,'bid' => $list->id] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('business.location'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Business\Location::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfbfe55c0b1afb1c0938f51ae456b85368eeaef4c)): ?>
<?php $component = $__componentOriginalfbfe55c0b1afb1c0938f51ae456b85368eeaef4c; ?>
<?php unset($__componentOriginalfbfe55c0b1afb1c0938f51ae456b85368eeaef4c); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal117ca4cb8861c80133aa51f0cb1f74c898927324 = $component; } ?>
<?php $component = App\View\Components\Business\ContactForm::resolve(['bid' => $list->id,'uid' => $list->user_id] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('business.contact-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Business\ContactForm::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal117ca4cb8861c80133aa51f0cb1f74c898927324)): ?>
<?php $component = $__componentOriginal117ca4cb8861c80133aa51f0cb1f74c898927324; ?>
<?php unset($__componentOriginal117ca4cb8861c80133aa51f0cb1f74c898927324); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal11f4e44faf5d8f74c0c6fcf951014ba02bd6cca6 = $component; } ?>
<?php $component = App\View\Components\Business\SocialLink::resolve(['bid' => $list->id] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('business.social-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Business\SocialLink::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11f4e44faf5d8f74c0c6fcf951014ba02bd6cca6)): ?>
<?php $component = $__componentOriginal11f4e44faf5d8f74c0c6fcf951014ba02bd6cca6; ?>
<?php unset($__componentOriginal11f4e44faf5d8f74c0c6fcf951014ba02bd6cca6); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalb4f2ee6bdb06f59dd61bf526dbdc399fd432b9de = $component; } ?>
<?php $component = App\View\Components\Business\Category::resolve(['cat' => $list->selected] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('business.category'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Business\Category::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4f2ee6bdb06f59dd61bf526dbdc399fd432b9de)): ?>
<?php $component = $__componentOriginalb4f2ee6bdb06f59dd61bf526dbdc399fd432b9de; ?>
<?php unset($__componentOriginalb4f2ee6bdb06f59dd61bf526dbdc399fd432b9de); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalf7ad5afbb5144b2347e279ec8b0198926e5a0f90 = $component; } ?>
<?php $component = App\View\Components\Business\Timing::resolve(['bid' => $list->id] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('business.timing'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Business\Timing::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf7ad5afbb5144b2347e279ec8b0198926e5a0f90)): ?>
<?php $component = $__componentOriginalf7ad5afbb5144b2347e279ec8b0198926e5a0f90; ?>
<?php unset($__componentOriginalf7ad5afbb5144b2347e279ec8b0198926e5a0f90); ?>
<?php endif; ?>
                   
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597)): ?>
<?php $component = $__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597; ?>
<?php unset($__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597); ?>
<?php endif; ?><?php /**PATH /home/customer/www/abhijeetm14.sg-host.com/public_html/resources/views/pages/view_single_business.blade.php ENDPATH**/ ?>