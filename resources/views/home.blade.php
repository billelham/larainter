@section('plugins.Chartjs', true)
@section('plugins.bootstrap4DualListbox', true)
@section('plugins.bootstrapColorpicker', true)
@section('plugins.bootstrapSlider', true)
@section('plugins.jsgrid', true)
@section('plugins.jqueryUi', true)
@section('plugins.jqueryKnob', true)
@section('plugins.jqueryMapael', true)
@section('plugins.flagIconCss', true)
@section('plugins.daterangepicker', true)
@section('plugins.datatablesPlugins', true)
@section('plugins.Select2', true)
@section('plugins.bootstrapSwitch', true)
@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    {{-- Minimal --}}
<x-adminlte-button label="Button"/>
{{--charJS--}}
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <!-- AREA CHART -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Area Chart</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart">
              <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- DONUT CHART -->
        <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">Donut Chart</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- PIE CHART -->
        <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">Pie Chart</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col (LEFT) -->
      <div class="col-md-6">
        <!-- LINE CHART -->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Line Chart</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart">
              <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- BAR CHART -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Bar Chart</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart">
              <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- STACKED BAR CHART -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Stacked Bar Chart</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart">
              <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col (RIGHT) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>

{{-- Disabled --}}
<x-adminlte-button label="Disabled" theme="dark" disabled/>

<x-adminlte-button label="Primary" theme="primary" icon="fas fa-key"/>
<x-adminlte-button label="Secondary" theme="secondary" icon="fas fa-hashtag"/>
<x-adminlte-button label="Info" theme="info" icon="fas fa-info-circle"/>
<x-adminlte-button label="Warning" theme="warning" icon="fas fa-exclamation-triangle"/>
<x-adminlte-button label="Danger" theme="danger" icon="fas fa-ban"/>
<x-adminlte-button label="Success" theme="success" icon="fas fa-thumbs-up"/>
<x-adminlte-button label="Dark" theme="dark" icon="fas fa-adjust"/>

{{-- Types --}}
<x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>
<x-adminlte-button class="btn-lg" type="reset" label="Reset" theme="outline-danger" icon="fas fa-lg fa-trash"/>
<x-adminlte-button class="btn-sm bg-gradient-info" type="button" label="Help" icon="fas fa-lg fa-question"/>

{{-- Icons Only --}}
<x-adminlte-button theme="primary" icon="fab fa-fw fa-lg fa-facebook-f"/>
<x-adminlte-button theme="info" icon="fab fa-fw fa-lg fa-twitter"/>
{{-- Minimal --}}
<x-adminlte-input name="iBasic"/>

{{-- Email type --}}
<x-adminlte-input name="iMail" type="email" placeholder="mail@example.com"/>

{{-- With label, invalid feedback disabled and form group class --}}
<div class="row">
    <x-adminlte-input name="iLabel" label="Label" placeholder="placeholder"
        fgroup-class="col-md-6" disable-feedback/>
</div>

{{-- With prepend slot --}}
<x-adminlte-input name="iUser" label="User" placeholder="username" label-class="text-lightblue">
    <x-slot name="prependSlot">
        <div class="input-group-text">
            <i class="fas fa-user text-lightblue"></i>
        </div>
    </x-slot>
</x-adminlte-input>

{{-- With append slot, number type and sm size --}}
<x-adminlte-input name="iNum" label="Number" placeholder="number" type="number"
    igroup-size="sm" min=1 max=10>
    <x-slot name="appendSlot">
        <div class="input-group-text bg-dark">
            <i class="fas fa-hashtag"></i>
        </div>
    </x-slot>
</x-adminlte-input>

{{-- With a link on the bottom slot and old support enabled --}}
<x-adminlte-input name="iPostalCode" label="Postal Code" placeholder="postal code"
    enable-old-support>
    <x-slot name="prependSlot">
        <div class="input-group-text text-olive">
            <i class="fas fa-map-marked-alt"></i>
        </div>
    </x-slot>
    <x-slot name="bottomSlot">
        <a href="#">Search your postal code here</a>
    </x-slot>
</x-adminlte-input>

{{-- With extra information on the bottom slot --}}
<x-adminlte-input name="iExtraAddress" label="Other Address Data">
    <x-slot name="prependSlot">
        <div class="input-group-text text-purple">
            <i class="fas fa-address-card"></i>
        </div>
    </x-slot>
    <x-slot name="bottomSlot">
        <span class="text-sm text-gray">
            [Add other address information you may consider important]
        </span>
    </x-slot>
</x-adminlte-input>

{{-- With multiple slots and lg size --}}
<x-adminlte-input name="iSearch" label="Search" placeholder="search" igroup-size="lg">
    <x-slot name="appendSlot">
        <x-adminlte-button theme="outline-danger" label="Go!"/>
    </x-slot>
    <x-slot name="prependSlot">
        <div class="input-group-text text-danger">
            <i class="fas fa-search"></i>
        </div>
    </x-slot>
</x-adminlte-input>
{{-- Minimal --}}
<x-adminlte-input-file name="ifMin"/>

{{-- Placeholder, sm size and prepend icon --}}
<x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
    <x-slot name="prependSlot">
        <div class="input-group-text bg-lightblue">
            <i class="fas fa-upload"></i>
        </div>
    </x-slot>
</x-adminlte-input-file>

{{-- With label and feedback disabled --}}
<x-adminlte-input-file name="ifLabel" label="Upload file" placeholder="Choose a file..."
    disable-feedback/>

{{-- With multiple slots and multiple files --}}
<x-adminlte-input-file id="ifMultiple" name="ifMultiple[]" label="Upload files"
    placeholder="Choose multiple files..." igroup-size="lg" legend="Choose" multiple>
    <x-slot name="appendSlot">
        <x-adminlte-button theme="primary" label="Upload"/>
    </x-slot>
    <x-slot name="prependSlot">
        <div class="input-group-text text-primary">
            <i class="fas fa-file-upload"></i>
        </div>
    </x-slot>
</x-adminlte-input-file>

{{-- Minimal --}}
<x-adminlte-date-range name="drBasic"/>

{{-- Disabled with predefined config --}}
@php
$config = [
    "timePicker" => true,
    "startDate" => "js:moment().subtract(6, 'days')",
    "endDate" => "js:moment()",
    "locale" => ["format" => "YYYY-MM-DD HH:mm"],
];
@endphp
<x-adminlte-date-range name="drDisabled" :config="$config" disabled/>

{{-- Prepend slot and custom ranges enables --}}
<x-adminlte-date-range name="drCustomRanges" enable-default-ranges="Last 30 Days">
    <x-slot name="prependSlot">
        <div class="input-group-text bg-gradient-info">
            <i class="fas fa-calendar-alt"></i>
        </div>
    </x-slot>
</x-adminlte-date-range>

{{-- Label and placeholder --}}
<x-adminlte-date-range name="drPlaceholder" placeholder="Select a date range..."
    label="Date Range">
    <x-slot name="prependSlot">
        <div class="input-group-text bg-gradient-danger">
            <i class="far fa-lg fa-calendar-alt"></i>
        </div>
    </x-slot>
</x-adminlte-date-range>
@push('js')<script>$(() => $("#drPlaceholder").val(''))</script>@endpush

{{-- SM size with single date/time config --}}
@php
$config = [
    "singleDatePicker" => true,
    "showDropdowns" => true,
    "startDate" => "js:moment()",
    "minYear" => 2000,
    "maxYear" => "js:parseInt(moment().format('YYYY'),10)",
    "timePicker" => true,
    "timePicker24Hour" => true,
    "timePickerSeconds" => true,
    "cancelButtonClasses" => "btn-danger",
    "locale" => ["format" => "YYYY-MM-DD HH:mm:ss"],
];
@endphp
<x-adminlte-date-range name="drSizeSm" label="Date/Time" igroup-size="sm" :config="$config">
    <x-slot name="appendSlot">
        <div class="input-group-text bg-dark">
            <i class="fas fa-calendar-day"></i>
        </div>
    </x-slot>
</x-adminlte-date-range>

{{-- LG size with some config and add-ons --}}
@php
$config = [
    "showDropdowns" => true,
    "startDate" => "js:moment()",
    "endDate" => "js:moment().subtract(1, 'days')",
    "minYear" => 2000,
    "maxYear" => "js:parseInt(moment().format('YYYY'),10)",
    "timePicker" => true,
    "timePicker24Hour" => true,
    "timePickerIncrement" => 30,
    "locale" => ["format" => "YYYY-MM-DD HH:mm"],
    "opens" => "center",
];
@endphp
<x-adminlte-date-range name="drSizeLg" label="Date/Time Range" label-class="text-primary"
    igroup-size="lg" :config="$config">
    <x-slot name="prependSlot">
        <div class="input-group-text text-primary">
            <i class="fas fa-lg fa-calendar-alt"></i>
        </div>
    </x-slot>
    <x-slot name="appendSlot">
        <x-adminlte-button theme="outline-primary" label="Review" icon="fas fa-lg fa-clipboard-check"/>
    </x-slot>
</x-adminlte-date-range>
@stop

@section('css')
      
@stop

@section('js')

<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Chrome',
          'IE',
          'FireFox',
          'Safari',
          'Opera',
          'Navigator',
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = $.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })
</script>    
@stop