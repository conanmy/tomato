<?php include('head.php'); ?>

<h1>注册</h1>

<div class="create-member-form">
    <form method="post" action="../insert/">
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
                <span><input type="text" class="basic-input" id="member-password" name="password" /></span>
                <span class="tip"></span>
                <span class="error" id="password-error"></span>
            </div>
        </div>
        <div class="row">
            <label class="field">验证密码</label>
            <div class="item">
                <span><input type="text" class="basic-input" id="member-password2" /></span>
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
                    <label>男</label><input type="checkbox" class="basic-input" name="gender" value="male" />
                    <label>女</label><input type="checkbox" class="basic-input" name="gender" value="female" />
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
            <label class="field">自我介绍</label>
            <div class="item">
                <span>
                    <textarea class="basic-input" id="member-intro" name="intro"></textarea>
                </span>
                <p>
                    <span class="tip"></span>
                    <span class="error" id="member-error"></span>
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
</script>
<?php include('foot.php'); ?>