<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(mix('assets/css/home.css')); ?>">

        <!-- Scripts -->


        <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
        <script src="<?php echo e(mix('assets/js/user.js')); ?>" defer></script>

        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    </head>
    <body class="font-sans antialiased">

        <?php if (isset($component)) { $__componentOriginal371b235685a2eb85e2d538ce6b8dfdf81ecc39da = $component; } ?>
<?php $component = App\View\Components\Common\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Common\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal371b235685a2eb85e2d538ce6b8dfdf81ecc39da)): ?>
<?php $component = $__componentOriginal371b235685a2eb85e2d538ce6b8dfdf81ecc39da; ?>
<?php unset($__componentOriginal371b235685a2eb85e2d538ce6b8dfdf81ecc39da); ?>
<?php endif; ?>
            <?php if (!isset($__inertiaSsr)) { $__inertiaSsr = app(\Inertia\Ssr\Gateway::class)->dispatch($page); }  if ($__inertiaSsr instanceof \Inertia\Ssr\Response) { echo $__inertiaSsr->body; } else { ?><div id="app" data-page="<?php echo e(json_encode($page)); ?>"></div><?php } ?>
        <?php if (isset($component)) { $__componentOriginal2200adf6f70ffa52a984dbd5832df623a200487e = $component; } ?>
<?php $component = App\View\Components\Common\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Common\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2200adf6f70ffa52a984dbd5832df623a200487e)): ?>
<?php $component = $__componentOriginal2200adf6f70ffa52a984dbd5832df623a200487e; ?>
<?php unset($__componentOriginal2200adf6f70ffa52a984dbd5832df623a200487e); ?>
<?php endif; ?>

        <?php if(app()->environment('local')): ?>
            <!-- <script src="http://localhost:8080/js/bundle.js"></script> -->
        <?php endif; ?>
    </body>
</html>
<?php /**PATH /home/customer/www/app.samadhanlegal.com/public_html/resources/views/user.blade.php ENDPATH**/ ?>