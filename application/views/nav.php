<div class="nav-wrapper tomato_back">
    <div class="nav">
        <a href="<?php echo base_url() ?>index.php/event/" class="logo"></a>
        <ul>
            <li><a href="<?php echo base_url() ?>index.php/event/">活动</a></li>
            <li><a href="<?php echo base_url() ?>index.php/member/">成员</a></li>
            <li><a href="<?php echo base_url() ?>index.php/about/">关于</a></li>
            <?php
                if ($this->session->userdata('logged_in')) {
                    echo '<li><a href="' . base_url() . 'index.php/me/index/">我的主页</a></li>';
                }
            ?>
        </ul>
    </div>
</div>
