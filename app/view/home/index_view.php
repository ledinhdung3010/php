<?php
if(!defined("APP_PATH")){
    exit("Can not access");
}
?>
<section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php foreach($product as $key=> $item): ?>
                        
                        <div class="col mb-5">
                            <div class="card h-100">
                                <?php if($item['sale']==1): ?>
                                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                                <?php endif; ?>
                               
                                <img class="card-img-top" src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>" />
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?= $item['name'] ?></h5>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                        <?php if($item['stare']>0): ?>
                                        <?php for($i=1;$i<=$item['stare'];$i++): ?>
                                            <div class="bi-star-fill"></div>
                                        <?php endfor; ?>
                                        <?php endif; ?>
                                        </div>
                                        <?php if($item['sale']==1): ?>
                                        <!-- Product price-->
                                        <span class="text-muted text-decoration-line-through"><?= "$".$item['price'] ?></span>
                                
                                
                                        <?php endif; ?>
                                        <?php if($item['sale']==1): ?>
                                        <?= "$".$item['sale_price'] ?>
                                        <?php else: ?>
                                            <?= "$". $item['price'] ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <form action="?c=cart&m=addCart" method="post">
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <input type="hidden" name="product_id" value="<?=$item['id'] ?>">
                                        <div class="text-center"><button class="btn btn-outline-dark mt-auto" name="btn-cart">ADD TO CART</button></div>
                                    </div>
                                </form>
                                    
                                
                               
                            
                            </div>



                        </div>
                    <?php endforeach; ?>
                    
                </div>
            </div>
        </section>