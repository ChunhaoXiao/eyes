<div class="nav-box"></div>
<div class="nav-wrap">
	<!-- 侧导航 -->
	<div class="nav-logo"><img src="{{asset('images/menu.png')}}" alt=""></div>
	<ul class="nav-ul">
        <a href="#">
         <li>sdffd</li>
        </a>
		{volist name='nav' id='navlist' key="k"}
		<a href="{:url($navlist.url)}">
			<li>{$navlist.title}</li>
		</a>
		{/volist}
	</ul>
	<div class="qx">取消</div>
</div>
<script src="{{ asset('js/home/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/home/swiper.min.js') }}"></script>
<script src="{{ asset('js/home/js.js') }}"></script>
<script>
	var swiper = new Swiper('.ss', {
		pagination: '.swiper-pagination',
		paginationClickable: true,
		autoplay:5000,
		loop:true
	});
	var swiper = new Swiper('.s1', {
		pagination: '.swiper-pagination',
		paginationClickable: true,
		autoplay:false,
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		loop:true
	});
</script>
<script>
	$(".menu").click(function () {
		$(".nav-box").show(0,function () {
			$(".nav-wrap").animate({
				right:0
			})
		})
	});
	$(".nav-box").click(function () {
		$(".nav-wrap").animate({
			right:"-5rem"
		},function () {
			$(".nav-box").hide();
		})
	});
	$(".qx").click(function () {
		$(".nav-wrap").animate({
			right:"-5rem"
		},function () {
			$(".nav-box").hide();
		})
	})
</script>
<script type="text/javascript">
	var clock = '';
	var nums = 120;
	var btn;
	function sendCode(thisBtn)
	{
		btn = thisBtn;
		btn.disabled = true; //将按钮置为不可点击
		btn.value = '重新获取（'+nums+'s）';
		clock = setInterval(doLoop, 1000); //一秒执行一次
	}
	function doLoop()
	{
		nums--;
		if(nums > 0){
			btn.value = '重新获取（'+nums+'s）';
		}else{
			clearInterval(clock); //清除js定时器
			btn.disabled = false;
			btn.value = '获取验证码';
			nums = 120; //重置时间
		}
	}
</script>
<script>
//	let ul = document.getElementById("con");
//	let h1 = ul.getElementsByTagName("h1");
//	let list = ul.getElementsByTagName("li");
//	let lastIndex = -1;
//	for(let i=0;i<list.length;i++){
//		h1[i].onclick=function () {
//			if(lastIndex !== -1){
//				list[lastIndex].className = ""
//				if (lastIndex===i){
//					lastIndex = -1;
//					return
//				}
//			}
//			list[i].className = "in"
//			lastIndex = i
//		}
//	}
</script>