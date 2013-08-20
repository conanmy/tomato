<?php include('head.php'); ?>
<?php
    $me = $me['0'];
?>
<h1>修改个人信息</h1>

<div class="create-member-form">
    <form name="member">
    <div class="row">
        <label class="field">邮箱</label>
        <div class="item">
            <span><input type="text" class="basic-input" id="member-email" name="email" /></span>
            <span class="tip">*</span>
            <span class="mod link" for="email">保存修改</span>
            <span class="error" id="email-error"></span>
        </div>
    </div>
    <div class="row">
        <label class="field">密码</label>
        <div class="item">
            <span><input class="basic-input" id="member-password" name="password" /></span>
            <span class="tip">*</span>
            <span class="mod link" for="password">保存修改</span>
            <span class="error" id="password-error"></span>
        </div>
    </div>
    <div class="row">
        <label class="field">昵称</label>
        <div class="item">
            <span><input type="text" class="basic-input" id="member-name" name="name"/></span>
            <span class="tip">*</span>
            <span class="mod link" for="name">保存修改</span>
            <span class="error" id="name-error"></span>
        </div>
    </div>
    <div class="row">
        <label class="field">性别</label>
        <div class="item">
            <span>
                <label for="checkbox-gender-male">男</label><input id="checkbox-gender-male" type="radio" class="basic-input" name="gender" value="male" />
                <label for="checkbox-gender-female">女</label><input id="checkbox-gender-female" type="radio" class="basic-input" name="gender" value="female" />
            </span>
            <span class="tip">*</span>
            <span class="link" id="mod-gender">保存修改</span>
            <span class="error" id="gender-error"></span>
        </div>
    </div>
    <div class="row">
        <label class="field">生日</label>
        <div class="item">
            <span><input type="text" class="basic-input" id="member-birthday" name="birthday"/></span>
            <span class="tip">*</span>
            <span class="mod link" for="birthday">保存修改</span>
            <span class="error" id="birthday-error"></span>
        </div>
    </div>
    <div class="row">
        <label class="field">手机</label>
        <div class="item">
            <span><input type="text" class="basic-input" id="member-phone" name="phone"/></span>
            <span class="tip">*</span>
            <span class="mod link" for="phone">保存修改</span>
            <span class="error" id="phone-error"></span>
        </div>
    </div>
    <div class="row">
        <label class="field">大学</label>
        <div class="item">
            <span><input type="text" class="basic-input" id="member-university" name="university"/></span>
            <span class="tip">*</span>
            <span class="mod link" for="university">保存修改</span>
            <span class="error" id="university-error"></span>
        </div>
    </div>
    <div class="row">
        <label class="field">所在单位及工作</label>
        <div class="item">
            <span><input type="text" class="basic-input" id="member-job" name="job"/></span>
            <span class="tip">*</span>
            <span class="mod link" for="job">保存修改</span>
            <span class="error" id="job-error"></span>
        </div>
    </div>
    <div>可选——</div>
    <div class="row">
        <label class="field">QQ</label>
        <div class="item">
            <span><input type="text" class="basic-input" id="member-qq" name="qq"/></span>
            <span class="tip"></span>
            <span class="mod link" for="qq">保存修改</span>
            <span class="error" id="qq-error"></span>
        </div>
    </div>
    <div class="row">
        <label class="field">个人页面</label>
        <div class="item">
            <span><input type="text" class="basic-input" id="member-page" name="page"/></span>
            <span class="tip">（微博、人人或博客地址等）</span>
            <span class="mod link" for="page">保存修改</span>
            <span class="error" id="page-error"></span>
        </div>
    </div>
    <div class="row">
        <label class="field">自我介绍</label>
        <div class="item">
            <span>
                <textarea class="basic-input" id="member-intro" name="intro"></textarea>
            </span>
            <p>
                <span class="tip"></span>
                <span class="mod link" for="intro">保存修改</span>
                <span class="error" id="intro-error"></span>
            </p>
        </div>
    </div>
    </form>
</div>
<script>
    $('#member-birthday').datepicker({
        dateFormat: "yy-mm-dd",
        yearRange: "1970:2030",
        changeYear: true
    });
    
    //根据数据设置各项内容
    var userId = '<?php echo $me->id; ?>';
    var map = {
        email: '<?php echo $me->email; ?>',
        password: '<?php echo $me->password; ?>',
        name: '<?php echo $me->name; ?>',
        birthday: '<?php echo $me->birthday; ?>',
        phone: '<?php echo $me->phone; ?>',
        university: '<?php echo $me->university; ?>',
        job: '<?php echo $me->job; ?>',
        qq: '<?php echo $me->qq; ?>',
        page: '<?php echo $me->page; ?>',
        intro: '<?php echo json_encode($me->intro); ?>'
    };
    
    for (var key in map) {
        $('#member-' + key)[0].value = map[key];
    }
    
    $('#checkbox-gender-<?php echo $me->gender; ?>')[0].checked = true;
    
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
                        id: userId,
                        key: mark,
                        value: $('#member-' + mark)[0].value
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
    
    $('#mod-gender').onclick = function() {
        if (!checkGender()) {
            return false;
        }
        else {
            $.get(
                '../update/',
                {
                    id: userId,
                    key: 'gender',
                    value: member.gender.value
                }
            )
            .done(function() {
                tipandfade($('#gender-error')[0], '修改成功');
            })
            .fail(function() {
                tipandfade($('#gender-error')[0], '修改失败');
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
        if (!checkEmpty($('#member-' + mark)[0].value)) {
            $('#' + mark + '-error')[0].innerHTML = '请输入内容';
            return false;
        }
        else {
            $('#' + mark + '-error')[0].innerHTML = '';
            return true;
        }
    }
    function checkGender() {
        if (!$('checkbox-gender-male')[0].checked && !$('checkbox-gender-female')[0].checked) {
            $('#gender-error')[0].innerHTML = '请选择性别';
            return false;
        }
        else {
            $('#gender-error')[0].innerHTML = '';
            return true;
        }
    }
</script>

<?php include('foot.php'); ?>