<?php 
if(!defined("APP_PATH")){
    exit("Can not access");
}
?>
<section class="py-5">
            <div class="container px-4 px-lg-5 mt-2">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4">
                    <div class="list_product"> 
                            <?php foreach($cart as $key=>$value): ?>
                                <div class="item d-flex">
                                   
                                    <img class="card-img-top" src="<?=$_SESSION[$_SESSION['name']][$key]['image']?>" alt="<?=$_SESSION[$_SESSION['name']][$key]['name']?>">
                                     <div class="text ms-5">
                                        <h3><?= $_SESSION[$_SESSION['name']][$key]['name'] ?></h3>
                                        <div class="price">
                                            <?php if($_SESSION[$_SESSION['name']][$key]['sale']==1): ?>
                                                <p class="cost text-decoration-line-through"><?= "$".$_SESSION[$_SESSION['name']][$key]['price']?></p>
                                            <?php endif; ?>
                                            <?php if($_SESSION[$_SESSION['name']][$key]['sale']==1): ?>
                                                <p class="sale_price"><?= "$".$_SESSION[$_SESSION['name']][$key]['sale_price'] ?></p>
                                                <?php else: ?>
                                                    <p class="cost"><?= "$".$_SESSION[$_SESSION['name']][$key]['price'] ?></p>
                                            <?php endif; ?>
                                           
                                        </div>
                                    </div> 
                                    
                                        <form action="?c=cart&m=number&key=<?=$key?>" method="post">
                                            <div class="quantity">
                                                <button class="reduce btn-number" name="reduce">-</button>
                                                <input class="quantity_product text-center" type="number" name="quantity" value="<?= !isset($_SESSION[$_SESSION['name']][$key]['quantity']) ? 1 : $_SESSION[$_SESSION['name']][$key]['quantity'] ?>">
                                                <button class="increase btn-number" name="increase">+</button>
                                            </div>
                                        </form>
                                        <div class="sum_price">
                                            <?php if($_SESSION[$_SESSION['name']][$key]['sale']==1): ?>
                                                    <p class="text_price"><?="$".$_SESSION[$_SESSION['name']][$key]['quantity']*$_SESSION[$_SESSION['name']][$key]['sale_price'] ?></p>
                                                <?php else: ?>
                                                    <p class="text_price"><?= "$".$_SESSION[$_SESSION['name']][$key]['quantity']*$_SESSION[$_SESSION['name']][$key]['price'] ?></p>
                                            <?php endif; ?>
                                            
                                        </div>
                                        <form action="?c=cart&m=delete&key=<?=$key?>" method="post">
                                            <button class="btn btn-primary ms-5 " name="delete">Xoa</button>
                                        </form>
                                       
                                    
                                </div>
                                
                            <?php endforeach; ?>
                    </div>
                </div>
                    
            </div>
            
</section>
           

