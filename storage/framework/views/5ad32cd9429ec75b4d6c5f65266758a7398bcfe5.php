<?php if(!empty($timing)): ?>

<div class="overview services shadow-sm no-margin ">
    <h2 class="border-bottom">Business Timing</h2>
    <ul class="list-group timilist list-group-flush">
        <?php if(!empty($timing->monday_from) && !empty($timing->monday_to)): ?>
        <li class="list-group-item">Monday <span><?php echo e(\Carbon\Carbon::parse($timing->monday_from)->format('g:i A')); ?> - <?php echo e(\Carbon\Carbon::parse($timing->monday_to)->format('g:i A')); ?></span></li>
        <?php endif; ?>
        <?php if(!empty($timing->tuesday_from) && !empty($timing->tuesday_to)): ?>
        <li class="list-group-item">Tuesday <span><?php echo e(\Carbon\Carbon::parse($timing->tuesday_from)->format('g:i A')); ?> - <?php echo e(\Carbon\Carbon::parse($timing->tuesday_to)->format('g:i A')); ?></span></li>
        <?php endif; ?>
        <?php if(!empty($timing->wednesday_from) && !empty($timing->wednesday_to)): ?>
        <li class="list-group-item">Wednesday <span><?php echo e(\Carbon\Carbon::parse($timing->wednesday_from)->format('g:i A')); ?> - <?php echo e(\Carbon\Carbon::parse($timing->wednesday_to)->format('g:i A')); ?></span></li>
        <?php endif; ?>
        <?php if(!empty($timing->thursday_from) && !empty($timing->thursday_to)): ?>
        <li class="list-group-item">Thursday <span><?php echo e(\Carbon\Carbon::parse($timing->thursday_from)->format('g:i A')); ?> - <?php echo e(\Carbon\Carbon::parse($timing->thursday_to)->format('g:i A')); ?></span></li>
        <?php endif; ?>
        <?php if(!empty($timing->friday_from) && !empty($timing->friday_to)): ?>
        <li class="list-group-item">Friday <span><?php echo e(\Carbon\Carbon::parse($timing->friday_from)->format('g:i A')); ?> - <?php echo e(\Carbon\Carbon::parse($timing->friday_to)->format('g:i A')); ?></span></li>
        <?php endif; ?>
        <?php if(!empty($timing->saturday_from) && !empty($timing->saturday_to)): ?>
        <li class="list-group-item">Saturday <span><?php echo e(\Carbon\Carbon::parse($timing->saturday_from)->format('g:i A')); ?> - <?php echo e(\Carbon\Carbon::parse($timing->saturday_to)->format('g:i A')); ?></span></li>
        <?php endif; ?>
        <?php if(!empty($timing->sunday_from) && !empty($timing->sunday_to)): ?>
        <li class="list-group-item">Sunday <span><?php echo e(\Carbon\Carbon::parse($timing->sunday_from)->format('g:i A')); ?> - <?php echo e(\Carbon\Carbon::parse($timing->sunday_to)->format('g:i A')); ?></span></li>
        <?php endif; ?>
    </ul>
</div>

<?php endif; ?><?php /**PATH /home/customer/www/app.samadhanlegal.com/public_html/resources/views/components/business/timing.blade.php ENDPATH**/ ?>