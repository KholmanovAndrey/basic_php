<div class="container">
    <div class="goods">
        <?php foreach($goods as $product) : ?>
            <div class="product">
                <h2 class="product__title"><?=$product['good_name']?></h2>
                <p class="product__desc"><?=$product['good_desc']?></p>
                <p class="product__price"><?=$product['good_price']?></p>
                <a href="/?page=product&id=<?=$product['id_good']?>" class="product__link">Перейти к товару</a>
            </div>
        <?php endforeach ?>
    </div>
</div>