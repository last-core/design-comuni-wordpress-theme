<?php
global $obj, $the_query, $load_posts, $load_card_type, $additional_filter;
?>
<div class="container py-5">
    <div id="load-more" class="row g-4">
        <?php foreach ($posts as $post) {
            $load_card_type = "amministrazione-sub";
            get_template_part("template-parts/amministrazione/card");
        } ?>
    </div>
    <?php get_template_part("template-parts/search/more-results"); ?>
</div>