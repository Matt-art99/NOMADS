@extends('layouts.admin')
@section('title', 'NOMADS | Travel Packages')
@section('content')
<div class="row">
  <div class="col">
    <div class="card bg-default shadow">
      <div class="card-header bg-transparent border-0 d-block d-sm-flex justify-content-between">
        <h3 class="text-light mb-0 align-self-center">Travel Packages</h3>
        <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary mt-2">
          <i class="fa fa-plus"></i> Add Travel Package
        </a>
      </div>
      <div class="table-responsive text-center">
        <table class="table align-items-center table-dark table-flush">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Title</th>
              <th scope="col">Location</th>
              <th scope="col">Type</th>
              <th scope="col">Departure Date</th>
              <th scope="col">Price</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody class="list">
            @forelse($items as $i => $item)
              <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->location }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->departure_date }}</td>
                <td>{{ $item->price }}</td>
                <td>
                  <a class="btn btn-info btn-sm btn-edit" href="#" data-id="{{ $item->id }}">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <a href="#!" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete">
                    <i class="fa fa-trash"></i>
                  </a>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="7" class="text-center">Data masih kosong</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

{{--  Modal Tambah  --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Travel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form action="{{ route('travel-package.store') }}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="title" placeholder="Title" class="form-control">
                @error('title')
                  <small class="text-danger ml-1">{{ $message }}</small>
                @enderror
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="location" placeholder="Location" class="form-control">
                @error('location')
                  <small class="text-danger ml-1">{{ $message }}</small>
                @enderror
              </div>
            </div>
          </div>
  
          <div class="form-group">
            <textarea name="about" cols="30" rows="2" placeholder="About" class="form-control"></textarea>
            @error('about')
              <small class="text-danger ml-1">{{ $message }}</small>
            @enderror
          </div>
  
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="featured_event" placeholder="Featured event" class="form-control">
                @error('featured_event')
                  <small class="text-danger ml-1">{{ $message }}</small>
                @enderror
              </div>
            </div>
  
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="language" placeholder="Language" class="form-control">
                @error('language')
                  <small class="text-danger ml-1">{{ $message }}</small>
                @enderror
              </div>
            </div>
          </div>
  
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="foods" placeholder="Foods" class="form-control">
                @error('foods')
                  <small class="text-danger ml-1">{{ $message }}</small>
                @enderror
              </div>
            </div>
  
            <div class="col-md-6">
              <div class="form-group">
                <input placeholder="Date of departure" name="departure_date" class="form-control" type="text" onfocus="(this.type='date')" id="date">
                @error('departure_date')
                  <small class="text-danger ml-1">{{ $message }}</small>
                @enderror
              </div>
            </div>
          </div>
  
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="duration" placeholder="Duration" class="form-control">
                @error('duration')
                  <small class="text-danger ml-1">{{ $message }}</small>
                @enderror
              </div>
            </div>
  
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="type" placeholder="Type" class="form-control">
                @error('type')
                  <small class="text-danger ml-1">{{ $message }}</small>
                @enderror
              </div>
            </div>
          </div>
  
          <div class="form-group">
            <input type="number" name="price" placeholder="Price" class="form-control">
            @error('price')
              <small class="text-danger ml-1">{{ $message }}</small>
            @enderror
          </div>
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

{{--  Modal Edit  --}}
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEdit" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Travel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form action="{{ route('travel-package.store') }}" method="POST" id="form-edit">
        @csrf
        @method('patch')
        <div class="modal-body">
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btn-update">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

{{--  Modal delete  --}}
<div class="col-md-4">
  <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
  <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
      <div class="modal-content bg-gradient-danger">
        
          <div class="modal-header">
              <h6 class="modal-title" id="modal-title-delete">Are you sure to delete this data?</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          
          <div class="modal-body">
            
              <div class="py-3 text-center">
                  <i class="ni ni-bell-55 ni-3x"></i>
                  <h4 class="heading mt-4">You should read this!</h4>
                  <p>
                    Select "delete" below if you&apos;re ready to delete this data. 
                    If you delete this data, you will permanently lose this data.
                  </p>
              </div>
              
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-link text-white mr-auto" data-dismiss="modal">Close</button>
            <form action="{{ route('travel-package.destroy', $item->id) }}" method="POST">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-white">Delete</button>
            </form>
          </div>
          
      </div>
  </div>
</div>
@endsection
@push('addon-script')
  <script>
    @if($errors->any())
      $('#exampleModal').modal('show');
    @endif

    $('.btn-edit').on('click', function(){
      let id = $(this).data('id');

      $.ajax({
        url: `/admin/travel-package/${id}/edit`,
        method: "GET",
        success: function(data){
          $('#modalEdit').find('.modal-body').html(data)
          $('#modalEdit').modal('show');
        },
        error: function(error){
          console.log(error)
        }
      });
    });

    $('.btn-update').on('click', function(){
      let id = $('#form-edit').find('#id-data').val()
      let dataForm = $('#form-edit').serialize()

      $.ajax({
        url: `/admin/travel-package/${id}`,
        method: "PATCH",
        data: dataForm,
        success: function(data){
          $('#modalEdit').modal('hide')
          window.location.assign('/admin/travel-package')
        },
        error: function(err){
          let err_log = err.responseJSON.errors;
          if(err.status == 422){
            if(typeof(err_log.title) !== 'undefined'){
              $('#modalEdit').find('[name="title"]').prev().html('<small class="text-danger">'+ err_log.title[0] +'</small>')
            }else{
              $('#modalEdit').find('[name="title"]').prev().html('<span></span>')
            }

            if(typeof(err_log.location) !== 'undefined'){
              $('#modalEdit').find('[name="location"]').prev().html('<small class="text-danger">'+ err_log.location[0] +'</small>')
            }else{
              $('#modalEdit').find('[name="location"]').prev().html('<span></span>')
            }

            if(typeof(err_log.about) !== 'undefined'){
              $('#modalEdit').find('[name="about"]').prev().html('<small class="text-danger">'+ err_log.about[0] +'</small>')
            }else{
              $('#modalEdit').find('[name="about"]').prev().html('<span></span>')
            }

            if(typeof(err_log.featured_event) !== 'undefined'){
              $('#modalEdit').find('[name="featured_event"]').prev().html('<small class="text-danger">'+ err_log.featured_event[0] +'</small>')
            }else{
              $('#modalEdit').find('[name="featured_event"]').prev().html('<span></span>')
            }

            if(typeof(err_log.language) !== 'undefined'){
              $('#modalEdit').find('[name="language"]').prev().html('<small class="text-danger">'+ err_log.language[0] +'</small>')
            }else{
              $('#modalEdit').find('[name="language"]').prev().html('<span></span>')
            }

            if(typeof(err_log.featured_event) !== 'undefined'){
              $('#modalEdit').find('[name="featured_event"]').prev().html('<small class="text-danger">'+ err_log.featured_event[0] +'</small>')
            }else{
              $('#modalEdit').find('[name="featured_event"]').prev().html('<span></span>')
            }

            if(typeof(err_log.foods) !== 'undefined'){
              $('#modalEdit').find('[name="foods"]').prev().html('<small class="text-danger">'+ err_log.foods[0] +'</small>')
            }else{
              $('#modalEdit').find('[name="foods"]').prev().html('<span></span>')
            }

            if(typeof(err_log.departure_date) !== 'undefined'){
              $('#modalEdit').find('[name="departure_date"]').prev().html('<small class="text-danger">'+ err_log.departure_date[0] +'</small>')
            }else{
              $('#modalEdit').find('[name="departure_date"]').prev().html('<span></span>')
            }

            if(typeof(err_log.duration) !== 'undefined'){
              $('#modalEdit').find('[name="duration"]').prev().html('<small class="text-danger">'+ err_log.duration[0] +'</small>')
            }else{
              $('#modalEdit').find('[name="duration"]').prev().html('<span></span>')
            }

            if(typeof(err_log.type) !== 'undefined'){
              $('#modalEdit').find('[name="type"]').prev().html('<small class="text-danger">'+ err_log.type[0] +'</small>')
            }else{
              $('#modalEdit').find('[name="type"]').prev().html('<span></span>')
            }

            if(typeof(err_log.price) !== 'undefined'){
              $('#modalEdit').find('[name="price"]').prev().html('<small class="text-danger">'+ err_log.price[0] +'</small>')
            }else{
              $('#modalEdit').find('[name="price"]').prev().html('<span></span>')
            }
          } 
        }
      })
    })
  </script>
@endpush