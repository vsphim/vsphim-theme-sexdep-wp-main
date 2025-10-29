<?php
class WG_oPhim_text_header extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'wg_text_header', // Base ID
            __( 'Ophim Text Header', 'ophim' ), // Name
            array( 'description' => __( 'Mẫu Text Header', 'ophim' ), ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract($args);
        ob_start();
        echo $instance['text_header'] ?? '';
        echo $after_widget;
        $html = ob_get_contents();
        ob_end_clean();
        echo $html;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    function form($instance)
    {
        $instance = wp_parse_args( (array) $instance, array(
            'title' 	=> '',
            'slug' 	=> '#',
            'postnum' 	=> 5,
            'style'		=> '1',
            'status'		=> 'all',
            'orderby'		=> 'new',
            'categories'		=> 'all',
            'actors'		=> 'all',
            'directors'		=> 'all',
            'genres'		=> 'all',
            'regions'		=> 'all',
            'years'		=> 'all',
        ) );
        extract($instance);

        ?>
        <p>
            <label for="<?php echo $this->get_field_id('text_header'); ?>"><?php _e('Text Header', 'ophim') ?></label>
            <br />
            <textarea class="widefat" rows="10" id="<?php echo $this->get_field_id('text_header'); ?>" name="<?php echo $this->get_field_name('text_header'); ?>"  ><?php if(isset($instance['text_header']) && $instance['text_header']){ echo $instance['text_header'];}else{ ?>  <div class="top-fixed">
                <h2>CHÀO MỪNG ĐẾN VỚI NHÀ HÀNG NANGCUC TV</h2>
                <p class="d-none d-md-block">Tinh hoa “ấm thực”người lớn. Hội tụ các đầu bếp trứ danh từ Âu tới Á.<br>Món ngon mỗi ngày, hoàn toàn miễn phí</p><p class="d-block d-md-none">Món ngon mỗi ngày Từ Âu đến Á<br>Hoàn toàn miễn phí</p>
            </div><?php } ?></textarea>
        </p>

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
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['text_header'] = $new_instance['text_header'];
        return $instance;
    }

}
function register_new_widget_text_header() {
    register_widget( 'WG_oPhim_text_header' );
}
add_action( 'widgets_init', 'register_new_widget_text_header' );
