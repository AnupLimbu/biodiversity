@php($is_edit=$type=='edit'?:false)
                   <div class="row">
                        <div class="col-md-6 d-flex mb-3">
                        <label for="title" class="col-2 text-left col-form-label text-red">Title:</label>
                        <input type="text" value="{{old("title")??$project->title ??""}}" name="title" class="form-control  col-10  title {{$errors->has("title")?"is-invalid":""}}" id="title" placeholder="Title">
                        </div>

                        <div class="col-md-6 d-flex mb-3">
                        <label for="start_date" class="col-2 text-left col-form-label text-red">Start Date:</label>
                        <input type="date"  value="{{old("start_date")??$project->start_date??''}}" name="start_date" class="form-control  col-10  {{$errors->has("start_date")?"is-invalid":""}}" id="start_date" placeholder="Start date" step="any">
                        </div>
                       <div class="col-md-6 d-flex mb-3">
                        <label for="end_date" class="col-2 text-left col-form-label">End Date:</label>
                           <input type="date"  value="{{old("end_date")??$project->end_date??''}}" name="end_date" class="form-control  col-10  {{$errors->has("end_date")?"is-invalid":""}}" id="end_date" placeholder="End date" step="any">
                       </div>
                        <div class="col-md-6 d-flex mb-3">
                        <label for="image" class="col-2 text-left col-form-label">Thumbnail:</label>
                        <input  type="file" name="image" id="image formFileMultiple"  class=" col-10  {{$errors->has("name")?"is-invalid":""}}" multiple>
                        </div>
                        <div class="col-md-6 d-flex mb-3">
                        <label for="status" class="col-2 text-left col-form-label text-red">Status:</label>
                            <select name="status" id="status" class="form-control  col-10  {{$errors->has("status")?"is-invalid":""}}">
                                <option value="" selected>Select Status</option>
{{--                                <option class="text-primary" value="pending" {{old("status")=='pending' || (isset($project)&&$project->status =='pending')?'selected':'' }}>Pending</option>--}}
                                <option class="text-yellow" value="on-going" {{old("status")=='on-going' ||(isset($project)&&$project->status =='on-going')?'selected':'' }}>On going</option>
                                <option class="text-green" value="completed" {{old("status")=='completed' ||(isset($project)&&$project->status =='completed')?'selected':'' }}>Completed</option>
{{--                                <option class="text-red" value="halted" {{old("status")=='halted' ||(isset($project)&&$project->status =='halted')?'selected':'' }}>Halted</option>--}}
                            </select>
                        </div>

                       <div class="col-md-12 mb-3">
                           <label for="description" class="col-2 text-left col-form-label text-red">Description:</label>
                           <textarea id="summernote" name="description"  class="summernote form-control {{$errors->has("description")?"is-invalid":""}}" > {!! old('description')??$project->description??'' !!} </textarea>
                           {{--        <textarea name="description" class="form-control col-10 {{$errors->has("description")?"is-invalid":""}}" rows="1" id="editor" placeholder="Description">{{old("description")}}</textarea>--}}
                       </div>
                   </div>
@include("backend.admin.includes.form_footer",['type'=>'create'])
