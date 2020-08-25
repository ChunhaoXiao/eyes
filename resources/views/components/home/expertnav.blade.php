
<div class="experts-box">
    <ul class="experts-top">
        @foreach($areas as $v)
             <a href="{{route('expert.index', ['area' => $v->id])}}"> 
             	<li class="{{$v->id == $currentarea->id? 'on' : ''}}">{{$v->title}}</li>
             </a>
            <!-- {if condition="$vo.class == true"}
               <a href="{:url('home/index/expertslist')}?id={$vo.id}"> <li class="on">{$vo.title}</li></a>
            {else/}
                <a href="{:url('home/index/expertslist')}?id={$vo.id}"> <li>{$vo.title}</li></a>
            {/if} -->
        @endforeach
    </ul>
</div>