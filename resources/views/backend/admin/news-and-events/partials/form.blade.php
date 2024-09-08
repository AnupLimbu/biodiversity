@php($is_edit=($type=='edit'?:false))
<div class="row">
    <div class="col-md-6 d-flex mb-3">
        <label for="title" class="col-2 text-left col-form-label">Title:</label>
        <input type="text" value="{{old("title")??($is_edit?$newsAndEvent->title:'')}}" name="title" class="form-control  col-10  name {{$errors->has("title")?"is-invalid":""}}" id="title" placeholder="Title">
    </div>

    <div class="col-md-6 d-flex mb-3">
        <label for="title" class="col-2 text-left col-form-label">Type:</label>
        <select id="type" name="type" class="form-control col-10">
            <option value="news">News</option>
            <option value="event" {{old('type')=='event'|| (isset($newsAndEvent) && $newsAndEvent->type=='event')?'selected':''}}>Event</option>
        </select>
    </div>
    <div class="col-md-6 d-flex mb-3 show-on-event-select">
        <label for="event_start_date" class="col-2 text-left col-form-label">Start Date:</label>
        <input type="date" value="{{old("event_start_date")??($is_edit?$newsAndEvent->event_start_date:'')}}" name="event_start_date" class="form-control  col-10  name {{$errors->has("event_start_date")?"is-invalid":""}}" id="event_start_date" placeholder="Date">
    </div>
    <div class="col-md-6 d-flex mb-3 show-on-event-select">
        <label for="event_start_date" class="col-2 text-left col-form-label">End Date:</label>
        <input type="date" value="{{old("event_end_date")??($is_edit?$newsAndEvent->event_end_date:'')}}" name="event_end_date" class="form-control  col-10  name {{$errors->has("event_end_date")?"is-invalid":""}}" id="event_end_date" placeholder="Date">
    </div>
    <div class="col-md-12 d-flex mb-3">
        <label for="description" class="col-1 text-left col-form-label">Description:</label>
        <textarea type="text"  name="description" class="form-control  col-11  name {{$errors->has("description")?"is-invalid":""}}" id="description" placeholder="Description">{{old("description")??($is_edit?$newsAndEvent->description:'')}}</textarea>
    </div>

    <div class="col-md-6 d-flex mb-3">
        <label for="banner_img" class="col-2 text-left col-form-label">Banner Image:</label>
        <input  type="file" value="{{old('banner_img')}}" name="banner_img" id="banner_image"   {{$errors->has("banner_img")?"is-invalid":""}}">
    </div>

    <div class="col-md-6 d-flex mb-3">
        <label for="file" class="col-2 text-left col-form-label">File:</label>
        <input  type="file" value="{{old('file')}}" name="file" id="file"   {{$errors->has("file")?"is-invalid":""}}">
    </div>
</div>

@include("backend.admin.includes.form_footer",['type'=>'create'])

@push('scripts')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', (event) => {
            const type_on_load='{{old('type')??(isset($newsAndEvent) ?$newsAndEvent->type:'news')}}';
            const dates=document.getElementsByClassName('show-on-event-select');
            if(type_on_load==='news'){
                Array.from(dates).forEach(element => {
                    element.classList.add('hidden');
                });
            }
            const type = document.getElementById('type');
            type.addEventListener('change', (event) => {
                const selectedValue = event.target.value;

                if(selectedValue==='news'){
                    Array.from(dates).forEach(element => {
                        element.classList.add('hidden');
                    });
                }else{
                    // Hide all elements
                    Array.from(dates).forEach(element => {
                        element.classList.remove('hidden');
                    });
                }
                console.log(`You selected: ${selectedValue}`);
            });
        });
    </script>
@endpush
