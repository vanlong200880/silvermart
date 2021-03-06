<ul class="menu-left">
  <?php

  $taxonomy     = 'product_cat';
  $orderby      = 'name';  
  $show_count   = 0;      // 1 for yes, 0 for no
  $pad_counts   = 0;      // 1 for yes, 0 for no
  $hierarchical = 1;      // 1 for yes, 0 for no  
  $title        = '';  
  $empty        = 0;

  $args = array(
         'taxonomy'     => $taxonomy,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty
  );
 $all_categories = get_categories( $args );
 foreach ($all_categories as $cat) {
//   var_dump($cat);
    if($cat->category_parent == 0) {
        $category_id = $cat->term_id;
        $icon = get_field('icon', $cat);
        $link = get_field('link', $cat);
//        var_dump($link);
        $thumbnail_id = get_woocommerce_term_meta($category_id, 'thumbnail_id', true);
        // get the image URL for parent category
        $image = wp_get_attachment_url($thumbnail_id);
        // print the IMG HTML for parent category
//        echo "<img src='{$image}' alt='' />";
        
        //echo '<br /><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>';
        echo '<li><a href="'. get_term_link($cat->slug, 'product_cat') .'"><span class="icon icon-clothes"></span> '. $cat->name .'</a>';
        $args2 = array(
                'taxonomy'     => $taxonomy,
                'child_of'     => 0,
                'parent'       => $category_id,
                'orderby'      => $orderby,
                'show_count'   => $show_count,
                'pad_counts'   => $pad_counts,
                'hierarchical' => $hierarchical,
                'title_li'     => $title,
                'hide_empty'   => $empty
        );
        $sub_cats = get_categories( $args2 );
        if($sub_cats) {
          echo '<div class="menu-item">';
            echo '<div class="list-cate">';
            foreach($sub_cats as $sub_category) {
              $sub_cat_id = $sub_category->term_id;
                  echo '<div class="list-item">';
                    echo '<h4><a href="'. get_term_link($sub_category->slug, 'product_cat') .'">'. $sub_category->name.'</a></h4>';
               // echo '<br /><a href="'. get_term_link($sub_category->slug, 'product_cat') .'">--'. $sub_category->name.'</a>';
              $args3 = array(
                'taxonomy'     => $taxonomy,
                'child_of'     => 0,
                'parent'       => $sub_cat_id,
                'orderby'      => $orderby,
                'show_count'   => $show_count,
                'pad_counts'   => $pad_counts,
                'hierarchical' => $hierarchical,
                'title_li'     => $title,
                'hide_empty'   => $empty
              );
              $sub_cats_child = get_categories( $args3 );
              if($sub_cats_child){
                echo '<ul>';
                foreach ($sub_cats_child as $sub_child_value){
                  echo '<li><a href="'. get_term_link($sub_child_value->slug, 'product_cat') .'">'. $sub_child_value->name.'</a></li>';
                  //echo  '<br> ----'.$sub_child_value->name ;
                  //echo '<br /><a href="'. get_term_link($sub_child_value->slug, 'product_cat') .'">--'. $sub_child_value->name.'</a>';
                }
                echo '</ul>';
              }
              echo '</div>';
            }
            echo '</div></div>';
        }
        echo "</li>";
    }
}
?>
</ul>
<!--
<ul class="menu-left">
  <li><a href="#"><span class="icon icon-clothes"></span> Thời trang - Phụ kiện</a>
    <div class="menu-item">
      <div class="list-cate">
        <div class="list-item">
          <h4><a href="#">Đồng hồ</a></h4>
          <ul>
            <li><a href="#">Đồng hồ nam</a></li>
            <li><a href="#">Đồng hồ nữ</a></li>
            <li><a href="#">Đồng hồ unisex</a></li>
            <li><a href="#">Đồng hồ bé trai</a></li>
          </ul>
          <h4><a href="#">Giầy dép</a></h4>
          <ul>
            <li><a href="#">Giày thể thao Nam</a></li>
            <li><a href="#">Giày thể thao Nữ</a></li>
            <li><a href="#">Giày tây</a></li>
          </ul>
        </div>
        <div class="list-item">
          <h4><a href="#">Ví - Túi xách</a></h4>
          <ul>
            <li><a href="#">Ví Nam</a></li>
            <li><a href="#">Ví Nữ</a></li>
            <li><a href="#">Clutch</a></li>
            <li><a href="#">Túi xách Nam</a></li>
            <li><a href="#">Túi xách Nữ</a></li>
            <li><a href="#">Ba lô Nam</a></li>
            <li><a href="#">Ba lô Nữ</a></li>
          </ul>
          <h4><a href="#">Dây nịt</a></h4>
          <ul>
            <li><a href="#">Dây nịt Nam</a></li>
            <li><a href="#">Dây nịt Nữ</a></li>
          </ul>
        </div>
        <div class="list-item">
          <h4><a href="#">Trang sức</a></h4>
          <ul>
            <li><a href="#">Nhẫn</a></li>
            <li><a href="#">Dây chuyền</a></li>
            <li><a href="#">Lắc chân</a></li>
            <li><a href="#">Cài áo</a></li>
          </ul>
          <h4><a href="#">Mắt kính</a></h4>
          <ul>
            <li><a href="#">Mắt Kính Nam</a></li>
            <li><a href="#">Mắt kính Nữ</a></li>
            <li><a href="#">Mắt kính Trẻ em</a></li>
            <li><a href="#">Mắt kính Unisex</a></li>
          </ul>
        </div>
      </div>
      <div class="list-ads">
        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/banner.png"></a>
      </div>
    </div>
  </li>
  
</ul>-->


<!--<ul class="menu-left">
  <li><a href="#"><span class="icon icon-clothes"></span> Thời trang - Phụ kiện</a>
    <div class="menu-item">
      <div class="list-cate">
        <div class="list-item">
          <h4><a href="#">Đồng hồ</a></h4>
          <ul>
            <li><a href="#">Đồng hồ nam</a></li>
            <li><a href="#">Đồng hồ nữ</a></li>
            <li><a href="#">Đồng hồ unisex</a></li>
            <li><a href="#">Đồng hồ bé trai</a></li>
          </ul>
          <h4><a href="#">Giầy dép</a></h4>
          <ul>
            <li><a href="#">Giày thể thao Nam</a></li>
            <li><a href="#">Giày thể thao Nữ</a></li>
            <li><a href="#">Giày tây</a></li>
          </ul>
        </div>
        <div class="list-item">
          <h4><a href="#">Ví - Túi xách</a></h4>
          <ul>
            <li><a href="#">Ví Nam</a></li>
            <li><a href="#">Ví Nữ</a></li>
            <li><a href="#">Clutch</a></li>
            <li><a href="#">Túi xách Nam</a></li>
            <li><a href="#">Túi xách Nữ</a></li>
            <li><a href="#">Ba lô Nam</a></li>
            <li><a href="#">Ba lô Nữ</a></li>
          </ul>
          <h4><a href="#">Dây nịt</a></h4>
          <ul>
            <li><a href="#">Dây nịt Nam</a></li>
            <li><a href="#">Dây nịt Nữ</a></li>
          </ul>
        </div>
        <div class="list-item">
          <h4><a href="#">Trang sức</a></h4>
          <ul>
            <li><a href="#">Nhẫn</a></li>
            <li><a href="#">Dây chuyền</a></li>
            <li><a href="#">Lắc chân</a></li>
            <li><a href="#">Cài áo</a></li>
          </ul>
          <h4><a href="#">Mắt kính</a></h4>
          <ul>
            <li><a href="#">Mắt Kính Nam</a></li>
            <li><a href="#">Mắt kính Nữ</a></li>
            <li><a href="#">Mắt kính Trẻ em</a></li>
            <li><a href="#">Mắt kính Unisex</a></li>
          </ul>
        </div>
      </div>
      <div class="list-ads">
        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/banner.png"></a>
      </div>
    </div>
  </li>
  <li><a href="#"><span class="icon icon-woman"></span> Làm đẹp & Sức khỏe</a>
    <div class="menu-item">
      <div class="list-cate">
        <div class="list-item">
          <h4><a href="#">Danh mục</a></h4>
          <ul>
            <li><a href="#">Nước hoa Nam</a></li>
            <li><a href="#">Nước hoa Nữ</a></li>
            <li><a href="#">Bộ sản phẩm</a></li>
            <li><a href="#">Mỹ phẩm dành cho Nam</a></li>
            <li><a href="#">Trang điểm mắt</a></li>
            <li><a href="#">Mặt nạ các loại</a></li>
            <li><a href="#">Sữa rửa mặt</a></li>
            <li><a href="#">Kem dưỡng da</a></li>
            <li><a href="#">Dầu gội</a></li>
            <li><a href="#">Sữa tắm</a></li>
          </ul>
        </div>
        <div class="list-item">
          <h4> </h4>
          <ul>
            <li><a href="#">Kem làm trắng da</a></li>
            <li><a href="#">Tạo kiểu tóc</a></li>
            <li><a href="#">Xà bông</a></li>
            <li><a href="#">Sản phẩm chống nắng</a></li>
            <li><a href="#">Tinh chất- sản phẩm đặc trị</a></li>
            <li><a href="#">Chống lão hóa</a></li>
            <li><a href="#">Sản phẩm trị mụn</a></li>
            <li><a href="#">Bộ sản phẩm</a></li>
          </ul>
        </div>
        <div class="list-item">
          <h4><a href="#">Thiết bị làm đẹp</a></h4>
          <ul>
            <li><a href="#">Máy Massage</a></li>
            <li><a href="#">Máy rửa mặt</a></li>
            <li><a href="#">Thiết bị y tế</a></li>
            <li><a href="#">Thiết bị tẩy lông</a></li>
          </ul>
          <h4><a href="#">Thực phẩm chức năng</a></h4>
          <ul>
            <li><a href="#">Thực phẩm chức năng & Vitamin</a></li>
            <li><a href="#">Collagen - sản phẩm từ tảo</a></li>
            <li><a href="#">Thực phẩm chăm sóc sắc đẹp</a></li>
            <li><a href="#">Thuốc giảm cân</a></li>
            <li><a href="#">Thuốc làm trắng da</a></li>
          </ul>
        </div>
      </div>
      <div class="list-ads">
        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/banner.png"></a>
      </div>
    </div>
  </li>
  <li><a href="#"><span class="icon icon-electricity"></span> Điện gia dụng</a>
    <div class="menu-item">
      <div class="list-cate">
        <div class="list-item">
          <h4><a href="#">Danh mục</a></h4>
          <ul>
            <li><a href="#">Bếp từ - bếp hồng ngoại</a></li>
            <li><a href="#">Lò nướng</a></li>
            <li><a href="#">Máy pha cà phê</a></li>
            <li><a href="#">Dụng cụ làm bánh</a></li>
            <li><a href="#">Bàn ủi</a></li>
            <li><a href="#">Máy hút bụi</a></li>
            <li><a href="#">Sữa rửa mặt</a></li>
            <li><a href="#">Kem dưỡng da</a></li>
            <li><a href="#">Dầu gội</a></li>
            <li><a href="#">Sữa tắm</a></li>
          </ul>
        </div>
        <div class="list-item">
          <h4><a href="#">Thương hiệu</a></h4>
          <ul>
            <li><a href="#">Wilton</a></li>
            <li><a href="#">Bosch</a></li>
            <li><a href="#">Fissler</a></li>
            <li><a href="#">WMF</a></li>
            <li><a href="#">Caso</a></li>
            <li><a href="#">Miele</a></li>
            <li><a href="#">AEG</a></li>
          </ul>
        </div>
        <div class="list-item">

        </div>
      </div>
      <div class="list-ads">
        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/banner.png"></a>
      </div>
    </div>
  </li>
  <li><a href="#"><span class="icon icon-food"></span> Mẹ và bé</a>
    <div class="menu-item">

    </div>
  </li>
  <li><a href="#"><span class="icon icon-tool"></span> Cắm trại - du lịch</a>
    <div class="menu-item">

    </div>
  </li>
  <li><a href="#"><span class="icon icon-cellphone"></span> Phụ kiện - thiết bị số</a>
    <div class="menu-item">

    </div>
  </li>
  <li><a href="#"><span class="icon icon-computer"></span> Hàng công nghệ</a>
    <div class="menu-item">

    </div>
  </li>
  <li><a href="#"><span class="icon icon-two"></span> Tươi mới mỗi ngày</a>
    <div class="menu-item">

    </div>
  </li>
  <li><a href="#"><span class="icon icon-trophy"></span> Silver Unique</a>
    <div class="menu-item"></div>

  </li>
</ul>-->