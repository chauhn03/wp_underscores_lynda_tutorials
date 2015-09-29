<?php

/* 
 * Footer widgets
 */

<<<<<<< HEAD
if(!is_active_sidebar('sidebar-2')){
    return;
}
?>

<div id="supplementary">
    <div id="footer-sidebar" class="footer-widgets widget-area clear" role="complementary">
        <?php dynamic_sidebar('sidebar-2')?>
    </div> <!-- #footers-sidebar -->
</div> <!-- #supplementary-->

=======
if (!is_active_sidebar('sidebar-2')){
    return;
}
?>
<div id="supplementary">
    <div id="footer-widgets" class="footer-widgets widget-area clear" role="complementary">
        <?php dynamic_sidebar('sidebar-2'); ?>
    </div> <!-- #footer-sidebar -->
</div> <!-- #supplementary -->
>>>>>>> develop
