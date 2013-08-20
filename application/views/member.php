<?php include('head.php'); ?>
<div class="main">
    <?php if($this->session->userdata('verify') == 'true'): ?> 
    <h1>成员列表</h1>
    <ul class="member-list">
    <?php foreach($members as $member): ?>
    <li class="list-entry clearfix">
        <?php include('member_item.php'); ?>
    </li>
    <?php endforeach; ?>
    </ul>
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