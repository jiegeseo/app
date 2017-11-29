<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpStudy\WWW\app\tp5\public/../application/admin\view\login\index.html";i:1511962352;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="/static/layui/css/layui.css">
		<link rel="stylesheet" href="/static/admin/css.css">
	</head>

	<body class="bg">
		<div class="login-main">
			<form class="layui-form layui-form-pane" action="">
				<fieldset class="layui-elem-field layui-field-title">
				  <legend>后台登录</legend>
				</fieldset>
				<div class="layui-form-item">
					<label class="layui-form-label">用户名</label>
					<div class="layui-input-block">
						<input type="text" name="username" lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">密　码</label>
					<div class="layui-input-block">
						<input type="password" name="password" placeholder="请输入密码" autocomplete="off" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">安全码</label>
					<div class="layui-input-block">
						<input type="text" name="username" lay-verify="required" placeholder="请输入安全码" autocomplete="off" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">验证码</label>
					<div class="layui-input-block verify-box">
						<input type="text" name="username" lay-verify="required" placeholder="请输入验证码" autocomplete="off" class="layui-input"><img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src = this.src+'?'" class="captcha" />
					</div>
				</div>

				<div class="layui-form-item">
					<div class="layui-input-inline login-btn" style="width:100%;">
						<button class="layui-btn login-btn" lay-submit="" lay-filter="login">登录</button>
					</div>
				</div>
			</form>
		</div>
		<script src="/static/layui/layui.js"></script>
		<script>
			//一般直接写在一个js文件中
			layui.use(['layer', 'form'], function() {
				var layer = layui.layer,
					form = layui.form;

			});
		</script>
	</body>

</html>