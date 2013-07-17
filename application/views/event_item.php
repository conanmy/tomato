<div class="info">
    <div class="title">
      <a href="<?php echo base_url() ?>index.php/event/detail/<?php echo $event->id; ?>" title="<?php echo $event->name; ?>">
        <span itemprop="summary"><?php echo $event->name; ?></span>
      </a>
    </div>
    <ul>
      <li class="event-time">
        <span>时间：</span><?php echo $event->begin; ?>
      </li>
      <li>
        <span>地点：</span><?php echo $event->place; ?>
      </li>
      <li class="fee">
          <span>费用：</span><strong><?php echo $event->fee; ?></strong>
      </li>
      <li>
        <span>发起：</span>
        <a href="http://site.douban.com/maolivehouse/"><?php echo $event->owner; ?></a>
      </li>
    </ul>
    <p class="counts">
        <span>人参加</span>
    </p>
</div>