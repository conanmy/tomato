<?php include('head.php'); ?>
<style>
    p {
        width: 600px;
        line-height: 20px;
    }
</style>
<div class="main">
    <h1>关于番茄网</h1>
    <p>番茄网致力于打造一个Family，将城市里的可爱单身青年们聚集起来。通过各种有趣的活动，让大家一起分享快乐，遇见爱。</p>
    <p>成员们可以申请成为领队，策划有趣的活动，带大家一起玩。</p>
    <p>初期的活动主要有桌游大作战和城市微旅行，等Family逐渐壮大，会组织短途的体验式或探险式旅行。</p>
    <p>希望大家一起发挥奇思妙想，发现更多的Idea。</p>
</div>
<div class="side">
    <?php
        if (!$this->session->userdata('logged_in')) {
            include('unlogged.php');
        }
    ?>
</div>
<?php include('foot.php'); ?>