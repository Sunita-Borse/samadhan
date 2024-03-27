<footer>
    <div class="container">
        <div class="footer-bottom row">
            <div class="col-lg-3 col-md-6 cvb">
                <div class="footer-card">
                    <h2  class="fabh">Our Location</h2>

                    <div class="loca-ro">
                        <div class="icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="detail">
                            <p><?php echo e($info->address); ?></p>
                        </div>
                    </div>

                    <div class="loca-ro">
                        <div class="icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="detail">
                            <p><?php echo e($info->email_1); ?></p>
                            <p><?php echo e($info->email_2); ?></p>
                        </div>
                    </div>

                    <div class="loca-ro">
                        <div class="icon">
                            <i class="bi bi-telephone-forward"></i>
                        </div>
                        <div class="detail">
                            <p><?php echo e($info->mobile_no_1); ?></p>
                            <p><?php echo e($info->mobile_no_2); ?></p>
                        </div>
                    </div>

                </div>
            </div>

                <div class="col-lg-3 col-md-6 cvb">
                    <div class="footer-card">
                    <h2 class="fabh">Top Category</h2>

                    <ul class="topc">
                        <?php if(!empty($category)): ?> <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('cat', $c->url)); ?>"><i class="bi bi-stop-circle"></i> <?php echo e($c->name); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
                    </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 cvb">
                    <div class="footer-card">
                    <h2 class="fabh">Business</h2>

                    <ul class="topc">
                        <li><a href="<?php echo e(route('page', 'about-us')); ?>"><i class="bi bi-stop-circle"></i> About US</a></li>
                        <li><a href="<?php echo e(route('page', 'privacy-policy')); ?>"><i class="bi bi-stop-circle"></i> Privacy Policy</a></li>
                        <li><a href="<?php echo e(route('page', 'terms-and-conditions')); ?>"><i class="bi bi-stop-circle"></i> Terms & Conditions</a></li>
                    </ul>

                    <h2 class="fabh mt-3">Quick Links</h2>
                    <ul class="topc">
                        <li><a href="<?php echo e(route('new-listing')); ?>"><i class="bi bi-stop-circle"></i> List your Business</a></li>
                        <li><a href="<?php echo e(route('login')); ?>"><i class="bi bi-stop-circle"></i> Login to your Account</a></li>
                    </ul>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6 br-o cvb subcrib">
                    <div class="footer-card">
                        <h2 class="fabh">Follow Us</h2>
                        <div class="row no-margin">
                            <ul class="soc-link">
                            <li><a href="<?php echo e($info->ins); ?>"><i class="bi bi-instagram"></i></a></li>
                            <li><a href="<?php echo e($info->fb); ?>"><i class="bi bi-facebook"></i></a></li>
                            <li><a href="<?php echo e($info->tw); ?>"><i class="bi bi-twitter"></i></a></li>
                            <li><a href="<?php echo e($info->pin); ?>"><i class="bi bi-pinterest"></i></a></li>
                            <li><a href="<?php echo e($info->li); ?>"><i class="bi bi-linkedin"></i></a></li>
                            <li><a href="<?php echo e($info->yt); ?>"><i class="bi bi-youtube"></i></a></li>
                            </ul>
                        </div>


                        <h2 class="fabh mt-3">Subscribe now</h2>
                        <form method="post" action="<?php echo e(route('submit-news-letter')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="input-group mt-3">
                                <input  name="email" type="email" required class="form-control mb-0" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="input-group-text" id="basic-addon2"><i class="bi bi-send"></i></button>
                                </div>
                            </div>
                        </form>
                        <p class="sdfg">Subscribe to our newsletters and get news delivered straight into your inbox</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- ################### Copyright Starts Here #####################-->

<div class="copy">
  <div class="container">
    <div class="row copy-row">
      <p>Copyright @2022 <a href="">Samadhan Legal Services</a>. All rights reserved</p>
    </div>
  </div>
</div>


 
<script>
    function handleClick(e) {
        // Now you can access the event object (e) directly
    }
</script>
<?php /**PATH /home/customer/www/app.samadhanlegal.com/public_html/resources/views/components/common/footer.blade.php ENDPATH**/ ?>