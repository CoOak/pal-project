<style>
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    input[type=reset] {
        width: 100%;
        background-color: red;
        color: white;
        padding: 10px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=reset]:hover {
        background-color: red;
    }

    #box {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        margin: 0px 200px 0px 200px;
    }

    .btn {
        position: relative;
        font-size: 17px;
        text-transform: uppercase;
        text-decoration: none;
        padding: 1em 2.5em;
        display: inline-block;
        border-radius: 6em;
        transition: all .2s;
        border: none;
        font-family: inherit;
        font-weight: 500;
        color: black;
        background-color: white;
    }

    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .btn:active {
        transform: translateY(-1px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .btn::after {
        content: "";
        display: inline-block;
        height: 100%;
        width: 100%;
        border-radius: 100px;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        transition: all .4s;
    }

    .btn::after {
        background-color: #fff;
    }

    .btn:hover::after {
        transform: scaleX(1.4) scaleY(1.6);
        opacity: 0;
    }

    .selectBox {
        width: 500px;
    }

    button {
        padding: 10px 20px;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 2.5px;
        font-weight: 500;
        color: #000;
        background-color: #fff;
        border: none;
        border-radius: 45px;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease 0s;
        cursor: pointer;
        outline: none;
    }

    button:hover {
        background-color: #23c483;
        box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
        color: #fff;
        transform: translateY(-5px);
    }

    button:active {
        transform: translateY(-1px);
    }
</style>
</head>

<body>

    <?php
    include("nav.php");
    ?>




    <div class="jumbotron text-center topHeight">
        <h2>ကုန်ကျစရိတ် ခန့်မှန်းတွက်ချက်ရန်</h2>

    </div>
    <div id="box" class="p-5 mt-5">
        <form action="" method="POST">

            <div class=" d-flex justify-content-between">
                <div class=" selectBox ">


                    <select class="form-select " aria-label="Default select example" name="country" id="countryId" onchange="getStateByCountry();" required>
                        <option selected value="">ခရိုင်ရွေးပါ</option>
                        <option value="">ပုသိမ် ခရိုင်</option>
                        <option value="">မြောင်းမြခရိုင်</option>
                        <option value="">မြန်အောင်ခရိုင်</option>
                        <option value="">ဖျာပုံခရိုင်</option>
                        <option value="">ကျုံပျော်ခရိုင်</option>

                    </select>
                </div>


                <div class="selectBox">


                    <select class="form-select " aria-label="Default select example" name="kind" id="countryId" onchange="getStateByCountry();" required>

                        <option selected class="">ပဲအမျိုးအစား ရွေးပါ</option>
                        <option name=" " value="မတ်ပဲ">မတ်ပဲ</option>
                        <option name=" " value="ပဲတီစိမ်း">ပဲတီစိမ်း</option>
                        <option name=" " value="မြေပဲ">မြေပဲ</option>
                        <option name=" " value="ဘိုကိတ်ပဲ">ဘိုကိတ်ပဲ</option>
                        <option name=" " value="စားတော်ပဲ">စားတော်ပဲ</option>
                        <option name=" " value="ပဲစင်းငုံ">ပဲစင်းငုံ</option>
                        <option name=" " value="ပဲထောပတ်">ပဲထောပတ်</option>
                        <option name=" " value="ပဲကြီး">ပဲကြီး</option>
                        <option name=" " value="ကုလားပဲ">ကုလားပဲ</option>
                        <option name=" " value="ပဲပုပ်">ပဲပုပ်</option>

                    </select>
                </div>
            </div>


            <div class="mb-2 mt-3">

                <input type="text" name="aca" class="form-control" id="exampleFormControlInput1" placeholder="ဧက">

            </div>

            <div class="mb-3">


                <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="အလုပ်သမားခ">
            </div>



            <div class=" text-center">
                <button type="submit" class=" me-2" data-bs-toggle="modal" data-bs-target="#exampleModal"> တွက်မည်
                </button>

                <button type="reset"> ဖျက်မည်
                </button>
            </div>



        </form>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <?php
                    $con = mysqli_connect("localhost", "root", "", "beanpj", 3310);

                    $pel = $_POST['kind'];
                    $aca = $_POST['aca'];
                    $price = $_POST['price'];

                    if ($pel == 'မတ်ပဲ') {

                        $sql = "SELECT * FROM pelprice WHERE item='mattpal'";
                        $query = mysqli_query($con, $sql);
                        while ($a = mysqli_fetch_assoc($query)) {
                            $pelprice = $a['price'];
                            // code...
                        }
                        $myosae = $pelprice * $aca;
                        $htunset = 60000 * $aca;
                        $myay = 60000 * $aca;
                        $say = 400000 * $aca;
                        $alote = $price * 40 * $aca;
                        $ahtwe = 300000 * $aca;
                        $revenue = 1580000 * $aca;
                        $kone = $myosae + $htunset + $myay + $say + $alote + $ahtwe;
                        $profit = $revenue - $kone;

                        echo '
   
                        <h1>ခန့်မှန်းကုန်ကျစရိတ်/အမြတ်ငွေတွက်ချက်မှု</h1>
                        <p>မျိုးစေ့ကုန်ကျစရိတ်:' . $myosae . '</p>
                        <p>ထွန်စက်မောင်းခ:' . $htunset . '</p>
                        <p>မြေညှိခ:' . $myay . '</p>
                        <p>ဆေးအမျိုးမျိုးကုန်ကျစရိတ်:' . $say . '</p>
                        <p>အလုပ်သမားခ:' . $alote . '</p>
                        <p>ခန့်မှန်းအထွေထွေကုန်ကျစရိတ်:' . $ahtwe . '</p>
                        <p>ခန့်မှန်းစုစုပေါင်းကုန်ကျစရိတ်:' . $kone . '</p>
                        <p>တစ်ဧကပျမ်းမျှအထွက်နှုန်း-၁၆တင်းခန့်မှန်း၀င်ငွေ:' . $revenue . '</p>
                        <p>ခန့်မှန်းအမြတ်ငွေ:' . $profit . '</p>

           
';
                    }     ?>


                </div>
            </div>
        </div>