<div class="sidebar">
    <div class="widget">
        <h3 class="widget-title">Danh mục sản phẩm</h3>
        <div class="decor-1"></div>
        <div class="widget-content">
            <ul class="products-cat-filter">
                <?php
                    $arg=array('taxonomy'=>'product_cat','hide_empty'=>false);
                    $terms=get_terms($arg); 
                    foreach($terms as $term):
                ?>
                <li>
                    <a class="click_product_cat" data-term-id=<?php echo $term->term_id ?>><span class="bict-checkbox"></span><?php echo $term->name ?></a><span class="count">(<?php echo $term->count ?>)</span>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="widget">
        <h3 class="widget-title">Lọc giá sản phẩm</h3>
        <div class="decor-1"></div>
        <div class="widget-content">
        
        </div>
    </div>
</div>