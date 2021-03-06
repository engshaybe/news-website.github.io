<?php

class td_module_9 extends td_module {

    function __construct($post, $module_atts = array()) {
        //run the parrent constructor
        parent::__construct($post, $module_atts);
    }

    function render() {
        ob_start();

        $title_length = $this->get_shortcode_att('m9_tl');
        $modified_date = $this->get_shortcode_att('show_modified_date');
        ?>

        <div class="<?php echo $this->get_module_classes();?>">

            <div class="item-details">
                <?php echo $this->get_title($title_length);?>
                <div class="meta-info">
                    <?php if (td_util::get_option('tds_category_module_9') == 'yes') { echo $this->get_category(); }?>
                    <?php echo $this->get_author();?>
                    <?php echo $this->get_date($modified_date);?>
                </div>
            </div>

        </div>

        <?php return ob_get_clean();
    }
}