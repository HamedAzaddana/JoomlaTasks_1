<?php

defined('_JEXEC') or die;
?>

<?php if ($users) : ?>
    <div id="mod_ha_last_users_default">
        <ul>
            <?php foreach ($users as $user) : ?>
                <li>
                    <span class="mh_name"><?php echo $user->name; ?></span>
                    <span class="mh_email">(<?php echo $user->email; ?>)</span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php else : ?>
    <p class="mh_no_user">
        کاربری یافت نشد !
    </p>
<?php endif; ?>