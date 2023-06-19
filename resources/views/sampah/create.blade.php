<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Data Sampah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css')}}">
  </head>
  <body >
      <div class="d-flex justify-content-center align-items-center cont ainer my-4">
      <div class="login-box">
  <h2>FORM PENGAMBILAN SAMPAH</h2>
  <form action="/sampah/store" method="post">
    @csrf
    <div class="user-box">
      <input type="text" name="kepala_keluarga" required="">
      <label>kepala keluarga</label>
    </div>
    <div class="user-box">
      <input type="text" name="no_rumah" required="">
      <label>No Rumah</label>
    </div>
    <div class="user-box">
      <input type="text" name="rt_rw" required="">
      <label>RT/RW</label>
    </div>
    <div class="user-box">
      <input type="text" name="total_karung_sampah" required="">
      <label>Karung Sampah</label>
    </div>
    <div class="user-box">
      <input type="date" name="tanggal_pengangkutan" required="">
    </div>
    <a href="/sampah" type="submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <button class="button-submit" type="submit">SUBMIT</button>
      <!-- <button type="submit">SUBMIT</button> -->
    </a>
    
  </form>
</div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>