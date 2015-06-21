<div class="row-fluid">
    <div class="span12">
        <?php
        if (isset($_POST['tambah'])) {
            $nis = $_POST['nis'];
            $nama = $_POST['nama'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = date('Y-m-d', strtotime($_POST['tanggal_lahir']));
            $lulus = date('Y-m-d', strtotime($_POST['lulus']));
            mysql_query("update sia_siswa set status_siswa='N' where nis='$nis'");
            mysql_query("delete from blog_anggota where nis='$nis'");
            $q = mysql_query("insert into web_alumni values('$nis','$nama','$tempat_lahir','$tanggal_lahir','$lulus')");
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
            $q = mysql_query("delete from web_alumni where nis='$id'");
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
                        location.href = '?menu=web-alumni';
                    }, 200);</script><?php
        }
        if (isset($_POST['simpan'])) {
            $nis = $_POST['nis'];
            $nama = $_POST['nama'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = date('Y-m-d', strtotime($_POST['tanggal_lahir']));
            $lulus = date('Y-m-d', strtotime($_POST['lulus']));
            $q = mysql_query("update web_alumni set nama='$nama',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',lulus='$lulus' where nis='$nis'");
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
                        location.href = '?menu=web-alumni';
                    }, 200);</script><?php
        }

        if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $q = mysql_query("select * from web_alumni where nis='$id'");
            $h = mysql_fetch_array($q);
            ?>
            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon">
                        <i class="icon-align-justify"></i>									
                    </span>
                    <h5>Edit Alumni</h5>
                </div>
                <div class="widget-content nopadding">
                    <form method="post" class="form-horizontal">
                        <div class="control-group">
                            <label class="control-label">NIS:</label>
                            <div class="controls">
                                <select name="nis">
                                    <?php
                                    $qq = mysql_query("select * from sia_siswa");
                                    while ($hh = mysql_fetch_array($qq)) {
                                        ?>
                                        <option value="<?php echo $hh['nis']; ?>"><?php echo "$hh[nis] - $hh[nis]"; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Nama Lengkap :</label>
                            <div class="controls"><input type="text" name="nama" class="span20" placeholder="Nama Lengkap Alumni" value="<?php echo $h['nama']; ?>" /></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tempat Lahir :</label>
                            <div class="controls"><input type="text" name="tempat_lahir" class="span20" placeholder="Tempat Lahir Alumni" value="<?php echo $h['tempat_lahir']; ?>" /></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tanggal Lahir</label>
                            <div class="controls">
                                <input type="text" name="tanggal_lahir" data-date-format="dd-mm-yyyy" placeholder="Tanggal Lahir Alumni" class="datepicker" value="<?php echo date('d-m-Y', strtotime($h['tanggal_lahir'])); ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tanggal Lulus</label>
                            <div class="controls">
                                <input type="text" name="lulus" data-date-format="dd-mm-yyyy" placeholder="Tempat Lulus Alumni" class="datepicker" value="<?php echo date('d-m-Y', strtotime($h['lulus'])); ?>" />
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                            <button type="button" class="btn btn-warning" onclick="location.href = '?menu=web-alumni'">Batal</button>
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
                                <h5>Alumni</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <form method="post" class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label">NIS:</label>
                                        <div class="controls">
                                            <select id="nis" onchange="return onchangeajax(this.value);" name="nis">
                                                <?php
                                                $qq = mysql_query("select * from sia_siswa where status_siswa='Y'");
                                                while ($hh = mysql_fetch_array($qq)) {
                                                    ?>
                                                    <option value="<?php echo $hh['nis']; ?>"><?php echo "$hh[nis]"; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="info"></div>
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
                    <h5>Data Alumni</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Tempat/Tanggal Lahir</th>
                                <th>Tanggal Lulus</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $q = mysql_query("select * from web_alumni");
                            while ($h = mysql_fetch_array($q)) {
                                ?>
                                <tr>
                                    <td><?php echo $h['nis']; ?></td>
                                    <td><?php echo $h['nama']; ?></td>
                                    <td><?php echo $h['tempat_lahir'] . ', ' . date('d-m-Y', strtotime($h['tanggal_lahir'])); ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($h['lulus'])); ?></td>
                                    <td><center><a href="?menu=web-alumni&edit=<?php echo $h['nis']; ?>">Edit</a> | <a href="?menu=web-alumni&del=<?php echo $h['nis']; ?>">Del</a></center></td>
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
    function onchangeajax(pid)
    {
        xmlHttp = GetXmlHttpObject()
        if (xmlHttp == null)
        {
            alert("Browser does not support HTTP Request")
            return
        }

        var url = "alumni.php"
        url = url + "?id_nis=" + pid
        url = url + "&sid=" + Math.random()
        document.getElementById("info").innerHTML = 'Please wait..<img border="0" src="images/ajax-loader.gif">'
        if (xmlHttp.onreadystatechange = stateChanged)
        {
            xmlHttp.open("GET", url, true)
            xmlHttp.send(null)
            return true;
        }
        else
        {
            xmlHttp.open("GET", url, true)
            xmlHttp.send(null)
            return false;
        }
    }

    function stateChanged()
    {
        if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete")
        {
            document.getElementById("info").innerHTML = xmlHttp.responseText
            return true;
        }
    }

    function GetXmlHttpObject()
    {
        var objXMLHttp = null
        if (window.XMLHttpRequest)
        {
            objXMLHttp = new XMLHttpRequest()
        }
        else if (window.ActiveXObject)
        {
            objXMLHttp = new ActiveXObject("Microsoft.XMLHTTP")
        }
        return objXMLHttp;
    }
</script>