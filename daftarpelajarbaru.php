<html>
  <head><title>KVPJB</title></head>
  <style>
    img {
      width: 40%;
    }
  </style>
  <body>
    <center>
        <img src="img/logokvperd.jpg">
        <br>
        <h2>SISTEM PENDAFTARAN PELAJAR BAHARU</h2><br>
        <br>
        <div class="form">
        <form id="insert" name="insert" method="post" action="daftarpelajarbaru.php">
          <table align="center" width="263">
            <tr>
              <th align="left" height="36" scope="row">NAMA</th>
              <th width="24">:          
              <th width="205" align="left" ><input type="text" name="nama" id="nama"></th>
            </tr>
            <tr>
              <th align="left" height="36" scope="row">NO.MATRIK</th>
              <th width="24">:          
              <th width="205" align="left" ><input type="text" name="no.matrik" id="no.matrik"></th>
            </tr>
            <tr>
              <th align="left" height="36" scope="row">KELAS</th>
              <th width="24">: 
              <th><select name="kelas" id="kelas">
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
              </select></th>
            </tr>
            <tr>
              <th align="left" height="36" scope="row">KOHORT</th>
              <th width="24">:          
              <th width="205" align="left" ><input type="text" name="kohort" id="kohort"></th>
            </tr>
            <tr>
              <th align="left" height="36" scope="row">NO.TEL</th>
              <th width="24">:          
              <th width="205" align="left" ><input type="tel" name="phone" id="phone"></th>
            </tr>
          </table>
        </form>
        </div>
        <div align="center">
          <input type="submit" name="submit" class="button submit" value="Submit">
        </div>
        </form>
        </div>
    </center>
  </body>
</html>