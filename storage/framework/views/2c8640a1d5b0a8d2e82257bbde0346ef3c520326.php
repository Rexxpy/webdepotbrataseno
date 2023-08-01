

<?php $__env->startSection('bgfooter'); ?>

    <style>
        a:link {
            color: #fae100;
            background-color: transparent;
            text-decoration: none;
        }
        a:hover {
            color: rgb(66, 66, 66);
            background-color: transparent;
            text-decoration: none;
        }

        a:active {
            color: #fae100;
            background-color: transparent;
            text-decoration: none;
        }
    </style>

    
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4 col-sm-12 mt-5" style="font-family: Open Sans, sans-serif">
                    <h1 style="color:#fae100">ABOUT US</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit, maxime blanditiis! Similique voluptate dolorum eum?</p>
                     <a href="/about">Read more →</a>
                </div>
                <div class="col-md-4  col-sm-6">                     
                </div>
                 <div class="col-md-4  col-sm-6 mt-5" style="font-family: Open Sans, sans-serif">
                    <h1 style="color:#fae100">REACH US</h1>
                     <div class="footer-address">
                        <p>Jl. Raya Mulyosari, Surabaya</p>
                        <p>Phone: 085291567789</p>
                        <p>support@depotbratasena.com</p>
                     </div>
                 </div>
            </div>
        </div>     
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('container'); ?>

        <style>

          .line{
            width: 350px;
            height: 47px;
            border-bottom: 2px solid rgba(48, 48, 48, 0.452);
          }

        </style>

        <section class="menu space60 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header wow fadeInDown">
                            <h1 class="text-center" style="color: rgba(43, 43, 43, 0.938)"><b>Food Menu</b>
                                <p style="color: rgba(0, 0, 0, 0.507)"><small>click image to add to cart</small></p>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="row  mt-4">
                    <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $men): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="sdf col-md-4 col-sm-6 animate__animated" style="font-family: 'Roboto', sans-serif;">
                        <div class="features-tile" >
                            <div class="features-img">
                                <a href="<?php echo e(url('/cart/tambah/'.$men->id)); ?>">
                                    <img src=<?php echo e(asset('storage/'.$men->image)); ?> class="img-responsive" alt="logo" style="width: 100%">
                                </a>
                            </div>
                            <div class="features-content text-center mt-3" style="color: rgba(29, 29, 29, 0.938)">
                                <div class="page-header">
                                    <h1><?php echo e($men -> nama); ?></h1>
                                </div>
                                <p style="color: rgba(0, 0, 0, 0.507)"><?php echo e($men->deskripsi); ?></p>
                            </div>
                            <div class="harga text-center" style="font-family: 'Roboto', sans-serif; font-size: 20px; position:relative; top:10px; color: rgba(29, 29, 29, 0.938);">
                                <strong>Rp. <?php echo e($men->harga); ?></strong>
                            </div>
                            <div class="line text-center">
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
        
<?php $__env->stopSection(); ?>

<?php $__env->startSection('background-image1'); ?>

    <div class="centered">
        <p style="font-size: 70px ">
          <strong>Menu</strong>
        </p>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\andik\Documents\app\proyekeas\resources\views/menu.blade.php ENDPATH**/ ?>