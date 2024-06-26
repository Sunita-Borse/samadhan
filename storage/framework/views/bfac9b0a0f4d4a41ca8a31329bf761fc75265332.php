<div class="col-lg-4 col-md-6 blog-col">
    <a href="<?php echo e(route('single-blogs', $blog->url)); ?>">
        <div class="blogcover shadow-sm">
            <div class="blog-img">
                <img src="<?php echo e($blog->resize); ?>" alt="">
            </div>
            <div class="info">
                <ul>
                    <li><i class="bi bi-folder2-open"></i> <?php echo e($blog->category->name); ?></li>
                    <li class="ms-4"><i class="bi bi-calendar2-minus"></i> <?php echo e(\Carbon\Carbon::parse($blog->created_at)->format('D M Y')); ?></li>
                </ul>
            </div>
            <div class="detail">
                <h2><?php echo e($blog->title); ?></h2>
            </div>
        </div>
    </a>
</div><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/php-scripts/smart-directory/resources/views/components/card/blog-card.blade.php ENDPATH**/ ?>