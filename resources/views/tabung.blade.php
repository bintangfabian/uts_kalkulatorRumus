<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container mt-5">
          <div class="row justify-content-center">
              <div class="col-8">
                <a href="/" class="btn btn-lg btn-info mr-5">Back</a>
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="col-12">
                            <h1 class="text-center font-weight-bold">Menghitung Volume Tabung</h1>
                            <h5 class="text-center">Rumus Volume Tabung :  <u class="font-italic"> phi x r x r x t</u></h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="voltab" method="post" class="d-flex justify-content-between">
                            @csrf
                            <label for="">Jari-Jari :</label>
                            <input type="number" name="jari">
                            <label for="">Tinggi :</label>
                            <input type="number" name="tinggi">
                            <button class="btn btn-primary form"> = </button>
                        </form>
                        @if(session('infotab'))
                        <div class="alert alert-info form-group mt-5">
                        {{session('infotab')}} 
                        </div>
                        @endif
                    </div>
                </div>
              </div>
          </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>