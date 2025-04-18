@extends('admin/layout')
@section('page_title','Manage Product')
@section('product_select','active')
@section('container')
@if($id>0)
{{$image_required=""}}
@else
{{$image_required="required"}}
@endif
<h1>Manage Product</h1>
{{session('sku_error')}}
<a href="{{url('admin/product')}}">
<button type="button" class="btn btn-secondary">Back</button>
</a>
<div class="row m-t-30">
   <div class="col-lg-12">
      <form action="{{route('product.manage_product_process')}}" method="post">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-body">
                     @csrf    
                     <div class="form-group">
                        <div class="row">
                           <div class="col-md-6">
                              <label for="name" class="control-label mb-1">Name</label>
                              <input id="name" value="{{$name}}" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                              @error('name')
                              <div class="alert alert-danger" role="alert">
                                 {{$message}}
                              </div>
                              @enderror
                           </div>
                           <div class="col-md-6">
                              <label for="slug" class="control-label mb-1">Slug</label>
                              <input id="slug" value="{{$slug}}" name="slug" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                              @error('slug')
                              <div class="alert alert-danger" role="alert">
                                 {{$message}}
                              </div>
                              @enderror
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="row">
                           <div class="col-md-6">
                              <label for="image" class="control-label mb-1">Image</label>
                              <input id="image" name="image" type="file" class="form-control" aria-required="true" aria-invalid="false" {{$image_required}}>
                              @error('image')
                              <div class="alert alert-danger" role="alert">
                                 {{$message}}
                              </div>
                              @enderror
                           </div>
                           <div class="col-md-6">
                              <label for="category_id" class="control-label mb-1">Category</label>
                              <select id="category_id" name="category_id"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                 <option value="">Select Categories</option>
                                 @foreach($category as $list)
                                 @if($category_id==$list->id)
                                 <option selected value="{{$list->id}}">
                                    @else
                                 <option value="{{$list->id}}">
                                    @endif
                                    {{$list->category_name}}
                                 </option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="row">
                           <div class="col-md-6">
                              <label for="brand" class="control-label mb-1">Brand</label>
                              <input id="brand" value="{{$brand}}" name="brand" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                           </div>
                           <div class="col-md-6">
                              <label for="model" class="control-label mb-1">Model</label>
                              <input id="model" value="{{$model}}" name="model" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="short_desc" class="control-label mb-1">Short Desc</label>
                        <textarea id="short_desc" value="" name="short_desc" type="text" class="form-control" aria-required="true" aria-invalid="false" required>{{$short_desc}}</textarea>
                     </div>
                     <div class="form-group">
                        <label for="desc" class="control-label mb-1">Desc</label>
                        <textarea id="desc" value="" name="desc" type="text" class="form-control" aria-required="true" aria-invalid="false" required>{{$desc}}</textarea>
                     </div>
                     <div class="form-group">
                        <label for="keywords" class="control-label mb-1">Keywords</label>
                        <textarea id="keywords" value="" name="keywords" type="text" class="form-control" aria-required="true" aria-invalid="false" required>{{$keywords}}</textarea>
                     </div>
                     <div class="form-group">
                        <label for="technical_specification" class="control-label mb-1">Technical Specification</label>
                        <textarea id="technical_specification" value="" name="technical_specification" type="text" class="form-control" aria-required="true" aria-invalid="false" required>{{$technical_specification}}</textarea>
                     </div>
                     <div class="form-group">
                        <label for="warrenty" class="control-label mb-1">Warrenty</label>
                        <textarea id="warrenty" value="" name="warrenty" type="text" class="form-control" aria-required="true" aria-invalid="false" required>{{$warrenty}}</textarea>
                     </div>
                  </div>
               </div>
            </div>
            <h2>Product Attribute</h2>
            <div class="col-lg-12" id="product_attr_box">
               @php
               $loop_count_num=1
               @endphp
               @foreach($productAttrArr as $key=>$val)
               @php
               $pAArr=(array)$val;
               @endphp
               <input id="paid" name="paid[]" type="text" value="{{$pAArr['id']}}">
               <div class="card" id="product_attr_{{$loop_count_num++}}">
                  <div class="card-body">
                  <div class="form-group">
                <div class="row">
                           <div class="col-md-2">
                              <label for="sku" class="control-label mb-1">SKU</label>
                              <input id="sku" name="sku[]" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$pAArr['sku']}}" required>
                           </div>
                           <div class="col-md-2">
                              <label for="mrp" class="control-label mb-1">MRP</label>
                              <input id="mrp" name="mrp[]" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$pAArr['mrp']}}" required>
                           </div>
                           <div class="col-md-2">
                              <label for="price" class="control-label mb-1">Price</label>
                              <input id="price" name="price[]" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$pAArr['price']}}" required>
                           </div>
                           <div class="col-md-3">
                              <label for="size_id" class="control-label mb-1">Size</label>
                              <select id="size_id" name="size_id[]"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                 <option value="">Select</option>
                                 @foreach($sizes as $list)
                                   @if($pAArr['size_id']==$list->id)
                                 <option value="{{$list->id}}" selected>
                                    {{$list->size}}
                                 </option>
                                 else
                                 <option value="{{$list->id}}">
                                    {{$list->size}}
                                 </option>
                                 @endif
                                 @endforeach
                              </select>
                           </div>
                           
                           <div class="col-md-3">
                              <label for="color_id" class="control-label mb-1">Color</label>
                              <select id="color_id" name="color_id[]"  type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                 <option value="">Select</option>
                                 @foreach($colors as $list)
                                 @if($pAArr['color_id']==$list->id)
                                 <option value="{{$list->id}}" selected>
                                    {{$list->color}}
                                 </option>
                                 else
                                 <option value="{{$list->id}}">
                                    {{$list->color}}
                                 </option>
                                 @endif
                                 @endforeach
                              </select>
                           </div>
                           <div class="col-md-2">
                              <label for="qty" class="control-label mb-1">Qty</label>
                              <input id="qty" name="qty[]" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$pAArr['qty']}}" required>
                           </div>

                           <div class="col-md-4">
                              <label for="attr_image" class="control-label mb-1">Image</label>
                              <input id="attr_image" name="attr_image[]" type="file" class="form-control" aria-required="true" aria-invalid="false" required>
                           </div>

                           <div class="col-md-2">
                              <br />
                              @if($loop_count_num==2)
                              <button type="button" class="btn btn-success" onclick="add_more()">
                                            <i class="fa fa-plus"></i>&nbsp; Add</button>
                                            @else
                                            <a href="{{url('admin/product/product_attr_delete/')}}/{{$pAArr['id']}}/{{$id}}"><button type="button" class="btn btn-danger" onclick="remove_more()">
                                            <i class="fa fa-plus"></i>&nbsp; Remove</button></a>
                                            @endif
                           </div>
                        </div>
                     </div>
                  </div>
                  
               </div>
               @endforeach
            </div>
         </div>
         <div>
            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
            Submit
            </button>
         </div>
         <input type="hidden" name="id" value="{{$id}}"/>
      </form>
   </div>
</div>

<script>
    var loop_count=1;
    function add_more(){
        loop_count++;
        var html='<input id="paid" name="paid[]" type="text"><div class="card" id="product_attr_'+loop_count+'"><div class="card-body"><div class="form-group"><div class="row">';

          html+='<div class="col-md-2"><label for="sku" class="control-label mb-1">SKU</label><input id="sku" name="sku[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required></div>';
          html+='<div class="col-md-2"><label for="mrp" class="control-label mb-1">MRP</label><input id="mrp" name="mrp[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required></div>';
          html+='<div class="col-md-2"><label for="price" class="control-label mb-1">Price</label><input id="price" name="price[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required></div>';
          var size_id_html=jQuery('#size_id').html();
          html+='<div class="col-md-3"><label for="size" class="control-label mb-1">Size</label><select id="size_id" name="size_id[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required="">'+size_id_html+'</select></div>';
          var color_id_html=jQuery('#color_id').html();
          html+='<div class="col-md-3"><label for="color" class="control-label mb-1">Color</label><select id="color_id" name="color_id[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required="">'+color_id_html+'</select></div>';
          html+=' <div class="col-md-2"><label for="qty" class="control-label mb-1">Qty</label><input id="qty" name="qty[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required></div>';
          html+='<div class="col-md-4"><label for="attr_image" class="control-label mb-1">Image</label><input id="attr_image" name="attr_image[]" type="file" class="form-control" aria-required="true" aria-invalid="false" required></div>';
          html+='<div class="col-md-2"><br/><button type="button" class="btn btn-danger" onclick=remove_more("'+loop_count+'")><i class="fa fa-minus"></i>Remove</button></div>';
          html+='</div></div></div></div>';
          
          jQuery('#product_attr_box').append(html)
    }

     function remove_more(loop_count){
        jQuery('#product_attr_'+loop_count).remove();

     } 
    </script>
@endsection
