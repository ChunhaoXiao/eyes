<x-section-title title="诊断"/>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <x-select label="右眼" name="right_eye[]" id="source" source="disease" multiple :selected="$data->right_eye??''" /> 
        </div>
        <div class="col-sm-4">
            <x-select label="左眼" name="left_eye[]" id="source1" source="disease" multiple :selected="$data->left_eye??''" /> 
        </div>
    </div>
    
    <x-textinput text="其它" name="other" :value="$data->other??''"/>
   
</div>