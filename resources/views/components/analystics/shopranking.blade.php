<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">店铺客户数量排行
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                        <!-- <button class="active btn btn-focus mr-2">客户数排行</button>
                        <button class="btn btn-focus">收入排行</button> -->
                    </div>
                </div>
            </div>

            <div class="table-responsive" style="overflow-x:hidden">

                <div class="row">
                    <div class="col-sm-7">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>店铺名称</th>
                                    <th>客户数量</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($shops as $k => $v)    
                                <tr>
                                
                                    <td>
                                        {{$v->title}}
                                    
                                    </td>
                                    <td class="font-weight-bold">{{$v->customers_count}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-5" id="pie">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">店铺消费总额排行
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                        <!-- <button class="active btn btn-focus mr-2">客户数排行</button>
                        <button class="btn btn-focus">收入排行</button> -->
                    </div>
                </div>
            </div>

            <div class="table-responsive" style="overflow-x:hidden">

                <div class="row">
                    <div class="col-sm-7">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>店铺名称</th>
                                    <th>消费金额</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($consume as $k => $v)    
                                <tr>
                                
                                    <td>
                                        {{$v->shop->title}}
                                    
                                    </td>
                                    <td class="font-weight-bold">{{$v->sum}}元</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-5" id="pie_consume">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script> 
$(function(){
    const points = @json($customer_pie);
	$("#pie").CanvasJSChart({ 
        width:200,
        height:200,
		// title: { 
		// 	text: "Worldwide Smartphone sales by brand - 2012",
		// 	fontSize: 24
		// }, 
		axisY: { 
			title: "Products in %" 
		}, 
		legend :{ 
			verticalAlign: "top", 
			horizontalAlign: "right" 
            // maxWidth: 100,
			// maxHeight: 100
		}, 
		data: [ 
		{ 
			type: "pie", 
			//showInLegend: true, 
			toolTipContent: "{label}  {y} %", 
			indexLabel: "{y} %", 
            dataPoints:points
			// dataPoints: [ 
			// 	{ label: "Samsung",  y: 30.3, legendText: "Samsung"}, 
			// 	{ label: "Apple",    y: 19.1, legendText: "Apple"  }, 
			// 	{ label: "Huawei",   y: 4.0,  legendText: "Huawei" }, 
			// 	{ label: "LG",       y: 3.8,  legendText: "LG Electronics"}, 
			// 	{ label: "Lenovo",   y: 3.2,  legendText: "Lenovo" }, 
			// 	{ label: "Others",   y: 39.6, legendText: "Others" } 
			// ] 
		} 
		] 
	}); 

    const consume = @json($pie_consume);
    $("#pie_consume").CanvasJSChart({ 
        width:200,
        height:200,
		// title: { 
		// 	text: "Worldwide Smartphone sales by brand - 2012",
		// 	fontSize: 24
		// }, 
		axisY: { 
			title: "Products in %" 
		}, 
		legend :{ 
			verticalAlign: "top", 
			horizontalAlign: "right" 
            // maxWidth: 100,
			// maxHeight: 100
		}, 
		data: [ 
		{ 
			type: "pie", 
			//showInLegend: true, 
			toolTipContent: "{label}  {y} %", 
			indexLabel: "{y} %", 
            dataPoints:consume
			// dataPoints: [ 
			// 	{ label: "Samsung",  y: 30.3, legendText: "Samsung"}, 
			// 	{ label: "Apple",    y: 19.1, legendText: "Apple"  }, 
			// 	{ label: "Huawei",   y: 4.0,  legendText: "Huawei" }, 
			// 	{ label: "LG",       y: 3.8,  legendText: "LG Electronics"}, 
			// 	{ label: "Lenovo",   y: 3.2,  legendText: "Lenovo" }, 
			// 	{ label: "Others",   y: 39.6, legendText: "Others" } 
			// ] 
		} 
		] 
	}); 
}) 
</script> 