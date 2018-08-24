@extends('admin.master')
@section('content')
@section('controller','Quản lý '.$trang)
@section('action','Add')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   	@yield('controller')
    <small>@yield('action')</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="javascript:">@yield('controller')</a></li>
    <li class="active">@yield('action')</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  
    <div class="box">
    	@include('admin.messages_error')
        <div class="box-body">
        	
        	<form name="frmAdd" method="post" action="{!! route('admin.lienket.postAdd') !!}" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
          		<div class="col-md-6 col-xs-12">
          			
					<div class="form-group col-md-12 @if ($errors->first('fImages')!='') has-error @endif">
						<label for="file">File ảnh</label>
				     	<input type="file" id="file" name="fImages" >
				    	<p class="help-block">Width:225px - Height: 162px</p>
				    	@if ($errors->first('fImages')!='')
				      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('fImages'); !!}</label>
				      	@endif
					</div>
					@if($_GET['type']=='marketing')
					<div class="form-group col-md-12 ">
						<label for="file">File ảnh 2</label>
				     	<input type="file" id="file" name="fImages2" >
				    	<p class="help-block">Width:225px - Height: 162px</p>				    	
					</div>
					@endif
					<div class="clearfix"></div>
			    	<div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
				      	<label for="ten">Tên</label>
				      	<input type="text" id="txtName" name="txtName" value=""  class="form-control" />
				      	@if ($errors->first('txtName')!='')
				      	<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {!! $errors->first('txtName'); !!}</label>
				      	@endif
					</div>
					@if($_GET['type']=='baochi')
					<div class="form-group">
				      	<label for="alias">Link liên kết</label>
				      	<input type="text" name="txtLink" id="" value=""  class="form-control" />
					</div>
					@endif
					@if($_GET['type']=='baochi')
					<div class="form-group">
				      	<label for="alias">Nguồn</label>
				      	<input type="text" name="txtContent" id="" value=""  class="form-control" />
					</div>
					@endif
					
					@if($_GET['type']=='taisao' || $_GET['type']=='baochi')
					<div class="form-group">
				      	<label for="desc">Mô tả</label>
				      	<textarea name="txtDesc" rows="5" class="form-control"></textarea>
					</div>
					@endif
					<input type="hidden" name="txtCom" value="{{ @$_GET['type'] }}"/>
				</div>
				<div class="col-md-12 col-xs-12">
					@if($_GET['type']=='content')
					<div class="box box-info">
		                <div class="box-header">
		                  	<h3 class="box-title">Nội dung</h3>
		                  	<div class="pull-right box-tools">
			                    <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
			                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
			                </div>
		                </div>
		                <div class="box-body pad">
		        			<textarea name="txtContent" id="txtContent" cols="50" rows="5"></textarea>
		        		</div>
		        	</div>
					@endif
				</div>
	            <div class="clearfix"></div>
			    <div class="col-md-6">
			    	<div class="form-group">
					      <label for="ten">Số thứ tự</label>
					      <input type="number" min="1" name="stt" value="{!! count($data)+1 !!}" class="form-control" style="width: 100px;">
				    </div>
				    
				    <div class="form-group hidden">
					    <label>
				        	<input type="checkbox" name="status" checked="checked"> Hiển thị
				    	</label>
				    </div>
			    	
			    </div>			    
				<div class="clearfix"></div>
			    <div class="box-footer">
			    	<div class="row">
						<div class="col-md-6">
					    	<button type="submit" class="btn btn-primary">Lưu</button>
					    	<button type="button" onclick="javascript:window.location='backend/lienket?type={{ @$_GET[type] }}'" class="btn btn-danger">Thoát</button>
				    	</div>
			    	</div>
			  	</div>
		    </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    
</section><!-- /.content -->

@endsection()
