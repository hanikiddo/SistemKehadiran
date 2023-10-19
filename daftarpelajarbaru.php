<html>
  <head>
    <title>KVPJB</title>
  </head>
  <style>
    body  {
      background-image: url("wallgrey.jpg");
      background-color: #cccccc;
    }
    img {
      width: 40%;
    }

    .form {
      border: solid black 2px; 
      width: 30%;
      padding-left: 10px;
      padding-top: 20px;
      padding-bottom: 10px;
      background-color: white;
    }
  </style>
  <body>
    <center>
      <ul>
			<li><a href="#home">Home</a></li>
			<li><a href="#news">News</a></li>
			<li><a href="#about">About</a></li>
		  </ul>
		  <br><br>
      <img src="img/logokvperd.jpg">
      <br>
      <h2>SISTEM PENDAFTARAN PELAJAR BAHARU</h2>
      <br>
      <div class="form">
        <form id="insert" name="insert">
          <table align="center" width="263">
            <tr>
              <th align="left" height="36" scope="row">NAMA</th>
              <th width="24">:
              <th width="205" align="left"><input type="text" id="nama" required></th>
            </tr>
            <tr>
              <th align="left" height="36" scope="row">NO.MATRIK</th>
              <th width="24">:
              <th width="205" align="left"><input type="text" id="noMatrik" required></th>
            </tr>
            <tr>
              <th align="left" height="36" scope="row">KELAS</th>
              <th width="24">:
              <th>
                <select id="kelas">
                <option value="1 BAK">1 BAK</option>
                <option value="1 BKP 1">1 BKP 1</option>
                <option value="1 BKP 2">1 BKP 2</option>
                <option value="1 BPP">1 BPP</option>
                <option value="1 KPD 1">1 KPD 1</option>
                <option value="1 KPD 2">1 KPD 2</option>
                <option value="2 BAK">2 BAK</option>
                <option value="2 BKP 1">2 BKP 1</option>
                <option value="2 BKP 2">2 BKP 2</option>
                <option value="2 BPP">2 BPP</option>
                <option value="2 KPD 1">2 KPD 1</option>
                <option value="2 KPD 2">2 KPD 2</option>
                <option value="1 DBE"> 1 DBE</option>
                <option value="1 DBG 1">1 DBG 1</option>
                <option value="1 DBG 2">1 DBG 2</option>
                <option value="1 DBF">1 DBF</option>
                <option value="1 DKA 1">1 DKA 1</option>
                <option value="1 DKA 2">1 DKA 2</option>
                <option value="2 DBE"> 2 DBE</option>
                <option value="2 DBG 1">2 DBG 1</option>
                <option value="2 DBG 2">2 DBG 2</option>
                <option value="2 DBF">2 DBF</option>
                <option value="2 DKA 1">2 DKA 1</option>
                <option value="2 DKA 2">2 DKA 2</option>
                  <!-- Tambahkan opsi kelas yang lain di sini -->
                </select>
              </th>
            </tr>
            <tr>
              <th align="left" height="36" scope="row">KOHORT</th>
              <th width="24">:
              <th width="205" align="left"><input type="text" id="kohort" required></th>
            </tr>
            <tr>
              <th align="left" height="36" scope="row">EMAIL</th>
              <th width="24">:
              <th width="205" align="left"><input type="email" id="email" required></th>
            </tr>
          </table>
          <br>
          <input type="button" name="submit" class="button submit" value="Submit" onclick="addStudent()">
      </div>
      </form>
      </div>
    </center>
  </body>
  </html>

  <script>
  // Array untuk menyimpan senarai kehadiran pelajar 2 KPD 1
  var senaraiKehadiran = [];

  function addStudent() {
    // Dapatkan data dari borang
    var nama = document.getElementById('nama').value;
    var noMatrik = document.getElementById('noMatrik').value;
    var kelas = document.getElementById('kelas').value;
    var kohort = document.getElementById('kohort').value;
    var email = document.getElementById('email').value;

    // Periksa kelas adalah "2 KPD 1" sebelum menambahkan ke senarai kehadiran
    if (kelas === '2 KPD 1') {
      // Buat objek pelajar
      var pelajar = {
        nama: nama,
        noMatrik: noMatrik,
        kohort: kohort,
        email: email,
      };

      // Tambahkan pelajar ke senarai kehadiran
      senaraiKehadiran.push(pelajar);

      // Resetkan borang
      document.getElementById('nama').value = '';
      document.getElementById('noMatrik').value = '';
      document.getElementById('kohort').value = '';
      document.getElementById('email').value = '';
    } else {
      alert('Hanya pelajar kelas 2 KPD 1 yang dibenarkan.');
    }

    // Debug: Paparkan senarai kehadiran di konsol
    console.log('Senarai Kehadiran 2 KPD 1:', senaraiKehadiran);
  }
</script>
