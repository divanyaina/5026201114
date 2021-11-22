<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <title>Aina Divany 5026201114</title>

        <style>
            body{
                width: fit-content;
                margin-left: 80px;
            }
            label {
                font-size: 20px;
            }
        </style>
    </head>

    <body>
        <div class="container mt-3 mb-3">
            <h2>Registration Form</h2>
            <form id="form" action="#">
                <!-- User Id -->
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="userid">User id</label>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-7">
                        <input type="text" name="userid" class="form-control userid">
                    </div>
                </div>
                <!-- Password -->
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="password">Password</label>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-7">
                        <input type="password" name="password" class="form-control password">
                    </div>
                </div>
                <!-- Name -->
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="name">Name</label>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-7">
                        <input type="text" name="name" class="form-control name">
                    </div>
                </div>
                <!-- Address -->
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="address">Address</label>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-7">
                        <input type="text" name="address" class="form-control address">
                    </div>
                </div>
                <!-- Country -->
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="country">Country</label>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-7">
                        <select name="country" class="form-control country">>
                            <option value="default">(Please select a country)</option>
                            <option value="indonesia">Indonesia</option>
                            <option value="malaysia">Malaysia</option>
                            <option value="singapore">Singapore</option>
                            <option value="thailand">Thailand</option>
                        </select>
                    </div>
                </div>
                <!-- Zip Code -->
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="zipcode">ZIP Code</label>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-7">
                        <input type="text" name="zipcode" class="form-control zipcode">
                    </div>
                </div>
                <!-- Email -->
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="email">Email</label>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-7">
                        <input type="text" name="email" class="form-control email">
                    </div>
                </div>
                <!-- Sex -->
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="sex">Sex</label>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-7">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sex" id="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sex" id="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>
                </div>
                <!-- Language -->
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="language">Language</label>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-7">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="language" id="english">
                            <label class="form-check-label" for="english">English</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="language" id="nonenglish">
                            <label class="form-check-label" for="nonenglish">Non English</label>
                        </div>
                    </div>
                </div>
                <!-- About -->
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="about">About</label>
                    </div>
                    <div class="col-1">
                        <p>:</p>
                    </div>
                    <div class="col-7">
                        <textarea name="about" class="form-control about"></textarea>
                    </div>
                </div>
                <!-- Submit -->
                <div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

    <script>
        const form = document.querySelector("#form")
        const userid = document.querySelector(".userid")
        const password = document.querySelector(".password")
        const name = document.querySelector(".name")
        const country = document.querySelector(".country")
        const zipcode = document.querySelector(".zipcode")
        const email = document.querySelector(".email")
        const male = document.querySelector("#male")
        const female = document.querySelector("#female")
        const english = document.querySelector("#english")
        const nonenglish = document.querySelector("#nonenglish")

        function formValidate(){
            if(useridneeds(userid)){
                if(passneeds(password)){
                    if(nameneeds(name)){
                        if(countryneeds(country)){
                            if(zipcodeneeds(zipcode)){
                                if(emailneeds(email)){
                                    if(checkSex()){
                                        if(checkLanguage()){
                                            return true;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            return false;
        }

        function useridneeds(userid){
            let userid_len = userid.value.length;
            if (userid_len == 0 || userid_len >= 12 || userid_len < 5){
                alert("Userid required and must be of length 5 to 12");
                return false;
            }
            return true;
        }

        function passneeds(password){
            let password_len = password.value.length;
            if (password_len == 0 || password_len >= 12 || password_len < 5){
                alert("Password required and must be of length 7 to 12");
                return false;
            }
            return true;
        }

        function nameneeds(name){
            let alphabet = /^[A-Za-z]+$/;
            let name_len = name.value.length;
            if(name.value.match(alphabet) && (name_len > 1)){
            return true;
            }
            else{
            alert('Name required and alphabets only');
            return false;
            }
        }

        function countryneeds(country){
            if(country.value == "default"){
            alert('Country required. Must select a country');
            return false;
            }
            else{
            return true;
            }
        }

        function zipcodeneeds(zipcode){
            let numbers = /^[0-9]+$/;
            let zipcode_len = zipcode.value.length;
            if(zipcode.value.match(numbers) && (zipcode_len > 1)){
            return true;
            }
            else{
            alert('Zip Code required. Must be numeric only');
            return false;
            }
        }

        function emailneeds(email){
            let emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(email.value.match(emailformat)){
            return true;
            }
            else{
            alert("Email required. Must be a valid email");
            return false;
            }
        }

        function checkSex() {
            if (male.checked || female.checked){
            return true;
            }
            else{
            alert('Sex required');
            return false;
            }
        }

        function checkLanguage() {
            if (english.checked || nonenglish.checked){
            return true;
            }
            else{
            alert('Language required');
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
    </script>
</html>
