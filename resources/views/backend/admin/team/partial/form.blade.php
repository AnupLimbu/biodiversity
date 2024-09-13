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
        <label for="order" class="col-2 text-left col-form-label  text-red">Order:</label>
        <input type="number"  value="{{old("order") ??$team->order ??''}}" name="order" class="form-control  col-10  {{$errors->has("order")?"is-invalid":""}}" id="order" placeholder="1 OR 2 OR 3 ....">
    </div>
    <div class="col-md-6 d-flex mb-3">
        <label for="facebook_link" class="col-2 text-left col-form-label text-red">Type:</label>
        <select name="type" id="type" class="form-control  col-10  {{$errors->has("type")?"is-invalid":""}}">
            <option value="" selected>Select Team type</option>
            <option value="team" {{old("type")=='team' || (isset($team)&&$team->type =='team')?'selected':'' }}>Executive Member</option>
            <option value="advisor" {{old("type")=='advisor' ||(isset($team)&&$team->type =='advisor')?'selected':'' }}>Advisor</option>
            <option value="staff" {{old("type")=='staff' ||(isset($team)&&$team->type =='staff')?'selected':'' }}>Staff</option>
            <option value="volunteer" {{old("type")=='volunteer' ||(isset($team)&&$team->type =='volunteer')?'selected':'' }}>Volunteer</option>
        </select>
    </div>
    <div class="col-md-6 d-flex mb-3">
        <label for="linkedin_link" class="col-2 text-left col-form-label">Linkedin Link:</label>
        <input type="text"  value="{{old("linkedin_link") ??$team->linkedin_link ??""   }}" name="linkedin_link" class="form-control  col-10  {{$errors->has("linkedin_link")?"is-invalid":""}}" id="linkedin_link" placeholder="https://linkedin.com/">
    </div>
    <div class="col-md-6 d-flex mb-3">
        <label for="google_scholar_link" class="col-2 text-left col-form-label">Google Scholar Link:</label>
        <input type="text"  value="{{old("google_scholar_link") ??$team->google_scholar_link ??""   }}" name="google_scholar_link" class="form-control  col-10  {{$errors->has("google_scholar_link")?"is-invalid":""}}" id="google_scholar_link" placeholder="https://">
    </div>
    <div class="col-md-6 d-flex mb-3">
        <label for="research_gate_link" class="col-2 text-left col-form-label">Research Gate Link:</label>
        <input type="text"  value="{{old("research_gate_link") ??$team->research_gate_link ??""   }}" name="research_gate_link" class="form-control  col-10  {{$errors->has("research_gate_link")?"is-invalid":""}}" id="research_gate_link" placeholder="https://">
    </div>
    <div class="col-md-6 d-flex mb-3">
        <label for="image" class="col-2 text-left col-form-label">Image:</label>
        <input  type="file" name="image" id="image formFileMultiple"   class=" col-10  {{$errors->has("name")?"is-invalid":""}}">
    </div>

</div>
@include("backend.admin.includes.form_footer",['type'=>'create'])
