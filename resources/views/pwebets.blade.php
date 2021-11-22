<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Pendaftaran Kuota Internet</title>

  </head>

  <body>
    <div class="container mt-3 mb-3">
        <div class="card w-50 me-auto ms-auto">
            <p class="m-lg-2">
                Aina Divany<br>
                Aina<br>
                5026201114<br>
            </p>
            <h2 class="text-center">
                Form Pendaftaran Kuota Internet
            </h2>
            <div class="card-body">
                <form action="#" id="form" class="">
                    <!-- Nama Mahasiswa -->
                    <div class="mb-3">
                        <label for="nama">Nama Mahasiswa :</label>
                        <input type="text" name="nama" class="form-control nama">
                    </div>
                    <!-- NRP Mahasiswa -->
                    <div class="mb-3">
                        <label for="nrp">NRP Mahasiswa :</label>
                        <input type="text" name="nrp" class="form-control nrp">
                    </div>
                    <!-- Jurusan -->
                    <div class="mb-3">
                        <label for="jurusan">Jurusan :</label>
                        <select name="jurusan" class="form-control jurusan">
                            <option value="default">(Pilih Jurusan)</option>
                            <option value="sisfor">Sistem Informasi</option>
                            <option value="elektro">Elektro</option>
                            <option value="informatika">Informatika</option>
                        </select>
                    </div>
                    <!-- Nomor Handphone -->
                    <div class="mb-3">
                        <label for="nohp">Nomor Handphone :</label>
                        <input type="text" name="nohp" class="form-control nohp">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Kirim">
                    <input type="button" onclick="reset()" class="btn btn-danger" value="Reset Form">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>

  <script>
    const form = document.querySelector("#form")
    const nama = document.querySelector(".nama")
    const nrp = document.querySelector(".nrp")
    const jurusan = document.querySelector(".jurusan")
    const nohp = document.querySelector(".nohp")

    function formValidate(){
        if(cekNama(nama)){
            if(cekNrp(nrp)){
                if(cekJurusan(jurusan)){
                    if(cekNohp(nohp)){
                        return true;
                    }
                }
            }
        }
        return false;
    }

    function cekNama(nama){
        let alphabet = /^[A-Za-z]+$/;
        let nama_len = nama.value.length;
        if(nama.value.match(alphabet) && (nama_len > 1)){
        return true;
        }
        else{
        alert('Nama wajib diisi. Dalam huruf dan lebih dari satu huruf');
        return false;
        }
    }


    function cekNrp(nrp){
        let numbers = /^[0-9]+$/;
        let nrp_len = nrp.value.length;
        if(nrp.value.match(numbers) && nrp_len == 10){
        return true;
        }
        else{
        alert('NRP wajib diisi. Dalam angka dan berjumlah 10 digit');
        return false;
        }
    }

    function cekJurusan(jurusan){
        if(jurusan.value == "default"){
        alert('Pilih jurusan dari daftar');
        return false;
        }
        else{
        return true;
        }
    }

    function cekNohp(nohp){
        let numbers = /^[0-9]+$/;
        let nohp_len = nohp.value.length;
        if(nohp.value.match(numbers) && nohp_len >= 10){
        return true;
        }
        else{
        alert('Nomor Handphone wajib diisi. Dalam angka dan minimal berjumlah 10 digit');
        return false;
        }
    }

    form.addEventListener("submit", function(event){
        if (formValidate() == false){
            event.preventDefault()
        }
        else {
            form.submit()
        }
    })

    function reset() {
        document.getElementById("form").reset();
    }
    </script>
</html>
