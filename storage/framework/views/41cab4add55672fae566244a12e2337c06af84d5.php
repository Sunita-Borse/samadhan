<?php if (isset($component)) { $__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\HomeLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\HomeLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php if (isset($component)) { $__componentOriginal1915e22340e1514efa05d793036010fcc327ba13 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Home\Slider::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home.slider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Home\Slider::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1915e22340e1514efa05d793036010fcc327ba13)): ?>
<?php $component = $__componentOriginal1915e22340e1514efa05d793036010fcc327ba13; ?>
<?php unset($__componentOriginal1915e22340e1514efa05d793036010fcc327ba13); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal49491b0302fb4ad04248f50686f75bc808830488 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Home\FeaturedCategory::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home.featured-category'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Home\FeaturedCategory::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49491b0302fb4ad04248f50686f75bc808830488)): ?>
<?php $component = $__componentOriginal49491b0302fb4ad04248f50686f75bc808830488; ?>
<?php unset($__componentOriginal49491b0302fb4ad04248f50686f75bc808830488); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal7f146254aba9187719dbb81e56d6c61172e445e7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Home\FeaturedListings::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home.featured-listings'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Home\FeaturedListings::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7f146254aba9187719dbb81e56d6c61172e445e7)): ?>
<?php $component = $__componentOriginal7f146254aba9187719dbb81e56d6c61172e445e7; ?>
<?php unset($__componentOriginal7f146254aba9187719dbb81e56d6c61172e445e7); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal273f35a1c8197beb4f7feb919a336bd65c218bc5 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Home\FeaturedCity::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home.featured-city'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Home\FeaturedCity::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal273f35a1c8197beb4f7feb919a336bd65c218bc5)): ?>
<?php $component = $__componentOriginal273f35a1c8197beb4f7feb919a336bd65c218bc5; ?>
<?php unset($__componentOriginal273f35a1c8197beb4f7feb919a336bd65c218bc5); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal245ae7c7bdf943eb99945d641fff4d9089bb915c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Home\LatestListings::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home.latest-listings'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Home\LatestListings::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal245ae7c7bdf943eb99945d641fff4d9089bb915c)): ?>
<?php $component = $__componentOriginal245ae7c7bdf943eb99945d641fff4d9089bb915c; ?>
<?php unset($__componentOriginal245ae7c7bdf943eb99945d641fff4d9089bb915c); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal06efb52da0041f45fffa369271b0ca9b21dd5260 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Home\LatestBlog::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home.latest-blog'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Home\LatestBlog::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal06efb52da0041f45fffa369271b0ca9b21dd5260)): ?>
<?php $component = $__componentOriginal06efb52da0041f45fffa369271b0ca9b21dd5260; ?>
<?php unset($__componentOriginal06efb52da0041f45fffa369271b0ca9b21dd5260); ?>
<?php endif; ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597)): ?>
<?php $component = $__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597; ?>
<?php unset($__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597); ?>
<?php endif; ?><?php /**PATH /home/customer/www/abhijeetm14.sg-host.com/public_html/resources/views/pages/index.blade.php ENDPATH**/ ?>