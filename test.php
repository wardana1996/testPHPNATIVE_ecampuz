<html>
    <?php
        //soal 1
        $aplikasi[1] = 'gtAkademik';
        $aplikasi[2] = 'gtFinansi';
        $aplikasi[3] = 'gtPerizinan';
        $aplikasi[4] = 'geCampuz';
        $aplikasi[5] = 'eOviz';
        $i = 1;
        while($i <= count($aplikasi))
        {
            echo $aplikasi[$i]."<br/>";
            $i++;
        }

        //soal 2
        "SELECT tb_mahasiswa.mhs_nama as nama_mahasiswa , tb_matakuliah.mk_kode, tb_matakuliah.mk_nama as matkul, tb_mahasiswa_nilai.nilai  FROM tb_mahasiswa_nilai  
        INNER JOIN tb_mahasiswa ON tb_mahasiswa_nilai.mhs_id = tb_mahasiswa.mhs_id
        INNER JOIN tb_matakuliah ON tb_mahasiswa_nilai.mk_id = tb_matakuliah.mk_id
        where tb_matakuliah.mk_kode = 'MK303'
        ORDER BY tb_mahasiswa_nilai.nilai DESC
        LIMIT 1;"
    ?>
    <br><br>
    <form action="" method="POST">
        <table>
            <tr>
                <td><input type="number" name="bilangan_awal" placeholder="Masukkan angka " required></td>
                <td>&nbsp;dibagi&nbsp;</td>
                <td><input type="number" name="bilangan_akhir" placeholder="Masukkan angka" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="hasil"></td>
            </tr>
        </table>
    </form>
    <?php 
        //soal 3
        function pembagian() {
            if (isset($_POST['submit'])) {
                $bilangan_awal = $_POST['bilangan_awal'];
                $bilangan_akhir = $_POST['bilangan_akhir'];
                echo intval($bilangan_awal /= $bilangan_akhir).'<br><br>';
            }
        }
        pembagian();

        //soal 4
        for($i = 1;$i<=50;$i++) {
            if($i % 3 == 0 && $i % 5 == 0){
                echo 'FooBar <br>';
            } else if ($i % 5 == 0) {
                echo 'Bar <br>';
            } else if ($i % 3 == 0) {
                echo 'Foo <br>';
            } else {
                echo $i.'<br>';
            }
        }
    ?>
</html>
