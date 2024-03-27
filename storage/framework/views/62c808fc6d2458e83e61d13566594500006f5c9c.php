<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        
        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(mix('assets/admin/css/admin.css')); ?>">
        
        <!-- Scripts -->
        <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
        <script src="<?php echo e(mix('assets/js/admin.js')); ?>" defer></script>
    </head>
    <body class="font-sans antialiased">
        <?php if (!isset($__inertiaSsr)) { $__inertiaSsr = app(\Inertia\Ssr\Gateway::class)->dispatch($page); }  if ($__inertiaSsr instanceof \Inertia\Ssr\Response) { echo $__inertiaSsr->body; } else { ?><div id="app" data-page="<?php echo e(json_encode($page)); ?>"></div><?php } ?>

        <?php if(app()->environment('local')): ?>
            <!-- <script src="http://localhost:8080/js/bundle.js"></script> -->
        <?php endif; ?>
    </body>
</html>
<?php /**PATH /home/customer/www/app.samadhanlegal.com/public_html/resources/views/app.blade.php ENDPATH**/ ?>