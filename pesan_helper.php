<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function sukses($message = '')
{
  $CI =& get_instance();
  return $CI->session->set_flashdata('pesan', "<div class='pesan_show alert alert-success'>
  <button type='button' class='close' data-dismiss='alert'>x</button>
  <center><strong>Sukses ! </strong>
  $message.</center>
  </div>");
}

function gagal($message = '')
{
  $CI =& get_instance();
  return $CI->session->set_flashdata('pesan',"<div class='pesan_show alert alert-danger'>
  <button type='button' class='close' data-dismiss='alert'>x</button>
  <center><strong>Kesalahan ! </strong>
  $message.</center>
  </div>");
}

function tampil_pesan(){
  $CI =& get_instance();
  return $CI->session->flashdata('pesan');
}
