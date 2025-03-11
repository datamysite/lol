@extends('admin.layout.main')
@section('title', 'Newsletter')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Newsletter</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Newsletter</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <form id="filterNewsletter">
                  @csrf
                  <div class="row">
                    <div class="col-md-4">
                      <label>Filter Date</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                          </span>
                        </div>
                        <input type="text" class="form-control float-right" name="date_range" value="" id="filter_range">
                      </div>
                    </div>
                    <div class="col-md-1" style="display: inline-flex;justify-content: space-between;">
                      <button type="submit" class="btn btn-primary mt-32"><i class="fas fa-search"></i></button>
                      <div class="reset_button">
                        
                      </div>
                    </div>
                    <div class="col-md-5">
                      
                    </div>
                    <div class="col-md-2">
                      <!-- <a href="javascript:void(0)" class="btn btn-primary mt-32 pull-right" id="ExportToExcel"><i class="fa fa-file-excel"></i>&nbsp;&nbsp;&nbsp;Export</a> -->
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="usersTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="5%">#</th>
                    <th width="85%">Email</th>
                    <th width="10%">Subscribed at</th>
                  </tr>
                  </thead>
                  <tbody id="usersTableBody">
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Subscribed at</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
@section('addStyle')

@endsection
@section('addScript')

<script>
  $(function () {
    loadUsers();

    $('#filter_range').daterangepicker({
        autoUpdateInput: false,
        locale: {
            format: 'DD/MMM/YYYY',
            cancelLabel: 'Clear'
        }
    });

    $('input[name="date_range"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('DD/MMM/YYYY') + ' - ' + picker.endDate.format('DD/MMM/YYYY'));
    });

    $('input[name="date_range"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });


    $("#filterNewsletter").submit(function (event) {
      $('#usersTableBody').html('<tr class="text-center"><td colspan="3"><img src="{{URL::to('/public/loader.gif')}}" height="30px"></td></tr>');
      var url = "{{route('admin.newsletter.filter')}}";
      var form=$(this);
      $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(),
        encode: true,
      }).done(function (data) {
        $('#usersTableBody').html(data);
        $('.reset_button').html('<button type="button" class="btn btn-default mt-32 reset_filter" title="Reset Filter"><i class="fas fa-times"></i></button>')
      });

      event.preventDefault();
    }); 


    $(document).on('click', '.reset_filter', function(){
      loadUsers();
      $("#filterWebUsers").trigger('reset');
      $('.reset_button').html('');
    });



    $("#ExportToExcel").click(function (event) {
      var url = "{{route('admin.newsletter.export')}}";
      var data=$('#filterNewsletter').serializeArray();
      //console.log(data);
      var form = $('<form></form>').attr('action', url).attr('method', 'post').attr('target', '_blank');;

      $.each(data, function(i, val) { 
          console.log();
          form.append($("<input></input>").attr('type', 'hidden').attr('name', val['name']).attr('value', val['value'])); 
      });    

      //console.log(form.serialize());
      //send request
      form.appendTo('body').submit().remove();


    }); 
    
  });


  function loadUsers(){
    var url = "{{route('admin.newsletter.load')}}";

    $('#usersTableBody').html('<tr class="text-center"><td colspan="8"><img src="{{URL::to('/public/loader.gif')}}" height="30px"></td></tr>');
    $.get(url, function(data){
      $('#usersTableBody').html(data);
    });
  }

</script>

@endsection