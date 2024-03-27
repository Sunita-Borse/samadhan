<?php if(auth()->guard()->check()): ?>
    <span x-data="{like : <?php echo e($like); ?>, id:<?php echo e($id); ?> }">
        <i x-show="like != 0" @click="like = handleClick(like, id)" class="bi bi-heart-fill"></i>
        <i x-show="like == 0" @click="like = handleClick(like, id)" class="bi bi-heart"></i>
    </span>
<?php endif; ?>

<?php if(auth()->guard()->guest()): ?>
<a data-bs-toggle="modal" data-bs-target="#loginAlert"><i class="bi bi-heart"></i></a>
<?php endif; ?>

<?php if (! $__env->hasRenderedOnce('9b9e4c8e-a639-4436-8d67-350a8c08fac3')): $__env->markAsRenderedOnce('9b9e4c8e-a639-4436-8d67-350a8c08fac3');
$__env->startPush('scripts'); ?>
<script>
    function handleClick(like, id) {
        axios.post('update-bookmark', {'id':id,'like':!like});
        return !like;
    }
</script>
<?php $__env->stopPush(); endif; ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/php-scripts/smart-directory/resources/views/components/share/like.blade.php ENDPATH**/ ?>