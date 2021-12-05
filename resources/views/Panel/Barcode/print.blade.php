<div class="card-group print-item">
    <div class="card" >
        <div class="mb-3">{!! DNS1D::getBarcodeHTML($barcode->code, 'PHARMA') !!}</div>
        <h4>{{$barcode->code}}</h4>
    </div>
</div>
<script>
    let printItem = document.querySelector('.print-item');
    printItem.addEventListener("click", printProduct);

    function printProduct() {
        print(print)
    }
</script>
