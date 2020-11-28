<h3>Data Buku</h3>
<hr>
<a href="input_data.php">Tambah Data</a>
<table border="1" cellspacing="0" width="100%">
	<tr>
		<th>No</th>
		<th>NPB</th>
		<th>JUDUL BUKU</th>
		<th>F/NF</th>
		<th>Alamat</th>
		<th>Keterangan</th>
	</tr>

	<?php
	include "koneksi.php";
	$no=1;
	$sqlMhs = mysqli_query($konek, "SELECT * FROM buku ORDER BY npb ASC");

	while($d = mysqli_fetch_array($sqlMhs)){
		echo "<tr>
			<td align='center'>$no</td>
			<td>$d[npb]</td>
			<td>$d[judul_buku]</td>
			<td align='center'>$d[keterangan]</td>
			<td>$d[alamat]</td>
			<td align='center'>
				<a href='edit_data.php?npm=$d[npm]'>Edit</a> | <a href='hapus_data.php?npm=$d[npm]'> Hapus</a>
			</td>
		</tr>";
		$no++;
	}
	?>

</table>