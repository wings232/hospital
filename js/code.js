$(document).ready(function(){
	$('.choose_us .choose_details .tab_con .tab_choose_list > ul > li:not(":first")').hide();
})
	

$(document).on("click",".choose_us .choose_details .tab_con .tab_choose > ul > li",function(){
        var list = $(this).index();
		$('.tab_con .tab_choose_list > ul > li').fadeOut().eq(list).fadeIn();
});