<?php

defined('BASEPATH') OR exit('dosya yok');

class Dtbs extends CI_Model {

  function kontrol($email, $sifre) {

      $sonuc = $this->db->select('*')->from('yonetici')->where('email', $email)->where('sifre', $sifre)->get()->row();

      return $sonuc;

      return $sonuc;

  }

  function timeupdate($id,$data=array()){
    $sonuc = $this->db->where('id',$id)->update('yonetici',$data);
    return $sonuc;
  }

  function listele($from){
    $sonuc = $this->db->select('*')->from($from)->order_by('id','desc')->get()->result_array();
    return $sonuc;
  }

  function cek($id,$from){
    $sonuc = $this->db->select('*')->from($from)->where('id',$id)->get()->row_array();
    return $sonuc;
  }

  function guncelle($data=array(), $id, $where, $from){

      $sonuc = $this->db->where($where, $id)->update($from, $data);

      return $sonuc;

  }

  function ekle($from,$data=array()){
    $sonuc = $this->db->insert($from,$data);
    return $sonuc;

  }

  function sil($id,$where,$from){
    $sonuc = $this->db->delete($from, array($where=>$id));
    return $sonuc;
  }

  function mesajupdate($id,$data=array()){
    $sonuc = $this->db->where('id',$id)->update('mesajlar',$data);
    return $sonuc;
  }
  function siparisupdate($id,$data=array()){
    $sonuc = $this->db->where('id',$id)->update('sepet',$data);
    return $sonuc;
  }
  function kategorilistele($kat){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID',$kat)
    ->where('durum','1')->order_by('id','desc')->get()->result_array();
    return $sonuc;
  }
  function kisiselgelisimsayisi(){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','1')
    ->where('durum','1')->count_all_results();
    return $sonuc;
  }
  function kisiselgelisimper($per,$segment){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','1')
    ->order_by('id','desc')->limit($per,$segment)->get()->result_array();
    return $sonuc;
  }
  function sporsayisi(){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','2')
    ->where('durum','1')->count_all_results();
    return $sonuc;
  }

  function kocsayisi(){
    $sonuc = $this->db->select('*')->from('koclar')->count_all_results();
    return $sonuc;
  }
  function sporper($per,$segment){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','2')
    ->order_by('id','desc')->limit($per,$segment)->get()->result_array();
    return $sonuc;
  }

  function egitimsayisi(){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','3')
    ->where('durum','1')->count_all_results();
    return $sonuc;
  }
  function egitimper($per,$segment){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','3')
    ->order_by('id','desc')->limit($per,$segment)->get()->result_array();
    return $sonuc;
  }

  function programlamayazilimsayisi(){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','4')
    ->where('durum','1')->count_all_results();
    return $sonuc;
  }
  function programlamayazilimper($per,$segment){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','4')
    ->order_by('id','desc')->limit($per,$segment)->get()->result_array();
    return $sonuc;
  }

  function grafiktasarimsayisi(){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','5')
    ->where('durum','1')->count_all_results();
    return $sonuc;
  }
  function grafiktasarimper($per,$segment){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','5')
    ->order_by('id','desc')->limit($per,$segment)->get()->result_array();
    return $sonuc;
  }

  function hobielsanatlarisayisi(){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','7')
    ->where('durum','1')->count_all_results();
    return $sonuc;
  }
  function hobielsanatlariper($per,$segment){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','7')
    ->order_by('id','desc')->limit($per,$segment)->get()->result_array();
    return $sonuc;
  }

  function ozelgunurunlerisayisi(){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','13')
    ->where('durum','1')->count_all_results();
    return $sonuc;
  }
  function ozelgunurunleriper($per,$segment){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','13')
    ->order_by('id','desc')->limit($per,$segment)->get()->result_array();
    return $sonuc;
  }

  function muzikveenstrumansayisi(){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','9')
    ->where('durum','1')->count_all_results();
    return $sonuc;
  }
  function muzikveenstrumanper($per,$segment){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','9')
    ->order_by('id','desc')->limit($per,$segment)->get()->result_array();
    return $sonuc;
  }

  function bilisimveteknolojisayisi(){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','10')
    ->where('durum','1')->count_all_results();
    return $sonuc;
  }
  function bilisimveteknolojiper($per,$segment){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','10')
    ->order_by('id','desc')->limit($per,$segment)->get()->result_array();
    return $sonuc;
  }

  function saglikveyasamsayisi(){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','11')
    ->where('durum','1')->count_all_results();
    return $sonuc;
  }
  function saglikveyasamper($per,$segment){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','11')
    ->order_by('id','desc')->limit($per,$segment)->get()->result_array();
    return $sonuc;
  }

  function asciliksayisi(){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','6')
    ->where('durum','1')->count_all_results();
    return $sonuc;
  }
  function ascilikper($per,$segment){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','6')
    ->order_by('id','desc')->limit($per,$segment)->get()->result_array();
    return $sonuc;
  }

  function dilegitimisayisi(){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','8')
    ->where('durum','1')->count_all_results();
    return $sonuc;
  }
  function dilegitimiper($per,$segment){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','8')
    ->order_by('id','desc')->limit($per,$segment)->get()->result_array();
    return $sonuc;
  }

  function kulturvesanatsayisi(){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','12')
    ->where('durum','1')->count_all_results();
    return $sonuc;
  }
  function kulturvesanatper($per,$segment){
    $sonuc = $this->db->select('*')->from('urunler')->where('katID','12')
    ->order_by('id','desc')->limit($per,$segment)->get()->result_array();
    return $sonuc;
  }

  function detay($sef){
    $sonuc = $this->db->select('*')->from('urunler')->where('durum','1')
    ->where('sef',$sef)->get()->row_array();
    return$sonuc;
  }
  function detay2($sef){
    $sonuc = $this->db->select('*')->from('koclar')->where('durum','1')
    ->where('sef',$sef)->get()->row_array();
    return$sonuc;
  }
  function uyekontrol($email,$sifre){
    $sonuc=$this->db->select('*')->from('uyeler')
    ->where('email',$email)->where('sifre',sha1(md5($sifre)))->get()->row();
    return $sonuc;

  }

  function arama($term){
    $sonuc = $this->db->select('title as value,id,katID,sef')->from('urunler')->like('title',$term)->get()->result_array();
    return $sonuc;
  }

  function arama2($term){
    $sonuc = $this->db->select('adsoyad as value,id,sef')->from('koclar')->like('adsoyad',$term)->get()->result_array();
    return $sonuc;
  }

  function urunara($sef){
    $sonuc = $this->db->select('*')->from('urunler')->where('sef',$sef)->get()->row_array();
    return $sonuc;
  }

  function kocara($sef){
    $sonuc = $this->db->select('*')->from('koclar')->where('sef',$sef)->get()->row_array();
    return $sonuc;
  }

  function uyelistele($id){
    $sonuc = $this->db->select('*')->from('uyeler')->where('id',$id)
    ->where('durum','1')->order_by('id','desc')->get()->result_array();
    return $sonuc;

  }


}



?>
