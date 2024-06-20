<?php
            include "koneksi.php";

            // mendapatkan data dari form
            $id=$_POST['id'];
            $nim=$_POST['nim'];
            $nama=$_POST['nama'];
            $no_hp=$_POST['no_hp'];
            $jenis_kelamin=$_POST['jenis_kelamin'];
            $jurusan=$_POST['jurusan'];
            $alamat=$_POST['alamat'];

            // Querry tambahan data mahasiswa
            $sql = "INSERT INTO mahasiswa (nim, nama, no_hp, jenis_kelamin, jurusan, alamat ) VALUES ('$nim', '$nama', '$no_hp', '$jenis_kelamin', '$jurusan', '$alamat' ) ";
            if (mysqli_query($link, $sql)) {
                header("location:tampilan_data.php");
            } else {
                header("location:form_tambah.php");
            }
        ?>
