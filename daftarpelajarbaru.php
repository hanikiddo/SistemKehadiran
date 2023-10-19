<?php
include('config.php');
?>

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

    button {
      appearance: none;
      background-color: #FAFBFC;
      border: 1px solid rgba(27, 31, 35, 0.15);
      border-radius: 6px;
      box-shadow: rgba(27, 31, 35, 0.04) 0 1px 0, rgba(255, 255, 255, 0.25) 0 1px 0 inset;
      box-sizing: border-box;
      color: #24292E;
      cursor: pointer;
      display: inline-block;
      font-family: -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
      font-size: 14px;
      font-weight: 500;
      line-height: 20px;
      list-style: none;
      padding: 6px 16px;
      position: relative;
      transition: background-color 0.2s cubic-bezier(0.3, 0, 0.5, 1);
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      vertical-align: middle;
      white-space: nowrap;
      word-wrap: break-word;
      }

    button:hover {
      background-color: #F3F4F6;
      text-decoration: none;
      transition-duration: 0.1s;
    }

    button:disabled {
      background-color: #FAFBFC;
      border-color: rgba(27, 31, 35, 0.15);
      color: #959DA5;
      cursor: default;
    }

    button:active {
      background-color: #EDEFF2;
      box-shadow: rgba(225, 228, 232, 0.2) 0 1px 0 inset;
      transition: none 0s;
    }

    button:focus {
      outline: 1px transparent;
    }

    button:before {
      display: none;
    }

    button:-webkit-details-marker {
      display: none;
    }
  </style>
  <body>
    <center>
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
            <button>SUBMIT</button>
          </form>
        </div>
    </center>
  </body>
  </html>

  <script>
  // Fungsi untuk menambahkan pelajar baru
  function addStudent() {
    // Dapatkan input dari formula
    var nama = document.getElementById("nama").value;
    var noMatrik = document.getElementById("noMatrik").value;
    var kelas = document.getElementById("kelas").value;
    var kohort = document.getElementById("kohort").value;
    var email = document.getElementById("email").value;

    // Cek jika pelajar adalah dari kelas 2 KPD 1
    if (kelas === "2 KPD 1") {
      // Buat objek data pelajar
      var studentData = {
        nama: nama,
        noMatrik: noMatrik,
        kelas: kelas,
        kohort: kohort,
        email: email
      };

      // Kirim data pelajar ke server menggunakan AJAX
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "simpan_pelajar.php", true); // Gantilah "simpan_pelajar.php" dengan nama skrip PHP yang sesuai di sisi server
      xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Berhasil menyimpan data, Anda dapat menampilkan pesan sukses atau mengambil tindakan lain.
          alert("Pelajar baru telah didaftarkan!");
          // Atur ulang formulir
          document.getElementById("insert").reset();
        }
      };
      xhr.send(JSON.stringify(studentData));
    } else {
      alert("Pelajar harus dari kelas 2 KPD 1 untuk mendaftar.");
    }
  }
</script>
