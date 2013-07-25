<div>
    <img class="avatar-normal" src="<?php echo $member->photo; ?>" />
    <div class="info">
        <div class="title">
          <a href="<?php echo base_url() ?>index.php/member/detail/<?php echo $member->id; ?>" title="<?php echo $member->name; ?>">
            <span itemprop="summary"><?php echo $member->name; ?></span>
          </a>
        </div>
        <ul>
          <li class="member-time">
            <span>性别：</span><?php echo $member->gender; ?>
          </li>
          <li>
            <span>自我介绍：</span><?php echo $member->intro; ?>
          </li>
          <li class="fee">
              <span>生日：</span><strong><?php echo $member->birthday; ?></strong>
          </li>
        </ul>
    </div>
</div>