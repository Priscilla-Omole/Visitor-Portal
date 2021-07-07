<!DOCTYPE html>
<html>
<title> Termii Visitor Portal</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Termii Welcome Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha512-usVBAd66/NpVNfBge19gws2j6JZinnca12rAe2l+d+QkLU9fiG02O1X8Q6hepIpr/EYKZvKx/I9WsnujJuOmBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    .attribute-for-image{
        width: 150px;
    }
    .form-select-control{
        display: block;
        width: 100%;
        height: 55px!important;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
    .form-control{
        height: 55px!important;
    }
    .bg-termii{
        background:linear-gradient(-48deg,#0dcbe5 -30%,#365899 60%)
    }
    .p-t-35{
        padding-top: 40px;
        padding-left: 20px;
        margin-left: 20px;
    }
    .class-for-two{
        display: flex;
        flex-direction: row;
        background: #ffffff;
        padding-bottom: 20px;
    }
    .submit-button{
        color:white;
        text-align: center;
    }
</style>
<body style="height: 100vh!important;">




<div class="container-fluid"style="height: 100%">
    <div class="row" style="height: 100%">
        <div class="col-sm-3 col-md-4 col-lg-5 col-xl-6 bg-termii" >
            <img alt="Image" style="width: 85%;margin-top: 100px;margin-bottom: -85px;margin-left: 120px;" src="https://campaign.termii.com/assets/images/products/ds.svg">
        </div>

        <div class="col-sm-9 col-md-8 col-lg-7 col-xl-6 bg-white">


            <div  class="container" style="margin-top: 20px;padding-left: 40px;padding-right: 50px; padding-top: 100px">

                <img alt="Image" height="auto" width="150px" src="https://accounts.termii.com/images/logo.png">

                <p  style="padding-top: 20px" p-t-35 > Welcome to Termii! Join <strong class="text-bold text-center">3645+</strong>
                    businesses across Africa building awesome products with our communication APIs, create an account now!</p>

                <form method="POST" action="/add/visitor" >
                    <div class="class-for-two" style="padding-top: 20px">
                        <input type="text" id="fname" placeholder="First Name" name="fname" class="form-control" value="First Name" style="margin-right: 20px;"><br>

                        <input type="text" id="lname" placeholder="Last Name" name="lname" class="form-control" value="Last name"><br>
                    </div>

                    <input type="email" id="email" placeholder="Email" name="email" class="form-control" value="Email"><br>

                    <div class="class-for-two">
                        <input type="text"  id="pnumber" placeholder="Phone Number" style="margin-right: 20px;" name="Phone number" class="form-control" value="Phone Number"><br>
                        <select id="names" placeholder="Who to see?" class="form-select-control" name="name">
                            <option value="Who to see?">Who to see?</option>
                            <option value="Awe">Awe</option>
                            <option value="Taiwo">Taiwo</option>
                            <option value="Seun">Seun</option>
                            <option value="Bosun">Bosun</option>
                            <option value="Tobi">Tobi</option>
                            <option value="Lade">Lade</option>
                            <option value="Gbemi">Gbemi</option>
                            <option value="Priscilla">Priscilla</option>
                        </select><br>
                    </div>


<!--                    <label for="file">Click the button below to upload!</label><br>-->
<!--                    <input type="file" id="file" name="file" accept="image/*">-->
<!--                    <br>-->


                    <br>
                    <button type="submit" class="btn bg-termii submit-button btn-sm " >Submit Here!</button>
                </form>
            </div>

        </div>


    </div>

</div>
</body>
</html>




