@extends('admin.layout.index')
@section('con')
	<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i>学生列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">
	        <form action="" method="get">
		        <div id="DataTables_Table_1_length" class="dataTables_length">
			        <label>分页 
			        	<select name="num" size="1" aria-controls="DataTables_Table_1">
					        <option value="2" @if(!empty($request['num']) && $request['num']==2) selected @endif>2</option>
					        <option value="3" @if(!empty($request['num']) && $request['num']==3) selected @endif>3</option>
					        <option value="5" @if(!empty($request['num']) && $request['num']==5) selected @endif>5</option>
					        <option value="10" @if(!empty($request['num']) && $request['num']==10) selected @endif>10</option>
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
	                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 212px;" aria-label="Browser: activate to sort column ascending">学生姓名</th>
	                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 180px;" aria-label="Browser: activate to sort column ascending">学生性别</th>
	                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 180px;" aria-label="Browser: activate to sort column ascending">学生年龄</th>
	                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 180px;" aria-label="Browser: activate to sort column ascending">学生班级</th>
	                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 150px;" aria-label="CSS grade: activate to sort column ascending">操作</th>
	                </tr>
	            </thead>
	         	<tbody role="alert" aria-live="polite" aria-relevant="all">
				{{ $a = 1 }}
				@foreach($list as $k)
					--@if($a%2 ==0)
			        	<tr class="odd">
			        	@else
			        	<tr class="even">
			        	@endif
				            <td class="  sorting_1">{{ $k->id }}</td>
				            <td class=" ">{{ $k->name }}</td>
				            <td class=" ">{{ $k->sex }}</td>
				            <td class=" ">{{ $k->age }}</td>
				            {{--<td class=" " width="50px" alt=""></td>--}}
				            <td class=" ">{{ $k->class }}</td>
				            <td class=" ">
				            	<a href="/del/{{ $k->id }}" class="icon-trash" style="font-size:30px;color:red"></a>&nbsp&nbsp&nbsp&nbsp|
								&nbsp&nbsp&nbsp&nbsp
				            	<a href="/edit/{{ $k->id }}" class="icon-pencil-2" style="font-size:30px;color:red"></a>
				            </td>
				        </tr>
						$a++;
					@endforeach


	        	</tbody>
	        </table>
	        
	        <div class="dataTables_paginate paging_full_numbers" id="pages">
		       <!--  <a href="/admin/good/index?num=2&page=1">1</a>
		        <a href="/admin/good/index?num=2&page=2">2</a> -->
				{!!$list->appends($request)->render()!!}
	        </div>
        </div>
    </div>
</div>
@endsection