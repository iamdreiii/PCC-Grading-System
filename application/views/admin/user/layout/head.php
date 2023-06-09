<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PCC</title>
  
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/home/images/PCC.png" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/all.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- TOASTR -->
  <link href="<?php echo base_url()?>assets/toastr/toastr.css" rel="stylesheet"/>
<!-- jquery, bootstrap -->
<script src="<?php echo base_url()?>assets/script/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js" ></script>

  <!-- codemirror -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/codemirror/css/codemirror.min.css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/codemirror/theme/blackboard.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/codemirror/theme/monokai.min.css">
<script type="text/javascript" src="<?php echo base_url()?>assets/codemirror/js/codemirror.js"></script>
<script src="<?php echo base_url()?>assets/codemirror/xml/xml.min.js"></script>

  <!-- add summernote -->
<link href="<?php echo base_url()?>assets/summernote/css/summernote.min.css" rel="stylesheet">
<script src="<?php echo base_url()?>assets/summernote/js/summernote.min.js"></script>
<script src="<?php echo base_url()?>assets/summernote/lang/summernote-ko-KR.min.js"></script>
  <style>
    #loading-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* semi-transparent black background */
      z-index: 9999; /* make sure the overlay is on top of everything else */
      display: flex;
      justify-content: center;
      align-items: center;
    }
    #loading-spinner {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      border: 3px solid #fff;
      border-top-color: #007bff; /* change color here */
      animation: rotate 1s linear infinite;
    }
    @keyframes rotate {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }
  </style>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

</head>