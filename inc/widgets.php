<?php
class ft_menu extends wp_widget
{
    public function __construct()
    {
        parent::__construct('ft_menu', 'BICT Footer: Menu', array('classname' => '', 'description' => 'widget ft_menu'));
    }

    public function form($instance)
    {
        $title_name = $this->get_field_name('title');
        $title_id = $this->get_field_id('title');
        $title_value = $instance['title'];
        $data = array('type' => 'text', 'class' => 'widefat', 'name' => $title_name, 'id' => $title_id, 'value' => $title_value);
        echo "<p><label>Tiêu đề:</label>";
        echo $this->input($data);
        echo "</p>";

        $menu_name = $this->get_field_name('menu');
        $menu_id = $this->get_field_id('menu');
        $menu_value = $instance['menu'];
        $arg = array('taxonomy' => 'nav_menu');
        $menus = get_terms($arg);

        ?>
        <p>Chọn menu:</p>
        <select id="<?php echo $menu_id ?>" name="<?php echo $menu_name ?>">
            <?php
            foreach ($menus as $menu):
                ?>
                <option value="<?php echo $menu->term_id; ?>" <?php echo ($menu_value == $menu->term_id) ? 'selected' : '' ?>><?php echo $menu->name; ?></option>
            <?php endforeach; ?>
        </select>
        <?php
    }

    public function widget($args, $instance)//Design html form
    {
        extract($instance);//Hàm biến mảng thành chuỗi.(Thay thế cho foreach để in giá trị ra màn hình)
        ?>
        <div class="col-md-3">
        <div class="ft-item">
            <h3 class="ft-title"><?php echo esc_attr($title) ?></h3>
            <div class="ft-content">
                <?php wp_nav_menu(array('menu' => $menu_value, 'container' => false,'menu_class'=>'ft-menu')); ?>
            </div>
        </div>
    </div>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

    public function input($data)
    {
        $str = '';
        foreach ($data as $key => $val) {
            $str .= $key . "='" . $val . "'";
        }
        return "<input $str />";
    }
}

function ft_menu()
{
    register_widget('ft_menu');
}

add_action('widgets_init', 'ft_menu');

class ft_info extends wp_widget
{
    public function __construct()
    {
        parent::__construct('ft_info', 'BICT Footer: Thông tin', array('classname' => '', 'description' => 'widget ft_info'));
    }

    public function form($instance)
    {
        $desc_name = $this->get_field_name('desc');
        $desc_id = $this->get_field_id('desc');
        $desc_value = $instance['desc'];
        $data = array('type' => 'text', 'class' => 'widefat', 'name' => $desc_name, 'id' => $desc_id, 'value' => $desc_value);
        echo "<p><label>Mô tả thông tin:</label></p>";
        ?>
        <textarea name="<?php echo $desc_name ?>" id="<?php echo $desc_id ?>" cols="45" rows="10"><?php echo $desc_value ?></textarea>
        <?php

        $address_name = $this->get_field_name('address');
        $address_id = $this->get_field_id('address');
        $address_value = $instance['address'];
        $data = array('type' => 'text', 'class' => 'widefat', 'name' => $address_name, 'id' => $address_id, 'value' => $address_value);
        echo "<p><label>Địa chỉ:</label></p>";
        echo $this->input($data);

        $tel_name = $this->get_field_name('tel');
        $tel_id = $this->get_field_id('tel');
        $tel_value = $instance['tel'];
        $data = array('type' => 'text', 'class' => 'widefat', 'name' => $tel_name, 'id' => $tel_id, 'value' => $tel_value);
        echo "<p><label>Hotline:</label></p>";
        echo $this->input($data);

        $web_name = $this->get_field_name('web');
        $web_id = $this->get_field_id('web');
        $web_value = $instance['web'];
        $data = array('type' => 'text', 'class' => 'widefat', 'name' => $web_name, 'id' => $web_id, 'value' => $web_value);
        echo "<p><label>Website:</label></p>";
        echo $this->input($data);

        $email_name = $this->get_field_name('email');
        $email_id = $this->get_field_id('email');
        $email_value = $instance['email'];
        $data = array('type' => 'text', 'class' => 'widefat', 'name' => $email_name, 'id' => $email_id, 'value' => $email_value);
        echo "<p><label>Email:</label></p>";
        echo $this->input($data);
    }

    public function widget($args, $instance)//Design html form
    {
        extract($instance);//Hàm biến mảng thành chuỗi.(Thay thế cho foreach để in giá trị ra màn hình)
        ?>
        <div class="col-md-3">
        <div class="ft-item">
            <div class="ft-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/logo.png" alt=""></a>
            </div>
            <div class="ft-content">
                <p>
                    <?php echo $desc ?>
                </p>
                <ul class="ft-info">
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>Địa chỉ: <?php echo $address ?>
                    </li>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>Điện thoại: <b><?php echo $tel ?></b>
                    </li>
                    <li>
                        <i class="fa fa-globe" aria-hidden="true"></i>Website: <?php echo $web ?>
                    </li>
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i>Email: <?php echo $email ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

    public function input($data)
    {
        $str = '';
        foreach ($data as $key => $val) {
            $str .= $key . "='" . $val . "'";
        }
        return "<input $str />";
    }
}

function ft_info()
{
    register_widget('ft_info');
}

add_action('widgets_init', 'ft_info');


class ft_news extends wp_widget
{
    public function __construct()
    {
        parent::__construct('ft_news', 'BICT Footer: Bài viết mới', array('classname' => '', 'description' => 'widget ft_news'));
    }

    public function form($instance)
    {
        $title_name = $this->get_field_name('title');
        $title_id = $this->get_field_id('title');
        $title_value = $instance['title'];
        $data = array('type' => 'text', 'class' => 'widefat', 'name' => $title_name, 'id' => $title_id, 'value' => $title_value);
        echo "<p><label>Tiêu đề:</label></p>";
        echo $this->input($data);

        $num_name = $this->get_field_name('num');
        $num_id = $this->get_field_id('num');
        $num_value = $instance['num'];
        $data = array('type' => 'number', 'class' => 'widefat', 'name' => $num_name, 'id' => $num_id, 'value' => $num_value);
        echo "<p><label>Số lượng bài:</label>";
        echo $this->input($data);
    }

    public function widget($args, $instance)//Design html form
    {
        extract($instance);//Hàm biến mảng thành chuỗi.(Thay thế cho foreach để in giá trị ra màn hình)
        ?>
        <div class="col-md-3">
            <div class="ft-item">
                <h3 class="ft-title"><?php echo $title ?></h3>
                <div class="ft-content">
                    <ul class="ft-news">
                    <?php
                    $query = new WP_Query(array('posts_per_page' => $num, 'orderby' => 'date', 'order' => 'desc','post_type'=>'post'));
                    while ($query->have_posts()):$query->the_post();
                        ?>
                        <li>
                            <div class="thumb">
                                <a href="<?php the_permalink() ?>">
                                <?php if (has_post_thumbnail()):the_post_thumbnail('p-thumbnail');
                                else: echo '<img src="http://via.placeholder.com/300x200" alt="">';
                                endif;
                                ?>
                                </a>
                            </div>
                            <div class="info">
                                <h5><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
                            </div>
                        </li>
                    <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

    public function input($data)
    {
        $str = '';
        foreach ($data as $key => $val) {
            $str .= $key . "='" . $val . "'";
        }
        return "<input $str />";
    }
}

function ft_news()
{
    register_widget('ft_news');
}

add_action('widgets_init', 'ft_news');

class search extends wp_widget
{
    public function __construct()
    {
        parent::__construct('search', 'BICT Tìm kiếm', array('classname' => '', 'description' => 'widget search'));
    }

    public function form($instance)
    {
        
    }

    public function widget($args, $instance)//Design html form
    {
        extract($instance);//Hàm biến mảng thành chuỗi.(Thay thế cho foreach để in giá trị ra màn hình)
        ?>
        <div class="widget">
            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <input type="search" class="search-field form-control"
                placeholder="<?php echo esc_attr_x( 'Tìm kiếm …', 'placeholder' ) ?>"
                value="<?php echo get_search_query() ?>" name="s" />
                <button type="submit" class="search-submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

    public function input($data)
    {
        $str = '';
        foreach ($data as $key => $val) {
            $str .= $key . "='" . $val . "'";
        }
        return "<input $str />";
    }
}

function search()
{
    register_widget('search');
}

add_action('widgets_init', 'search');

class sb_info extends wp_widget
{
    public function __construct()
    {
        parent::__construct('sb_info', 'BICT Thông tin liên hệ', array('classname' => '', 'description' => 'widget sb_info'));
    }

    public function form($instance)
    {
        $title_name = $this->get_field_name('title');
        $title_id = $this->get_field_id('title');
        $title_value = $instance['title'];
        $data = array('type' => 'text', 'class' => 'widefat', 'name' => $title_name, 'id' => $title_id, 'value' => $title_value);
        echo "<p><label>Tiêu đề:</label></p>";
        echo $this->input($data);

        $tel_name = $this->get_field_name('tel');
        $tel_id = $this->get_field_id('tel');
        $tel_value = $instance['tel'];
        $data = array('type' => 'text', 'class' => 'widefat', 'name' => $tel_name, 'id' => $tel_id, 'value' => $tel_value);
        echo "<p><label>Hotline:</label></p>";
        echo $this->input($data);

        $mail_name = $this->get_field_name('mail');
        $mail_id = $this->get_field_id('mail');
        $mail_value = $instance['mail'];
        $data = array('type' => 'text', 'class' => 'widefat', 'name' => $mail_name, 'id' => $mail_id, 'value' => $mail_value);
        echo "<p><label>Email:</label></p>";
        echo $this->input($data);
    }

    public function widget($args, $instance)//Design html form
    {
        extract($instance);//Hàm biến mảng thành chuỗi.(Thay thế cho foreach để in giá trị ra màn hình)
        ?>
        <div class="widget">
            <h2 class="widgettitle"><?php echo $title ?></h2>
            <ul>
                <li>
                    <div class="item-logo">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="item-info">
                        <b>Hotline:</b></br>
                        <a href="tel:<?php echo $tel ?>"><?php echo $tel ?></a>
                    </div>
                </li>
                <li>
                    <div class="item-logo">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="item-info">
                        <b>Email:</b></br>
                        <a href="mailto:<?php echo $mail ?>"><?php echo $mail ?></a>
                    </div>
                </li>
                
            </ul>
        </div>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

    public function input($data)
    {
        $str = '';
        foreach ($data as $key => $val) {
            $str .= $key . "='" . $val . "'";
        }
        return "<input $str />";
    }
}

function sb_info()
{
    register_widget('sb_info');
}

add_action('widgets_init', 'sb_info');