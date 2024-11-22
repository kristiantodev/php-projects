<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ( ! function_exists('style_url'))
{
  function isAuthenticated()
  {
      $ci =& get_instance();
      return $ci->session->is_logged_in === TRUE;
  }
}
if ( ! function_exists('style_url'))
{
  function random_password(){
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $password = array();
    $alpha_length = strlen($alphabet) - 1;
    for($i = 0; $i < 6; $i++){
      $n = rand(0, $alpha_length);
      $password[] = $alphabet[$n];
    }
    return implode($password);
  }
}
if ( ! function_exists('style_url'))
{
  /**
   * Mailto Link
   *
   * @param string  the email address
   * @param string  the link title
   * @param mixed any attributes
   * @return  string
   */
  function style_url($uri, $rel = '', $protocol = NULL)
  {
    $rel = (string) $rel;

    if ($rel === '')
    {
      $rel = "stylesheet";
    }

    return '<link rel="'.$rel.'" href="'.get_instance()->config->base_url($uri, $protocol).'">';
  }
}

if ( ! function_exists('script_url'))
{
  /**
   * Mailto Link
   *
   * @param string  the email address
   * @param string  the link title
   * @param mixed any attributes
   * @return  string
   */
  function script_url($uri, $type = '', $protocol = NULL)
  {
    $type = (string) $type;
    if( $type !== '' ){
      $type = "type='".$type."'";
    }else{
      $type = "";
    }
    return '<script src="'.get_instance()->config->base_url($uri, $protocol).'"'.$type.'></script>';
  }
}
if ( ! function_exists('getData')) {
  function getData($tableName, $columns = '*', $where = [])
  {
      $ci =& get_instance();
      $sql = "SELECT $columns FROM $tableName";

      if (count($where) !== 0) {
          $key = array_keys($where)[0];
          $val = array_values($where)[0];
          $sql .= " WHERE $key = '$val'";
      }

      return $ci->db->query($sql)->result();
  }
}
if ( ! function_exists('appName')) {
  function appName() {
    $getPerusahaan = getData('tbl_perusahaan');
    $perusahaan = null;
    if($getPerusahaan){
      $perusahaan = $getPerusahaan[0];
    }
    $appName = "CSI PRODUK";
    if($perusahaan !== null){
      $appName = $perusahaan->nama_perusahaan;
    }
    return $appName;
  }
}

if ( ! function_exists('appSetting')) {
  function appSetting() {
    $getPerusahaan = getData('tbl_perusahaan');
    $perusahaan = null;
    if($getPerusahaan){
      $perusahaan = $getPerusahaan[0];
    }
    $appSetting = [];
    if($perusahaan !== null){
      $appSetting = $perusahaan;
    }
    return $appSetting;
  }
}

if ( ! function_exists('provideAccessTo')) {
  function provideAccessTo($userCodeList, $redirect = true) {
    if ($userCodeList === 'all') {
      return true;
    }else{
      $currentUser = getUser('user_groups_id');
      // $currenCodeUser = getUserTypeCode($currentUser);
      $allowedUser = explode("|", $userCodeList);
      if (in_array($currentUser, $allowedUser)) {
        return true;
      } else {
        if ($redirect === true) {
          redirect('restrict-page');
        } else {
          return false;
        }
      }
    }
  }
}

if (! function_exists('getUser')) {
  function getUser($index = null)
  {
      if (isset($_SESSION['user'])) {
          $userSession = $_SESSION['user'];

          $userData = getData('tbl_users', '*', [
              'id_users' => $userSession->id_users
          ]);
          $user = $userData[0];

          if ($userSession->nickname !== $user->nickname || $userSession->username !== $user->username || $userSession->email !== $user->email || $userSession->user_image !== $user->user_image) {
              //Change session value
              $_SESSION['user'] = $user;
          }
          return $_SESSION['user']->$index;
      } else {
          return null;
      }
  }
}
if (! function_exists('getUserLevel')) {
  function getUserLevel($index = null)
  {
      $user_level_lists = [
          '1' => 'Administrator',
          '2' => 'Manajemen'
      ];

      if ($index !== null) {
          return $user_level_lists[$index];
      }

      return $user_level_lists;
  }
}
if (! function_exists('getUserTypeCode')) {
  function getUserTypeCode($code = null)
  {
      $userLevel = getUserLevel();
      $result = [];
      $codeIndex = 1;
      foreach ($userLevel as $key => $val) {
          $result[$codeIndex] = $key;
          if ($code !== null && $code === $key) {
              return $codeIndex;
              break;
          }
          $codeIndex++;
      }

      return $result;
  }
}

if (! function_exists('showOnlyTo')) {
  function showOnlyTo($userCodeList)
  {
      return provideAccessTo($userCodeList, false);
  }
}
if ( ! function_exists('getAspekPenilaian')) {
  function getAspekPenilaian() {
    $ci =& get_instance();
  }
}

if ( ! function_exists('getCsi')) {
  function getCsi() {
    $ci =& get_instance();
    $total = $ci->Questionnaire->avgBy(['SUM(respon_perception_answer) as perception','SUM(respon_reality_answer) as reality'],NULL,'id_pertanyaan');
    $responden = $ci->Questionnaire->responden('customer_id');
    $questionnaire = $ci->Questionnaire->all();

    $mis = 0;
    $mis = 0;
    foreach ($total as $key => $value) {
      $mis += $value->perception/$responden;
    }
    $ws = 0;
    foreach ($total as $key => $value) {
      $wf = ($value->perception/$responden) / $mis;
      $mss = $value->reality / $responden;
      $ws += $wf * $mss;
    }
    $result = number_format($ws/4 , 2)*100;
    return $result;
  }
}

if ( ! function_exists('getRow')) {
  function getRow($tableName, $columns, $where = []) {
    $ci =& get_instance();
    $sql = "SELECT $columns FROM $tableName";

    if (count($where) !== 0) {
        $key = array_keys($where)[0];
        $val = array_values($where)[0];
        $sql .= " WHERE $key = '$val'";
    }

    return $ci->db->query($sql)->row();
  }
}

if ( ! function_exists('getReality')) {
  function getReality($tableName, $columns, $where_cus, $where_pert) {
    $ci =& get_instance();
    $sql = "SELECT $columns FROM $tableName where customer_id = $where_cus AND id_pertanyaan = $where_pert";
    return $ci->db->query($sql)->row();
  }
}

if ( ! function_exists('getSearch')) {
  function getSearch($tableName, $columns, $where = []) {
    $ci =& get_instance();
    $sql = "SELECT $columns FROM $tableName";

    if (count($where) !== 0) {
        $key = array_keys($where)[0];
        $val = array_values($where)[0];
        $sql .= " WHERE $key = '$val'";
    }

    return $ci->db->query($sql)->row();
  }
}
?>
