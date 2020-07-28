<x-section-title title="眼压"/>

 <div class="container">
     <div class="row">
         <div class="col-sm">
             <x-textinput text="右眼" name="ya_r" :value="$data->ya_r??''"/>
         </div>
         <div class="col-sm">
             <x-textinput text="左眼" name="ya_l" :value="$data->ya_l??''"/>
         </div>
     </div>
 </div>