<li class="rev">
    <i class="bi <?php if($rating >= 1): ?> act <?php endif; ?> bi-star-fill"></i>
    <i class="bi <?php if($rating >= 2): ?> act <?php endif; ?> bi-star-fill"></i>
    <i class="bi <?php if($rating >= 3): ?> act <?php endif; ?> bi-star-fill"></i>
    <i class="bi <?php if($rating >= 4): ?> act <?php endif; ?> bi-star-fill"></i>
    <i class="bi <?php if($rating >= 5): ?> act <?php endif; ?> bi-star-fill"></i>
    <small><?php echo e(substr(number_format($rating, 2), 0, -1)); ?>  (<?php echo e($count); ?> Reviews)</small>
</li><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/php-scripts/smart-directory/resources/views/components/share/review.blade.php ENDPATH**/ ?>