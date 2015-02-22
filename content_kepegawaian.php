<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>SMKN 1 Katapang</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">
      <!-- ####################################################################################################### -->
      <h1>Kepegawaian</h1>
        <table summary="PEGAWAI" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Title</th>
              <th>NIP</th>
			  <th>Guru Diklat</th>
			  <th>Kopetensi</th>
            </tr>
			<?php
				include "config/config.php";
				$ambil_data = mysql_query("select * from tb_kepegawaian");
				$no = 0;
				while($data = mysql_fetch_array($ambil_data)){
			?>
          </thead>
          <tbody>
            <tr class="light">
				<td><?php echo $no = $no + 1;?></td>
				<td><?php echo $data['nama'];?></td>
				<td><?php echo $data['title'];?></td>
				<td><?php echo $data['NIP'];?></td>
				<td><?php echo $data['guru_diklat'];?></td>
				<td><?php echo $data['Kopetensi'];?></td>
            </tr>
			<?php } ?>
          </tbody>
        </table>
      <!-- ####################################################################################################### -->
    </div>
  </div>
</div>
</body>
</html>