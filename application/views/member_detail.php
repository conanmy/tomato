<?php include('head.php'); ?>
<div class="main">
<?php 
    $member = $members['0'];
?>
<?php if($this->session->userdata('verify') == 'true'): ?> 
<div>
    <img class="avatar-big" src="<?php echo base_url().'asset/img/avatar/'.$member->id.'.jpg'; ?>" />
    <div class="info">
        <div class="title">
            <span><?php echo $member->name; ?></span>
        </div>
        <ul>
          <li>
            <span>性别：</span><?php echo $member->gender; ?>
          </li>
          <li>
            <span>足迹：</span>
            <?php
                $footprint = $member->footprint - 0;
                if ($footprint == 0) {
                    echo '0';
                }
                else {
                    $i = 1;
                    while ($i <= $footprint) {
                        if ($i%2 == 0) {
                            echo '<span class="footprint foot-right"></span>';
                        }
                        else {
                            echo '<span class="footprint foot-left"></span>';
                        }
                        $i ++;
                    }
                }
                
            ?>
          </li>
          <li>
              <span>生日：</span><strong><?php echo $member->birthday; ?></strong>
          </li>
          <li>
            <span>大学：</span><?php echo $member->university; ?>
          </li>
          <li>
            <span>所在单位及工作：</span><?php echo $member->job; ?>
          </li>
          <?php
            if ($member->page) {
                echo '<li>'.
                       '<span>个人页面：</span>'.$member->page.
                     '</li>';
            }
          ?>
          <li>
            <span>自我介绍：</span><?php echo $member->intro; ?>
          </li>
        </ul>
    </div>
</div>
<?php elseif($this->session->userdata('logged_in')): ?>
<div>对不起，只有头像等信息经过真实性审核才可以查看其它成员信息。</div>
<?php else : ?>
<div>对不起，您还没有登录</div>
<?php endif; ?>
</div>
<div class="side">
    <?php
        if (!$this->session->userdata('logged_in')) {
            include('unlogged.php');
        }
    ?>
</div>
<?php include('foot.php'); ?>