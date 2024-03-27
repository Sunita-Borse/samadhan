<div class="col-lg-2 col-md-3 col-sm-4 col-6 fcatcol mb-4">
    <a href="<?php echo e(route('cat', $category->url)); ?>">
        <div class="fcat shado-xs text-center">
            <div class="icon mx-auto">
                <img src="<?php echo e($category->icon); ?>" alt="">
            </div>
            <p class="text-truncate"><?php echo e($category->name); ?></p>
        </div>
    </a>
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/php-scripts/smart-directory/resources/views/components/card/category.blade.php ENDPATH**/ ?>