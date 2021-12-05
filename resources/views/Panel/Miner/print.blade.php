<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه پرینت </title>

    <style>
        .print-item {
            width: 550px;
            height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            padding: 1rem;
            border: 1px solid #000;
            cursor: pointer;
        }

        .print-logo {
            width: 100%;
            height: 40%;
            display: flex;
            justify-content: space-evenly;
        }

        .print-brand {
            width: 100%;
            height: 25%;
            text-align: center;
        }

        .print-brand p {
            font-size: 45px;
            color: crimson;
            margin: 0;
            margin-bottom: .5rem;
        }

        .print-brand span {
            font-size: 20px;
            color: crimson;
        }

        .print-info {
            width: 100%;
            height: 25%;
            display: flex;
            justify-content: space-evenly;
        }

        .print-logo-img1 {
            width: 50%;
            height: 100%;
        }

        .print-logo-img2 {
            width: 40%;
            height: 100%;

        }

        .print-logo-img1 img,
        .print-logo-img2 img {
            width: 100%;
            height: 100%;
        }

        .print-info-box {
            box-sizing: border-box;
            width: 45%;
            height: 100%;
            border: 2px solid #000;
            border-radius: 50px;
            direction: rtl;
            padding: 0 1rem;
            text-align: center;
        }
    </style>
</head>

<body>
<div class="print-item">
    <div class="print-logo">
        <div class="print-logo-img1">
            <img src="{{url('/storage/app/'.$miner->logo)}}">
        </div>
        <div class="print-logo-img2">
            <img src="{{url('/storage/app/'.$miner->hologram)}}">
        </div>
    </div>
    <div class="print-brand">
        <p>{{$miner->title}}</p>
        <span>{{$miner->title1}}</span>
    </div>
    <div class="print-info">
        <div class="print-info-box">
            <p> بارکد محصول :</p>
            <p>{{$miner->barkod_mahsol}}</p>
        </div>
        <div class="print-info-box">
            <p>نام دستگاه :</p>
            <p>{{$miner->name_dastgah}}</p>
        </div>
    </div>
</div>
<script>
    let printItem = document.querySelector('.print-item');
    printItem.addEventListener("click", printProduct);

    function printProduct() {
        print(print)
    }
</script>
</body>

