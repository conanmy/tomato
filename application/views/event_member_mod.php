<div class="event-member">
    <h2 class="tomato_color">活动成员</h2>
    <div class="clearfix">
        <?php foreach($join as $item): ?>
        <div class="member-item" for="<?php echo $item; ?>">
            <div href="<?php echo base_url().'index.php/member/detail/'.$item; ?>">
                <img class="avatar-small" src="<?php echo base_url().'asset/img/avatar/'.$item.'.jpg'; ?>" />
            </div>
            <span class="delete-member link">删除</span>
        </div>
        <?php endforeach; ?>
    </div>
    <div>
        <div class="button" id="member-confirm">确认活动成员</div><span class="error" id="event-member-error"></span>
    </div>
    
</div>
<script type="text/javascript">
    $('.delete-member').each(function(key, item) {
        item.onclick = function() {
            $(item.parentNode).remove();
        }
    })
    
    //提示并过一段时间消失，公用方法
    function tipandfade(node, str) {
        node.innerHTML = str;
        window.setTimeout(function() {
            node.innerHTML = '';
        }, 4000);
    }
    
    var userId = '<?php echo $event->id; ?>';
    $('#member-confirm')[0].onclick = function() {
        var member = [];
        $('.member-item').each(function(key, item) {
            member.push($(item).attr('for'));
        })
        $.get(
            '../update/',
            {
                id: userId,
                key: 'join',
                value: member.join(',')
            }
        )
        .done(function() {
            window.location.reload();
        })
        .fail(function() {
            tipandfade($('#event-member-error')[0], '对不起，确认失败');
        });
    }
</script>