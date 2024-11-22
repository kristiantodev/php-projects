<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik_model extends CI_Model
{
    
    function simpan_post($ip,$tgl_kunjungan,$id_user){ 
        $hsl=$this->db->query("INSERT INTO statistik (ip, tgl_kunjungan, id_user) VALUES ('$ip','$tgl_kunjungan','$id_user')");
        return $hsl;
    }

    public function chekk($ip, $tgl_kunjungan, $id_user)
    {
     $this->db->select('*');  
     $this->db->from('statistik'); 
     $this->db->where('ip', $ip);
     $this->db->where('tgl_kunjungan', $tgl_kunjungan);
     $this->db->where('id_user', $id_user);
     $this->db->limit(1);

     $query = $this->db->get();

     if($query->num_rows()==1){
        return $query->result();
     }else{
        return false;
     }
    }

    function statistik_pengunjung()
    {
  
  $tahun = date('Y');
  $sql= $this->db->query("
  select
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=1) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Januari`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=2) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Februari`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=3) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Maret`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=4) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `April`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=5) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Mei`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=6) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juni`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=7) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juli`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=8) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Agustus`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=9) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `September`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=10) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Oktober`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=11) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `November`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=12) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Desember`
  from statistik GROUP BY YEAR(tgl_kunjungan) 
  ");
  
  return $sql;
  
 }

 function statistik_pengunjung2()
    {
  $id = $this->session->userdata('id_user');
  $tahun = date('Y');
  $sql= $this->db->query("
  select
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=1) AND id_user= '$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Januari`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=2) AND id_user= '$id' AND(YEAR(tgl_kunjungan)= $tahun))),0) AS `Februari`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=3) AND id_user= '$id' AND(YEAR(tgl_kunjungan)= $tahun))),0) AS `Maret`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=4) AND id_user= '$id' AND(YEAR(tgl_kunjungan)= $tahun))),0) AS `April`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=5) AND id_user= '$id' AND(YEAR(tgl_kunjungan)= $tahun))),0) AS `Mei`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=6) AND id_user= '$id' AND(YEAR(tgl_kunjungan)= $tahun))),0) AS `Juni`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=7) AND id_user= '$id' AND(YEAR(tgl_kunjungan)= $tahun))),0) AS `Juli`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=8) AND id_user= '$id' AND(YEAR(tgl_kunjungan)= $tahun))),0) AS `Agustus`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=9) AND id_user= '$id' AND(YEAR(tgl_kunjungan)= $tahun))),0) AS `September`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=10) AND id_user= '$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Oktober`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=11) AND id_user= '$id' AND(YEAR(tgl_kunjungan)= $tahun))),0) AS `November`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=12) AND id_user= '$id' AND(YEAR(tgl_kunjungan)= $tahun))),0) AS `Desember`
  from statistik GROUP BY YEAR(tgl_kunjungan) 
  ");
  
  return $sql;
  
 } 

 function statistik_pengunjung3()
    {
  
  $tahun = date('Y');
  $b = date('m');
  $sql= $this->db->query("
  select
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=1) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Januari`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=2) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Februari`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=3) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Maret`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=4) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `April`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=5) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Mei`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=6) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juni`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=7) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juli`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=8) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Agustus`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=9) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `September`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=10) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Oktober`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=11) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `November`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=12) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Desember`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=13) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Januari2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=14) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Februari2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=15) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Maret2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=16) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `April2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=17) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Mei2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=18) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juni2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=19) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juli2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=20) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Agustus2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=21) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `September2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=22) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Oktober2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=23) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `November2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=24) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Desember2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=25) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juni3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=26) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juli3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=27) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Agustus3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=28) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `September3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=29) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Oktober3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=30) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `November3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=31) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Desember3`
  from statistik GROUP BY Month(tgl_kunjungan) 
  ");
  
  return $sql;
  
 }

function statistik_filter($b, $tahun)
    {
  
  $sql= $this->db->query("
  select
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=1) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Januari`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=2) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Februari`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=3) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Maret`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=4) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `April`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=5) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Mei`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=6) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juni`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=7) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juli`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=8) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Agustus`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=9) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `September`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=10) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Oktober`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=11) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `November`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=12) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Desember`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=13) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Januari2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=14) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Februari2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=15) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Maret2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=16) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `April2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=17) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Mei2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=18) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juni2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=19) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juli2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=20) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Agustus2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=21) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `September2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=22) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Oktober2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=23) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `November2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=24) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Desember2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=25) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juni3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=26) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juli3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=27) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Agustus3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=28) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `September3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=29) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Oktober3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=30) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `November3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=31) AND id_user='Admin' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Desember3`
  from statistik GROUP BY Month(tgl_kunjungan) 
  ");
  
  return $sql;
  
 }

  function statistik_pengunjung4()
    {
  
  $tahun = date('Y');
  $b = date('m');
  $id = $this->session->userdata('id_user');
  $sql= $this->db->query("
  select
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=1) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Januari`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=2) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Februari`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=3) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Maret`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=4) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `April`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=5) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Mei`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=6) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juni`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=7) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juli`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=8) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Agustus`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=9) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `September`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=10) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Oktober`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=11) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `November`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=12) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Desember`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=13) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Januari2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=14) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Februari2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=15) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Maret2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=16) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `April2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=17) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Mei2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=18) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juni2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=19) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juli2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=20) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Agustus2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=21) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `September2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=22) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Oktober2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=23) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `November2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=24) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Desember2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=25) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juni3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=26) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juli3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=27) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Agustus3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=28) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `September3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=29) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Oktober3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=30) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `November3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=31) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Desember3`
  from statistik GROUP BY Month(tgl_kunjungan) 
  ");
  
  return $sql;
  
 }

   function statistik_filter2($b, $tahun)
    {
  
  $id = $this->session->userdata('id_user');
  $sql= $this->db->query("
  select
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=1) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Januari`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=2) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Februari`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=3) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Maret`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=4) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `April`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=5) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Mei`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=6) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juni`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=7) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juli`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=8) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Agustus`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=9) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `September`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=10) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Oktober`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=11) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `November`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=12) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Desember`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=13) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Januari2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=14) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Februari2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=15) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Maret2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=16) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `April2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=17) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Mei2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=18) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juni2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=19) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juli2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=20) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Agustus2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=21) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `September2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=22) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Oktober2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=23) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `November2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=24) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Desember2`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=25) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juni3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=26) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Juli3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=27) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Agustus3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=28) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `September3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=29) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Oktober3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=30) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `November3`,
  ifnull((SELECT count(ip) FROM (statistik)WHERE((Month(tgl_kunjungan)=$b) AND (Day(tgl_kunjungan)=31) AND id_user='$id' AND (YEAR(tgl_kunjungan)= $tahun))),0) AS `Desember3`
  from statistik GROUP BY Month(tgl_kunjungan) 
  ");
  
  return $sql;
  
 }

}
