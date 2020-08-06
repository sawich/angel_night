$(document).ready(function() 
{
// вывод случайного фонового изображения
	var random_backgroun = Math.floor((Math.random()*3));
	
	image = new Array();
	
	image [0] = 'url("themes/angel_night/img/bg0.jpg")';
	image [1] = 'url("themes/angel_night/img/bg1.jpg")';
	image [2] = 'url("themes/angel_night/img/bg2.jpg")';
	
	$('html').css (
	{
		'background-image' : image [random_backgroun],
	});

});
