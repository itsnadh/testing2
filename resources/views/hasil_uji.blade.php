@include('layouts.includes.header')
@include('layouts.includes.leftmenu')
@section('hasil')

<div id="content">
  <div class="panel box-shadow-none content-header">
     <div class="panel-body">
       <div class="col-md-12">
           <h3 class="animated fadeInLeft">Hasil Uji Aplikasi</h3>
           <p class="animated fadeInDown">
            Aplikasi <span class="fa-angle-right fa"></span> Hasil Uji Aplikasi
        </p>
      </div>
    </div>
  </div>

  <!-- <div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading">
            <h3>
                @foreach ($aplikasis as $aplikasi)
                {{ $aplikasi->a_nama }}
                @endforeach
            </h3>
        </div>
          <div class="panel-body">
            @include('admin.shared.components.alert')
            <div class="responsive-table">
              <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                  <th>ID</th>
                  <th>Nama Karakteristik</th>
                  <th>Bobot Karakteristik</th>
                  <th>Nama Sub Karakteristik</th>
                  <th>Bobot Relatif</th>
                  <th>Bobot Absolut</th>
                  <th>Nilai Sub Faktor</th>
                  <th>Nilai Absolut</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                @foreach($subkarakteristiks as $subkarakteristik)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $subkarakteristik->k_nama }}</td>
                    <td>{{ $subkarakteristik->k_bobot}}</td>
                    <td>{{ $subkarakteristik->sk_nama }}</td>
                    <td>{{ $subkarakteristik->bobot_relatif}}</td>
                    <td>{{ $subkarakteristik->bobot_absolut }}</td>
                    <td>{{ $subkarakteristik->nilai_subfaktor }}</td>
                    <td>{{ $subkarakteristik->nilai_absolut }}
                    @if ($subkarakteristik->sk_nama == "Capacity")
                    <td>
                      <a href="{{route('capacity.subs',$subkarakteristik->sk_id)}}" class="btn btn-info btn-sm">
                        <span class="fa fa-pencil"></span>
                      </a>
                    </td>
                    @else
                    <td>
                      <a href="{{route('edit.subs',$subkarakteristik->sk_id)}}" class="btn btn-info btn-sm">
                      <span class="fa fa-pencil"></span>
                      </a>
                    </td>   
                    @endif
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div> -->


    

