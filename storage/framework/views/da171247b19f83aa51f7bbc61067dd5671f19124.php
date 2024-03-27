<div class="bycard shadow-sm overview">
    <h2 class="border-bottom">Posted By</h2>
    <div class="usercover">
        <img src="<?php echo e($user->resize); ?>" alt="">

        <h4><?php echo e($user->name); ?></h4>
        <p>Member Since <?php echo e(\Carbon\Carbon::parse($user->created_at)->format('M Y')); ?></p>
    </div>
</div><?php /**PATH /home/customer/www/app.samadhanlegal.com/public_html/resources/views/components/business/postedby.blade.php ENDPATH**/ ?>