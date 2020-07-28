<div class="container mb-4">
    <form class="" id="search_form">
        <div class="row">
            <div class="col-sm">
            <x-formtext text="手机号" name="phone" :value="request()->phone??''"/>
            </div>
            <div class="col-sm">
            <x-formtext text="姓名" name="name" :value="request()->name??''"/>
            </div>
            <div class="col-sm">
            <x-select label="学校"  name="school" id="schools" source="school" labelcol="auto" :selected="request()->school??''"/>
            </div>
            <div class="col-sm">
            <x-select label="年龄" labelcol="3" name="age" id="age"  :options="App\Models\Customer::AGERANGE" :selected="request()->age??''"/>
            </div>        
        </div>
        <div class="row">
            <div class="col-sm">
            <x-select label="消费区间" labelcol="4" name="consumerange" id="consumerange" labelcol="auto"  :options="App\Models\Customer::CONSUMERANGE" :selected="request()->consumerange"/> 
            </div>
            <div class="col-sm">
            <x-select label="消费类型" labelcol="4" name="consumetype" id="consume_type" source="consumption" :selected="request()->consumetype??''"/>
            </div>
            <div class="col-sm">
            <x-select label="商品类型" labelcol="4" name="producttype" id="product_type" source="prod" :selected="request()->producttype??''"/> 
            </div>
            <div class="col-sm">
            <x-select label="治疗卡类型" labelcol="4" name="card_t" id="card_t" source="card2" :selected="request()->card_t"/>
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
            <x-select label="干眼卡类型" labelcol="4" name="card_d" id="card_d" source="card1" :selected="request()->card_d"/>
            </div>
            <div class="col-sm">
            <x-select label="诊断" name="disease" id="disease" source="disease" multiple /> 
            </div>
            <div class="col-sm">
            <x-select label="所属店面" name="shopid" id="shop_id" source="shop" :selected="request()->shopid"/> 
            </div>
            <div class="col-sm">
            <x-select label="角塑品牌" name="corneal" id="corneal" source="corneal" :selected="request()->corneal"/>
            </div>
           
        </div>
        <div class="row">
            <div class="col-sm">
            <x-select label="镜架品牌" name="jingjia" id="jingjia" source="glass" :selected="request()->jingjia??''"/>
            </div>
            <div class="col-sm">
            <x-select label="镜片品牌" name="jingpian" id="jingpian" source="jingpian" :selected="request()->jingpian??''"/>
            </div>
            <div class="col-sm">
            <x-select label="会员类型" name="level" id="level" :options="[1 => '普通会员', 2 => '特殊会员']" :selected="request()->level??''"/>
            </div>
            <div class="col-sm">
            <x-select label="来源" name="data_src" id="source" source="src" :selected="request()->data_src??''"/>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-auto col-form-label">
                录入时间段
            </div>
            <div class="col-sm">
              <x-formtext text="开始时间" name="added_start_date" type="date" :value="request()->added_start_date"/>
            </div>
            <div class="col-sm">
              <x-formtext text="结束时间" name="added_end_date" type="date" :value="request()->added_end_date"/> 
            </div>
        </div>

        <div class="row">
            <div class="col-sm-auto col-form-label">
                修改时间段
            </div>
            <div class="col-sm">
              <x-formtext text="开始时间" name="modified_start_date" type="date" :value="request()->modified_start_date"/>
            </div>
            <div class="col-sm">
              <x-formtext text="结束时间" name="modified_end_date" type="date" :value="request()->modified_end_date"/> 
            </div>
        </div>

        <div class="row">
            <div class="col-sm-auto col-form-label">
                回访时间段
            </div>
            <div class="col-sm">
              <x-formtext text="开始时间" name="callback_start_date" type="date" :value="request()->callback_start_date??''"/>
            </div>
            <div class="col-sm">
              <x-formtext text="结束时间" name="callback_end_date" type="date" :value="request()->callback_end_date??''"/> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <x-select label="是否关注公众号" name="following" id="following" :options="[0 => '全部', 1 => '已关注', 2 => '未关注']" :selected="request()->following??0"/>
            </div>
            <div class="col-sm">
                <x-select label="性别" name="sex" :options="[1 => '男', 2 => '女']" :selected="request()->sex??''"/>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
               <x-checkbox :options="App\Models\Customer::HASDATA" name="has[]" :checked="request()->has??[]"/>
            </div>
        </div>
       

        <div class="row">
            <div class="col-sm">
                <x-formtext text="备注" name="contenct" :value="request()->contenct??''"/>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <button class="btn btn-primary" type="submit">搜索</button>
                <button class="btn btn-info" type="button" name="excel" id="export_excel">导出excel</button>
                <a href="{{route('admin.users.index')}}" class="btn btn-info">清空搜索条件</a>
                
            </div>
        </div>
    </form >
   
</div>

<script>
 $("#export_excel").on('click', function() {
    const data = $("#search_form").serialize();
    //alert(data)
    location.href = "{{route('admin.customers.export')}}?"+data;
    // $.ajax({
    //     url:"{{route('admin.customers.export')}}",
    //     data:data,
    //     success:res => {
    //         location.href = "{{route('admin.customers.export')}}"
    //     }
    // })
 });
</script>