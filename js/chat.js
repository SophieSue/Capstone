$('.conLeft li').on('click',function(){
		$(this).addClass('bg').siblings().removeClass('bg');
		var intername=$(this).children('.liRight').children('.intername').text();
		$('.headName').text(intername);
		$('.newsList').html('');
	
		
	})
	$('.sendBtn').on('click',function(){
		var news=$('#dope').val();
		if(news==''){
			alert('Message must not be empty');
		}else{
			$('#dope').val('');
		var str='';
		str+='<li>'+
				'<div class="nesHead"><img src="img/6.jpg"/></div>'+
				'<div class="news"><img class="jiao" src="img/jiao.jpg">'+news+'</div>'+
			'</li>';
		$('.newsList').append(str);
		setTimeout(answers,1000); 
		$('.conLeft').find('li.bg').children('.liRight').children('.infor').text(news);
		$('.RightCont').scrollTop($('.RightCont')[0].scrollHeight );
	}
	
	})
	function answers(){
		var arr=["Hello","Nice weather today","How do you like biking?","I know right!","Nice to meet you","That doesn't sound right","Hey how's going?","Okay","No problem","Sure, Why not","Have you had lunch yet?","I'm not feeling well today","I better get going", "I had a long day", "Oh man"];
		var aa=Math.floor((Math.random()*arr.length));
		var answer='';
		answer+='<li>'+
					'<div class="answerHead"><img src="img/tou.jpg"/></div>'+
					'<div class="answers"><img class="jiao" src="img/20170926103645_03_02.jpg">'+arr[aa]+'</div>'+
				'</li>';
		$('.newsList').append(answer);	
		$('.RightCont').scrollTop($('.RightCont')[0].scrollHeight );
	}
	$('.ExP').on('mouseenter',function(){
		$('.emjon').show();
	})
	$('.emjon').on('mouseleave',function(){
		$('.emjon').hide();
	})
	$('.emjon li').on('click',function(){
		var imgSrc=$(this).children('img').attr('src');
		var str="";
		str+='<li>'+
				'<div class="nesHead"><img src="img/6.jpg"/></div>'+
				'<div ><img class="jiao" src="img/jiao.jpg"><img class="Expr" src="'+imgSrc+'"></div>'+
			'</li>';
		$('.newsList').append(str);
		$('.emjon').hide();
		$('.RightCont').scrollTop($('.RightCont')[0].scrollHeight );
	})