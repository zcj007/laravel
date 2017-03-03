@extends('admin.layout.index')
@section('con')
	<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i>用户列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">
	        <form action="" method="get">
		        <div id="DataTables_Table_1_length" class="dataTables_length">
			        <label>分页 
			        	<select name="num" size="1" aria-controls="DataTables_Table_1">
					        <option value="5" @if(!empty($request['num']) && $request['num']==2) selected @endif>2</option>
					        <option value="10" @if(!empty($request['num']) && $request['num']==5) selected @endif>5</option>
					        <option value="25" @if(!empty($request['num']) && $request['num']==10) selected @endif>10</option>
					        <option value="50" @if(!empty($request['num']) && $request['num']==50) selected @endif>50</option>
					        <option value="100" @if(!empty($request['num']) && $request['num']==100) selected @endif>100</option>
			        	</select>
			        </label>
		        </div>
		        <div class="dataTables_filter" id="DataTables_Table_1_filter">
		        	<label>搜索: 
		        		<input type="text" name="keywords" aria-controls="DataTables_Table_1">
		        	</label>
		        	<label> 
		        		<input type="submit" class="btn btn-primary" value="查询">
		        	</label>
		        </div>

	        </form>
	        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
	            <thead>
	                <tr role="row">
	                	<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 156px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
	                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 212px;" aria-label="Browser: activate to sort column ascending">账号</th>
	                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;" aria-label="Engine version: activate to sort column ascending">状态</th>
	                </tr>
	            </thead>
	         	<tbody role="alert" aria-live="polite" aria-relevant="all">
					@foreach($list as $val)
						<tr class="even">
				            <td class="id"sorting_1">{{$val->id}}</td>
				            <td class=" ">{{$val->name}}</td>
				            <td class=" ">
								<select name="stu" class="sorting">
									@if($val->stu =='1')
									<option value="1" @if($val->stu =='1') selected @endif>超级管理员</option>
									@else
										<option value="1" @if($val->stu =='1') selected @endif>超级管理员</option>
									<option value="2" @if( $val->stu =='2') selected @endif>管理员</option>
									<option value="0" @if($val->stu =='0' ) selected @endif>禁用</option>
										@endif
								</select>
								&nbsp	&nbsp	&nbsp
								@if(session('user') && session('user')->stu =='1' && $val->stu !='1')
								<button class="buo">操作</button>
								@endif
							</td>
						</tr>
						@endforeach

	        	</tbody>
	        </table>
	        
	        <div class="dataTables_paginate paging_full_numbers" id="pages">
		        <!-- dd($request); -->
		        {{--<!-- {{var_dump($request)}} -->--}}
		        {!!$list->appends($request)->render()!!}
		        
	        </div>
        </div>
    </div>
</div>
	<script type="text/javascript" src='/jquery-1.8.3.js'></script>
	<script type="text/javascript">


        $('button').each(function(){
            $(this).click(function() {

                var id = $(this).parent('td').prev('td').prev('td').html();
                var name=$(this).prev('select').find('option:selected').html();

                $.ajax({
                    url: '/ajax',
                    data: {id: id,name:name},
                    type: 'get',
                    success: function (mes) {

                        alert(mes);

                    }
                });

            });


		});



//            console.log(bu);


//			alert(bu);

//			for(var o=null in bu){
//
//
//
//			    $(o).click(function(){
//
//			        console.log($(this));
//
////			        alert('AA');
//
////			        var id=$(this).html();
////
////			        alert(id);
//
////                    $.ajax({
////                        url:'/ajax',
////                        data:{id:id},
////                        type:'get',
////                        success:function(mes){
////                            alert(mes);
////
////
////                        }
////                    });
//
//				});
//			}






	</script>
@endsection