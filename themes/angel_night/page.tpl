<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
		<title>{title}</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		{site_style}
		{information_style}
		<link type = "text/css" media = "screen" rel = "stylesheet" href = "/themes/angel_night/css/login.css" />
		
		{jquery_script}
		<script src = "themes/angel_night/js/bg.js"></script>
		{information_script}
	</head>
	<body>
<!-- КОНТЕНТ -->
		<div id="content">
			
			<div id = "top-block">
				<img height = "100" src = '{image_logo}' />
			
				<div id = "menu">
					<ul id = "content_menu">
						<a href="/"><img id = "home_icon" src = 'themes/angel_night/img/home.png' width = "20px" height = "20px" /></a>
					
						<li id = "menu"><a id = "fix_menu_frist_el" href="../forum.php">форум</a></li>
						<li id = "menu"><a href="#">блог</a></li>
						<li id = "menu"><a href="#">радио</a></li>
						<li id = "menu"><a href="#">мониторинг</a></li>					
						{information}					
					</ul>
				</div>	
			</div>
			<div id = "pos">{information_content}</div>

			<table cellspacing = "0" width = "100%" cellpadding = "0" bgcolor = "" style = "padding-top: 20px;">
				<td width = "75%" colspan = "0" valign = "top" align = "center" style = "padding-right: 15px">
					<table cellspacing = "0" width = "100%" cellpadding = "0">
						{content}
					</table>
				</td>
				<td width = "300px" rowspan = "0" valign = "top" style = "min-width: 300px; max-width: 300px; padding-left: 15px">
					<div id = "sideblock">					
						<div style = "background-color: #f59829; color: white; padding: 10px; text-align: left; font-size: 0.7em; text-shadow: 0px 0px 10px black;">
							Авторизация
						</div>					
						<div style = "background-color: white; color: black; text-align: left; font-size: 12pt; padding: 2%; border-right: 5px solid #f59829; border-left: 5px solid #f59829; border-bottom: 5px solid #f59829">
							
							<div class="login">
							  	<form method = "post" action = "index.php">
									<p><input title = "Вы можете ввести: email, ник на сервере SA-MP, логин" type = "text" name = "login" value = "" placeholder = "Email, ник на сервере SA-MP, логин" /></p>
									<p><input type = "password" name = "password" value = "" placeholder = "Пароль" /></p>
									<p><input type = "submit" name = "commit" value = "Войти"></p>
							  	</form>
							</div>
							
						</div>						
					</div>
					<div id = "sideblock">	
						<div style = "background-color: #f59829; color: white; padding: 10px; text-align: left; font-size: 0.7em; text-shadow: 0px 0px 10px black;">
							Еще блок
						</div>					
						<div style = "background-color: white; color: black; text-align: left; font-size: 12pt; padding: 10px; border-right: 5px solid #f59829; border-left: 5px solid #f59829; border-bottom: 5px solid #f59829">
							еще ы
						</div>
					</div>
				</td>
			</table>		
		</div>
	</body>
</html>
