<div class="event-member">
    <h2 class="tomato_color">活动成员</h2>
    <div class="clearfix">
        <?php foreach($join as $item): ?>
        <a href="<?php echo base_url().'index.php/member/detail/'.$item; ?>">
            <img class="avatar-small" src="<?php echo base_url().'asset/img/avatar/'.$item.'.jpg'; ?>" />
        </a>
        <?php endforeach; ?>
    </div>
</div>