<?php if(!empty($social)): ?>
<div class="overview services shadow-sm no-margin ">
    <h2 class="border-bottom">Social Links</h2>
    <ul class="list-group social-link timilist list-group-flush">
        <?php if(!empty($social->facebook)): ?>
        <li class="list-group-item">
            <a href="<?php echo e($social->facebook); ?>" target="_blank">
                <i class="bi bi-facebook"></i> <?php echo e($social->facebook); ?>

            </a>
        </li>
        <?php endif; ?>
        <?php if(!empty($social->twitter)): ?>
        <li class="list-group-item">
            <a href="<?php echo e($social->twitter); ?>" target="_blank">
                <i class="bi bi-twitter"></i> <?php echo e($social->twitter); ?>

            </a>
        </li>
        <?php endif; ?>
        <?php if(!empty($social->pinterest)): ?>
        <li class="list-group-item">
            <a href="<?php echo e($social->pinterest); ?>" target="_blank">
                <i class="bi bi-pinterest"></i> <?php echo e($social->pinterest); ?>

            </a>
        </li>
        <?php endif; ?>
        <?php if(!empty($social->instagram)): ?>
        <li class="list-group-item">
            <a href="<?php echo e($social->pinterest); ?>" target="_blank">
                <i class="bi bi-pinterest"></i> <?php echo e($social->instagram); ?>

            </a>
        </li>
        <?php endif; ?>
        <?php if(!empty($social->linkedin)): ?>
        <li class="list-group-item">
            <a href="<?php echo e($social->linkedin); ?>" target="_blank">
                <i class="bi bi-linkedin"></i> <?php echo e($social->linkedin); ?>

            </a>
        </li>
        <?php endif; ?>
        <?php if(!empty($social->youtube)): ?>
        <li class="list-group-item">
            <a href="<?php echo e($social->youtube); ?>" target="_blank">
                <i class="bi bi-youtube"></i> <?php echo e($social->youtube); ?>

            </a>
        </li>
        <?php endif; ?>
       
    </ul>
</div>
<?php endif; ?><?php /**PATH /home/customer/www/app.samadhanlegal.com/public_html/resources/views/components/business/social-link.blade.php ENDPATH**/ ?>