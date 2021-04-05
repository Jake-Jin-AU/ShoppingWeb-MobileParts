<?php
if ( isset( $_GET["error"] ) ) {
    if ( $_GET["error"] == 0 ) echo "<h2 style='color:red'>帳號或密碼錯誤</h2>";
    if ( $_GET["error"] == 1 ) echo "<h2 style='color:purple'>登入失敗，#資料庫</h2>";
    if ( $_GET["error"] == 2 ) echo "<h2 style='color:blue'>登入失敗，#不能為空</h2>";
}
if ( isset( $_GET["home"] ) ) {
    if ( $_GET["error"] == 0 ) echo "<h2 style='color:red'>帳號或密碼錯誤</h2>";

}

?>