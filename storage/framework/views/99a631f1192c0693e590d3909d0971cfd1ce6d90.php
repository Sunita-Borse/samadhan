
    <div class="row shadow-sm list-row border rounded">
            <div class="col-lg-4  pe-0 img-col">
                <a href="<?php echo e(route('view', $list->url)); ?>">
                    <img  class="rounded" src="<?php echo e($list->resize); ?>" alt="">
                </a>
            </div>
            <div class="col-lg-8 detail-col">
                <a href="<?php echo e(route('view', $list->url)); ?>">
                    <div class="bofy-col">
                        <h2 class="text-truncate"><?php echo e($list->business_name); ?>

                            
                        <?php if(!empty($list->user->plan)): ?>
                            <?php if($list->user->plan->package->verification == 'Yes'): ?>
                            <i  class="bi verify bi-check2-circle">
                            <?php endif; ?>
                        <?php endif; ?>

                        </i></h2>
                        <p class="text-truncate"><?php echo e($list->description); ?></p>
                        <ul class="row ms-1">
                            <li class="col-md-4"><i class="bi bi-telephone"></i> <?php echo e($list->mobile); ?></li>
                            <li class="col-md-8"><i class="bi bi-envelope"></i> <?php echo e($list->city->name); ?></li>

                        </ul>
                        <ul class="row ms-1">
                            <li class="col-md-4"> <i class="bi bi-map"></i> <?php echo e($list->city->name); ?></li>
                            <li class="col-md-8"><p class="text-truncate"><i class="bi bi-geo-alt"></i><?php echo e($list->address); ?></p></li>
                        </ul>
                    </div>
                </a>
            
                <div  class="footcover">
                    <ul>
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
                        <li class="">
                            <div class="save">
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
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
    </div>
<?php /**PATH /home/customer/www/abhijeetm14.sg-host.com/public_html/resources/views/components/card/list-card.blade.php ENDPATH**/ ?>