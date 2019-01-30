var help=["ФИО с одиночным пробелом между словами",
"ДД.ММ.ГГГГ",
"Номер телефон в правильном формате (+7 или +3 и остальные 8-10 цифр номера телефона)",
"",
"",
"example@mail.ru",
]
var css_top=["180px","230px","270px","","","410px"];
var css_height=["70px","40px","80px","","","40px"];
var $div1 = $('<div>',{
	class: "overlay_popOver"
}).appendTo('body');
var $div2 = $('<div>',{
	class: "popup_popOver"
}).appendTo($div1);
var $p1=$('<span>',{
	class: "for_p"
}).appendTo($div2);

var $contact_p=$('.contact').find('>p'),
	$contact_labels=$contact_p.find('>label'),
	INDEX;
function replaceText(i){
	$p1.html(help[i]);
	$('.popup_popOver').css({
		top:css_top[i],
		height:css_height[i]
	});//заменяем
}

$contact_labels.mouseenter(function() {
	INDEX=$(this).parent().index();
	if(INDEX!=4 && INDEX!=5){
		replaceText(INDEX-1);
		$div1.show();
	}
}).mouseleave(function() {
	$div1.delay(2000).hide(0);
});


