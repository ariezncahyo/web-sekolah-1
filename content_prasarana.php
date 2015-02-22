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
      <h1>Sarana dan Prasarana</h1>
        <table summary="Sarana dan Prasarana" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Barang/Asset</th>
              <th>Jumlah</th>
              <th>Keterangan</th>
            </tr>
			<?php
				include('config/config.php');
				$ambil_data = mysql_query("select * from tb_prasarana");
				$no = 0;
				while($data = mysql_fetch_array($ambil_data)){
			?>
          </thead>
          <tbody>
            <tr class="light">
				<td><?php echo $no = $no + 1;?></td>
				<td><?php echo $data['n_brg'];?></td>
				<td><?php echo $data['jml'];?></td>
				<td><?php echo $data['ket'];?></td>
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