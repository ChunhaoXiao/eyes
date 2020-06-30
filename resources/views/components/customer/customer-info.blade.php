<div class="container">
    <h3 class="pb-2">{{$title}}</h3>
    <div class="container">
      <x-formtext name="name"  :value="$user->name??''" labelcol="1" text="姓名"/>
      <x-radio col="1"  text="性别" :options="[1 => '男', 2 => '女']" name="sex" :checked="$user->sex??1"/>
      <x-formtext labelcol="1" text="出生日期" type="date" name="birth_day" :value="$user->birth_day??''"/>
      <div class="row">
        <div class="col-sm">
          <x-select selectedw=8 label="学校" labelcol=3 name="school" id="schools" source="school" :selected="$user->school??''"/>
        </div>
        <div class="col-sm">
          <x-inputgroup label="" unit="届" type="number" name="jie" :value="$user->jie??''"/>
        </div>
        <div class="col-sm">
          <x-inputgroup label="" unit="班" type="number" name="grade" :value="$user->grade??''"/>
        </div>
      </div>
      <x-formtext labelcol="1" text="手机" type="number" name="phone" :value="$user->phone??''"/>
      <x-formtext labelcol="1" text="初诊日期" name="go_date" :value="$user->go_date??''" type="date"/>  
      <x-formtext labelcol="1" text="修改日期" name="modified_date" :value="$user->modified_date??''" type="date"/>
      <x-select label="信息来源" labelcol="1" name="data_src" id="source" source="src" :selected="$user->data_src??''" />
      <x-select labelcol="1" label="治疗卡类型" name="card_t" id="card_type1" source="card2" :selected="$user->card_t??''"/>
      <x-select label="干眼卡类型" labelcol="1" name="card_d" id="card_type2" source="card1" :selected="$user->card_d??''"/>

      <x-select label="所属分店" labelcol=1 name="shopid" id="shop" source="shop" :selected="$user->shopid??''"/>

      <x-radio col="1" text="会员类型" :options="[1 => '一般会员',  2=>'特殊会员']" name="level" :checked="$user->level??''"/>
      <x-formtext labelcol="1" text="备注" name="contenct" :value="$user->contenct??''" col="1"/>
    </div> 
</div>