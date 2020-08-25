@extends("home.layout")

@section('content')
<link rel="stylesheet" href="style.css">

<link type="text/css" rel="stylesheet" href="__CONSOLE__/js/jeDate/test/jeDate-test.css">
<link type="text/css" rel="stylesheet" href="__CONSOLE__/js/jeDate/skin/jedate.css">
<!--<link rel="stylesheet" href="__CSS__/FJL.css">-->
<link rel="stylesheet" type="text/css" href="__CSS__/FJL.picker.css" />
<link rel="stylesheet" href="__CSS__/style.css" type="text/css" />
<!--<link rel="stylesheet" href="__YSG__css/css.css" type="text/css" />-->
<script type="text/javascript" src="__CONSOLE__/js/jeDate/src/jedate.js"></script>
<style>
    .info-cont{
        border-bottom: none;
    }
    .mui-btn{
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42;
        position: relative;
        display: inline-block;
        margin-bottom: 0;
        padding: 6px 12px;
        cursor: pointer;
        -webkit-transition: all;
        transition: all;
        transition-duration: 0s;
        transition-timing-function: ease;
        -webkit-transition-timing-function: linear;
        transition-timing-function: linear;
        -webkit-transition-duration: .2s;
        transition-duration: .2s;
        text-align: center;
        vertical-align: top;
        white-space: nowrap;
        color: #333;
        border: 1px solid #ccc;
        border-radius: 3px;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
        background-color: #fff;
        background-clip: padding-box;
        padding: 0;
    }
    .mui-btn-blue{
        color: #fff;
        border: 1px solid #007aff;
        background-color: #007aff;
        border-radius: 3px;
    }
</style>
<body>
<!-- <div class="header">
    <div class="seacher"><img src="__IMG__/seacher.png" alt=""></div>
    <div class="logo"><img src="/public/{$Infoindex.columnpic1}" alt=""></div>
    <div class="menu"><img src="__IMG__/menu.png" alt=""></div>
</div> -->
<style>
    .info-cont{
        display: flex;
        align-items: center;
    }
    .info-cont input[type="text"]{
        border: solid 1px #ddd;
        padding-left:0.1rem;
        font-size: 0.26rem;
        text-align: left;
        color: #ff9c00;
    }
    .info-cont input[type="radio"]{
        width: 0.3rem;
        height:0.3rem;
        background: url('images/put.png');
        background-size: 100% 100%;
        margin:0 0.2rem;
    }
    .info-cont input[type="radio"]:checked{
        width: 0.3rem;
        height:0.3rem;
        background: url('images/put_active.png');
        background-size: 100% 100%;
    }
</style>
<div class="review-box">
    <h1>基本信息</h1>
    <ul class="infotion">
        <form id="submitForm"  method="post" >
            <li style="display: flex; align-items: center; justify-content: space-around;">
                <div class="info-name">姓名</div>
                <div class="info-cont"><input name="name" type="text"></div>
            </li>
            
            <li style="display: flex; align-items: center; justify-content: space-around;">
                <div class="info-name">性别   </div>
                <div class="info-cont">
                    <label>男</label><input type="radio" name="sex" value='1' checked /> <label>女</label>  <input type="radio" name="sex" value='2'/>  
                </div>
            </li>

            <li style="display: flex; align-items: center; justify-content: space-around;">
                <div class="info-name">所属分店 </div>
                <div class="info-cont">
                    <select name="shopid" id="shopid" style="height: 28px">
                        <option value=""> --请选择-- </option>
                        @foreach($shops as $shop)
                            <option value="{{$shop->id}}">{{$shop->title}}</option>
                        @endforeach
                    </select> 
                </div>
            </li>
            
                <li style="display: flex; align-items: center;">
                    <div class="info-name">手机号</div>
                    <input name="phone" type="text" size="15" value="" style="border:1px solid #DDDDDD;margin: 0 2px">
                    <div><button type="button" id="sendMsg" style="min-width: 80px">获取验证码</button></div>
                </li>

                <li>
                  <div class="info-name">验证码</div>
                  <div class="info-cont"><input name="code" type="text"></div>
                </li>
                <li>
                  @csrf
                  @method('PUT')

                  <div class="info-cont" style="margin:0 auto;"> 
                    <input type="submit" value="提交信息" class="log-btn">  
                  </div>
                </li>






            <!-- <li>
                <div class="info-name">出生日期  </div>
                <div class="info-cont">
                    <input style="border-radius: 0px;" id='demo2'
                           data-options='{"type":"date","beginYear":1970,"endYear":2086}'
                           class="btn mui-btn mui-btn-block" type="text" readonly></div>
            </li> -->



            <!-- <li>
                <div class="info-name">学校  </div>
                <div class="info-cont"><input value="" name="school" type="text" >    </div>
            </li>

            <li>
                <div class="info-name">班级   </div>
                <div class="info-cont"><input value="" name="work" type="text" >     </div>
            </li>
            <li>
                <div class="info-name">监护人   </div>
                <div class="info-cont"><input name="see_name" type="text" value="" ></div>
            </li> -->

            
            <!-- <li>
                <div class="info-name">关系   </div>
                <div class="info-cont"><input name="see_relax" type="text" value="">   </div>
            </li>
            <li>
                <div class="info-name">职业   </div>
                <div class="info-cont"><input name="see_work" type="text" value="">   </div>
            </li>
            <li>
                <div class="info-name">单位</div>
                <div class="info-cont"><input name="see_company" value=""  type="text" >   </div>
            </li>
            <li>
                <div class="info-name">住址</div>
                <div class="info-cont"><input name="see_address" type="text" value="">   </div>
            </li>
            <li>
                <div class="info-name">初诊日期</div>
                <div class="info-cont"><input name="go_date" id="go_date" type="text" readonly value="">   </div>
            </li>
            <li>
                <div class="info-name">信息来源 </div>
                <div class="info-cont"><input name="data_src" type="text" value="">   </div>
            </li>

            <li>
                <div class="info-name">右眼视力</div>
                <div class="info-cont"><input name="righteye" value=""  type="text" >   </div>
            </li>

            <li>
                <div class="info-name">左眼视力</div>
                <div class="info-cont"><input name="lefteye" value=""  type="text" >   </div>
            </li> -->


           
               
        </form>
    </ul>
</div>
<script src="{{ asset('js/home/jquery-3.3.1.min.js') }}"></script>
<script>
    
</script>
<script type="text/javascript">
	$(function() {

        $("#submitForm").on("submit", function(e) {
            const datas = $(this).serialize();
           
            $.ajax({
                url:"{{ route('register.update') }}",
                type:"put",
                data:datas,
                success: res => {
                    window.location.href = '/'
                },
                error: res => {
                    let errmsg = Object.values(res.responseJSON.errors)[0][0];
                    alert(errmsg)
                     //console.log('errors is:', Object.values(res.responseJSON.errors)[0][0])
                }
            })
            e.preventDefault();
            return false;
        })

		let wait = 10

		$("#sendMsg").on('click', function() {
			//$(this).text("60秒")
			//let wait = 20;

			$.ajax({
				url:"{{ route('msg.send') }}",
                type:'post',
                data:{
                    phone:$("input[name='phone']").val()
                },
				success:res => {
                    var timer = window.setInterval(() => {
                    wait --;
                    $(this).text('等待'+wait+'秒').attr("disabled", true);
                        if(wait == 0) {
                            window.clearInterval(timer);
                            $(this).text("发送验证码").attr("disabled", false);
                            wait = 10
                        }
                    }, 1000)
				},
                error: res => {
                    alert(res.responseJSON.message)
                    window.clearInterval(timer)
                    $(this).text("发送验证码").attr("disabled", false);
                }
			})

			var timer = window.setInterval(() => {
				wait --;
				$(this).text('等待'+wait+'秒').attr("disabled", true);
				if(wait == 0) {
					window.clearInterval(timer);
					$(this).text("发送验证码").attr("disabled", false);
					wait = 21
			    }
			}, 1000)

			

			//alert("aaa")
			//$(this).attr("disable", true)
		})
		
	})
</script>


<script src="__JS__/swiper.min.js"></script>
<script src="__JS__/js.js"></script>
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
    var enLang = {
        name  : "en",
        month : ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"],
        weeks : [ "SUN","MON","TUR","WED","THU","FRI","SAT" ],
        times : ["Hour","Minute","Second"],
        timetxt: ["Time","Start Time","End Time"],
        backtxt:"Back",
        clear : "Clear",
        today : "Now",
        yes   : "Confirm",
        close : "Close"
    }


    //    jeDate("#birth_day",{
    //
    //        format: "YYYY-MM-DD"
    //    });
    // jeDate("#go_date",{

    //     format: "YYYY-MM-DD"
    // });

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
    });
</script>
<script src="__JS__/FJL.min.js"></script>
<script src="__JS__/FJL.picker.min.js"></script>
<script>
    (function($) {



        $.init();
        var result = $('#demo2')[0];
        var btns = $('.btn');
        btns.each(function(i, btn) {
            btn.addEventListener('tap', function() {
                var optionsJson = this.getAttribute('data-options') || '{}';
                var options = JSON.parse(optionsJson);
                var id = this.getAttribute('id');
                /*
                 * 首次显示时实例化组件
                 * 示例为了简洁，将 options 放在了按钮的 dom 上
                 * 也可以直接通过代码声明 optinos 用于实例化 DtPicker
                 */
                var picker = new $.DtPicker(options);
                picker.show(function(rs) {
                    /*
                     * rs.value 拼合后的 value
                     * rs.text 拼合后的 text
                     * rs.y 年，可以通过 rs.y.vaue 和 rs.y.text 获取值和文本
                     * rs.m 月，用法同年
                     * rs.d 日，用法同年
                     * rs.h 时，用法同年
                     * rs.i 分（minutes 的第二个字母），用法同年
                     */
                    result.value = rs.value;
                    /*
                     * 返回 false 可以阻止选择框的关闭
                     * return false;
                     */
                    /*
                     * 释放组件资源，释放后将将不能再操作组件
                     * 通常情况下，不需要示放组件，new DtPicker(options) 后，可以一直使用。
                     * 当前示例，因为内容较多，如不进行资原释放，在某些设备上会较慢。
                     * 所以每次用完便立即调用 dispose 进行释放，下次用时再创建新实例。
                     */
                    picker.dispose();
                });
            }, false);
        });
    })(mui);
</script>

@endsection