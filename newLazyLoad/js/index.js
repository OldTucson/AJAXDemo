var loadx = 2;
var page = 1;
var flag = true;
$(window).scroll(function(){
	var scollx = $(window).height()-($('.goods li').eq(loadx)[0].offsetTop-$(window).scrollTop())
	var height = $('.goods li').eq(loadx).height()
	if(scollx>=height&&flag==true){
		flag = false
		$.ajax({
			type: 'get',
			url: 'getData.php',
			dataType: 'json',
			data: {
				page: page
			},
			success: function (data){
				if(data.success){
					var list = data.list
					for(var i = 0;i<list.length;i++){
						$('.goods')[0].innerHTML+="<li>"+list[i].goodsName+list[i].desc+"</li>"
					}
					flag = true
					page++
					loadx+=4
				}
			}
		})
	}
})