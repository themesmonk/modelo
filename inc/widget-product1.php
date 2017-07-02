<?php
/**
 * Widget Product 1
 * 
 * 
 * 
 */

add_action('widgets_init', 'register_product_widget');

function register_product_widget(){
  register_widget('modelo_product');
}

if( !class_exists( 'modelo_product' ) ) :
class modelo_product extends WP_Widget {
    /**
     * Register Widget with Wordpress
     * 
     */
    public function __construct() {
      parent::__construct(
        'modelo_product', 'TM WooCommerce Product Slider', array(
          'description' => __('The Product Slide Choose your type', 'modelo')
          )
        );
    }

    /**
     * Helper function that holds widget fields
     * Array is used in update and form functions
     */
    private function widget_fields() {

      $prod_type = array(
        'category' => __('Category', 'modelo'),
        'latest_product' => __('Latest Product', 'modelo'),
        'upsell_product' => __('UpSell Product', 'modelo'),
        'feature_product' => __('Feature Product', 'modelo'),
        'on_sale' => __('On Sale Product', 'modelo'),
        );
      $taxonomy     = 'product_cat';
      $empty        = 1;
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
          $woocommerce_categories = array();
          $woocommerce_categories_obj = get_categories($args);
          $woocommerce_categories[''] = 'Select Product Category:';
          foreach ($woocommerce_categories_obj as $category) {
            $woocommerce_categories[$category->term_id] = $category->name;
          }

          $fields = array(
            'product_title' => array(
              'modelo_widgets_name' => 'product_title',
              'modelo_widgets_title' => __('Title', 'modelo'),
              'modelo_widgets_field_type' => 'text',

              ),
            'product_type' => array(
              'modelo_widgets_name' => 'product_type',
              'modelo_widgets_title' => __('Select Product Type', 'modelo'),
              'modelo_widgets_field_type' => 'select',
              'modelo_widgets_field_options' => $prod_type

              ),
            'product_category' => array(
              'modelo_widgets_name' => 'product_category',
              'modelo_widgets_title' => __('Select Product Category', 'modelo'),
              'modelo_widgets_field_type' => 'select',
              'modelo_widgets_field_options' => $woocommerce_categories

              ),
            
            'product_number' => array(
              'modelo_widgets_name' => 'number_of_prod',
              'modelo_widgets_title' => __('Select the number of Product to show', 'modelo'),
              'modelo_widgets_field_type' => 'number',
              ),
            

            );
return $fields;
}

public function widget($args, $instance){
  extract($args);
  $product_title      =   $instance['product_title'];
  $product_type       =   $instance['product_type'];
  $product_category   =   $instance['product_category'];
  $product_number     =   $instance['number_of_prod'];
  $product_label_custom = '';
  $product_args       =   '';
  if($product_type == 'category'){
    $product_args = array(
      'post_type' => 'product',
      'tax_query' => array(array('taxonomy'  => 'product_cat',
       'field'     => 'id', 
       'terms'     => $product_category                                                                 
       )),
      'posts_per_page' => $product_number
      );
  }

  elseif($product_type == 'latest_product'){
    $product_label_custom = __('New!', 'modelo');
    $product_args = array(
      'post_type' => 'product',
      'posts_per_page' => $product_number
      );
  }

  elseif($product_type == 'upsell_product'){
    $product_args = array(
      'post_type'         => 'product',
      'posts_per_page'    => 10,
      'meta_key'          => 'total_sales',
      'orderby'           => 'meta_value_num',
      'posts_per_page'    => $product_number
      );
  }

  elseif($product_type == 'feature_product'){
    $product_args = array(
     'post_type'        => 'product',  
     'meta_key'         => '_featured',  
     'meta_value'       => 'yes',  
     'posts_per_page'   => $product_number   
     );
  }

  elseif($product_type == 'on_sale'){
    $product_args = array(
      'post_type'      => 'product',
      'meta_query'     => array(
        'relation' => 'OR',
          array( // Simple products type
            'key'           => '_sale_price',
            'value'         => 0,
            'compare'       => '>',
            'type'          => 'numeric'
            ),
          array( // Variable products type
            'key'           => '_min_variation_sale_price',
            'value'         => 0,
            'compare'       => '>',
            'type'          => 'numeric'
            )
          )
      );
  }

  ?>
  <div class="container">
    <div class="row">
	<div class="col-md-12">
      <?php echo $before_widget; ?>
      <?php echo $before_title.esc_attr($product_title).$after_title; ?>
      <ul class="new-prod-slide woo-products list-inline">
        <?php
        $count = 0;
        $product_loop = new WP_Query( $product_args );
        while ( $product_loop->have_posts() ) : $product_loop->the_post(); 
        global $product; 
        $count+=0.4;
        ?>
        <li class="wow item type-product flipInY" data-wow-delay="<?php echo $count ?>s" data-wow-offset="200">
          				<?php if($product->is_on_sale() ) {?>
					<span class="onsale"><?php _e('Sale!', 'modelo'); ?></span>
				<?php } else {} ?>
				
                  <div class="shop-thumb text-center"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('full'); ?></a></div><!-- /.shop-thumb -->
                  <div class="product-bottom">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php echo $product->get_categories( ', ', '<span class="product-cat">' . _n( '', '', sizeof( get_the_terms( $post->ID, 'product_cat' ) ), 'modelo' ) . ' ', '.</span>' ); ?>
					
					<?php global $product;
							if ( $price_html = $product->get_price_html() ) :?>
                    <a class="pricing" href="#"><?php echo $price_html; ?></a>
					<?php endif; ?>
					
					<div class="product-rating">
						<?php if ( $rating_html = $product->get_rating_html() ) { ?>
							<?php echo $rating_html; ?>
						<?php } else {
						echo '<div class="star-rating" title="Rated 5.00 out of 5"></div>' ;
						}?>
					</div>
                    <div class="cwqbox">
                      <ul class="list-inline">
                        <li class="cart"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></li>
                        <li class="quickview"><a href="#" class="button yith-wcqv-button" data-product_id="<?php echo get_the_ID(); ?>" style="zoom: 1;"><i class="fa fa-eye"></i></a></li>						
                      </ul><!-- /.list-inline -->
                    </div><!-- /.cwqbox -->
                  </div><!-- /.product-bottom -->
        </li>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </ul>
    <?php echo $after_widget; ?>
  </div>
  </div>
</div><!-- end product-slider-->
<?php
}

/**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @uses  modelo_widgets_updated_field_value()   defined in widget-fields.php
     *
     * @return  array Updated safe values to be saved.
     */
public function update($new_instance, $old_instance) {
  $instance = $old_instance;

  $widget_fields = $this->widget_fields();

        // Loop through fields
  foreach ($widget_fields as $widget_field) {

    extract($widget_field);

            // Use helper function to get updated field values
    $instance[$modelo_widgets_name] = modelo_widgets_updated_field_value($widget_field, $new_instance[$modelo_widgets_name]);
  }

  return $instance;
}

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     *
     * @uses  modelo_widgets_show_widget_field()   defined in widget-fields.php
     */
    public function form($instance) {
      $widget_fields = $this->widget_fields();

        // Loop through fields
      foreach ($widget_fields as $widget_field) {

            // Make array elements available as variables
        extract($widget_field);
        $modelo_widgets_field_value = !empty($instance[$modelo_widgets_name]) ? esc_attr($instance[$modelo_widgets_name]) : '';
        modelo_widgets_show_widget_field($this, $widget_field, $modelo_widgets_field_value);
      }
    }
  }
endif;