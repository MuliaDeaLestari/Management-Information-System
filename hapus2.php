<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require 'functions2.php';

$id = $_GET["id"];

if(hapus($id)>0){
    echo "
            <script>
                alert('data berhasil dihapus!');
                document.location.href = 'pencatatanpembelian.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('data gagal dihapus!');
            </script>
        ";
}

?>