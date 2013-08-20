<?php include('head.php'); ?>
<?php
    $event = $events['0'];
?>
<h1>修改活动</h1>

<div class="create-event-form">
    <div class="row">
        <label class="field">活动标题</label>
        <div class="item">
            <span><input type="text" class="basic-input" id="event-name" name="name"/></span>
            <span class="tip"></span>
            <span class="mod link" for="name">保存修改</span>
            <span class="error" id="name-error"></span>
        </div>
    </div>
    <div class="row">
        <label class="field">开始时间</label>
        <div class="item">
            <input id="event-begin" class="basic-input" type="text" placeholder="日期" />
            <span>
                <select class="basic-input" id="event-begin-time" name="begin">
                    <option value="时间" selected="">时间</option>
                    <option value="08:00">08:00</option><option value="08:30">08:30</option><option value="09:00">09:00</option>
                    <option value="09:30">09:30</option><option value="10:00">10:00</option><option value="10:30">10:30</option>
                    <option value="11:00">11:00</option><option value="11:30">11:30</option><option value="12:00">12:00</option>
                    <option value="12:30">12:30</option><option value="13:00">13:00</option><option value="13:30">13:30</option>
                    <option value="14:00">14:00</option><option value="14:30">14:30</option><option value="15:00">15:00</option>
                    <option value="15:30">15:30</option><option value="16:00">16:00</option><option value="16:30">16:30</option>
                    <option value="17:00">17:00</option><option value="17:30">17:30</option><option value="18:00">18:00</option>
                    <option value="18:30">18:30</option><option value="19:00">19:00</option><option value="19:30">19:30</option>
                    <option value="20:00">20:00</option><option value="20:30">20:30</option><option value="21:00">21:00</option>
                    <option value="21:30">21:30</option><option value="22:00">22:00</option><option value="22:30">22:30</option>
                    <option value="23:00">23:00</option><option value="23:30">23:30</option><option value="00:00">00:00</option>
                    <option value="00:30">00:30</option><option value="01:00">01:00</option><option value="01:30">01:30</option>
                    <option value="02:00">02:00</option><option value="02:30">02:30</option><option value="03:00">03:00</option>
                    <option value="03:30">03:30</option><option value="04:00">04:00</option><option value="04:30">04:30</option>
                    <option value="05:00">05:00</option><option value="05:30">05:30</option><option value="06:00">06:00</option>
                    <option value="06:30">06:30</option><option value="07:00">07:00</option><option value="07:30">07:30</option>
                </select>
            </span>
            <span class="tip"></span>
            <span class="error" id="begin-error"></span>
        </div>
    </div>
    <div class="row">
        <label class="field">结束时间</label>
        <div class="item">
            <input id="event-end" class="basic-input" type="text" placeholder="日期" />
            <span>
                <select class="basic-input" id="event-end-time" name="end">
                    <option value="时间" selected="">时间</option>
                    <option value="08:00">08:00</option><option value="08:30">08:30</option><option value="09:00">09:00</option>
                    <option value="09:30">09:30</option><option value="10:00">10:00</option><option value="10:30">10:30</option>
                    <option value="11:00">11:00</option><option value="11:30">11:30</option><option value="12:00">12:00</option>
                    <option value="12:30">12:30</option><option value="13:00">13:00</option><option value="13:30">13:30</option>
                    <option value="14:00">14:00</option><option value="14:30">14:30</option><option value="15:00">15:00</option>
                    <option value="15:30">15:30</option><option value="16:00">16:00</option><option value="16:30">16:30</option>
                    <option value="17:00">17:00</option><option value="17:30">17:30</option><option value="18:00">18:00</option>
                    <option value="18:30">18:30</option><option value="19:00">19:00</option><option value="19:30">19:30</option>
                    <option value="20:00">20:00</option><option value="20:30">20:30</option><option value="21:00">21:00</option>
                    <option value="21:30">21:30</option><option value="22:00">22:00</option><option value="22:30">22:30</option>
                    <option value="23:00">23:00</option><option value="23:30">23:30</option><option value="00:00">00:00</option>
                    <option value="00:30">00:30</option><option value="01:00">01:00</option><option value="01:30">01:30</option>
                    <option value="02:00">02:00</option><option value="02:30">02:30</option><option value="03:00">03:00</option>
                    <option value="03:30">03:30</option><option value="04:00">04:00</option><option value="04:30">04:30</option>
                    <option value="05:00">05:00</option><option value="05:30">05:30</option><option value="06:00">06:00</option>
                    <option value="06:30">06:30</option><option value="07:00">07:00</option><option value="07:30">07:30</option>
                </select>
            </span>
            <span class="tip"></span>
            <span class="link" id="mod-time">保存开始和结束时间修改</span>
            <span class="error" id="end-error"></span>
        </div>
    </div>
    <div class="row">
        <label class="field">活动地点</label>
        <div class="item">
            <span><input type="text" class="basic-input" id="event-place" name="place" /></span>
            <span class="tip"></span>
            <span class="mod link" for="place">保存修改</span>
            <span class="error" id="place-error"></span>
        </div>
    </div>
    <div class="row">
        <label class="field">活动详情</label>
        <div class="item">
            <span>
                <textarea class="basic-input" id="event-content" name="content"></textarea>
            </span>
            <p>
                <span class="tip"></span>
                <span class="mod link" for="content">保存修改</span>
                <span class="error" id="content-error"></span>
            </p>
        </div>
    </div>
    <div class="row">
        <label class="field">费用</label>
        <div class="item">
            <span><input type="text" class="basic-input" id="event-fee" name="fee"/></span>
            <span class="tip"></span>
            <span class="mod link" for="fee">保存修改</span>
            <span class="error" id="fee-error"></span>
        </div>
    </div>
</div>
<script>
    $('#event-begin').datepicker({
        dateFormat: "yy-mm-dd",
        yearRange: "2013:2030",
        changeYear: true
    });
    $('#event-end').datepicker({
        dateFormat: "yy-mm-dd",
        yearRange: "2013:2030",
        changeYear: true
    });
    
    //根据数据设置各项内容
    var eventId = '<?php echo $event->id; ?>';
    var map = {
        name: '<?php echo $event->name; ?>',
        place: '<?php echo $event->place; ?>',
        content: '<?php echo json_encode($event->content); ?>',
        fee: '<?php echo $event->fee; ?>'
    };
    
    for (var key in map) {
        $('#event-' + key)[0].value = map[key];
    }
    
    //根据数据设置开始和结束时间
    var beginStr = '<?php echo $event->begin; ?>';
    var beginDate = beginStr.substr(0, 10);
    var beginTime = beginStr.substr(11, 5);
    $('#event-begin')[0].value = beginDate;
    $('#event-begin-time')[0].value = beginTime;
    
    var endStr = '<?php echo $event->end; ?>';
    var endDate = endStr.substr(0, 10);
    var endTime = endStr.substr(11, 5);
    $('#event-end')[0].value = endDate;
    $('#event-end-time')[0].value = endTime;
    
    //提示并过一段时间消失，公用方法
    function tipandfade(node, str) {
        node.innerHTML = str;
        window.setTimeout(function() {
            node.innerHTML = '';
        }, 4000);
    }
    
    //添加修改监听及处理
    $('.mod').each(function(key, item){
        item.onclick = function() {
            var mark = $(item).attr('for');
            if (!checkNodeEmpty(mark)) {
                return false;
            }
            else {
                $.get(
                    '../update/',
                    {
                        id: eventId,
                        key: mark,
                        value: $('#event-' + mark)[0].value
                    }
                )
                .done(function() {
                    tipandfade($('#' + mark + '-error')[0], '修改成功');
                })
                .fail(function() {
                    tipandfade($('#' + mark + '-error')[0], '修改失败');
                });
            }
        }
    });
    
    $('#mod-time')[0].onclick = function() {
        if (checkNodeEmpty('begin') && checkTime('begin') && checkNodeEmpty('end') && checkTime('end')) {
            $.get(
                '../update/',
                {
                    id: eventId,
                    key: 'begin',
                    value: $('#event-begin')[0].value + ' ' + $('#event-begin-time')[0].value
                }
            )
            .done(function() {
                tipandfade($('#begin-error')[0], '修改成功');
            })
            .fail(function() {
                tipandfade($('#begin-error')[0], '修改失败');
            });
            
            $.get(
                '../update/',
                {
                    id: userId,
                    key: 'end',
                    value: $('#event-end')[0].value + ' ' + $('#event-end-time')[0].value
                }
            )
            .done(function() {
                tipandfade($('#end-error')[0], '修改成功');
            })
            .fail(function() {
                tipandfade($('#end-error')[0], '修改失败');
            });
        }
    }
    
    //格式检查的工具函数
    function checkEmpty(str) {
        if (str.length == 0) {
            return false;
        }
        else {
            return true;
        }
    }
    function checkNodeEmpty(mark) {
        if (!checkEmpty($('#event-' + mark)[0].value)) {
            $('#' + mark + '-error')[0].innerHTML = '请输入内容';
            return false;
        }
        else {
            $('#' + mark + '-error')[0].innerHTML = '';
            return true;
        }
    }
    function checkTime(type) {
        if ($('#event-' + type + '-time')[0].value == '时间') {
            $('#' + type + '-error')[0].innerHTML = '请选择具体时间';
            return false;
        }
        else {
            $('#' + type + '-error')[0].innerHTML = '';
            return true;
        }
    }
</script>

<?php include('foot.php'); ?>