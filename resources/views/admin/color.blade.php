@extends('admin/layout')
@section('page_title','Color')
@section('color_select','active')
@section('container')

@if(session()->has('message'))
<div class="alert alert-danger" role="alert">
{{session('message')}}
</div>

@endif
<h1>Color</h1>
<a href="{{url('admin/color/manage_color')}}">
<button type="button" class="btn btn-secondary">Add Color</button>
</a>
<div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Color</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $list)
                                            <tr>
                                                <td>{{$list->id}}</td>
                                                <td>{{$list->color}}</td>
                                                <td>
                                                    <a href="{{url('admin/color/manage_color/')}}/{{$list->id}}"><button type="button" class="btn btn-info">Edit</button></a>
                                                    
                                                    @if($list->status==1)
                                                    <a href="{{url('admin/color/status/0')}}/{{$list->id}}"><button type="button" class="btn btn-secondary">Active</button></a>
                                                    @elseif($list->status==0)
                                                    <a href="{{url('admin/color/status/1')}}/{{$list->id}}"><button type="button" class="btn btn-warning">Deactive</button></a>
                                                    @endif
                                                    
                                                    <a href="{{url('admin/color/delete/')}}/{{$list->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        
@endsection

