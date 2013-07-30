<div>
    <div class="title">
      <a href="<?php echo base_url() ?>index.php/event/detail/<?php echo $event->id; ?>" title="<?php echo $event->name; ?>">
        <span itemprop="summary"><?php echo $event->name; ?></span>
      </a>
    </div>
    <ul>
      <li class="event-time">
        <span>时间：</span>
        <?php
            if (substr($event->begin, 0, 10) == substr($event->end, 0, 10)) {
                echo substr($event->begin, 0, 16).' 至 '.substr($event->end, 11, 5);
            }
            else {
                echo substr($event->begin, 0, 16).' 至 '.substr($event->end, 0, 16); 
            }
        ?>
      </li>
      <li>
        <span>地点：</span><?php echo $event->place; ?>
      </li>
      <li class="fee">
          <span>费用：</span><strong><?php echo $event->fee; ?></strong>
      </li>
      <li>
        <span>发起人：</span>
        <a href="<?php echo base_url() ?>index.php/member/detail/<?php echo $event->owner; ?>">No.<?php echo $event->owner; ?></a>
      </li>
    </ul>
</div>