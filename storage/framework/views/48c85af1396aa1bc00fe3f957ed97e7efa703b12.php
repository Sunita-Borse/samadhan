<div class="col-lg-3 col-md-4 col-sm-6 citycol">
    <a href="">
        <div class="citycover">
            <a href="<?php echo e(url('filter-by-city/'.$city->url)); ?>">
                <div class="row g-0">
                    <div class="col-md-4 col-4">
                    <img src="<?php echo e($city->image); ?>" class="img-fluid rounded" alt="<?php echo e($city->name); ?>">
                    </div>
                    <div class="col-md-8 col-8 my-auto">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($city->name); ?></h5>
                        <p class="card-text"><?php echo e($city->listings->count()); ?> listings</p>
                    </div>
                    </div>
                </div>
            </a>
        </div>
    </a>
</div><?php /**PATH /home/customer/www/app.samadhanlegal.com/public_html/resources/views/components/card/city-card.blade.php ENDPATH**/ ?>