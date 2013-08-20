<?php include('head.php'); ?>
<div class="main">
    <h1>关于番茄网领主</h1>
    <p>番茄网希望有更多人组织大家见面交流。成为领主，你既有机会展示自己的组织才能，认识更多单身朋友，还可以赚一些零用钱。</p>
    <div>
        <div class="button" id="candidate">申请成为领主</div><span class="error" id="candidate-tip"></span>
    </div>
</div>
<script type="text/javascript">
    //提示并过一段时间消失，公用方法
    function tipandfade(node, str) {
        node.innerHTML = str;
        window.setTimeout(function() {
            node.innerHTML = '';
        }, 4000);
    }
    
    $('#candidate')[0].onclick = function() {
        $.get(
            '../apply/',
            {
                id: '<?php echo $this->session->userdata('user_id'); ?>'
            }
        )
        .done(function() {
            tipandfade($('#candidate-tip')[0], '申请成功，管理员会尽快联系您');
        })
        .fail(function() {
            tipandfade($('#candidate-tip')[0], '对不起，申请失败');
        });
    }
</script>
<div class="side">
    <?php
        if (!$this->session->userdata('logged_in')) {
            include('unlogged.php');
        }
    ?>
</div>
<?php include('foot.php'); ?>