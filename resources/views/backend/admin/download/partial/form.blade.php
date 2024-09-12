@php($is_edit=$type=='edit'?:false)
<div class="row">

                        <div class="col-md-6 d-flex mb-3">
                        <label for="name" class="col-2 text-left col-form-label text-red">Name:</label>
                        <input type="text" value="{{old("name")??$download->name??null}}" name="name" class="form-control  col-10  name {{$errors->has("name")?"is-invalid":""}}" id="name" placeholder="Name">
                        </div>
                        <div class="col-md-6 d-flex mb-3">
                        <label for="description" class="col-2 text-left col-form-label">Description:</label>
                        <textarea name="description" class="form-control col-10 {{$errors->has("description")?"is-invalid":""}}" rows="1" id="description" placeholder="Description">{{old("description")??$download->name??null}}</textarea>
                        </div>
                        <div class="col-md-6 d-flex mb-3">
                        <label for="thumbnail" class="col-2 text-left col-form-label ">Thumbnail:</label>
                        <input  type="file" name="thumbnail" id="thumbnail formFileMultiple "  class=" col-10  {{$errors->has("thumbnail")?"text-red":""}}" multiple>
                        </div>
                        <div class="col-md-6 d-flex mb-3">
                        <label for="file" class="col-2 text-left col-form-label ">File:</label>
                        <input  type="file" name="file" id="file formFileMultiple"  class=" col-10   {{$errors->has("file")?"text-red":""}}" multiple>
                        </div>
</div>
@include("backend.admin.includes.form_footer",['type'=>'create'])
