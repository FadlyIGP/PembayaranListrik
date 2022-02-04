@extends('layouts.master')

@section('title')
    Dashboard
    
    
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Dashboard</li>

@endsection

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-xs-6" >
        <!-- small box -->
        <div class="small-box bg-aqua" style="border-radius: 10px;">
            <div class="inner">
                <h3></h3>

                <p>Total Item</p>
                <h3></h3>

            </div>
            <div class="icon">

                <i class="fa fa-cube"></i>
            </div>
            <a href="#" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green" style="border-radius: 10px;">
            <div class="inner">
                <h3></h3>

                <p>Total Karyawan</p>
                <h3></h3>

            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
            <a href="#" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow" style="border-radius: 10px;">
            <div class="inner">
                <h3></h3>

                <p>Total produksi</p>
                <h3></h3>
                
            </div>
            <div class="icon">
                <i class="fa fa-id-card"></i>
            </div>
            <a href="#" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red" style="border-radius: 10px;">
            <div class="inner">
                <h3></h3>

                <p>Total Supplier</p>
            </div>
            <div class="icon" >
                <i class="fa fa-truck"></i>
            </div>
            <a href="#" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->
<!-- Main row -->
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border" style="border-radius: 20px;">
                <h3 class="box-title">Grafik Pendapatan </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="border-radius: 20px;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="chart">
                            <!-- Sales Chart Canvas -->
                            <canvas id="salesChart" style="height: 180px;"></canvas>
                        </div>
                        <!-- /.chart-responsive -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row (main row) -->
@endsection

@push('scripts')
<!-- ChartJS -->
<script src="{{ asset('AdminLTE-2/bower_components/chart.js/Chart.js') }}"></script>
<script>
$(function() {
    // Get context with jQuery - using jQuery's .get() method.
    var salesChartCanvas = $('#salesChart').get(0).getContext('2d');
    // This will get the first returned node in the jQuery collection.
    var salesChart = new Chart(salesChartCanvas);

    var salesChartData = {
        labels: {{ json_encode(12) }},
        datasets: [
            {
                label: 'Pendapatan',
                fillColor           : 'rgba(60,141,188,0.9)',
                strokeColor         : 'rgba(60,141,188,0.8)',
                pointColor          : '#3b8bba',
                pointStrokeColor    : 'rgba(60,141,188,1)',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: {{ json_encode(12) }}
            }
        ]
    };

    var salesChartOptions = {
        pointDot : false,
        responsive : true
    };

    salesChart.Line(salesChartData, salesChartOptions);
});
</script>
@endpush