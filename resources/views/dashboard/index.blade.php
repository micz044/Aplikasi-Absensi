@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Hello, {{ auth()->user()->name }}</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
          <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
          <span data-feather="calendar" class="align-text-bottom"></span>
          This week
        </button>
      </div>
    </div>

    <body>
 
      <style>
      h1,h2,p,a{
        font-family: sans-serif;
        font-weight: normal;
      }
     
      .jam-digital-malasngoding {
        overflow: hidden;
        width: 330px;
        margin: 20px auto;
      }
      .kotak{
        float: left;
        width: 60px;
        height: 50px;
        background-color: rgb(255, 255, 255);
      }
      .jam-digital-malasngoding p {
        color: rgb(12, 12, 12);
        font-size: 36px;
        text-align: left;
        margin-top: 3px;
      }
     
     
    </style>
     
    <div class="jam-digital-malasngoding">
      <div class="kotak">
        <p id="jam"></p>
      </div>
      <div class="kotak">
        <p id="menit"></p>
      </div>
      <div class="kotak">
        <p id="detik"></p>
      </div>
    </div>
     
     
    <script>
      window.setTimeout("waktu()", 1000);
     
      function waktu() {
        var waktu = new Date();
        setTimeout("waktu()", 1000);
        document.getElementById("jam").innerHTML = waktu.getHours();
        document.getElementById("menit").innerHTML = waktu.getMinutes();
        document.getElementById("detik").innerHTML = waktu.getSeconds();
      }
    </script>
    </body>
@endsection