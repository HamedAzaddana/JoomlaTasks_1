<?php
defined('_JEXEC') or die;
?>
<?php if ($users) : ?>
    <div id="mod_ha_last_users_slider">
        <?php foreach ($users as $user) : ?>
            <div class="mha_card_user">
                <img  src="<?php echo $avatar_url; ?>" alt="">
                <p><?php echo $user->name; ?></p>
                <p>(<?php echo $user->email; ?>)</p>
            </div>
        <?php endforeach; ?>
    </div>
<?php else : ?>
    <p class="mh_no_user">
        کاربری یافت نشد !
    </p>
<?php endif; ?>
<script>
    jQuery(document).ready(function($) {
        $('#mod_ha_last_users_slider').slick({
            autoplay: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 1200,

        });
    });
</script>