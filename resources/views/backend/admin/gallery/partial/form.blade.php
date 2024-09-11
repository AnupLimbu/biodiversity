@php($is_edit=$type=='edit'?:false)
<div class="row">

                        <div class="col-md-6 d-flex mb-3">
                        <label for="name" class="col-2 text-left col-form-label text-red">Name:</label>
                        <input type="text" value="{{old("name")?? $gallery->name ??null}}" name="name" class="form-control  col-10  name {{$errors->has("name")?"is-invalid":""}}" id="name" placeholder="Name">
                        </div>
                        <div class="col-md-6 d-flex mb-3">
                        <label for="description" class="col-2 text-left col-form-label">Description:</label>
                        <textarea name="description" class="form-control col-10 {{$errors->has("description")?"is-invalid":""}}" rows="1" id="description" placeholder="Description">{{old("description")?? $gallery->description ??null}}</textarea>
                        </div>
                         <div class="col-md-6 d-flex mb-3">
                         <label for="order" class="col-2 text-left col-form-label text-red">Order:</label>
                        <input type="number" value="{{old("order")?? $gallery->order ??null}}" name="order" class="form-control  col-10  name {{$errors->has("order")?"is-invalid":""}}" id="order" placeholder="Order">
                         </div>
                        <div class="col-md-6 d-flex mb-3">
                        <label for="thumbnail" class="col-2 text-left col-form-label ">Thumbnail:</label>
                        <input  type="file" name="thumbnail" id="thumbnail formFileMultiple "  class="col-10  {{$errors->has("thumbnail")?"text-red":""}}" multiple>
                        </div>

</div>
@include("backend.admin.includes.form_footer",['type'=>'create'])
