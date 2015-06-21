<div class="row-fluid">
    <div class="span12">
        <?php
        if (isset($_POST['tambah'])) {
            $nis = $_POST['nis'];
            $nama = $_POST['nama'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = date('Y-m-d', strtotime($_POST['tanggal_lahir']));
            $jk = $_POST['jk'];
            $agama = $_POST['agama'];
            $status = $_POST['status'];
            $anak_ke = $_POST['anak_ke'];
            $alamat = $_POST['alamat'];
            $telp = $_POST['telp'];
            $asal = $_POST['asal'];
            $diterima_kelas = $_POST['diterima_kelas'];
            $diterima_tgl = date('Y-m-d', strtotime($_POST['diterima_tgl']));
            $ayah = $_POST['ayah'];
            $ibu = $_POST['ibu'];
            $alamat_ortu = $_POST['alamat_ortu'];
            $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
            $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
            $wali = $_POST['wali'];
            $alamat_wali = $_POST['alamat_wali'];
            $telp_wali = $_POST['telp_wali'];
            $pekerjaan_wali = $_POST['pekerjaan_wali'];
            $foto = "";
            if (!empty($_FILES['gambar']['name'])) {
                $lokasi = 'sia_upload/' . $_FILES['gambar']['name'];
                if (move_uploaded_file($_FILES['gambar']['tmp_name'], $lokasi)) {
                    $foto = $lokasi;
                }
            }
            $q = mysql_query("insert into sia_siswa values('$nis','$nama','$tempat_lahir','$tanggal_lahir','$jk','$agama','$status','$anak_ke','$alamat','$telp','$asal','$diterima_kelas','$diterima_tgl','$ayah','$ibu','$alamat_ortu','$pekerjaan_ayah','$pekerjaan_ibu','$wali','$alamat_wali','$telp_wali','$pekerjaan_wali','$foto','Y')");
            if ($q) {
                ?>
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>SUKSES!</strong> Data berhasil di simpan. 
                </div>
                <?php
            } else {
                ?>
                <div class="alert alert-error">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>GAGAL!</strong> Data gagal di simpan. 
                </div>
                <?php
            }
        }
        if (isset($_GET['del'])) {
            $id = $_GET['del'];
            $q = mysql_query("delete from sia_siswa where nis='$id'");
            if ($q) {
                ?>
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>SUKSES!</strong> Data berhasil di hapus. 
                </div>
                <?php
            } else {
                ?>
                <div class="alert alert-error">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>GAGAL!</strong> Data gagal di hapus. 
                </div>
                <?php
            }
            ?><script>setTimeout(function () {
                                    location.href = '?menu=sia-siswa';
                                }, 200);</script><?php
        }
        if (isset($_POST['simpan'])) {
            $nis = $_POST['nis'];
            $nama = $_POST['nama'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = date('Y-m-d', strtotime($_POST['tanggal_lahir']));
            $jk = $_POST['jk'];
            $agama = $_POST['agama'];
            $status = $_POST['status'];
            $anak_ke = $_POST['anak_ke'];
            $alamat = $_POST['alamat'];
            $telp = $_POST['telp'];
            $asal = $_POST['asal'];
            $diterima_kelas = $_POST['diterima_kelas'];
            $diterima_tgl = date('Y-m-d', strtotime($_POST['diterima_tgl']));
            $ayah = $_POST['ayah'];
            $ibu = $_POST['ibu'];
            $alamat_ortu = $_POST['alamat_ortu'];
            $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
            $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
            $wali = $_POST['wali'];
            $alamat_wali = $_POST['alamat_wali'];
            $telp_wali = $_POST['telp_wali'];
            $pekerjaan_wali = $_POST['pekerjaan_wali'];
            $foto = "";
            if (!empty($_FILES['gambar']['name'])) {
                $lokasi = 'sia_upload/' . $_FILES['gambar']['name'];
                if (move_uploaded_file($_FILES['gambar']['tmp_name'], $lokasi)) {
                    $q = mysql_query("update sia_siswa set nama='$nama',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',jk='$jk',agama='$agama',status='$status',anak_ke='$anak_ke',alamat='$alamat',telp='$telp',asal='$asal',diterima_kelas='$diterima_kelas',diterima_tgl='$diterima_tgl',ayah='$ayah',ibu='$ibu',alamat_ortu='$alamat_ortu',pekerjaan_ayah='$pekerjaan_ayah',pekerjaan_ibu='$pekerjaan_ibu',wali='$wali',alamat_wali='$alamat_wali',telp_wali='$telp_wali',pekerjaan_wali='$pekerjaan_wali',foto='$lokasi' where nis='$nis'");
                } else {
                    $q = false;
                }
            } else {
                $q = mysql_query("update sia_siswa set nama='$nama',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',jk='$jk',agama='$agama',status='$status',anak_ke='$anak_ke',alamat='$alamat',telp='$telp',asal='$asal',diterima_kelas='$diterima_kelas',diterima_tgl='$diterima_tgl',ayah='$ayah',ibu='$ibu',alamat_ortu='$alamat_ortu',pekerjaan_ayah='$pekerjaan_ayah',pekerjaan_ibu='$pekerjaan_ibu',wali='$wali',alamat_wali='$alamat_wali',telp_wali='$telp_wali',pekerjaan_wali='$pekerjaan_wali' where nis='$nis'");
            }
            if ($q) {
                ?>
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>SUKSES!</strong> Data berhasil di perbaharui. 
                </div>
                <?php
            } else {
                ?>
                <div class="alert alert-error">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>GAGAL!</strong> Data gagal di perbaharui. 
                </div>
                <?php
            }
            ?><script>setTimeout(function () {
                                    location.href = '?menu=sia-siswa';
                                }, 200);</script><?php
        }

        if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $q = mysql_query("select * from sia_siswa where nis='$id'");
            $h = mysql_fetch_array($q);
            ?>
            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon">
                        <i class="icon-align-justify"></i>									
                    </span>
                    <h5>Edit Siswa</h5>
                </div>
                <div class="widget-content nopadding">
                    <form method="post" class="form-horizontal" enctype="multipart/form-data" >
                        <div class="control-group">
                            <label class="control-label">NIS :</label>
                            <div class="controls"><input  type="text" name="nis" class="span20" placeholder="NIS Siswa" value="<?php echo $h['nis']; ?>" readonly /></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nama Lengkap :</label>
                            <div class="controls"><input type="text" name="nama" class="span20" placeholder="Nama Lengkap Siswa" value="<?php echo $h['nama']; ?>" /></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tempat Lahir :</label>
                            <div class="controls"><input type="text" name="tempat_lahir" class="span20" placeholder="Tempat Lahir Siswa" value="<?php echo $h['tempat_lahir']; ?>" /></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tanggal Lahir</label>
                            <div class="controls">
                                <input type="text" name="tanggal_lahir" data-date-format="dd-mm-yyyy" placeholder="Tanggal Lahir Siswa" class="datepicker" value="<?php echo date('d-m-Y', strtotime($h['tanggal_lahir'])); ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Jenis Kelamin</label>
                            <div class="controls">
                                <select name="jk">
                                    <option value="Laki-laki" <?php echo ($h['jk'] == 'Laki-laki') ? 'selected' : ''; ?> >Laki-laki</option>
                                    <option value="Perempuan" <?php echo ($h['jk'] == 'Perempuan') ? 'selected' : ''; ?> >Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Agama</label>
                            <div class="controls">
                                <select name="agama">
                                    <option value="Islam" <?php echo ($h['agama'] == 'Islam') ? 'selected' : ''; ?> >Islam</option>
                                    <option value="Kristen Protestan" <?php echo ($h['agama'] == 'Kristen Protestan') ? 'selected' : ''; ?> >Kristen Protestan</option>
                                    <option value="Katolik" <?php echo ($h['agama'] == 'Katolik') ? 'selected' : ''; ?> >Katolik</option>
                                    <option value="Hindu" <?php echo ($h['agama'] == 'Hindu') ? 'selected' : ''; ?> >Hindu</option>
                                    <option value="Budha" <?php echo ($h['agama'] == 'Budha') ? 'selected' : ''; ?> >Budha</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Status dalam Keluarga :</label>
                            <div class="controls">
                                <select name="status">
                                    <option value="Anak Kandung" <?php echo ($h['status'] == 'Anak Kandung') ? 'selected' : ''; ?> >Anak Kandung</option>
                                    <option value="Anak Angkat" <?php echo ($h['status'] == 'Anak Angkat') ? 'selected' : ''; ?> >Anak Angkat</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Anak Ke- :</label>
                            <div class="controls"><input type="text" name="anak_ke" class="span20" placeholder="Anak Ke" value="<?php echo $h['anak_ke']; ?>" /></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Alamat :</label>
                            <div class="controls"><input type="text" name="alamat" class="span20" placeholder="Alamat Siswa" value="<?php echo $h['alamat']; ?>" /></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nomor Telepon :</label>
                            <div class="controls"><input type="text" name="telp" class="span20" placeholder="Nomor Telepon Rumah" value="<?php echo $h['telp']; ?>" /></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Sekolah Asal :</label>
                            <div class="controls"><input type="text" name="asal" class="span20" placeholder="Sekolah Asal Siswa" value="<?php echo $h['asal']; ?>" /></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Diterima Dikelas :</label>
                            <div class="controls"><input type="text" name="diterima_kelas" class="span20" placeholder="Siswa Diterima Dikelas" value="<?php echo $h['diterima_kelas']; ?>" /></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Diterima Tanggal :</label>
                            <div class="controls"><input type="text" name="diterima_tgl" placeholder="Siswa Diterima Tanggal" class="datepicker" data-date-format="dd-mm-yyyy" value="<?php echo date('d-m-Y', strtotime($h['diterima_tgl'])); ?>" /></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nama Ayah :</label>
                            <div class="controls"><input type="text" name="ayah" class="span20" placeholder="Nama Lengkap Ayah Siswa" value="<?php echo $h['ayah']; ?>" /></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nama Ibu :</label>
                            <div class="controls"><input type="text" name="ibu" class="span20" placeholder="Nama Lengkap Ibu Siswa" value="<?php echo $h['ibu']; ?>" /></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Alamat Orang Tua :</label>
                            <div class="controls"><input type="text" name="alamat_ortu" class="span20" placeholder="Alamat Orang Tua Siswa" value="<?php echo $h['alamat_ortu']; ?>" /></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Pekerjaan Ayah :</label>
                            <div class="controls"><input type="text" name="pekerjaan_ayah" class="span20" placeholder="Pekerjaan Ayah" value="<?php echo $h['pekerjaan_ayah']; ?>" /></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Pekerjaan Ibu :</label>
                            <div class="controls"><input type="text" name="pekerjaan_ibu" class="span20" placeholder="Pekerjaan Ibu" value="<?php echo $h['pekerjaan_ibu']; ?>" /></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nama Wali :</label>
                            <div class="controls"><input type="text" name="wali" class="span20" placeholder="Nama Lengkap Wali Siswa" value="<?php echo $h['wali']; ?>" /></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Alamat Wali :</label>
                            <div class="controls"><input type="text" name="alamat_wali" class="span20" placeholder="Alamat Wali Siswa" value="<?php echo $h['alamat_wali']; ?>" /></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nomor Telepon Wali :</label>
                            <div class="controls"><input type="text" name="telp_wali" class="span20" placeholder="Nomor Telepon Wali Siswa" value="<?php echo $h['telp_wali']; ?>" /></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Pekerjaan Wali :</label>
                            <div class="controls"><input type="text" name="pekerjaan_wali" class="span20" placeholder="Pekerjaan Wali Siswa" value="<?php echo $h['pekerjaan_wali']; ?>" /></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Foto Siswa :</label>
                            <img src="<?php echo $h['foto']; ?>" width="256" />
                            <div class="controls"><input type="file" name="gambar" /></div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                            <button type="button" class="btn btn-warning" onclick="location.href = '?menu=sia-siswa'">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
    <?php
} else {
    ?>
            <div class="widget-box collapsible">
                <div class="widget-title">
                    <a href="#collapseTwo" data-toggle="collapse">
                        <span class="icon"><i class="icon-plus"></i></span>
                        <h5>Tambah Data</h5>
                    </a>
                </div>
                <div class="collapse" id="collapseTwo">
                    <div class="widget-content">
                        <div class="widget-box">
                            <div class="widget-title">
                                <span class="icon">
                                    <i class="icon-align-justify"></i>									
                                </span>
                                <h5>Siswa</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <form method="post" class="form-horizontal" enctype="multipart/form-data" >
                                    <div class="control-group">
                                        <label class="control-label">NIS :</label>
                                        <div class="controls"><input onchange="cekNis(this.value)" maxlength="4" type="text" name="nis" class="span20" placeholder="NIS Siswa" /><div id="info"></div></div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Nama Lengkap :</label>
                                        <div class="controls"><input type="text" name="nama" class="span20" placeholder="Nama Lengkap Siswa" /></div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Tempat Lahir :</label>
                                        <div class="controls"><input type="text" name="tempat_lahir" class="span20" placeholder="Tempat Lahir Siswa" /></div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Tanggal Lahir</label>
                                        <div class="controls">
                                            <input type="text" name="tanggal_lahir" data-date-format="dd-mm-yyyy" placeholder="Tanggal Lahir Siswa" class="datepicker" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Jenis Kelamin</label>
                                        <div class="controls">
                                            <select name="jk">
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Agama</label>
                                        <div class="controls">
                                            <select name="agama">
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen Protestan">Kristen Protestan</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Status dalam Keluarga :</label>
                                        <div class="controls">
                                            <select name="status">
                                                <option value="Anak Kandung">Anak Kandung</option>
                                                <option value="Anak Angkat">Anak Angkat</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Anak Ke- :</label>
                                        <div class="controls"><input type="text" name="anak_ke" class="span20" placeholder="Anak Ke" /></div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Alamat :</label>
                                        <div class="controls"><input type="text" name="alamat" class="span20" placeholder="Alamat Siswa" /></div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Nomor Telepon :</label>
                                        <div class="controls"><input type="text" name="telp" class="span20" placeholder="Nomor Telepon Rumah" /></div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Sekolah Asal :</label>
                                        <div class="controls"><input type="text" name="asal" class="span20" placeholder="Sekolah Asal Siswa" /></div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Diterima Dikelas :</label>
                                        <div class="controls"><input type="text" name="diterima_kelas" class="span20" placeholder="Siswa Diterima Dikelas" /></div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Diterima Tanggal :</label>
                                        <div class="controls"><input type="text" name="diterima_tgl" placeholder="Siswa Diterima Tanggal" class="datepicker" data-date-format="dd-mm-yyyy" /></div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Nama Ayah :</label>
                                        <div class="controls"><input type="text" name="ayah" class="span20" placeholder="Nama Lengkap Ayah Siswa" /></div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Nama Ibu :</label>
                                        <div class="controls"><input type="text" name="ibu" class="span20" placeholder="Nama Lengkap Ibu Siswa" /></div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Alamat Orang Tua :</label>
                                        <div class="controls"><input type="text" name="alamat_ortu" class="span20" placeholder="Alamat Orang Tua Siswa" /></div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Pekerjaan Ayah :</label>
                                        <div class="controls"><input type="text" name="pekerjaan_ayah" class="span20" placeholder="Pekerjaan Ayah" /></div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Pekerjaan Ibu :</label>
                                        <div class="controls"><input type="text" name="pekerjaan_ibu" class="span20" placeholder="Pekerjaan Ibu" /></div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Nama Wali :</label>
                                        <div class="controls"><input type="text" name="wali" class="span20" placeholder="Nama Lengkap Wali Siswa" /></div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Alamat Wali :</label>
                                        <div class="controls"><input type="text" name="alamat_wali" class="span20" placeholder="Alamat Wali Siswa" /></div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Nomor Telepon Wali :</label>
                                        <div class="controls"><input type="text" name="telp_wali" class="span20" placeholder="Nomor Telepon Wali Siswa" /></div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Pekerjaan Wali :</label>
                                        <div class="controls"><input type="text" name="pekerjaan_wali" class="span20" placeholder="Pekerjaan Wali Siswa" /></div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Foto Siswa :</label>
                                        <div class="controls"><input type="file" name="gambar" /></div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" name="tambah" class="btn btn-success">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon"><i class="icon-th"></i></span> 
                    <h5>Data Siswa</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $q = mysql_query("select * from sia_siswa");
                            while ($h = mysql_fetch_array($q)) {
                                if ($h[status_siswa] == 'Y') {
                                    $status = "<p class='label' style='background:green;'>Siswa Aktif</p>";
                                } elseif ($h[status_siswa] == 'N') {
                                    $status = "<p class='label label-info'>Alumni</p>";
                                }
                                ?>
                                <tr>
                                    <td><?php echo $h['nis']; ?></td>
                                    <td><?php echo $h['nama']; ?></td>
                                    <td><?php echo $status; ?></td>
                                    <td><center><a href="?menu=sia-siswa&edit=<?php echo $h['nis']; ?>">Edit</a> | <a href="?menu=sia-siswa&del=<?php echo $h['nis']; ?>">Del</a></center></td>
                            </tr>
        <?php
    }
    ?>
                        </tbody>
                    </table>
                </div>
            </div>
    <?php
}
?>
    </div>
</div>

<script>
function cekNis(str) {
    if (str.length == 0) {
        document.getElementById("info").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("info").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "ceknis.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>