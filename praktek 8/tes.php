<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>pendataan</title>
 <link rel="shortcut icon" href="logo.png" type="image/x-icon" />
 <link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>
 <div class="container">
  <div class="header">
   <div class="image">
    <img src="logo.png" alt="ansor" width="190" />
   </div>
   <div class="text">
    <h4>PIMPINAN ANAK CABANG</h4>
    <h2>GERAKAN PEMUDA ANSOR</h2>
    <h4>KECAMATAN GONDANGLEGI</h4>
    <p>
     jl Hayam Wuruk Gondanglegi Malang 65174
    </p>
   </div>
  </div>
  <div class="main-content">
   <h3>FORMULIR PENDATAAN</h3>
   <h3>ANGGOTA GERAKAN PEMUDA ANSOR</h3>
   <form name="data-anggota">
    <div class="inputs">
     <label for="nik">NIK : </label>
     <input type="number" name="nik" id="nik" value="" />
    </div>
    <div class="inputs">
     <label for="namaLengkap">NAMA LENGKAP</label>
     <p>
      :
     </p>
     <input type="text" name="namaLengkap" id="namaLengkap" value="" />
    </div>
    <div class="inputs">
     <label for="tempatlahir">TEMPAT LAHIR</label>
     <p>
      :
     </p>
     <input type="text" name="tempatlahir" id="tempatlahir" value="" />
    </div>
    <div class="inputs">
     <label for="tglLahir">TANGGAL LAHIR</label>
     <p>
      :
     </p>
     <input type="date" name="tglLahir" id="tglLahir" value="" />
    </div>
    <div class="inputs">
     <label for="stat">STATUS PERKAWINAN</label>
     <p>
      :
     </p>
     <select name="stat" id="stat">
      <option value="belum kawin">Belum Kawin</option>
      <option value="kawin">Kawin</option>
      <option value="pernah kawin">Pernah Kawin</option>
     </select>
    </div>
    <div class="inputs">
     <label for="alamat">ALAMAT</label>
     <p>
      :
     </p>
     <textarea name="alamat" id="alamat" value=""></textarea>
    </div>
    <div class="inputs">
     <label for="diklat">DIKLAT YANG DIIKUTI</label>
     <p>
      :
     </p>
     <input type="text" name="diklat" id="diklat" value="" />
    </div>
    <div class="inputs">
     <label for="exp">PENGALAMAN ORGANISASI</label>
     <p>
      :
     </p>
     <input type="text" name="exp" id="exp" value="" />
    </div>
    <div class="inputs">
     <label for="kontak">NOMOR Telp/HP</label>
     <p>
      :
     </p>
     <input type="number" name="kontak" id="kontak" value="" />
    </div>
    <div class="inputs">
     <label for="keanggotaan">STATUS KEANGGOTAAN</label>
     <p>
      :
     </p>
     <select name="keanggotaan" id="keanggotaan">
      <option value="ansor">ansor</option>
      <option value="banser">banser</option>
     </select>
    </div>
    <div class="inputs">
     <label for="jabatan">Jabatan</label>
     <p>
      :
     </p>
     <input type="text" name="jabatan" id="jabatan" value="" />
    </div>
    <button type="submit">SUBMIT</button>
   </form>
  </div>
 </div>
<a href="https://docs.google.com/spreadsheets/d/1mtwGMIrmuC4lseJZnP2XkNaVLuz9NbuWP6eSrN4kRG0/edit#gid=0">link spreadsheet</a>
 <script src="app.js"></script>
</body>
</html>