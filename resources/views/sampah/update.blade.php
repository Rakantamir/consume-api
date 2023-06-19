<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show API Sampah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
  </head>
  <body style="background: #141e30;">
      <div class="d-flex justify-content-center align-items-center container my-5">
          <div class="card my-4">
            <div class="container">
                <form action="/sampah/update/{{$sampah['id']}}" method="post" style="width:400px;">
                @csrf
                @method('PATCH')
                    <legend class="text-center mb-3"><b>UPDATE SAMPAH<br>{{$sampah ['kepala_keluarga']}}</b></legend>
                    <div class="mb-3">
                    <label for="kepala_keluarga" class="form-label">Kepala Keluarga</label>
                    <input type="text" name="kepala_keluarga" id="kepala_keluarga" class="form-control" value="{{$sampah['kepala_keluarga']}}">
                  </div>
                    <div class="mb-3">
                      <label for="no_rumah" class="form-label">No Rumah</label>
                      <input type="number" name="no_rumah" id="no_rumah" class="form-control" value="{{$sampah['no_rumah']}}">
                    </div>
                    <div class="mb-3">
                      <label for="rt_rw" class="form-label">RT/RW</label>
                      <input type="text" name="rt_rw" id="rt_rw" class="form-control" value="{{$sampah['rt_rw']}}">
                    </div>
                      <div class="mb-3">
                        <label for="total_karung_sampah" class="form-label">Karung Sampah</label>
                        <input type="number" name="total_karung_sampah" id="total_karung_sampah" class="form-control" value="{{$sampah['total_karung_sampah']}}">
                      </div> 
                      <div class="mb-3">
                        <label for="tanggal_pengangkutan" class="form-label">Tanggal Pengangkutan</label>
                        <input type="date" name="tanggal_pengangkutan" id="tanggal_pengangkutan" class="form-control" value="{{$sampah['tanggal_pengangkutan']}}">
                      </div>
                    <a href="/sampah" class="btn btn-secondary mb-3">Back</a>
                    <button type="submit" class="btn btn-primary mb-3">Submit</button>
                </form>
            </div>
         </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html> -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Data Sampah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css')}}">
  </head>
  <body >
      <div class="d-flex justify-content-center align-items-center cont ainer my-4">
      <div class="login-box">
      <legend class="text-center mb-3" style="color:white;"><b>UPDATE SAMPAH<br>{{$sampah ['kepala_keluarga']}}</b></legend>
  <form action="/sampah/update/{{$sampah['id']}}" method="post">
    @csrf
    @method('PATCH')
    <div class="user-box">
      <input type="text" name="kepala_keluarga" value="{{$sampah['kepala_keluarga']}}">
      <label>kepala keluarga</label>
    </div>
    <div class="user-box">
      <input type="text" name="no_rumah" value="{{$sampah['no_rumah']}}">
      <label>No Rumah</label>
    </div>
    <div class="user-box">
      <input type="text" name="rt_rw" value="{{$sampah['rt_rw']}}">
      <label>RT/RW</label>
    </div>
    <div class="user-box">
      <input type="text" name="total_karung_sampah" value="{{$sampah['total_karung_sampah']}}">
      <label>Karung Sampah</label>
    </div>
    <div class="user-box">
      <input type="date" name="tanggal_pengangkutan" value="{{ $sampah['tanggal_pengangkutan']}}">
    </div>
    <a>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <button class="button-submit" type="submit">SUBMIT</button>
    </a>
    <a href="/sampah" class="button-submit">BACK</a>
    
  </form>
</div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html> -->