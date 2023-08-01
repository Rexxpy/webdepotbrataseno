

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

    
        <div class="container mt-5">
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

    <section class="shop-content mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <table class="cart-table table table-bordered">
                        <thead class="text-center text-light"style="background-color: black">
                            <tr>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody  class="text-center" style="border: 20px">
                            <?php
                                $grandtotal=0;
                            ?>
                            <?php if(empty($cart) || count($cart) ==0): ?>
                                <tr>
                                    <td colspan="6">&nbsp;Tidak ada menu dalam keranjang</td>
                                </tr>
                            <?php else: ?>
                            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ct => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php   
                                  $subtotal = $val["harga"] * $val["jumlah"];
                              ?>
                           <tr>
                                <td>
                                    <a type="button" href="<?php echo e(url('/cart/hapus/'.$ct)); ?>">
                                        <span data-feather="x">
                                        </span>
                                    </a>
                                </td>
                               <td>
                                   <img src=<?php echo e(asset('storage/'. $val['image'] )); ?> alt="" height="95" width="110">
                                </td>
                                <td>
                                    <span><?php echo e($val['nama']); ?></span>
                                </td>
                                <td>
                                    <span class="amount">Rp. <?php echo e($val['harga']); ?></span>
                                </td>
                                <td>
                                    
                                    <form action="<?php echo e(url('/cart/tambah/'.$ct)); ?>" method="get">
                                        <div class="quantity" style="position: relative; left: 30px;">
                                            <input type="number" value="<?php echo e($val['jumlah']); ?>" name="jumlah_pesan" data-max="120" pattern="[0-9]"/>
                                            <button class="btn btn-secondary btn-sm" style="margin-right: 25px;"><i data-feather="edit"></i></button>
                                        </div>
                                    </form>
                                </td>
                                <td>
                                    <span class="amount">Rp. <?php echo e($subtotal); ?></span>
                                </td>
                            </tr>
                                <?php 
                                    $grandtotal+= $subtotal;
                                ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td colspan="6" class="actions" style="position: relative; left: 230px;">
                                    <div class="col-md-6">
                                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><strong>Checkout</strong></button>
                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="staticBackdropLabel"><strong>Form Order</strong></h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <p><strong>Fill order data</strong></p>
                                                      <form action="" style="width: 50%; display:block; margin:15px auto;">
                                                            <input class="text-center" type="text" placeholder="Your Name">
                                                            <input class="text-center" type="text" placeholder="Address">
                                                      </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><strong>Close</strong></button>
                                                      <form action="<?php echo e(url('/cart/checkout/'.$ct)); ?>">
                                                        <button class="btn btn-success" type="submit"><strong>Order</strong></button>
                                                      </form>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cart_totals mt-4">
                        <div class="col-md-6 push-md-6 no-padding">
                            <h4 class="text-left">Cart Totals</h4>
                            <br>
                            <table class="table table-bordered col-md-6" style="position: relative; bottom: 20px;">
                                <tbody>
                                    <tr>
                                        <th>Delivery</th>
                                            <td>
                                                Free Delivery
                                            </td>
                                    </tr>
                                    <tr>
                                        <th>Order Total</th>
                                            <td><strong><span class="amount"><?php echo e($grandtotal); ?></span></strong> </td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('background-image1'); ?>

    <style>

        .dfg{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 90%);
            color:rgba(243, 243, 243, 0.582);
        }

    </style>

    <div class="centered">
        <p style="font-size: 70px ">
          <strong>CART</strong>
        </p>
    </div>
    <div class="dfg">
        <h1 style="font-size: 33px ">
            Checkout your item
        </h1>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\andik\Documents\app\proyekeas\resources\views/cart.blade.php ENDPATH**/ ?>