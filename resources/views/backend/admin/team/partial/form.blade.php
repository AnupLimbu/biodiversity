@php($is_edit=$type=='edit'?:false)
<div class="row">
{{--    ['name','description','designation','social_links','order','image']--}}
    <div class="col-md-6 d-flex mb-3">
        <label for="name" class="col-2 text-left col-form-label text-red">Name:</label>
        <input type="text" value="{{old("name") ??$team->name ?? ""}}" name="name" class="form-control  col-10  name {{$errors->has("name")?"is-invalid":""}}" id="name" placeholder="Name">
    </div>
    @if($is_edit)
        <input type="hidden" name="id" value="{{$team->id}}">
    @endif
    <div class="col-md-6 d-flex mb-3">
        <label for="description" class="col-2 text-left col-form-label">Description:</label>
        <textarea name="description" class="form-control col-10 {{$errors->has("description")?"is-invalid":""}}" rows="1" id="description" placeholder="Description">{{old("description") ??$team->description??""}}</textarea>
    </div>
    <div class="col-md-6 d-flex mb-3">
        <label for="designation" class="col-2 text-left col-form-label  text-red">Designation:</label>
        <input type="text"  value="{{old("designation") ??$team->designation ?? ""}}" name="designation" class="form-control  col-10  {{$errors->has("designation")?"is-invalid":""}}" id="designation" placeholder="designation">
    </div>
    <div class="col-md-6 d-flex mb-3">
        <label for="contact" class="col-2 text-left col-form-label">Contact:</label>
        <input type="text"  value="{{old("contact") ??$team->contact ??""   }}" name="contact" class="form-control  col-10  {{$errors->has("contact")?"is-invalid":""}}" id="contact" placeholder="9812345678" min="10">
    </div>
    <div class="col-md-6 d-flex mb-3">
        <label for="facebook_link" class="col-2 text-left col-form-label">Facebook Link:</label>
        <input type="text"  value="{{old("facebook_link") ??$team->facebook_link ??""   }}" name="facebook_link" class="form-control  col-10  {{$errors->has("facebook_link")?"is-invalid":""}}" id="facebook_link" placeholder="https://facebook.com/username">
    </div>
    <div class="col-md-6 d-flex mb-3">
        <label for="instagram_link" class="col-2 text-left col-form-label">Instagram Link:</label>
        <input type="text"  value="{{old("instagram_link") ??$team->instagram_link ??""   }}" name="instagram_link" class="form-control  col-10  {{$errors->has("instagram_link")?"is-invalid":""}}" id="instagram_link" placeholder="https://instagram.com/username">
    </div>
    <div class="col-md-6 d-flex mb-3">
        <label for="order" class="col-2 text-left col-form-label  text-red">Order:</label>
        <input type="number"  value="{{old("order") ??$team->order ??''}}" name="order" class="form-control  col-10  {{$errors->has("order")?"is-invalid":""}}" id="order" placeholder="1 OR 2 OR 3 ....">
    </div>
    <div class="col-md-6 d-flex mb-3">
        <label for="image" class="col-2 text-left col-form-label">Image:</label>
        <input  type="file" name="image" id="image formFileMultiple"  class=" col-10  {{$errors->has("name")?"is-invalid":""}}">
    </div>

</div>
@include("backend.admin.includes.form_footer",['type'=>'create'])
