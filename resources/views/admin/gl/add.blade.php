@extends('admin.layout.index')
@section('con')
	<div class="mws-panel grid_8">
		<div class="mws-panel-header">
    		<span>用户添加</span>
        </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/doadd" method="post">
                    	{{csrf_field()}}
                    	
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">用户名</label>
                    				<div class="mws-form-item" style="width:675px">
                    					<input type="text" name="name" class="small">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">密码</label>
                    				<div class="mws-form-item" style="width:500px">
                    					<input type="password" name="pass" class="medium">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">确认密码</label>
                    				<div class="mws-form-item" style="width:500px">
                    					<input type="password" name="repass" class="medium">
                    				</div>
                    			</div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">权限</label>
                                        <div class="mws-form-item" style="width:680px">
                                             <select name="stu" class="small">
                                                  <option value="1">管理员</option>
                                             </select>
                                        </div>
                                   </div>

                    		</div>
                    		<div class="mws-button-row">
                    			<input type="submit" value="添加" class="btn btn-danger">
                    			<input type="reset" value="重置" class="btn ">
                    		</div>
                    	</form>
                    </div>    	
                </div>
@endsection