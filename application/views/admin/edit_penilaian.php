<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title> Event | HMTCalendar </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="<?php echo base_url() ?>css/vendor.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>css/app-green.css">
  <!-- Theme initialization -->
  <style type="text/css">
  #table-right{
    margin-left: 10px;
    margin-right: 10px;
  }

  th {
    text-align: center;
  }

  #dropdown-right{
    margin-left: 15px;
    margin-right: 15px;
  }
  </style>
</head>

<body>
  <div class="main-wrapper">
    <div class="app" id="app">
      <header class="header">
        <div class="header-block header-block-collapse hidden-lg-up"> <button class="collapse-btn" id="sidebar-collapse-btn">
          <i class="fa fa-bars"></i>
        </button> </div>
        <div class="header-block header-block-search hidden-sm-down">
          <form role="search">
            <div class="input-container"> <i class="fa fa-search"></i> <input type="search" placeholder="Search">
              <div class="underline"></div>
            </div>
          </form>
        </div>
        <div class="header-block header-block-buttons">
        </div>
        <div class="header-block header-block-nav">
          <ul class="nav-profile">
            <li class="profile dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="img" style="background-image: url('https://avatars3.githubusercontent.com/u/3959008?v=3&s=40')"> </div> <span class="name">
                  Admin
                </span> </a>
                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                  <a class="dropdown-item" href="login.html"> <i class="fa fa-power-off icon"></i> Logout </a>
                </div>
              </li>
            </ul>
          </div>
        </header>
        <aside class="sidebar">
          <div class="sidebar-container">
            <div class="sidebar-header">
              <div class="brand">
                <div class="logo"> <span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span class="l l4"></span> <span class="l l5"></span> </div> SI HMTCalendar </div>
              </div>
              <nav class="menu">
                <ul class="nav metismenu" id="sidebar-menu">
                  <li>
                    <a href="<?php echo base_url(); ?>user"> <i class="fa fa-home"></i> Dashboard </a>
                  </li>
                  <li>
                    <a href=""> <i class="fa fa-group"></i> Kepengurusan <i class="fa arrow"></i> </a>
                    <ul>
                      <li> <a href="list_kepengurusan_admin">
                        Lihat Kepengurusan
                      </a> </li>
                      <li> <a href="tambah_kepengurusan_admin">
                        Tambah Kepengurusan
                      </a> </li>
                    </ul>
                  </li>
                  <li>
                    <a href=""> <i class="fa fa-flag"></i> Departemen <i class="fa arrow"></i> </a>
                    <ul>
                      <li> <a href="list_departemen_admin">
                        Lihat Departemen
                      </a> </li>
                      <li> <a href="tambah_departemen_admin">
                        Tambah Departemen
                      </a> </li>
                    </ul>
                  </li>
                  <li>
                    <a href=""> <i class="fa fa-user"></i> Anggota <i class="fa arrow"></i> </a>
                    <ul>
                      <li> <a href="<?php echo base_url();?>anggota_controller">
                        Lihat Pengurus
                      </a> </li>
                      <li> <a href="<?php echo base_url();?>anggota_controller/tambah_pengurus">
                        Tambah Pengurus
                      </a> </li>
                      <li> <a href="<?php echo base_url();?>anggota_controller/kelola_anggota">
                        Lihat Anggota
                      </a> </li>
                      <li> <a href="<?php echo base_url();?>anggota_controller/tambah_anggota">
                        Tambah Anggota
                      </a> </li>
                    </ul>
                  </li>
                  <li>
                    <a href=""> <i class="fa fa-picture-o"></i> Gallery <i class="fa arrow"></i> </a>
                    <ul>
                      <li> <a href="<?php echo base_url(); ?>gallery">
                        Lihat Foto
                      </a> </li>
                      <li> <a href="static-tables.html">
                        Tambah Foto
                      </a> </li>
                    </ul>
                  </li>
                  <li class="active">
                    <a href=""> <i class="fa fa-calendar"></i> Event <i class="fa arrow"></i> </a>
                    <ul>
                      <li> <a href="<?php echo base_url(); ?>event_controller/">
                        Lihat Event
                      </a> </li>
                      <li> <a href="<?php echo base_url(); ?>event_controller/tambah_event">
                        Tambah Event
                      </a> </li>
                      <li> <a href="<?php echo base_url(); ?>penilaian_controller/">
                        Penilaian Event
                      </a> </li>
                      <li class="active"> <a href="<?php echo base_url(); ?>event_controller/tambah_penilaian">
                        Tambah Penilaian
                      </a> </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </aside>
          <div class="sidebar-overlay" id="sidebar-overlay"></div>
          <article class="content static-tables-page">
            <div class="title-block">
              <h1 class="title"> Event </h1>
            </div>
            <section class="section">
              <div class="row sameheight-container">
                <div class="col-md-6">
                  <div class="card card-block sameheight-item">
                    <div class="title-block">
                      <h3 class="title"> Tambah Penilaian </h3>
                    </div>
                    <?php echo form_open('penilaian_controller/edit_penilaian') ?>
                    <div class="form-group" id="kepengurusan"> <label class="control-label">Event</label>
                      <?php $style_event='class="form-control" id="id_event"';
                      echo form_dropdown("id_event",$kegiatan,"",$style_event); ?>
                    </div>
                    <div class="form-group"> <label class="control-label">Indikator</label>
                      <?php
                      $input_indikator=array('type'=>'text','name'=>'indikator','class'=>'form-control boxed','value'=>'Indikator penilaian');
                      echo form_input($input_indikator); ?>
                    </div>
                    <div class="form-group"> <label class="control-label">Bobot</label>
                      <?php
                      $input_bobot=array('type'=>'text','name'=>'bobot','class'=>'form-control boxed','placeholder'=>'Bobot penilaian');
                      echo form_input($input_bobot); ?>
                    </div>
                    <div class="form-group"> <label class="control-label">Nilai</label>
                      <?php
                      $input_nilai=array('type'=>'text','name'=>'nilai','class'=>'form-control boxed','placeholder'=>'Nilai event');
                      echo form_input($input_nilai); ?>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10 col-sm-offset-2">
                        <?php echo form_submit('submit', 'Edit', array('class'=> 'btn btn-primary')); ?>
                      </div>
                    </div>
                    <?php echo form_close(); ?>
                  </div>
                </div>
              </div>
            </section>
          </article>
          <div class="modal fade" id="modal-media">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Media Library</h4>
              </div>
              <div class="modal-body modal-tab-container">
                <ul class="nav nav-tabs modal-tabs" role="tablist">
                  <li class="nav-item"> <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a> </li>
                  <li class="nav-item"> <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a> </li>
                </ul>
                <div class="tab-content modal-tab-content">
                  <div class="tab-pane fade" id="gallery" role="tabpanel">
                    <div class="images-container">
                      <div class="row"> </div>
                    </div>
                  </div>
                  <div class="tab-pane fade active in" id="upload" role="tabpanel">
                    <div class="upload-container">
                      <div id="dropzone">
                        <form action="/" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="demo-upload">
                          <div class="dz-message-block">
                            <div class="dz-message needsclick"> Drop files here or click to upload. </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Insert Selected</button> </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <div class="modal fade" id="confirm-modal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title"><i class="fa fa-warning"></i> Alert</h4>
            </div>
            <div class="modal-body">
              <p>Are you sure want to do this?</p>
            </div>
            <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button> <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button> </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    </div>
  </div>
  <!-- Reference block for JS -->
  <div class="ref" id="ref">
    <div class="color-primary"></div>
    <div class="chart">
      <div class="color-primary"></div>
      <div class="color-secondary"></div>
    </div>
  </div>
  <script>
  (function(i, s, o, g, r, a, m)
  {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function()
    {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
    m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-80463319-2', 'auto');
  ga('send', 'pageview');
  </script>
  <script src="<?php echo base_url() ?>js/vendor.js"></script>
  <script src="<?php echo base_url() ?>js/app.js"></script>
  <script type="text/javascript">
  $("#id_kepengurusan").change(function(){
    var selectValues = $("#id_kepengurusan").val();
    if (selectValues == 0){
      var msg = "<label class=\"control-label\">Departemen</label> <select class=\"form-control\" name=\"id_departemen\" disabled><option value=\"Pilih Departemen\">Pilih kepengurusan dahulu</option></select>";
      $('#departemen').html(msg);
    }else{
      var id_kepengurusan = {id_kepengurusan:$("#id_kepengurusan").val()};
      $('#id_departemen').attr("disabled",true);
      $.ajax({
        type: "POST",
        url : "<?php echo site_url('penilaian_controller/select_departemen')?>",
        data: id_kepengurusan,
        success: function(msg){
          $('#departemen').html(msg);
        }
      });
    }
  });
  </script>
  <script type="text/javascript">
  var dt = new Date();
  document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
  </script> <!-- Show Current Date -->

</body>

</html>
