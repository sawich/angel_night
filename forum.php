<?php
	session_start ();

	include ('inc/var.inc');

	include ('inc/info.inc');

	$title = 'Angel Dev. Group | ГЛАВНАЯ СТРАНИЦА';

	$jquery_script = '<script src = "/themes/angel_night/js/jquery-1.10.1.min.js"></script>';

	$image_logo = '/themes/angel_night/img/logo.png';

	$mysql = mysql_connect ("127.0.0.1", "root", "root");
	mysql_select_db ("AnNi", $mysql);

	mysql_query('SET NAMES utf8');
	mysql_query('SET CHARACTER SET utf8');
	mysql_query('SET COLLATION_CONNECTION = "utf8_general_ci"');

	$tmp = mysql_query ("SELECT id, fromid, title, text FROM `forums` WHERE `fromid` = '-1'") or die ('ОШИБКА: '.mysql_error ());

	while ($load = mysql_fetch_array ($tmp))
	{
		$content .=
		'
			<tr>
				<td COLSPAN = "5" style = "background-color: #3b5998; color: white; padding: 10px; text-align: left; font-size: 0.7em;">
					<span title = "'.$load ['text'].'">'.$load ['title'].'</span>
				</td>
			</tr>

			<tr style = "background-color: #f2f2f2; color: #848484; text-align: left; font-size: 9pt;">
				<td width = "50%" style = "padding-left: 20px; border-left: 1px solid #ddd; border-bottom: 1px solid #ddd">
					Раздел
				</td>
				<td width = "10%" style = "padding: 10px; border-bottom: 1px solid #ddd; text-align: center">
					Тем
				</td>
				<td width = "10%" style = "padding: 10px; border-bottom: 1px solid #ddd; text-align: center">
						Сообщений
				</td>
				<td width = "30%" style = "padding: 10px;border-right: 1px solid #ddd; border-bottom: 1px solid #ddd">
					Последнее сообщение
				</td>
			</tr>
		';

		$tmp2 = mysql_query ("SELECT id, fromid, title, text, istopic, iscategory FROM `forums` WHERE `fromid` = '".$load ['fromid']."'") or die ('ОШИБКА: '.mysql_error ());

		while ($load2 = mysql_fetch_array ($tmp2))
		{
			$content .=
			'
				<tr style = "background-color: white; color: black; text-align: left; font-size: 12pt">
					<td width = "50%" style = "padding: 10px; border-left: 1px solid #ddd; border-bottom: 1px solid #ddd">
						<img src = "/themes/angel_night/img/forum_title.png" style = "float: left; padding-left: 10px; padding-right: 10px; padding-top: 4px" width = "32px" height = "32px">
						<a href = "?'.($load2 ['iscategory'] != 1 ? 'category' : 'topic').'='.$load2 ['id'].'">'.$load2 ['title'].'</a>
						<div style = "font-style: oblique; color: #848484; text-align: left; font-size: 9pt;">
							'.$load2 ['text'].'
						</div>
					</td>
					<td width = "10%" style = "padding: 10px; border-bottom: 1px solid #ddd; text-align: center">
						5
					</td>
					<td width = "10%" style = "padding: 10px; border-bottom: 1px solid #ddd; text-align: center">
						5
					</td>
					<td width = "30%" style = "padding: px; border-right: 1px solid #ddd; border-bottom: 1px solid #ddd">
						почти готово....
					</td>
				</tr>
			';
		}
	}

	mysql_close ();

/*
	$mysql = mysql_connect ("127.0.0.1", "root", "root");
	mysql_select_db ("AnNi", $mysql);

	mysql_query('SET NAMES utf8');
	mysql_query('SET CHARACTER SET utf8');
	mysql_query('SET COLLATION_CONNECTION = "utf8_general_ci"');



	$tmp = mysql_query ("SELECT id, title, text FROM `pages` WHERE `id` = '1'") or die ('ОШИБКА: '.mysql_error ());


	while ($page = mysql_fetch_array ($tmp))
	{
		$content =
		'
			<tr>
				<td style = "background-color: #3b5998; color: white; padding: 10px; border-right: 1px solid #ddd; border-left: 1px solid #ddd; border-top: 1px solid #ddd; text-align: left; font-size: 14pt;">
					<span title = "'.$page ['title'].'">'.$page ['title'].'<span id = "title_link" style = "float: right">| <a title = "Редактирование" href = "?edit=1">редактировать</a></span></span>
				</td>
			</tr>

			<tr style = "background-color: white; color: black; text-align: left; font-size: 12pt">
				<td width = "50%" style = "padding: 10px; border-right: 1px solid #ddd; border-left: 1px solid #ddd; border-bottom: 1px solid #ddd; text-indent: 20px; line-height: 1.5">
					'.$page ['text'].'
				</td>
			</tr>
		';
	}*/

	$load = file_get_contents ("themes/angel_night/page.tpl");

	$site_style = '<link type = "text/css" media = "screen" rel = "stylesheet" href = "/themes/angel_night/css/style.css" />';

	$load = ereg_replace ('{title}', $title, $load);
	$load = ereg_replace ('{site_style}', $site_style, $load);
	$load = ereg_replace ('{jquery_script}', $jquery_script, $load);
	$load = ereg_replace ("{image_logo}", $image_logo, $load);
	$load = ereg_replace ("{information}", $info, $load);
	$load = ereg_replace ("{information_content}", $info_content, $load);
	$load = ereg_replace ("{information_script}", $info_script, $load);
	$load = ereg_replace ("{information_style}", $info_style, $load);
	$load = ereg_replace ("{content}", $content, $load);

	echo $load;
?>
