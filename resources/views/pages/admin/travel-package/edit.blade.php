<div class="row">
    <div class="col-md-6">
        <input type="hidden" name="id" value="{{ $data->id }}" id="id-data"/>
        <div class="form-group">
            <span></span>
            <input type="text" placeholder="Title" value="{{ $data->title }}" name="title" class="form-control">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <span></span>
            <input type="text" value="{{ $data->location }}" name="location" placeholder="Location" class="form-control">
        </div>
    </div>
</div>

<div class="form-group">
    <span></span>
    <textarea name="about" cols="30" rows="2" placeholder="About" class="form-control">{{ $data->about }}</textarea>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <span></span>
            <input type="text" value="{{ $data->featured_event }}" name="featured_event" placeholder="Featured event" class="form-control">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <span></span>
            <input type="text" value="{{ $data->language }}" name="language" placeholder="Language" class="form-control">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <span></span>
            <input type="text" value="{{ $data->foods }}" name="foods" placeholder="Foods" class="form-control">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <span></span>
            <input placeholder="Date of departure" value="{{ $data->departure_date }}" name="departure_date" class="form-control" type="text" onfocus="(this.type='date')" id="date">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <span></span>
            <input type="text" value="{{ $data->duration }}" name="duration" placeholder="Duration" class="form-control">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <span></span>
            <input type="text" value="{{ $data->type }}" name="type" placeholder="Type" class="form-control">
        </div>
    </div>
</div>

<div class="form-group">
    <span></span>
    <input type="number" value="{{ $data->price }}" name="price" placeholder="Price" class="form-control">
</div>