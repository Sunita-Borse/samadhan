<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- App CSS -->
    <link rel="stylesheet" href="<?php echo e(mix('assets/css/home.css')); ?>">
    <link rel="shortcut icon" href="<?php echo e($fav); ?>">

    <title><?php echo e($title); ?></title>
    <meta name="keywords" content="<?php echo e($meta); ?>">
    <meta name="author" content="Samadhan Legal Services">
    <meta name="description" content="<?php echo e($description); ?>">

    <?php if(!empty($image)): ?>
        <meta property="og:image" content="<?php echo e(asset($image)); ?>" />
        <meta name=”twitter:image” content="<?php echo e(asset($image)); ?>">
    <?php endif; ?>

    <meta property=og:url content="<?php echo e(url('/')); ?>">
    <meta property=og:type content="website">
    <meta property=og:sitename content="<?php echo e(config('app.name')); ?>">

  </head>
  <body>

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
    
  <?php echo e($slot); ?>


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
  <?php if (isset($component)) { $__componentOriginald5cf81d18388188d7e67f040b9741789a2e1187f = $component; } ?>
<?php $component = App\View\Components\Common\LoginAlert::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('common.login-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Common\LoginAlert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald5cf81d18388188d7e67f040b9741789a2e1187f)): ?>
<?php $component = $__componentOriginald5cf81d18388188d7e67f040b9741789a2e1187f; ?>
<?php unset($__componentOriginald5cf81d18388188d7e67f040b9741789a2e1187f); ?>
<?php endif; ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>
    <script src="<?php echo e(mix('assets/js/home.js')); ?>" defer></script>
  </body>
</html>
<?php /**PATH /home/customer/www/abhijeetm14.sg-host.com/public_html/resources/views/layouts/home.blade.php ENDPATH**/ ?>