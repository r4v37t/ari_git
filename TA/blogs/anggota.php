<div class="post-item">
	<div class="post_title">
		<h2>Data Anggota</h2>
	</div>
	<div class="post-descr">
		<div class="styled_table table_blue">
			<table>
				<thead>
					<tr>
						<th style="width:5%">No</th>
						<th style="width:20%">NIS</th>
						<th style="width:75%">Nama Siswa</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$x=0;
					$q=mysql_query("select * from blog_anggota where ref=$ref");
					while($h=mysql_fetch_array($q)){
						$qq=mysql_query("select * from sia_siswa where nis='$h[nis]'");
						$hh=mysql_fetch_array($qq);
						$x++;
					?>
					<tr>
						<td><?php echo $x; ?>.</td>
						<td><?php echo $hh['nis']; ?></td>
						<td><?php echo $hh['nama']; ?></td>
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>