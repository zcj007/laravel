@extends('admin.layout.index')
@section('con')
	<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i>前台用户列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">
	        <form action="" method="get">
		        <div id="DataTables_Table_1_length" class="dataTables_length">
			        <label>分页 
			        	<select name="num" size="1" aria-controls="DataTables_Table_1">
					        <option value="5" @if(!empty($request['num']) && $request['num']==5) selected @endif>5</option>
					        <option value="10" @if(!empty($request['num']) && $request['num']==10) selected @endif>10</option>
					        <option value="25" @if(!empty($request['num']) && $request['num']==25) selected @endif>25</option>
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
	                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 197px;" aria-label="Platform(s): activate to sort column ascending">邮箱</th>
	                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;" aria-label="Engine version: activate to sort column ascending">状态</th>
	                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;" aria-label="Engine version: activate to sort column ascending">权限</th>
	                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 150px;" aria-label="CSS grade: activate to sort column ascending">操作</th>
	                </tr>
	            </thead>
	         	<tbody role="alert" aria-live="polite" aria-relevant="all">
			        @foreach($list as $k=>$v)
			        	@if($k%2==0)
			        	<tr class="odd">
			        	@else
			        	<tr class="even">
			        	@endif
				            <td class="  sorting_1">{{$v['id']}}</td>
				            <td class=" ">{{$v['name']}}</td>
				            <td class=" ">{{$v['email']}}</td>
				            <td class=" ">@if($v['status']==0)未激活@else已激活 @endif</td>
				            <td class=" "><a class="auth" style="color:blue" href="">@if($v['auth']==0)已禁用@else已开启 @endif</a></td>
				            <td class=" ">
				            	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				            	<a href="/admin/user/hdel/{{$v['id']}}" class="icon-trash" style="font-size:20px;color:red"></a>
				            </td>
				        </tr>
				    @endforeach
	        	</tbody>
	        </table>
	        
	        <div class="dataTables_paginate paging_full_numbers" id="pages">
		        <!-- dd($request); -->
		        <!-- {{var_dump($request)}} -->
		        {!!$list->appends($request)->render()!!}
		        
	        </div>
        </div>
    </div>
</div>

<script type="text/javascript" src='/jquery-1.8.3.js'></script>
<script type="text/javascript">
	$('.auth').each(function(){
		
		$(this).click(function(){
			var a = $(this);
			var id = a.parent('td').parent('tr').find('td:eq(0)').html();
			// alert(id);
			$.ajax({
				url:'/admin/user/auth',
				data:{id:id},
				type:'get',
				success:function(mes){
					// alert(mes);
					var str = a.html();
					if(str=='已禁用'){
						a.html('已开启');
					}else{
						a.html('已禁用');
					}
					
				}
			});
			return false;

		});
	});

	


</script>
@endsection