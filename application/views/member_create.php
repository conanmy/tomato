<?php include('head.php'); ?>

<h1>注册</h1>

<div class="create-member-form">
    <form name="register" method="post" action="../insert/">
        <div class="row">
            <label class="field">邮箱</label>
            <div class="item">
                <span><input type="text" class="basic-input" id="member-email" name="email" /></span>
                <span class="tip"></span>
                <span class="error" id="email-error"></span>
            </div>
        </div>
        <div class="row">
            <label class="field">密码</label>
            <div class="item">
                <span><input type="password" class="basic-input" id="member-password" name="password" /></span>
                <span class="tip"></span>
                <span class="error" id="password-error"></span>
            </div>
        </div>
        <div class="row">
            <label class="field">验证密码</label>
            <div class="item">
                <span><input type="password" class="basic-input" id="member-password2" /></span>
                <span class="tip"></span>
                <span class="error" id="password2-error"></span>
            </div>
        </div>
        <div class="row">
            <label class="field">昵称</label>
            <div class="item">
                <span><input type="text" class="basic-input" id="member-name" name="name"/></span>
                <span class="tip"></span>
                <span class="error" id="name-error"></span>
            </div>
        </div>
        <div class="row">
            <label class="field">性别</label>
            <div class="item">
                <span>
                    <label for="checkbox-gender-male">男</label><input id="checkbox-gender-male" type="checkbox" class="basic-input" name="gender" value="male" />
                    <label for="checkbox-gender-female">女</label><input id="checkbox-gender-female" type="checkbox" class="basic-input" name="gender" value="female" />
                </span>
                <span class="tip"></span>
                <span class="error" id="gender-error"></span>
            </div>
        </div>
        <div class="row">
            <label class="field">生日</label>
            <div class="item">
                <span><input type="text" class="basic-input" id="member-birthday" name="birthday"/></span>
                <span class="tip"></span>
                <span class="error" id="birthday-error"></span>
            </div>
        </div>
        <div class="row">
            <label class="field">手机</label>
            <div class="item">
                <span><input type="text" class="basic-input" id="member-phone" name="phone"/></span>
                <span class="tip"></span>
                <span class="error" id="phone-error"></span>
            </div>
        </div>
        <div class="row">
            <label class="field">大学</label>
            <div class="item">
                <span><input type="text" class="basic-input" id="member-university" name="university"/></span>
                <span class="tip"></span>
                <span class="error" id="university-error"></span>
            </div>
        </div>
        <div class="row">
            <label class="field">所在单位及工作</label>
            <div class="item">
                <span><input type="text" class="basic-input" id="member-job" name="job"/></span>
                <span class="tip"></span>
                <span class="error" id="job-error"></span>
            </div>
        </div>
        <div class="row">
            <label class="field">个人页面</label>
            <div class="item">
                <span><input type="text" class="basic-input" id="member-page" name="page"/></span>
                <span class="tip">（微博、人人或博客地址等）</span>
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
                    <span class="error" id="intro-error"></span>
                </p>
            </div>
        </div>
        <input type="submit" value="提交" />
    </form>
</div>
<script>
    $('#member-birthday').datepicker({
        dateFormat: "yy-mm-dd",
        yearRange: "1970:2030",
        changeYear: true
    });
    //验证的工具函数
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
        }
        else {
            $('#' + mark + '-error')[0].innerHTML = '';
        }
        return checkEmpty($('#member-' + mark)[0].value);
    }
    function checkEmail(str) {
        var reg = /\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
        return reg.test(str);
    }
    
    function checkEmailNode() {
        var value = $('#member-email')[0].value;
        if (checkEmpty(value)) {
            if (checkEmail(value)) {
                $('#email-error')[0].innerHTML = '';
                return true;
            }
            else {
                $('#email-error')[0].innerHTML = '请检查电子邮件格式';
                return false;
            }
        }
        else {
            $('#email-error')[0].innerHTML = '请输入内容';
            return false;
        }
    }
    
    function checkPassword2Node() {
        var password = $('#member-password')[0].value;
        var password2 = $('#member-password2')[0].value;
        if (checkEmpty(password2)) {
            if (password == password2) {
                $('#password2-error')[0].innerHTML = '';
                return true;
            }
            else {
                $('#password2-error')[0].innerHTML = '两次输入不一致';
                return false;
            }
        }
        else {
            $('#password2-error')[0].innerHTML = '请输入内容';
            return false;
        }
    }
    
    var map1 = ['password', 'name', 'phone', 'university', 'job', 'intro'];
    var map2 = ['password', 'name', 'birthday', 'phone', 'university', 'job', 'intro'];
    //失焦时的验证
    var len1 = map1.length;
    for (var i = 0; i< len1; i++) {
        (function(i) {
            $('#member-' + map1[i])[0].onblur = function() {
                checkNodeEmpty(map1[i]);
            }
        })(i);
    }
    $('#member-email')[0].onblur = checkEmailNode;
    $('#member-password2')[0].onblur = checkPassword2Node;
    //提交前的验证
    document.register.onsubmit =  function() {
        var flag = true
        var len2 = map2.length;
        for (var i = 0; i< len2; i++) {
            if (!checkNodeEmpty(map2[i])) {
                flag = false;
            }
        }
        if (!checkEmailNode()) {
            flag = false;
        }
        if (!checkPassword2Node()) {
            flag = false;
        }
        return flag;
    }
</script>
<?php include('foot.php'); ?>