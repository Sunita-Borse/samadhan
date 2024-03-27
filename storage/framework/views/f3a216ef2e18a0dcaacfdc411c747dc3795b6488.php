<div class="overview services shadow-sm no-margin ">
    <h2 class="border-bottom">Category</h2>
    <ul class="list-group cateul list-group-flush">

        <?php if(!empty($cat)): ?> <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item align-items-center">
                <span>
                    <img src="<?php echo e($c->category->icon); ?>" alt="">
                </span>
                <?php echo e($c->category->name); ?>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>

        
        
    </ul>
</div><?php /**PATH /home/customer/www/abhijeetm14.sg-host.com/public_html/resources/views/components/business/category.blade.php ENDPATH**/ ?>