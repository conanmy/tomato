<img class="avatar-normal" src="<?php echo base_url().'asset/img/avatar/'.$member->id.'.jpg'; ?>" />
<div class="info">
    <div class="title">
      <a href="<?php echo base_url() ?>index.php/member/detail/<?php echo $member->id; ?>">
        <span><?php echo $member->name; ?></span>
      </a>
    </div>
    <ul>
      <li>
        <span>性别：</span><?php echo $member->gender; ?>
      </li>
      <li>
          <span>生日：</span><strong><?php echo $member->birthday; ?></strong>
      </li>
    </ul>
</div>
