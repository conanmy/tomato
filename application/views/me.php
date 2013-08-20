<?php include('head.php'); ?>
<div class="main personal-page">
    <h2>个人信息</h2>
    <div class="clearfix">
        <?php $me = $info['0']; ?>
        <div class="avatar-wrapper">
            <?php if($me->photo == 'true'): ?>
            <img class="avatar-normal" src="<?php echo base_url().'asset/img/avatar/'.$me->id.'.jpg'; ?>" />
            <a href="../avatar/">修改头像</a>
            <?php else: ?>
                    您需要上传头像才能看到其他成员的信息，<a href="../avatar/">立即上传</a>
            <?php endif; ?>
        </div>
        <div class="info">
            <div class="title">
                <span><?php echo $me->name; ?></span>
            </div>
            <ul>
              <li>
                <span>性别：</span><?php echo $me->gender; ?>
              </li>
              <li>
                <span>足迹：</span>
                <?php
                    $footprint = $me->footprint - 0;
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
                  <span>生日：</span><strong><?php echo $me->birthday; ?></strong>
              </li>
              <li>
                <span>大学：</span><?php echo $me->university; ?>
              </li>
              <li>
                <span>所在单位及工作：</span><?php echo $me->job; ?>
              </li>
              <?php
                if ($me->page) {
                    echo '<li>'.
                           '<span>个人页面：</span>'.$me->page.
                         '</li>';
                }
              ?>
              <li>
                <span>自我介绍：</span><?php echo $me->intro; ?>
              </li>
            </ul>
            <a href="<?php echo base_url().'index.php/me/mod/'.$me->id; ?>">修改个人信息</a>
        </div>
    </div>
    <h2>我的活动</h2>
    <ul>
        <?php foreach($myevents as $myevent): ?>
        <li>
            <a href="<?php echo base_url().'index.php/event/manage/'.$myevent->id; ?>"><?php echo $myevent->name; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
    
    <?php if (isset($candidates)): ?> 
    <h2>候选领主</h2>
    <ul>
        <?php foreach($candidates as $candidate): ?>
        <li>
            <a href="<?php echo base_url().'index.php/member/detail/'.$candidate->id; ?>"><?php echo $candidate->name; ?></a>
            <span class="approve link" for="<?php echo $candidate->id; ?>">批准</span>
            <span class="error" id="<?php echo $candidate->id; ?>-approve-error"></span>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    
    <?php if (isset($toverifys)): ?>
    <h2>头像待审</h2>
    <ul>
        <?php foreach($toverifys as $toverify): ?>
        <li>
            <a href="<?php echo base_url().'index.php/member/detail/'.$toverify->id; ?>"><?php echo $toverify->name; ?></a>
            <span class="pass link" for="<?php echo $toverify->id; ?>">通过</span>
            <span class="error" id="<?php echo $toverify->id; ?>-pass-error"></span>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
</div>
<div class="side">
    <?php
        if (!$this->session->userdata('logged_in')) {
            include('unlogged.php');
        }
    ?>
</div>
<script type="text/javascript">
    $('.approve').each(function(key, item) {
        item.onclick = function() {
            var userid = $(item).attr('for');
            $.get(
                '<?php echo base_url().'index.php/me/approve/'; ?>',
                {
                    id: userid
                }
            )
            .done(function() {
                window.location.reload();
            })
            .fail(function() {
                tipandfade($('#' +　userid +　'-approve-error')[0], '对不起，批准失败');
            });
        }
    })
    $('.pass').each(function(key, item) {
        item.onclick = function() {
            var userid = $(item).attr('for');
            $.get(
                '<?php echo base_url().'index.php/me/pass/'; ?>',
                {
                    id: userid
                }
            )
            .done(function() {
                window.location.reload();
            })
            .fail(function() {
                tipandfade($('#' +　userid +　'-pass-error')[0], '对不起，通过失败');
            });
        }
    })
    //提示并过一段时间消失，公用方法
    function tipandfade(node, str) {
        node.innerHTML = str;
        window.setTimeout(function() {
            node.innerHTML = '';
        }, 4000);
    }
</script>
<?php include('foot.php'); ?>