@extends("crudbooster::admin_template")
@section('cssinline')
@endsection
@section("content")

<!-- /.row -->
<div class="row">
    <div class="col-md-4">
        <div class="box rounded p-3">
          <div class="box-body">
            <h3>Jumlah Klien Keseluruhan</h3>
            <h1>{{$jumlahKlien}}</h1>
          </div>

        </div>
    </div>
    <div class="col-md-4">
      <div class="box rounded p-3">
        <div class="box-body">
          <h3>Jumlah Contact Message</h3>
          <h1>{{$jumlahContact}}</h1>
        </div>

      </div>
    </div>
    <div class="col-md-4">
      <div class="box rounded p-3">
        <div class="box-body">
          <h3>Jumlah Lead</h3>
          <h1>{{$jumlahLead}}</h1>
        </div>

      </div>
    </div>
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body">
            <canvas id="areaChart"style="width:100%; height: 300px"></canvas>
        </div>
      </div>

    </div>
</div>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">

</script>
<script type="text/javascript">
$(function () {
  var xValues = ["All Client", "Lead", "Win", "Lose", ];
  var yValues = ['{{$jumlahKlien}}', '{{$jumlahLead}}', '{{$jumlahWin}}', '{{$jumlahLose}}'];
  var barColors = ["gray", "yellow","green","red"];

  new Chart("areaChart", {
    type: "bar",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }],

    },
    options: {
      legend: {display: false},
      title: {
        display: true,
        text: "Lead Result"
      }
    }
  });
})
</script>


@endsection
