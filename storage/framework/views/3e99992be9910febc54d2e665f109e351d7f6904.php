<div  class="featurdlist rounded-sm shado-sm">
    <div class="image-cover">
        <a href="<?php echo e(url('view/'.$list->url)); ?>">
            <img src="<?php echo e($list->resize); ?>" alt="">
        </a> 
        <div class="cat-cover">
            <?php if(!empty($list->selected[0])): ?>
                <?php echo e($list->selected[0]->category->name); ?>

            <?php endif; ?>
        </div>
    </div>
    <div class="detail-cov">
        <a href="<?php echo e(url('view/'.$list->url)); ?>">
            <h4> <?php echo e($list->business_name); ?></h4>
                <p class="text-truncate"> <?php echo e($list->description); ?></p>
            <ul>
                <li><i class="bi bi-telephone"></i> <?php echo e($list->mobile); ?></li>
                <li><i class="bi bi-geo-alt"></i> <?php echo e($list->city->name); ?></li>
            </ul>
        </a>
    </div>
    <div class="foot-cover  footuser">
        <ul class="d-flex justify-content-between">
            <?php if($footTyp == 'user' && $list->user->resize): ?>
                <li class="user">
                    <img src="<?php echo e($list->user->resize); ?>" class="img-fluid" alt="">
                    <span><?php echo e($list->user->name); ?></span>
                </li>
            <?php else: ?>
            <?php if (isset($component)) { $__componentOriginaldd1b2b60a7f3ed0093835c416ab4d77a2c122cae = $component; } ?>
<?php $component = App\View\Components\Share\Review::resolve(['rating' => $list->rating,'count' => $list->rcount] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('share.review'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Share\Review::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldd1b2b60a7f3ed0093835c416ab4d77a2c122cae)): ?>
<?php $component = $__componentOriginaldd1b2b60a7f3ed0093835c416ab4d77a2c122cae; ?>
<?php unset($__componentOriginaldd1b2b60a7f3ed0093835c416ab4d77a2c122cae); ?>
<?php endif; ?>
            <?php endif; ?>
            <li class="save saveuser">
               <?php if (isset($component)) { $__componentOriginal20ce45b6ad4300ba8bc1b11b57aa8245ba382c95 = $component; } ?>
<?php $component = App\View\Components\Share\Like::resolve(['id' => $list->id,'like' => $list->like] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('share.like'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Share\Like::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20ce45b6ad4300ba8bc1b11b57aa8245ba382c95)): ?>
<?php $component = $__componentOriginal20ce45b6ad4300ba8bc1b11b57aa8245ba382c95; ?>
<?php unset($__componentOriginal20ce45b6ad4300ba8bc1b11b57aa8245ba382c95); ?>
<?php endif; ?>
            </li>
        </ul>
    </div>
</div>



<?php /**PATH /home/customer/www/app.samadhanlegal.com/public_html/resources/views/components/card/grid-card.blade.php ENDPATH**/ ?>