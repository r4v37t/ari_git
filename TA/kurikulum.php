<div class="page-header">
    <h1 class="page-title">Kurikulum</h1>
</div>
<section id="content">
    <?php
    $q = mysql_query("select * from web_kurikulum");
    ?>
    <article class="post clearfix">
        <table class="table table-hover" width="100%" style="border: 1px #000 solid">
            <thead>
            <tr>
                <th width="5%" style="border:1px solid black">No</th>
                <th width="20%" style="border:1px solid black">Nama Mata Pelajaran</th>
                <th width="30%" style="border:1px solid black">BAB </th>
                <th width="30%" style="border:1px solid black">SUB BAB</th>
                <th width="10%" style="border:1px solid black">Kurikulum</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $x = 0;
            while ($h = mysql_fetch_array($q)) {
                $qq = mysql_query("select * from sia_mapel where mapel_id=$h[mapel_id]");
                $hh = mysql_fetch_array($qq);
                $x++;
                ?>
                <tr style="border-bottom: 1px #000 solid">
                    <td align="center" style="border:1px solid black; vertical-align:top;" rowspan="1"><?php echo $x; ?>.</td>
                    <td align="center" style="border:1px solid black; vertical-align:top;" rowspan="1"><?php echo $hh['nama']; ?></td>
                    <td align="justyfi" style="border:1px solid black; padding-left:10px;" rowspan="1"><?php echo $h['bab']; ?></td>
                    <td align="justyfi" style="border:1px solid black; padding-left:10px; padding-right:10px;" rowspan="1"><?php echo $h['sub_bab']; ?></td>
                    <td align="center" style="border:1px solid black; vertical-align:top;" rowspan="1"><?php echo $h['kurikulum']; ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </article>
</section>