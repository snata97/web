var fotos=["photo1.jpg","photo2.jpg","photo3.jpg","photo4.jpg","photo5.jpg","photo6.jpg","photo7.jpg","photo8.jpg","photo9.jpg","photo10.jpg","photo11.jpg","photo12.jpg","photo13.jpg","photo14.jpg","photo15.jpg"];
var titles=["Брусника","Черника","Иван-чай","Сыроежка","Береза","В лесу","Вид из Воронцовского дворца","Возле Воронцовского дворца","В новом аэропорту г.Симферополь","Стоянка аэропорта г.Симферополь","После ледяного дождя","Пляж 'Парк Победы'","Лебеди в Бухте Омега","Морозный узор","Обь в г.Сургут"];
var fotos_big=["1photo1_big.jpg","2photo2_big.jpg","3photo3_big.jpg","4photo4_big.jpg","5photo5_big.jpg","6photo6_big.jpg","7photo7_big.jpg","8photo8_big.jpg","9photo9_big.jpg","10photo10_big.jpg","11photo11_big.jpg","12photo12_big.jpg","13photo13_big.jpg","14photo14_big.jpg","15photo15_big.jpg"];

var counter_titles=0,
 counter_fotos=0,
 countTitles = titles.length,
 countFotos = fotos.length;
 
//Галерея
var div = $('<div>', {
	class: "image-decor"
}).appendTo('body');
var table = $('<table>', {
	class: "table"
}).appendTo(div);
for(var i=0;i<4;i++){
		var TR1=$('<TR>', {
			class:"decor-photo"
		}).appendTo(table);
		for(var j=0;j<4 && counter_fotos < countFotos;counter_fotos++, j++){
			var TD1=$('<TD>',{
				class: "table_row"
			}).appendTo(TR1);
			var txt="Здесь должно быть фото"+" "+(counter_fotos+1);
			var HREF_A=$('<a>', {
				href: fotos_big[counter_fotos]
			}).appendTo(TD1);
			var IMG=$('<img>', {
				src:fotos[counter_fotos],
				alt:txt,
				title:titles[counter_fotos],
			}).appendTo(HREF_A);
		}
		var TR2=$('<TR>', {
			class:"photo-title-decor"
		}).appendTo(table);
		for(var k=0;k<4 && counter_titles < countTitles;counter_titles++, k++){
			var TD2=$('<TD>', {
				text:titles[counter_titles]
			}).appendTo(TR2);
		}
}
//

//Блок для увеличенных фотографий
var $lightbox = $('<div>',{
		class:"lightbox"
}).appendTo('body'),

	$overlay = $('<div>',{
		class:"overlay_foto"
}).appendTo($lightbox),

	$close = $('<span>',{
		class:"close",
		html: "&#10006;"
}).appendTo($lightbox),

	figure1 = $('<figure>').appendTo($lightbox),
	figure2 = $('<figure>').appendTo($lightbox),

	img = $('<img>',{
		src:"",
		alt:"",
		title:""
}).appendTo(figure1),

	$prev = $('<span>',{
		class:"prev",
		text:"← prev"
}).appendTo(figure2),

	$next = $('<span>',{
		class:"next",
		text:"next →"
}).appendTo(figure2);
//

var $ALL_photo_in_table=$('.table_row').find('> a').parent(),
	$All_href=$('.table_row').find('> a'),
	targetImg,
	target_alt_img,
	target_title_img,
	Index;

function replaceImg(_src,_alt,_title){
	$lightbox.find('img').attr(
	{
		"src": _src,
		"alt": _alt,
		"title":_title
	}
	);//заменяем в атрибуте src ссылку
}

function getHref(index){
	return $ALL_photo_in_table.eq(index).find('>a').attr('href')
}	
	
$All_href.click(function(event){
	event.preventDefault();
	Index=($(this).parent().parent().index())*2+($(this).parent().index());//индекс фото
	targetImg=$(this).attr('href');//получаем ссылку
	target_alt_img = $(this).children().attr('alt');
	target_title_img = $(this).children().attr('title');
	replaceImg(targetImg,target_alt_img,target_title_img);//заменяем в атрибуте src ссылку
	$lightbox.fadeIn();
});

$close.click(function(){
	$lightbox.fadeOut();
});

$next.click(function(){
	if((Index+1) < fotos.length){
		targetImg=getHref(Index+1);
		Index++;
	}
	else{
		targetImg=getHref(0);
		Index=0;
	}
	replaceImg(targetImg);
});

$prev.click(function(){
	if(Index > 0){
		targetImg=getHref(Index-1);
		Index--;
	}
	else{
		targetImg=getHref(fotos.length-1);
		Index=(fotos.length-1);
	}
	replaceImg(targetImg);
});
