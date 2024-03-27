<div class="col-lg-3 col-md-4 filtercover">
    <div class="filter-col shadow-sm">
        <div  class="category-filterr">
            <div x-data="{cfilter}" class="filter-head">
                 <h2>Filter by Categories <i @click="filterCat()" class="bi cp float-end bi-funnel"></i></h2>
            </div>
           <div id="cfilter" class="filter-body">
                <ul x-data="{url: '<?php echo e(url('/')); ?>' }">
                    <?php if(!empty($category)): ?> <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="cp">
                        <a href="<?php echo e(url('cat/'.$c->url.'?rating='.$rating.'&typ='.$typ.'&key='.$key)); ?>">
                             <input <?php if($cat == $c->id): ?> checked <?php endif; ?> @click="catFilterClick(url, '<?php echo e($c->url); ?>', <?php echo e($rating); ?>, '<?php echo e($typ); ?>', '<?php echo e($key); ?>')" class="form-check-input" type="radio" name="filtercat" id="filtercat"> <?php echo e($c->name); ?>

                        </a> 
                    </li>  
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>                  
                </ul>
           </div>
             <div  x-data="{clocation}" class="filter-head border-top border-bottom">
                 <h2>Filter by Ratings <i @click="filterRating()" class="bi cp float-end bi-funnel"></i></h2>
            </div>
            <div id="clocation" x-data="{url: '<?php echo e(URL::current()); ?>' }" class="filter-body">
                <ul class="rev">
                <li>
                        <input checked  @click="ratingFilterClick(url, 0, '<?php echo e($typ); ?>', '<?php echo e($key); ?>')" class="form-check-input" type="radio" name="rating" id="rating">
                       All Ratings
                    </li>
                    <li><input <?php if($rating == '5'): ?> checked <?php endif; ?>; @click="ratingFilterClick(url, 5, '<?php echo e($typ); ?>', '<?php echo e($key); ?>')" class="form-check-input" type="radio" name="rating" id="rating">
                        <i class="bi act bi-star-fill"></i>
                        <i class="bi act bi-star-fill"></i>
                        <i class="bi act bi-star-fill"></i>
                        <i class="bi act bi-star-fill"></i>
                        <i class="bi act bi-star-fill"></i>
                    </li>
                    <li>
                        <input <?php if($rating == '4'): ?> checked <?php endif; ?>; @click="ratingFilterClick(url, 4, '<?php echo e($typ); ?>', '<?php echo e($key); ?>')" class="form-check-input" type="radio" name="rating" id="rating">
                        <i class="bi act bi-star-fill"></i>
                        <i class="bi act bi-star-fill"></i>
                        <i class="bi act bi-star-fill"></i>
                        <i class="bi act bi-star-fill"></i>
                        <i class="bi  bi-star-fill"></i>
                    </li>
                    <li>
                        <input <?php if($rating == '3'): ?> checked <?php endif; ?>; @click="ratingFilterClick(url, 3, '<?php echo e($typ); ?>', '<?php echo e($key); ?>')" class="form-check-input" type="radio" name="rating" id="rating">
                        <i class="bi act bi-star-fill"></i>
                        <i class="bi act bi-star-fill"></i>
                        <i class="bi act bi-star-fill"></i>
                        <i class="bi  bi-star-fill"></i>
                        <i class="bi  bi-star-fill"></i>
                    </li>
                    <li>
                        <input <?php if($rating == '2'): ?> checked <?php endif; ?>; @click="ratingFilterClick(url, 2, '<?php echo e($typ); ?>', '<?php echo e($key); ?>')" class="form-check-input" type="radio" name="rating" id="rating">
                        <i class="bi act bi-star-fill"></i>
                        <i class="bi act bi-star-fill"></i>
                        <i class="bi  bi-star-fill"></i>
                        <i class="bi  bi-star-fill"></i>
                        <i class="bi  bi-star-fill"></i>
                    </li>
                    <li>
                        <input <?php if($rating == '1'): ?> checked <?php endif; ?>; @click="ratingFilterClick(url, 1, '<?php echo e($typ); ?>', '<?php echo e($key); ?>')" class="form-check-input" type="radio" name="rating" id="rating">
                        <i class="bi act bi-star-fill"></i>
                        <i class="bi  bi-star-fill"></i>
                        <i class="bi  bi-star-fill"></i>
                        <i class="bi  bi-star-fill"></i>
                        <i class="bi  bi-star-fill"></i>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>


<?php if (! $__env->hasRenderedOnce('422343de-96b8-406f-8123-dd6a5d5f0053')): $__env->markAsRenderedOnce('422343de-96b8-406f-8123-dd6a5d5f0053');
$__env->startPush('scripts'); ?>

<script>
    function ratingFilterClick(url, rat, typ, key) {
        window.location.href=url+"?rating="+rat+"&typ="+typ+"&key="+key;
    }

    function catFilterClick(url, cat, rat, typ, key){

        if(rat !== undefined){
            window.location.href=url+"/cat/"+cat+"?rating="+rat+"&typ="+typ+"&key="+key;
        }else{
            window.location.href=url+"/cat/"+cat+"?rating=0"+"&typ="+typ+"&key="+key;;
        }
        
    }

    function filterCat(){
        var x = document.getElementById("cfilter");
        if (x.style.display === "flex") {
            x.style.display = "none";
        }else {
            x.style.display = "flex";
        }
        
    }

    function filterRating(){
        var x = document.getElementById("clocation");
        if (x.style.display === "") {
            x.style.display = "flex";
        }else if (x.style.display === "none") {
            x.style.display = "flex";
        } else {
            x.style.display = "none";
        }
    }
</script>

<?php $__env->stopPush(); endif; ?><?php /**PATH /home/customer/www/abhijeetm14.sg-host.com/public_html/resources/views/components/business/filter.blade.php ENDPATH**/ ?>