@include('layouts.includes.header')
@include('layouts.includes.leftmenu')

@section('content')

<div id="content">
  <div class="row">
    <div class="col-md-12">
        <div class="panel block">
            <div class="panel-body">
                <h1>Bobot Sub Karakteristik</h1>
                <ol class="breadcrumb">
                    <li><a href="{{asset('/softwaretester/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Bobot Sub Karakteristik</li>
                </ol>
            </div>
        </div>
    </div>
  </div>

  <div class="col-md-12 top-20 padding-0">
      <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">
              @include('admin.shared.components.alert')
              <div class="responsive-table">
                <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <th style="width: 5%">ID</th>
                    <th style="width: 25%">Nama Sub Karakteristik</th>
                    <th style="width: 30%">Bobot Sub Karakteristik</th>
                  </thead>
                  <tbody>
                  @foreach($subkarakteristiks as $subkarakteristik)
                  <tr>
                    <td>{{ $subkarakteristik->sk_id }}</td>
                    <td>{{ $subkarakteristik->sk_nama }}</td>
                    <td>{{ $subkarakteristik->bobot_relatif }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
@section('js')
<script>  
$(document).ready(function() {
  $(document).ready( function () {
    $('#mydatatables').DataTable();
  });
})
</script>
@endsection
    