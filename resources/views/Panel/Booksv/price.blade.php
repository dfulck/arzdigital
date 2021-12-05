@extends('Panel.layout.masterMashin')
@section('master')
    <script>
        window.alert = function() {};
        // or simply
        alert = function() {};
    </script>
    <body>
    <div class="container">
        <div class="col-lg-3 col-md-4 col-3 d-flex h-100 ">
            <label
                class="mbm-wrapper-coin-title-span justify-content-center align-self-center">کوین:&nbsp;&nbsp;</label>
        </div>
        <div class=" col-lg-9 col-md-8 col-9">
            <select name="coins" id="mbm-coins-option" style="">
                <option value=" 1" data-img=" https://assets.coingecko.com/coins/images/1/large/bitcoin.png"
                        data-coin-net-hash=" 1.5648347601004E+20" data-coin-symbol=" BTC" data-coin-algorithm=" SHA-256"
                        data-coin-block-reward=" 6.3482727643936" data-coin-block-time=" 546.0"
                        data-coin-difficulty=" 19893045048575"
                        data-coin-price-usd="{{$response->getPrice('bitcoin', 'usd')['bitcoin']['usd']}}"
                        data-coin-market-cap-usd=" 955266889995.00">
                    &rlm;Bitcoin &rlm;(SHA-256)
                </option>
                <option value=" 4" data-img=" https://assets.coingecko.com/coins/images/2/large/litecoin.png"
                        data-coin-net-hash=" 3.4566150673076E+14" data-coin-symbol=" LTC" data-coin-algorithm=" Scrypt"
                        data-coin-block-reward=" 12.5" data-coin-block-time=" 139.0" data-coin-difficulty=" 11186802.16269"
                        data-coin-price-usd="{{$response->getPrice('litecoin', 'usd')['litecoin']['usd']}}"
                        data-coin-market-cap-usd=" 11382993050.00">
                    &rlm;Litecoin &rlm;(Scrypt)
                </option>
                <option value=" 5" data-img=" https://assets.coingecko.com/coins/images/18/large/vertcoin-logo-2018.png"
                        data-coin-net-hash=" 3123079707" data-coin-symbol=" VTC" data-coin-algorithm=" Verthash"
                        data-coin-block-reward=" 25" data-coin-block-time=" 144.0" data-coin-difficulty=" 104.70940683044"
                        data-coin-price-usd=" {{$response->getPrice('vertcoin', 'usd')['vertcoin']['usd']}}"
                        data-coin-market-cap-usd=" 30967304.00">
                    &rlm;Vertcoin &rlm;(Verthash)
                </option>
                <option value=" 6" data-img=" https://assets.coingecko.com/coins/images/5/large/dogecoin.png"
                        data-coin-net-hash=" 2.6745636846436E+14" data-coin-symbol=" DOGE" data-coin-algorithm=" Scrypt"
                        data-coin-block-reward=" 10000" data-coin-block-time=" 63.0" data-coin-difficulty=" 3923138.4203897"
                        data-coin-price-usd=" {{$response->getPrice('dogecoin', 'usd')['dogecoin']['usd']}}"
                        data-coin-market-cap-usd=" 32461568499.00">
                    &rlm;Dogecoin &rlm;(Scrypt)
                </option>
                <option value=" 8" data-img=" https://assets.coingecko.com/coins/images/12/large/feathercoin.png"
                        data-coin-net-hash=" 3494039890" data-coin-symbol=" FTC" data-coin-algorithm=" NeoScrypt"
                        data-coin-block-reward=" 40" data-coin-block-time=" 62.0" data-coin-difficulty=" 50.438212516235"
                        data-coin-price-usd=" {{$response->getPrice('feathercoin', 'usd')['feathercoin']['usd']}}"
                        data-coin-market-cap-usd=" 5729932.00">
                    &rlm;Feathercoin
                    &rlm;(NeoScrypt)
                </option>
                <option value=" 15" data-img=" https://assets.coingecko.com/coins/images/46/large/einsteinium.png"
                        data-coin-net-hash=" 26842501624" data-coin-symbol=" EMC2" data-coin-algorithm=" Scrypt"
                        data-coin-block-reward=" 1.95" data-coin-block-time=" 66.0" data-coin-difficulty=" 412.48395741647"
                        data-coin-price-usd=" {{$response->getPrice('einsteinium', 'usd')['einsteinium']['usd']}}"
                        data-coin-market-cap-usd=" 9128906.00">
                    &rlm;Einsteinium
                    &rlm;(Scrypt)
                </option>
                <option value=" 29" data-img=" https://assets.coingecko.com/coins/images/17/large/16.png"
                        data-coin-net-hash=" 219356072" data-coin-symbol=" WDC" data-coin-algorithm=" Scrypt"
                        data-coin-block-reward=" 3.2023438634448" data-coin-block-time=" 2060.0"
                        data-coin-difficulty=" 105.21"
                        data-coin-price-usd=" {{$response->getPrice('worldcoin', 'usd')['worldcoin']['usd']}}"
                        data-coin-market-cap-usd=" 3309063.00">
                    &rlm;WorldCoin &rlm;(Scrypt)
                </option>
                <option value=" 34" data-img=" https://assets.coingecko.com/coins/images/19/large/dash-logo.png"
                        data-coin-net-hash=" 2.677202597969E+15" data-coin-symbol=" DASH" data-coin-algorithm=" X11"
                        data-coin-block-reward=" 1.2321896650926" data-coin-block-time=" 157.0"
                        data-coin-difficulty=" 97863564.240079"
                        data-coin-price-usd=" {{$response->getPrice('dash', 'usd')['dash']['usd']}}"
                        data-coin-market-cap-usd=" 1785439988.00">
                    &rlm;Dash &rlm;(X11)
                </option>
                <option value=" 48" data-img=" https://assets.coingecko.com/coins/images/71/large/image001.png"
                        data-coin-net-hash=" 58253503134244" data-coin-symbol=" GRS" data-coin-algorithm=" Groestl"
                        data-coin-block-reward=" 5" data-coin-block-time=" 63.0" data-coin-difficulty=" 854481.63967984"
                        data-coin-price-usd=" {{$response->getPrice('groestlcoin', 'usd')['groestlcoin']['usd']}}"
                        data-coin-market-cap-usd=" 70372779.00">
                    &rlm;Groestlcoin
                    &rlm;(Groestl)
                </option>
                <option value=" 52"
                        data-img=" https://assets.coingecko.com/coins/images/4/large/peercoin-icon-green-transparent_6x.png"
                        data-coin-net-hash=" 3.7101405476715E+15" data-coin-symbol=" PPC" data-coin-algorithm=" SHA-256"
                        data-coin-block-reward=" 45.499644370202" data-coin-block-time=" 2700.0"
                        data-coin-difficulty=" 2332352911.7538"
                        data-coin-price-usd=" {{$response->getPrice('peercoin', 'usd')['peercoin']['usd']}}"
                        data-coin-market-cap-usd=" 21996908.00">
                    &rlm;Peercoin &rlm;(SHA-256)
                </option>
                <option value=" 101" data-img=" https://assets.coingecko.com/coins/images/69/large/monero_logo.png"
                        data-coin-net-hash=" 2773039028" data-coin-symbol=" XMR" data-coin-algorithm=" RandomX"
                        data-coin-block-reward=" 0.840527921405" data-coin-block-time=" 121.0"
                        data-coin-difficulty=" 335537722425"
                        data-coin-price-usd=" {{$response->getPrice('monero', 'usd')['monero']['usd']}}"
                        data-coin-market-cap-usd=" 4755769547.00">
                    &rlm;Monero &rlm;(RandomX)
                </option>
                <option value=" 103" data-img=" https://assets.coingecko.com/coins/images/92/large/bytecoin-logo.png"
                        data-coin-net-hash=" 89870483" data-coin-symbol=" BCN" data-coin-algorithm=" CryptoNight"
                        data-coin-block-reward=" 74.33951482" data-coin-block-time=" 118.0"
                        data-coin-difficulty=" 10604717059"
                        data-coin-price-usd=" {{$response->getPrice('bytecoin', 'usd')['bytecoin']['usd']}}"
                        data-coin-market-cap-usd=" 58425443.00">
                    &rlm;Bytecoin &rlm;(CryptoNight)
                </option>
                <option value=" 119" data-img=" https://assets.coingecko.com/coins/images/294/large/moon.png"
                        data-coin-net-hash=" 11031911198" data-coin-symbol=" MOON" data-coin-algorithm=" Scrypt"
                        data-coin-block-reward=" 8564" data-coin-block-time=" 103.0" data-coin-difficulty=" 264.56239947015"
                        data-coin-price-usd=" {{$response->getPrice('mooncoin', 'usd')['mooncoin']['usd']}}"
                        data-coin-market-cap-usd=" 5055449.00">
                    &rlm;Mooncoin &rlm;(Scrypt)
                </option>
                <option value=" 151" data-img=" https://assets.coingecko.com/coins/images/279/large/ethereum.png"
                        data-coin-net-hash=" 6.7904871137276E+14" data-coin-symbol=" ETH" data-coin-algorithm=" Ethash"
                        data-coin-block-reward=" 2.2160166891407" data-coin-block-time=" 13.6711"
                        data-coin-difficulty=" 9.2833428380481E+15"
                        data-coin-price-usd=" {{$response->getPrice('ethereum', 'usd')['ethereum']['usd']}}"
                        data-coin-market-cap-usd=" 397882017922.00">
                    &rlm;Ethereum &rlm;(Ethash)
                </option>
                <option value=" 152" data-img=" https://assets.coingecko.com/coins/images/329/large/decred.png"
                        data-coin-net-hash=" 2.1231847373404E+17" data-coin-symbol=" DCR" data-coin-algorithm=" Blake (14r)"
                        data-coin-block-reward=" 7.2010506476429" data-coin-block-time=" 329.0"
                        data-coin-difficulty=" 16263867229.805"
                        data-coin-price-usd=" {{$response->getPrice('decred', 'usd')['decred']['usd']}}"
                        data-coin-market-cap-usd=" 1584195365.00">
                    &rlm;Decred &rlm;(Blake
                    (14r))
                </option>
                <option value=" 166"
                        data-img=" https://assets.coingecko.com/coins/images/486/large/circle-zcash-color.png"
                        data-coin-net-hash=" 5452083123" data-coin-symbol=" ZEC" data-coin-algorithm=" Equihash"
                        data-coin-block-reward=" 2.5" data-coin-block-time=" 75.0" data-coin-difficulty=" 49915311.797707"
                        data-coin-price-usd=" {{$response->getPrice('zcash', 'usd')['zcash']['usd']}}"
                        data-coin-market-cap-usd=" 1359129993.00">
                    &rlm;Zcash &rlm;(Equihash)
                </option>
                <option value=" 167" data-img=" https://assets.coingecko.com/coins/images/540/large/zclassic.png"
                        data-coin-net-hash=" 2581" data-coin-symbol=" ZCL" data-coin-algorithm=" EquihashZero"
                        data-coin-block-reward=" 0.78125" data-coin-block-time=" 75.0"
                        data-coin-difficulty=" 23.629982227003"
                        data-coin-price-usd=" {{$response->getPrice('zclassic', 'usd')['zclassic']['usd']}}"
                        data-coin-market-cap-usd=" 1800387.00">
                    &rlm;Zclassic &rlm;(EquihashZero)
                </option>
                <option value=" 173" data-img=" https://assets.coingecko.com/coins/images/181/large/ubiq.png"
                        data-coin-net-hash=" 56681835388" data-coin-symbol=" UBQ" data-coin-algorithm=" Ubqhash"
                        data-coin-block-reward=" 4" data-coin-block-time=" 85.0" data-coin-difficulty=" 4817956008001"
                        data-coin-price-usd=" {{$response->getPrice('ubiq', 'usd')['ubiq']['usd']}}"
                        data-coin-market-cap-usd=" 13776377.00">
                    &rlm;Ubiq &rlm;(Ubqhash)
                </option>
                <option value=" 174" data-img=" https://assets.coingecko.com/coins/images/611/large/KMD_Mark_Color.png"
                        data-coin-net-hash=" 61889234" data-coin-symbol=" KMD" data-coin-algorithm=" Equihash"
                        data-coin-block-reward=" 3" data-coin-block-time=" 64.0" data-coin-difficulty=" 247556936.50584"
                        data-coin-price-usd=" {{$response->getPrice('komodo', 'usd')['komodo']['usd']}}"
                        data-coin-market-cap-usd=" 123612232.00">
                    &rlm;Komodo &rlm;(Equihash)
                </option>
                <option value=" 175" data-img=" https://assets.coingecko.com/coins/images/479/large/firo.jpg"
                        data-coin-net-hash=" 19754563684" data-coin-symbol=" FIRO" data-coin-algorithm=" MTP"
                        data-coin-block-reward=" 6.25" data-coin-block-time=" 270.0" data-coin-difficulty=" 1241.8563"
                        data-coin-price-usd=" {{$response->getPrice('zcoin', 'usd')['zcoin']['usd']}}"
                        data-coin-market-cap-usd=" 89433095.00">
                    &rlm;Firo &rlm;(MTP)
                </option>
                <option value=" 176" data-img=" https://assets.coingecko.com/coins/images/2430/large/karbo_coin.png"
                        data-coin-net-hash=" 30882450" data-coin-symbol=" KRB" data-coin-algorithm=" CryptoNight"
                        data-coin-block-reward=" 2.9654740689497" data-coin-block-time=" 240.0"
                        data-coin-difficulty=" 7411788123"
                        data-coin-price-usd=" {{$response->getPrice('karbo', 'usd')['karbo']['usd']}}"
                        data-coin-market-cap-usd=" 1352842.00">
                    &rlm;Karbo &rlm;(CryptoNight)
                </option>
                <option value=" 185" data-img=" https://assets.coingecko.com/coins/images/691/large/horizen.png"
                        data-coin-net-hash=" 2426410072" data-coin-symbol=" ZEN" data-coin-algorithm=" Equihash"
                        data-coin-block-reward=" 3.75" data-coin-block-time=" 153.0" data-coin-difficulty=" 45317473.273907"
                        data-coin-price-usd=" {{$response->getPrice('zencash', 'usd')['zencash']['usd']}}"
                        data-coin-market-cap-usd=" 834649032.00">
                    &rlm;Horizen &rlm;(Equihash)
                </option>
                <option value=" 187" data-img=" https://assets.coingecko.com/coins/images/760/large/denarius.png"
                        data-coin-net-hash=" 774128773" data-coin-symbol=" D" data-coin-algorithm=" Tribus"
                        data-coin-block-reward=" 0" data-coin-block-time=" 60.0" data-coin-difficulty=" 10.81445403"
                        data-coin-price-usd=" {{$response->getPrice('denarius', 'usd')['denarius']['usd']}}"
                        data-coin-market-cap-usd=" 2617481.00">
                    &rlm;Denarius &rlm;(Tribus)
                </option>
                <option value=" 196" data-img=" https://assets.coingecko.com/coins/images/1137/large/sumokoin.png"
                        data-coin-net-hash=" 9301696" data-coin-symbol=" SUMO" data-coin-algorithm=" CryptoNightR"
                        data-coin-block-reward=" 85.15" data-coin-block-time=" 244.0" data-coin-difficulty=" 2269613893"
                        data-coin-price-usd=" {{$response->getPrice('sumokoin', 'usd')['sumokoin']['usd']}}"
                        data-coin-market-cap-usd=" 2652192.00">
                    &rlm;Sumokoin &rlm;(CryptoNightR)
                </option>
                <option value=" 197" data-img=" https://assets.coingecko.com/coins/images/832/large/Smartcash-logo.png"
                        data-coin-net-hash=" 3042651239484" data-coin-symbol=" SMART" data-coin-algorithm=" Keccak"
                        data-coin-block-reward=" 2.9874771619342" data-coin-block-time=" 52.0"
                        data-coin-difficulty=" 36837.967218177"
                        data-coin-price-usd=" {{$response->getPrice('smartcash', 'usd')['smartcash']['usd']}}"
                        data-coin-market-cap-usd=" 15166829.00">
                    &rlm;SmartCash &rlm;(Keccak)
                </option>
                <option value=" 202"
                        data-img=" https://assets.coingecko.com/coins/images/680/large/BitCoreBTXlogoJan2021inv.png"
                        data-coin-net-hash=" 465206344" data-coin-symbol=" BTX" data-coin-algorithm=" Mega-BTX"
                        data-coin-block-reward=" 0.78125" data-coin-block-time=" 142.0"
                        data-coin-difficulty=" 15.380629546611"
                        data-coin-price-usd=" {{$response->getPrice('bitcore', 'usd')['bitcore']['usd']}}"
                        data-coin-market-cap-usd=" 3749495.00">
                    &rlm;BitCore &rlm;(Mega-BTX)
                </option>
                <option value=" 207" data-img=" https://assets.coingecko.com/coins/images/1004/large/BTCZ_LOGO-1.png"
                        data-coin-net-hash=" 133343" data-coin-symbol=" BTCZ" data-coin-algorithm=" Zhash"
                        data-coin-block-reward=" 11875" data-coin-block-time=" 177.0"
                        data-coin-difficulty=" 2881.0688189585"
                        data-coin-price-usd=" {{$response->getPrice('bitcoinz', 'usd')['bitcoinz']['usd']}}"
                        data-coin-market-cap-usd=" 5470545.00">
                    &rlm;BitcoinZ &rlm;(Zhash)
                </option>
                <option value=" 210" data-img=" https://assets.coingecko.com/coins/images/1292/large/Zero_Full_Logo.png"
                        data-coin-net-hash=" 8209" data-coin-symbol=" ZER" data-coin-algorithm=" EquihashZero"
                        data-coin-block-reward=" 3.645" data-coin-block-time=" 121.0"
                        data-coin-difficulty=" 39735.353679561"
                        data-coin-price-usd=" {{$response->getPrice('zero', 'usd')['zero']['usd']}}"
                        data-coin-market-cap-usd=" 2433648.00">
                    &rlm;Zero &rlm;(EquihashZero)
                </option>
                <option value=" 216"
                        data-img=" https://assets.coingecko.com/coins/images/1148/large/deeponion-circle-icon.png"
                        data-coin-net-hash=" 532880171554" data-coin-symbol=" ONION" data-coin-algorithm=" X13"
                        data-coin-block-reward=" 1" data-coin-block-time=" 240.0" data-coin-difficulty=" 29777"
                        data-coin-price-usd=" {{$response->getPrice('deeponion', 'usd')['deeponion']['usd']}}"
                        data-coin-market-cap-usd=" 4342324.00">
                    &rlm;DeepOnion &rlm;(X13)
                </option>
                <option value=" 232" data-img=" https://assets.coingecko.com/coins/images/974/large/bis200px.png"
                        data-coin-net-hash=" 14953358137753" data-coin-symbol=" BIS" data-coin-algorithm=" SHA-224"
                        data-coin-block-reward=" 4.84307455" data-coin-block-time=" 60.0" data-coin-difficulty=" 102"
                        data-coin-price-usd=" {{$response->getPrice('bismuth', 'usd')['bismuth']['usd']}}"
                        data-coin-market-cap-usd=" 2779868.00">
                    &rlm;Bismuth &rlm;(SHA-224)
                </option>
                <option value=" 234" data-img=" https://assets.coingecko.com/coins/images/3412/large/ravencoin.png"
                        data-coin-net-hash=" 8877112676124" data-coin-symbol=" RVN" data-coin-algorithm=" KawPow"
                        data-coin-block-reward=" 5000" data-coin-block-time=" 59.0" data-coin-difficulty=" 121944.96763203"
                        data-coin-price-usd=" {{$response->getPrice('ravencoin', 'usd')['ravencoin']['usd']}}"
                        data-coin-market-cap-usd=" 1026358045.00">
                    &rlm;Ravencoin &rlm;(KawPow)
                </option>
                <option value=" 242"
                        data-img=" https://assets.coingecko.com/coins/images/1087/large/2qNyrhUxEmnGCKi.png"
                        data-coin-net-hash=" 36589927" data-coin-symbol=" BTM" data-coin-algorithm=" Tensority"
                        data-coin-block-reward=" 412.5" data-coin-block-time=" 151.0" data-coin-difficulty=" 5525078994"
                        data-coin-price-usd=" {{$response->getPrice('bytom', 'usd')['bytom']['usd']}}"
                        data-coin-market-cap-usd=" 85781506.00">
                    &rlm;Bytom &rlm;(Tensority)
                </option>
                <option value=" 272"
                        data-img=" https://assets.coingecko.com/coins/images/1023/large/Aion_Currency_Symbol_Transparent_PNG.png"
                        data-coin-net-hash=" 697223" data-coin-symbol=" AION" data-coin-algorithm=" Equihash (210,9)"
                        data-coin-block-reward=" 4.5" data-coin-block-time=" 10.0" data-coin-difficulty=" 6972235"
                        data-coin-price-usd=" {{$response->getPrice('aion', 'usd')['aion']['usd']}}"
                        data-coin-market-cap-usd=" 75158877.00">
                    &rlm;Aion &rlm;(Equihash
                    (210,9))
                </option>
                <option value=" 277" data-img=" https://assets.coingecko.com/coins/images/6552/large/sinovate.png"
                        data-coin-net-hash=" 83201705" data-coin-symbol=" SIN" data-coin-algorithm=" X25X"
                        data-coin-block-reward=" 12.47" data-coin-block-time=" 121.0" data-coin-difficulty=" 2.3440007"
                        data-coin-price-usd=" {{$response->getPrice('suqa', 'usd')['suqa']['usd']}}"
                        data-coin-market-cap-usd=" 2049136.00">
                    &rlm;SINOVATE &rlm;(X25X)
                </option>
                <option value=" 287"
                        data-img=" https://assets.coingecko.com/coins/images/5163/large/Flux_symbol_blue-white.png"
                        data-coin-net-hash=" 229982" data-coin-symbol=" FLUX" data-coin-algorithm=" ZelHash"
                        data-coin-block-reward=" 37.5" data-coin-block-time=" 121.0" data-coin-difficulty=" 3396.9646933765"
                        data-coin-price-usd=" {{$response->getPrice('zelcash', 'usd')['zelcash']['usd']}}"
                        data-coin-market-cap-usd=" 75983551.00">
                    &rlm;Flux &rlm;(ZelHash)
                </option>
                <option value=" 291" data-img=" https://assets.coingecko.com/coins/images/3522/large/dero_logo_png.png"
                        data-coin-net-hash=" 69753447" data-coin-symbol=" DERO" data-coin-algorithm=" AstroBWT"
                        data-coin-block-reward=" 0.748322489348" data-coin-block-time=" 29.0"
                        data-coin-difficulty=" 2022849976"
                        data-coin-price-usd=" {{$response->getPrice('dero', 'usd')['dero']['usd']}}"
                        data-coin-market-cap-usd=" 249881952.00">
                    &rlm;Dero &rlm;(AstroBWT)
                </option>
                <option value=" 292" data-img=" https://assets.coingecko.com/coins/images/2892/large/turtlecoin.png"
                        data-coin-net-hash=" 7.8392121845441E+17" data-coin-symbol=" TRTL" data-coin-algorithm=" ChukwaV2"
                        data-coin-block-reward=" 26456.83" data-coin-block-time=" 30.0" data-coin-difficulty=" 5475626456"
                        data-coin-price-usd=" {{$response->getPrice('turtlecoin', 'usd')['turtlecoin']['usd']}}"
                        data-coin-market-cap-usd=" 10855406.00">
                    &rlm;TurtleCoin
                    &rlm;(ChukwaV2)
                </option>
                <option value=" 294" data-img=" https://assets.coingecko.com/coins/images/7339/large/BEAM.png"
                        data-coin-net-hash=" 457858" data-coin-symbol=" BEAM" data-coin-algorithm=" BeamHashIII"
                        data-coin-block-reward=" 40" data-coin-block-time=" 59.0" data-coin-difficulty=" 27013644"
                        data-coin-price-usd=" {{$response->getPrice('beam', 'usd')['beam']['usd']}}"
                        data-coin-market-cap-usd=" 54502113.00">
                    &rlm;BEAM &rlm;(BeamHashIII)
                </option>
                <option value=" 297" data-img=" https://assets.coingecko.com/coins/images/1091/large/aeternity.png"
                        data-coin-net-hash=" 20105" data-coin-symbol=" AE" data-coin-algorithm=" CuckooCycle"
                        data-coin-block-reward=" 96.228" data-coin-block-time=" 181.0" data-coin-difficulty=" 3639150"
                        data-coin-price-usd=" {{$response->getPrice('aeternity', 'usd')['aeternity']['usd']}}"
                        data-coin-market-cap-usd=" 38261844.00">
                    &rlm;Aeternity &rlm;(CuckooCycle)
                </option>
                <option value=" 300" data-img=" https://assets.coingecko.com/coins/images/5119/large/nimiq.png"
                        data-coin-net-hash=" 3068761724" data-coin-symbol=" NIM" data-coin-algorithm=" Argon2d-NIM"
                        data-coin-block-reward=" 2853.68082" data-coin-block-time=" 60.0" data-coin-difficulty=" 2809535.27"
                        data-coin-price-usd=" {{$response->getPrice('nimiq-2', 'usd')['nimiq-2']['usd']}}"
                        data-coin-market-cap-usd=" 35942381.00">
                    &rlm;Nimiq &rlm;(Argon2d-NIM)
                </option>
                <option value=" 302" data-img=" https://assets.coingecko.com/coins/images/576/large/nexus-logo.png"
                        data-coin-net-hash=" 291687026984" data-coin-symbol=" NXS" data-coin-algorithm=" NexusHash"
                        data-coin-block-reward=" 2.317314" data-coin-block-time=" 150.0"
                        data-coin-difficulty=" 2546.762933938"
                        data-coin-price-usd=" {{$response->getPrice('nexus', 'usd')['nexus']['usd']}}"
                        data-coin-market-cap-usd=" 48923600.00">
                    &rlm;Nexus &rlm;(NexusHash)
                </option>
                <option value=" 305" data-img=" https://assets.coingecko.com/coins/images/6382/large/Conceal_Coin.jpg"
                        data-coin-net-hash=" 2041322" data-coin-symbol=" CCX" data-coin-algorithm=" CryptoNightGPU"
                        data-coin-block-reward=" 6" data-coin-block-time=" 121.0" data-coin-difficulty=" 247000000"
                        data-coin-price-usd=" {{$response->getPrice('conceal', 'usd')['conceal']['usd']}}"
                        data-coin-market-cap-usd=" 6517345.00">
                    &rlm;Conceal &rlm;(CryptoNightGPU)
                </option>
                <option value=" 318" data-img=" https://assets.coingecko.com/coins/images/3849/large/quarkchain.png"
                        data-coin-net-hash=" 8889656417" data-coin-symbol=" QKC" data-coin-algorithm=" Ethash"
                        data-coin-block-reward=" 2.5168" data-coin-block-time=" 9.8822" data-coin-difficulty=" 43924681323"
                        data-coin-price-usd=" {{$response->getPrice('quark-chain', 'usd')['quark-chain']['usd']}}"
                        data-coin-market-cap-usd=" 144548329.00">
                    &rlm;QuarkChain
                    &rlm;(Ethash)
                </option>
                <option value=" 327"
                        data-img=" https://assets.coingecko.com/coins/images/10562/large/circle-handshakeLogo.png"
                        data-coin-net-hash=" 5.9457279593836E+15" data-coin-symbol=" HNS" data-coin-algorithm=" Handshake"
                        data-coin-block-reward=" 2000" data-coin-block-time=" 602.0" data-coin-difficulty=" 833377296"
                        data-coin-price-usd=" {{$response->getPrice('handshake', 'usd')['handshake']['usd']}}"
                        data-coin-market-cap-usd=" 88920896.00">
                    &rlm;Handshake &rlm;(Handshake)
                </option>
                <option value=" 328" data-img=" https://assets.coingecko.com/coins/images/8245/large/43697637.png"
                        data-coin-net-hash=" 26877540843" data-coin-symbol=" SERO" data-coin-algorithm=" ProgPow"
                        data-coin-block-reward=" 4.4" data-coin-block-time=" 16.1863" data-coin-difficulty=" 435047939354"
                        data-coin-price-usd=" {{$response->getPrice('super-zero', 'usd')['super-zero']['usd']}}"
                        data-coin-market-cap-usd=" 54189279.00">
                    &rlm;SERO &rlm;(ProgPow)
                </option>
                <option value=" 329" data-img=" https://assets.coingecko.com/coins/images/3861/large/2638.png"
                        data-coin-net-hash=" 9837" data-coin-symbol=" CTXC" data-coin-algorithm=" CuckooCycleCortex"
                        data-coin-block-reward=" 7" data-coin-block-time=" 13.7948" data-coin-difficulty=" 135702"
                        data-coin-price-usd=" {{$response->getPrice('cortex', 'usd')['cortex']['usd']}}"
                        data-coin-market-cap-usd=" 37375475.00">
                    &rlm;Cortex &rlm;(CuckooCycleCortex)
                </option>
                <option value=" 330"
                        data-img=" https://assets.coingecko.com/coins/images/8370/large/xAFGD7BZ_400x400.jpg"
                        data-coin-net-hash=" 15340254271" data-coin-symbol=" ZANO" data-coin-algorithm=" ProgPowZ"
                        data-coin-block-reward=" 1" data-coin-block-time=" 120.0" data-coin-difficulty=" 1840830512602"
                        data-coin-price-usd=" {{$response->getPrice('zano', 'usd')['zano']['usd']}}"
                        data-coin-market-cap-usd=" 31674962.00">
                    &rlm;Zano &rlm;(ProgPowZ)
                </option>
                <option value=" 334"
                        data-img=" https://assets.coingecko.com/coins/images/3693/large/djLWD6mR_400x400.jpg"
                        data-coin-net-hash=" 2.8039354583882E+16" data-coin-symbol=" KDA" data-coin-algorithm=" Kadena"
                        data-coin-block-reward=" 1.0782085" data-coin-block-time=" 1.5004"
                        data-coin-difficulty=" 4.2070247617657E+16"
                        data-coin-price-usd=" {{$response->getPrice('kadena', 'usd')['kadena']['usd']}}"
                        data-coin-market-cap-usd=" 316072439.00">
                    &rlm;Kadena &rlm;(Kadena)
                </option>
                <option value=" 337" data-img=" https://assets.coingecko.com/coins/images/13079/large/3vuYMbjN.png"
                        data-coin-net-hash=" 981871931442" data-coin-symbol=" CFX" data-coin-algorithm=" Octopus"
                        data-coin-block-reward=" 1.9914574326565" data-coin-block-time=" 1.1719"
                        data-coin-difficulty=" 1150655716458"
                        data-coin-price-usd=" {{$response->getPrice('conflux-token', 'usd')['conflux-token']['usd']}}"
                        data-coin-market-cap-usd=" 316924401.00">
                    &rlm;Conflux &rlm;(Octopus)
                </option>
                <option value=" 339" data-img=" https://assets.coingecko.com/coins/images/8978/large/y_sign.png"
                        data-coin-net-hash=" 21031" data-coin-symbol=" YEC" data-coin-algorithm=" EquihashZero"
                        data-coin-block-reward=" 5.9375" data-coin-block-time=" 153.0" data-coin-difficulty=" 392.8"
                        data-coin-price-usd=" {{$response->getPrice('ycash', 'usd')['ycash']['usd']}}"
                        data-coin-market-cap-usd=" 4560138.00">
                    &rlm;Ycash &rlm;(EquihashZero)
                </option>
                <option value=" 340" data-img=" https://assets.coingecko.com/coins/images/2484/large/Ergo.png"
                        data-coin-net-hash=" 33019656193998" data-coin-symbol=" ERG" data-coin-algorithm=" Autolykos"
                        data-coin-block-reward=" 67.511" data-coin-block-time=" 82.0"
                        data-coin-difficulty=" 2.7076118079078E+15"
                        data-coin-price-usd=" {{$response->getPrice('ergo', 'usd')['ergo']['usd']}}"
                        data-coin-market-cap-usd=" 509176307.00">
                    &rlm;Ergo &rlm;(Autolykos)
                </option>
                <option value=" 341"
                        data-img=" https://assets.coingecko.com/coins/images/7478/large/XEQ_logo_blackbackground_rounded.png"
                        data-coin-net-hash=" 802289" data-coin-symbol=" XEQ" data-coin-algorithm=" CryptoNightGPU"
                        data-coin-block-reward=" 4.6569" data-coin-block-time=" 119.0" data-coin-difficulty=" 95472484"
                        data-coin-price-usd=" {{$response->getPrice('triton', 'usd')['triton']['usd']}}"
                        data-coin-market-cap-usd=" 13975926.00">
                    &rlm;Equilibria
                    &rlm;(CryptoNightGPU)
                </option>
            </select>
        </div>

        <div id="calculator">
            <div class=" row ">
                <div class="col-lg-5 col-sm-6 col-12 mbm-title-top-tab pt-md-2 pt-xl-0">
                    <div class="wrapper-coin-title ">
                        <div class=" row ">

                        </div>
                    </div>
                    <div class="mbm-border-hidden"></div>
                </div>
                <div class="mr-auto col-lg-5 col-sm-6 col-12 ">
                    <div class="mbm-price-dollar">
                        <div class="row d-flex h-100 ">
                            <span
                                class="mbm-price-dollar-text col-lg-8 col-md-8 col-sm-8 justify-content-center align-self-center ">قیمت
                                دلار کریپتو به تومان: </span>
                            <input type="text" disabled id="dollar" data-value="{{$dollar}}" value="{{$dollar}}"
                                   class="form-control mbm-converted-price col-lg-4 col-md-4 col-sm-4">
                        </div>
                    </div>
                </div>
            </div>
            <div class=" row rounded mbm-top-panel">
                <div class="col-lg-4 mbm-wrapper-block-info">
                    <div class="mbm-wrapper-cell-info">
                        <div class="row ">
                            <div class="col-lg-7 col-md-6 col-sm-6 col-12 ">
                                <label class="text-right mbm-label">الگوریتم
                                    رمزنگاری : </label>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-6 col-12 ">
                                <label class="mbm-wrapper-cell-info-coin" data-response="algorithm">---</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mbm-wrapper-block-info">
                    <div class="mbm-wrapper-cell-info">
                        <div class="row">
                            <div class=" col-lg-4 col-md-6 col-sm-6 col-12 ">
                                <label class="mbm-label">&nbsp;    واحد کوین به
                                    تومان: </label>
                            </div>
                            <div class=" col-lg-8 col-md-6 col-sm-6 col-12 ">
                                <label class="mbm-wrapper-cell-info-coin" data-response="net-difficulty">---</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mbm-wrapper-block">
                    <div class="mbm-wrapper-cell-info">
                        <div class="row">
                            <div class="col-lg-7 col-md-6 col-sm-6 col-12 ">
                                <label class="mbm-label" data-response="coin-name">هر
                                    واحد کوین به
                                    دلار:</label>
                            </div>
                            <div class=" col-lg-5 col-md-6 col-sm-6 col-12 ">
                                <label class="mbm-wrapper-cell-info-coin" data-response="coin-price">---</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class=" inputs-data-wrapper">
                        <div class=" row ">
                            <div class="data-container col-12 col-sm-6 col-md-6 col-lg-4 form-group" data-select="devices">
                                <label class="float-right mbm-label">
                                    انتخاب دستگاه<span class="mbm-meta-label">(اختیاری)</span>
                                </label>
                                <select name="devices" id="mbm-devices-group" data-calculate="true"
                                        style="width: 80% !important;">
                                    <option>سایر</option>
                                    <option value=" 69" data-device-hash-rate=" 16000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        950"
                                        data-device-power="
                                        110">E9.3 BTC Mining
                                        Equipment 16 TH/S
                                    </option>
                                    <option value=" 68" data-device-hash-rate=" 13500000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        745"
                                        data-device-power="
                                        105">E9i BTC Mining
                                        Equipment 13.5 TH/S
                                    </option>
                                    <option value=" 70" data-device-hash-rate=" 12000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        750"
                                        data-device-power="
                                        110">E9.2 BTC Mining
                                        Equipment 12 TH/s
                                    </option>
                                    <option value=" 151" data-device-hash-rate=" 1.0E+14" data-device-coins="['BTC']">
                                        data-device-price="
                                        9300"
                                        data-device-power="
                                        2950">Antminer S19j
                                        Pro
                                    </option>
                                    <option value=" 118" data-device-hash-rate=" 1.1E+14" data-device-coins="['BTC']">
                                        data-device-price="
                                        2407"
                                        data-device-power="
                                        3250">Bitmain
                                        Antminer S19 PRO
                                    </option>
                                    <option value=" 120" data-device-hash-rate=" 1.1E+14" data-device-coins="['BTC']">
                                        data-device-price="
                                        2407"
                                        data-device-power="
                                        3250">Antminer S19
                                        PRO
                                    </option>
                                    <option value=" 117" data-device-hash-rate=" 95000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        1785"
                                        data-device-power="
                                        3250">Bitmain
                                        Antminer S19
                                    </option>
                                    <option value=" 119" data-device-hash-rate=" 95000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        1785"
                                        data-device-power="
                                        3250">Antminer S19
                                    </option>
                                    <option value=" 124" data-device-hash-rate=" 84000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        1749"
                                        data-device-power="
                                        3150">Antminer T19
                                    </option>
                                    <option value=" 83" data-device-hash-rate=" 50000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        2503"
                                        data-device-power="
                                        1975">Antminer S17
                                        Pro
                                    </option>
                                    <option value=" 121" data-device-hash-rate=" 70000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        1232"
                                        data-device-power="
                                        2800">Antminer S17+
                                    </option>
                                    <option value=" 80" data-device-hash-rate=" 64000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        2784"
                                        data-device-power="
                                        2880">Antminer S17e
                                    </option>
                                    <option value=" 82" data-device-hash-rate=" 53000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        2322"
                                        data-device-power="
                                        2385">Antminer S17
                                    </option>
                                    <option value=" 79" data-device-hash-rate=" 35000000000000"
                                            data-device-coins=" ['DCR']">
                                        data-device-price="
                                        1282"
                                        data-device-power="
                                        1610">Antminer DR5
                                    </option>
                                    <option value=" 122" data-device-hash-rate=" 58000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        817"
                                        data-device-power="
                                        2900">Antminer T17+
                                    </option>
                                    <option value=" 126" data-device-hash-rate=" 50000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        1500"
                                        data-device-power="
                                        2500">Ebit Miner
                                        E12+
                                    </option>
                                    <option value=" 84" data-device-hash-rate=" 40000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        951"
                                        data-device-power="
                                        2090">Antminer T17
                                    </option>
                                    <option value=" 81" data-device-hash-rate=" 53000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        1665"
                                        data-device-power="
                                        2915">Antminer T17e
                                    </option>
                                    <option value=" 76" data-device-hash-rate=" 28000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        1020"
                                        data-device-power="
                                        1596">Antminer S15
                                    </option>
                                    <option value=" 88" data-device-hash-rate=" 44000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        1350"
                                        data-device-power="
                                        3000">PandaMiner P3
                                    </option>
                                    <option value=" 77" data-device-hash-rate=" 19500000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        499"
                                        data-device-power="
                                        1365">Antminer S11
                                    </option>
                                    <option value=" 85" data-device-hash-rate=" 16000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        430"
                                        data-device-power="
                                        1280">Antminer S9 SE
                                    </option>
                                    <option value=" 86" data-device-hash-rate=" 14000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        263"
                                        data-device-power="
                                        1190">Antminer S9k
                                    </option>
                                    <option value=" 44" data-device-hash-rate=" 16000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        2729"
                                        data-device-power="
                                        1450">DragonMint T1
                                    </option>
                                    <option value=" 78" data-device-hash-rate=" 14500000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        392"
                                        data-device-power="
                                        1350">Antminer S9j
                                    </option>
                                    <option value=" 18" data-device-hash-rate=" 14500000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        414"
                                        data-device-power="
                                        1365">Antminer S9i
                                        (14.5TH/s)
                                    </option>
                                    <option value=" 26" data-device-hash-rate=" 8700000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        1000"
                                        data-device-power="
                                        845">Antminer R4
                                    </option>
                                    <option value=" 125" data-device-hash-rate=" 13500000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        745"
                                        data-device-power="
                                        1420">Ebit Miner E9i
                                    </option>
                                    <option value=" 127" data-device-hash-rate=" 16000000000000"
                                            data-device-coins=" [null]" data-device-price=" 590" data-device-power=" 1760">
                                        Ebit Miner E10.6
                                    </option>
                                    <option value=" 27" data-device-hash-rate=" 10500000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        430"
                                        data-device-power="
                                        1332">Antminer T9+
                                        (10.5TH/s) with PSU
                                    </option>
                                    <option value=" 54" data-device-hash-rate=" 4000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        120"
                                        data-device-power="
                                        955">Antminer V9
                                    </option>
                                    <option value=" 6" data-device-hash-rate=" 4730000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        100"
                                        data-device-power="
                                        1293">AntMiner S7
                                        Batch 10
                                    </option>
                                    <option value=" 123" data-device-hash-rate=" 4730000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        100"
                                        data-device-power="
                                        1293">AntMiner S7
                                    </option>
                                    <option value=" 4" data-device-hash-rate=" 60060000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        400"
                                        data-device-power="
                                        30680">AntMiner S5
                                        Batch 6
                                    </option>
                                    <option value=" 5" data-device-hash-rate=" 1155000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        400"
                                        data-device-power="
                                        590">AntMiner S5
                                        Batch 5
                                    </option>
                                    <option value=" 3" data-device-hash-rate=" 2570000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        1000"
                                        data-device-power="
                                        1480">Antminer S4+
                                    </option>
                                    <option value=" 28" data-device-hash-rate=" 5500000000" data-device-coins="['BTC']">
                                        data-device-price="
                                        48"
                                        data-device-power="
                                        4">R1 AntRouter
                                    </option>
                                    <option value=" 1" data-device-hash-rate=" 1000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        1000"
                                        data-device-power="
                                        800">AntMiner C1
                                    </option>
                                    <option value=" 2" data-device-hash-rate=" 63000000000" data-device-coins="['BTC']">
                                        data-device-price="
                                        83"
                                        data-device-power="
                                        63">Antminer U3
                                    </option>
                                    <option value=" 67" data-device-hash-rate=" 540000000000"
                                            data-device-coins="['DASH']">
                                        data-device-price="
                                        7000"
                                        data-device-power="
                                        4400">SPx36 DASH 540
                                        GH/s
                                    </option>
                                    <option value=" 37" data-device-hash-rate=" 17000000000"
                                            data-device-coins="['DASH']">
                                        data-device-price="
                                        176"
                                        data-device-power="
                                        970">D3 Antminer
                                    </option>
                                    <option value=" 29" data-device-hash-rate=" 504000000" data-device-coins="['LTC']">
                                        data-device-price="
                                        209"
                                        data-device-power="
                                        800">Antminer L3+
                                        (504MH/s)
                                    </option>
                                    <option value=" 66" data-device-hash-rate=" 580000000" data-device-coins="['LTC']">
                                        data-device-price="
                                        289"
                                        data-device-power="
                                        942">Antminer L3++
                                    </option>
                                    <option value=" 134" data-device-hash-rate=" 60000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        399"
                                        data-device-power="
                                        120">Nvidia GeForce
                                        RTX 3060 Ti
                                    </option>
                                    <option value=" 144" data-device-hash-rate=" 63000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        850"
                                        data-device-power="
                                        135">AMD Radeon RX
                                        6800
                                    </option>
                                    <option value=" 145" data-device-hash-rate=" 63000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        900"
                                        data-device-power="
                                        135">AMD Radeon RX
                                        6800XT
                                    </option>
                                    <option value=" 143" data-device-hash-rate=" 63000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        999"
                                        data-device-power="
                                        149">AMD Radeon RX
                                        6900XT
                                    </option>
                                    <option value=" 139" data-device-hash-rate=" 31500000" data-device-coins="['ETH']">
                                        data-device-price="
                                        270"
                                        data-device-power="
                                        80">Nvidia GeForce
                                        GTX 1660 Ti
                                    </option>
                                    <option value=" 132" data-device-hash-rate=" 60000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        580"
                                        data-device-power="
                                        160">GeForce RTX
                                        3070
                                    </option>
                                    <option value=" 142" data-device-hash-rate=" 18100000" data-device-coins="['ETC']">
                                        data-device-price="
                                        499"
                                        data-device-power="
                                        49">Nvidia GeForce
                                        GTX 1650
                                    </option>
                                    <option value=" 129" data-device-hash-rate=" 330000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        3280"
                                        data-device-power="
                                        950">PandaMiner B9
                                        Ethash 330MH/s
                                    </option>
                                    <option value=" 130" data-device-hash-rate=" 120000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        1500"
                                        data-device-power="
                                        350">nVidia GeForce
                                        RTX 3090
                                    </option>
                                    <option value=" 131" data-device-hash-rate=" 98000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        820"
                                        data-device-power="
                                        320">Nvidia GeForce
                                        RTX 3080
                                    </option>
                                    <option value=" 140" data-device-hash-rate=" 37000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        300"
                                        data-device-power="
                                        122">Nvidia P104-100
                                    </option>
                                    <option value=" 147" data-device-hash-rate=" 44000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        450"
                                        data-device-power="
                                        150">AMD Radeon Vega
                                        64
                                    </option>
                                    <option value=" 137" data-device-hash-rate=" 39000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        399"
                                        data-device-power="
                                        133">GeForce RTX
                                        2060 Super
                                    </option>
                                    <option value=" 135" data-device-hash-rate=" 40000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        499"
                                        data-device-power="
                                        150">Nvidia GeForce
                                        RTX 2070 Super
                                    </option>
                                    <option value=" 148" data-device-hash-rate=" 43000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        350"
                                        data-device-power="
                                        165">AMD Radeon Vega
                                        56
                                    </option>
                                    <option value=" 57" data-device-hash-rate=" 190000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        1262"
                                        data-device-power="
                                        760">Antminer E3
                                    </option>
                                    <option value=" 58" data-device-hash-rate=" 122000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        2290"
                                        data-device-power="
                                        500">Shark Mini ETH
                                        120MH/s
                                    </option>
                                    <option value=" 59" data-device-hash-rate=" 181000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        3490"
                                        data-device-power="
                                        800">Shark Pro ETH
                                        180MH/s
                                    </option>
                                    <option value=" 136" data-device-hash-rate=" 39000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        499"
                                        data-device-power="
                                        176">Nvidia GeForce
                                        RTX 2070
                                    </option>
                                    <option value=" 138" data-device-hash-rate=" 31000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        330"
                                        data-device-power="
                                        141">Nvidia GeForce
                                        RTX 2060
                                    </option>
                                    <option value=" 150" data-device-hash-rate=" 34000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        200"
                                        data-device-power="
                                        163">AMD Radeon RX
                                        590
                                    </option>
                                    <option value=" 50" data-device-hash-rate=" 31000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        449"
                                        data-device-power="
                                        150">nVidia GeForce
                                        GTX 1070 Ti Founders
                                        Edition Ethereum
                                        Mining
                                    </option>
                                    <option value=" 133" data-device-hash-rate=" 57000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        1466"
                                        data-device-power="
                                        280">GeForce RTX
                                        2080 Ti
                                    </option>
                                    <option value=" 60" data-device-hash-rate=" 241000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        4590"
                                        data-device-power="
                                        1200">Shark Extreme
                                        ETH 240MH/s
                                    </option>
                                    <option value=" 71" data-device-hash-rate=" 230000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        950"
                                        data-device-power="
                                        1150">PandaMiner B3
                                        Mute ETH 230MH/s
                                    </option>
                                    <option value=" 128" data-device-hash-rate=" 230000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        1935"
                                        data-device-power="
                                        1150">PandaMiner B7
                                        Ethash 230MH/s
                                    </option>
                                    <option value=" 39" data-device-hash-rate=" 22000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        159"
                                        data-device-power="
                                        115">Asus ROG Strix
                                        Radeon RX 570 O4G
                                        ETH 22 MH/s
                                    </option>
                                    <option value=" 89" data-device-hash-rate=" 235000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        1200"
                                        data-device-power="
                                        1250">PandaMiner B3
                                        Pro
                                    </option>
                                    <option value=" 56" data-device-hash-rate=" 230000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        800"
                                        data-device-power="
                                        1250">PandaMiner B3
                                        Pro ETH 230 MH/s
                                    </option>
                                    <option value=" 38" data-device-hash-rate=" 24000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        439"
                                        data-device-power="
                                        136">Asus ROG Strix
                                        RX 580-O8G
                                    </option>
                                    <option value=" 19" data-device-hash-rate=" 25000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        649"
                                        data-device-power="
                                        150">Radeon Rx 480
                                    </option>
                                    <option value=" 31" data-device-hash-rate=" 165000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        29600"
                                        data-device-power="
                                        1000">ETH Mining Rig
                                        Classic
                                    </option>
                                    <option value=" 20" data-device-hash-rate=" 24000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        352"
                                        data-device-power="
                                        150">Radeon RX 470
                                    </option>
                                    <option value=" 11" data-device-hash-rate=" 6000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        140"
                                        data-device-power="
                                        40">nVidia GeForce
                                        GTX 750 Ti Ethereum
                                        Mining
                                    </option>
                                    <option value=" 32" data-device-hash-rate=" 180000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        30000"
                                        data-device-power="
                                        1200">ETH Mining Rig
                                        Elite
                                    </option>
                                    <option value=" 141" data-device-hash-rate=" 21000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        215"
                                        data-device-power="
                                        140">Nvidia GeForce
                                        GTX 1660
                                    </option>
                                    <option value=" 33" data-device-hash-rate=" 170000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        34500"
                                        data-device-power="
                                        1200">ETH Mining Rig
                                        Pro
                                    </option>
                                    <option value=" 8" data-device-hash-rate=" 23000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        880"
                                        data-device-power="
                                        175">Radeon R9 Nano
                                    </option>
                                    <option value=" 34" data-device-hash-rate=" 130000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        28300"
                                        data-device-power="
                                        1000">ETH Mining Rig
                                        Lite
                                    </option>
                                    <option value=" 35" data-device-hash-rate=" 240000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        37900"
                                        data-device-power="
                                        2000">ETH Mining Rig
                                        Ambition 1070
                                    </option>
                                    <option value=" 36" data-device-hash-rate=" 220000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        33500"
                                        data-device-power="
                                        2000">ETH Mining Rig
                                        Ambition 580
                                    </option>
                                    <option value=" 12" data-device-hash-rate=" 15900000" data-device-coins="['ETH']">
                                        data-device-price="
                                        520"
                                        data-device-power="
                                        145">nVidia GeForce
                                        GTX 970 Ethereum
                                        Mining
                                    </option>
                                    <option value=" 16" data-device-hash-rate=" 12000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        170"
                                        data-device-power="
                                        110">Strix Radeon R7
                                        370
                                    </option>
                                    <option value=" 10" data-device-hash-rate=" 36000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        680"
                                        data-device-power="
                                        375">Radeon R9 HD
                                        7990
                                    </option>
                                    <option value=" 13" data-device-hash-rate=" 46000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        650"
                                        data-device-power="
                                        500">Radeon R9 295x2
                                    </option>
                                    <option value=" 15" data-device-hash-rate=" 18000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        300"
                                        data-device-power="
                                        200">Radeon R9 380x
                                    </option>
                                    <option value=" 17" data-device-hash-rate=" 17000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        240"
                                        data-device-power="
                                        190">Radeon R9 380
                                    </option>
                                    <option value=" 9" data-device-hash-rate=" 23500000" data-device-coins="['ETH']">
                                        data-device-price="
                                        680"
                                        data-device-power="
                                        275">Radeon R9 Fury
                                        X
                                    </option>
                                    <option value=" 7" data-device-hash-rate=" 22000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        400"
                                        data-device-power="
                                        290">Radeon R9 290x
                                        Tri-X
                                    </option>
                                    <option value=" 14" data-device-hash-rate=" 10200000" data-device-coins="['ETH']">
                                        data-device-price="
                                        140"
                                        data-device-power="
                                        175">Radeon HD 7870
                                    </option>
                                    <option value=" 55" data-device-hash-rate=" 220000" data-device-coins="['XMO']">
                                        data-device-price="
                                        1255"
                                        data-device-power="
                                        500">Antminer X3
                                    </option>
                                    <option value=" 87" data-device-hash-rate=" 135000" data-device-coins="['ZEC']">
                                        data-device-price="
                                        1608"
                                        data-device-power="
                                        1418">Antminer Z11
                                    </option>
                                    <option value=" 62" data-device-hash-rate=" 10000" data-device-coins="['ZEC']">
                                        data-device-price="
                                        850"
                                        data-device-power="
                                        266">Antminer Z9
                                        mini
                                    </option>
                                    <option value=" 48" data-device-hash-rate=" 520" data-device-coins="['ZEC']">
                                        data-device-price="
                                        449"
                                        data-device-power="
                                        125">nVidia GigaByte
                                        GeForce GTX 1070 Ti
                                        8G Zcash Mining
                                    </option>
                                    <option value=" 30" data-device-hash-rate=" 680" data-device-coins="['ZEC']">
                                        data-device-price="
                                        700"
                                        data-device-power="
                                        250">nVidia Geforce
                                        GTX 1080 TI ZCash
                                        Mining
                                    </option>
                                    <option value=" 45" data-device-hash-rate=" 290" data-device-coins="['ZEC']">
                                        data-device-price="
                                        240"
                                        data-device-power="
                                        100">nVidia MSI
                                        P106-100 6GB Zcash
                                        Mining
                                    </option>
                                    <option value=" 46" data-device-hash-rate=" 300" data-device-coins="['ZEC']">
                                        data-device-price="
                                        299"
                                        data-device-power="
                                        130">nVidia Asus
                                        GeForce GTX 1060 6GB
                                        Zcash Mining
                                    </option>
                                    <option value=" 47" data-device-hash-rate=" 445" data-device-coins="['ZEC']">
                                        data-device-price="
                                        499"
                                        data-device-power="
                                        180">nVidia GigaByte
                                        GeForce GTX 1070 G1
                                        8GB Zcash Mining
                                    </option>
                                    <option value=" 49" data-device-hash-rate=" 910" data-device-coins="['XMR']">
                                        data-device-price="
                                        799"
                                        data-device-power="
                                        308">nVidia EVGA
                                        GeForce GTX 1080 Ti
                                        FTW3 11GB Monero
                                        Mining
                                    </option>
                                    <option value=" 61" data-device-hash-rate=" 780" data-device-coins="['ETH']">
                                        data-device-price="
                                        480"
                                        data-device-power="
                                        328">Antminer B3
                                    </option>
                                    <option value=" 22" data-device-hash-rate=" 220" data-device-coins="['ZEC']">
                                        data-device-price="
                                        199"
                                        data-device-power="
                                        150">Radeon Rx 480
                                    </option>
                                    <option value=" 23" data-device-hash-rate=" 220" data-device-coins="['ZEC']">
                                        data-device-price="
                                        600"
                                        data-device-power="
                                        150">Radeon RX 470
                                    </option>
                                    <option value=" 24" data-device-hash-rate=" 180" data-device-coins="['ZEC']">
                                        data-device-price="
                                        150"
                                        data-device-power="
                                        140">Radeon HD 7950
                                    </option>
                                    <option value=" 25" data-device-hash-rate=" 280" data-device-coins="['ZEC']">
                                        data-device-price="
                                        400"
                                        data-device-power="
                                        275">Radeon R9 390x
                                    </option>
                                    <option value=" 21" data-device-hash-rate=" 200" data-device-coins="['ZEC']">
                                        data-device-price="
                                        286"
                                        data-device-power="
                                        250">Radeon R9 280x
                                    </option>
                                    <option value=" 40" data-device-hash-rate=" 175" data-device-coins="['ZEC']">
                                        data-device-price="
                                        175"
                                        data-device-power="
                                        250">nVidia GeForce
                                        GTX 1050 Ti Gaming X
                                        4G Zcash Mining
                                    </option>
                                    <option value=" 91" data-device-hash-rate=" 68000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        1860"
                                        data-device-power="
                                        3264">Whatsminer
                                        M20S
                                    </option>
                                    <option value=" 92" data-device-hash-rate=" 88000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        2640"
                                        data-device-power="
                                        3344">Whatsminer
                                        M30S
                                    </option>
                                    <option value=" 93" data-device-hash-rate=" 58000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        1299"
                                        data-device-power="
                                        3360">Whatsminer
                                        M21S
                                    </option>
                                    <option value=" 94" data-device-hash-rate=" 45000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        1100"
                                        data-device-power="
                                        2160">Whatsminer M20
                                    </option>
                                    <option value=" 95" data-device-hash-rate=" 32000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        2150"
                                        data-device-power="
                                        2200">INNOSILICON
                                        T2T-32T
                                    </option>
                                    <option value=" 96" data-device-hash-rate=" 67000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        1999"
                                        data-device-power="
                                        3300">INNOSILICON
                                        T3+Pro 67T
                                    </option>
                                    <option value=" 97" data-device-hash-rate=" 57000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        1666"
                                        data-device-power="
                                        3300">INNOSILICON
                                        T3+57T
                                    </option>
                                    <option value=" 98" data-device-hash-rate=" 30000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        566"
                                        data-device-power="
                                        2200">INNOSILICON
                                        T2T-30T
                                    </option>
                                    <option value=" 99" data-device-hash-rate=" 65000000000"
                                            data-device-coins="['DASH']">
                                        data-device-price="
                                        1780"
                                        data-device-power="
                                        1500">INNOSILICON
                                        A5+ DashMaster
                                    </option>
                                    <option value=" 100" data-device-hash-rate=" 2800000000000"
                                            data-device-coins="['DCR']">
                                        data-device-price="
                                        1499"
                                        data-device-power="
                                        1229">INNOSILICON
                                        D9+ DecredMaster
                                    </option>
                                    <option value=" 101" data-device-hash-rate=" 248000"
                                            data-device-coins=" ['BCN','DERO','KRB']">
                                        data-device-price="
                                        1499"
                                        data-device-power="
                                        480">INNOSILICON A8+
                                        CryptoMaster
                                    </option>
                                    <option value=" 102" data-device-hash-rate=" 1230000000"
                                            data-device-coins="['LTC']">
                                        data-device-price="
                                        2000"
                                        data-device-power="
                                        1500">Innosilicon A6
                                        LTCMaster
                                    </option>
                                    <option value=" 103" data-device-hash-rate=" 2200000000"
                                            data-device-coins="['LTC']">
                                        data-device-price="
                                        3000"
                                        data-device-power="
                                        2100">Innosilicon
                                        A6+ LTC Master
                                    </option>
                                    <option value=" 104" data-device-hash-rate=" 500000000" data-device-coins="['ETH']">
                                        data-device-price="
                                        2800"
                                        data-device-power="
                                        750">INNOSILICON A10
                                        ETH Miner
                                    </option>
                                    <option value=" 105" data-device-hash-rate=" 40000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        1480"
                                        data-device-power="
                                        2200">INNOSILICON
                                        T3-40T BTC Miner
                                    </option>
                                    <option value=" 106" data-device-hash-rate=" 26000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        832"
                                        data-device-power="
                                        2100">INNOSILICON
                                        T2T-26T BTC Miner
                                    </option>
                                    <option value=" 107" data-device-hash-rate=" 43000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        1591"
                                        data-device-power="
                                        2100">INNOSILICON
                                        T3-43T BTC Miner
                                    </option>
                                    <option value=" 108" data-device-hash-rate=" 43000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        1591"
                                        data-device-power="
                                        2100">INNOSILICON
                                        T3-43T BTC Miner
                                    </option>
                                    <option value=" 109" data-device-hash-rate=" 12500000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        324"
                                        data-device-power="
                                        2000">WHATSMINER M3X
                                    </option>
                                    <option value=" 110" data-device-hash-rate=" 50000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        2100"
                                        data-device-power="
                                        3100">INNOSILICON
                                        T3-50T BTC
                                    </option>
                                    <option value=" 111" data-device-hash-rate=" 44000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        1930"
                                        data-device-power="
                                        2508">EBIT E12
                                    </option>
                                    <option value=" 112" data-device-hash-rate=" 16000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        590"
                                        data-device-power="
                                        1760">EBIT E10.6
                                    </option>
                                    <option value=" 113" data-device-hash-rate=" 24000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        660"
                                        data-device-power="
                                        2640">EBIT E10.3
                                    </option>
                                    <option value=" 114" data-device-hash-rate=" 27000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        730"
                                        data-device-power="
                                        2835">EBIT E10.2
                                    </option>
                                    <option value=" 115" data-device-hash-rate=" 18000000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        590"
                                        data-device-power="
                                        1800">EBIT E10.1
                                    </option>
                                    <option value=" 116" data-device-hash-rate=" 11500000000000"
                                            data-device-coins="['BTC']">
                                        data-device-price="
                                        300"
                                        data-device-power="
                                        920">EBIT E9.5
                                    </option>
                                    <option value=" 146" data-device-hash-rate=" 54" data-device-coins="['ETH']">
                                        data-device-price="
                                        400"
                                        data-device-power="
                                        130">AMD Radeon RX
                                        5700
                                    </option>
                                    <option value=" 149" data-device-hash-rate=" 43" data-device-coins="['ETH']">
                                        data-device-price="
                                        279"
                                        data-device-power="
                                        120">AMD Radeon RX
                                        5600XT
                                    </option>
                                </select>
                            </div>
                            <div class="data-container col-12 col-sm-6 col-md-6 col-lg-4 form-group">
                                <label class="float-right mbm-label">
                                    هزینه خرید دستگاه<span class="mbm-meta-label">(اختیاری به تومان) </span>
                                </label>
                                <input class="form-control" data-response="device-price" type="number"
                                       data-calculate="false" />
                            </div>
                            <div class="data-container col-12 col-sm-6 col-md-6 col-lg-4 form-group mbm-hashrate-wrapper">
                                <label class="float-right mbm-label">نرخ
                                    هش</label>
                                <input class="form-control" value="73000" data-response="device-hash" type="number"
                                       data-calculate="true" />
                                <select data-calculate="true" class="hashrateUnit" id="hashrateUnit">
                                    <option value="h/s">
                                        H/S
                                    </option>
                                    <option value="kh/s">
                                        KH/S
                                    </option>
                                    <option value="mh/s">
                                        MH/S
                                    </option>
                                    <option value="gh/s" selected="selected">
                                        GH/S
                                    </option>
                                    <option value="th/s">
                                        TH/S
                                    </option>
                                    <option value="ph/s">
                                        PH/S
                                    </option>
                                    <option value="eh/s">
                                        EH/S
                                    </option>
                                    <option value="zh/s">
                                        ZH/S
                                    </option>
                                </select>
                            </div>
                            <div class="data-container col-12 col-sm-6 col-md-6 col-lg-4 form-group">
                                <label class="float-right d-md-flex justify-content-md-end mbm-label">
                                    برق مصرفی<span class="mbm-meta-label ">(وات) </span>
                                </label>
                                <div class="input-group">
                                    <input class="form-control" value="2920" data-response="device-power" type="number"
                                           data-calculate="true" />
                                    <span class="input-group-addon input-group-addon-custom primary">W</span>
                                </div>
                            </div>
                            <div class="data-container col-12 col-sm-6 col-md-6 col-lg-4 form-group">
                                <label class="float-right mbm-label">
                                    هزینه برق<span class="mbm-meta-label ">(کیلو وات ساعت به تومان )</span>
                                </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" data-calculate="true" value="965"
                                           data-response="power-fee" type="number">
                                    <span class="input-group-addon input-group-addon-custom primary">KW/h</span>
                                </div>
                            </div>
                            <div class="data-container col-12 col-sm-6 col-md-6 col-lg-4 form-group">
                                <label class="float-right mbm-label">
                                    کارمزد استخرهای
                                    ماینینگ<span class="mbm-meta-label ">(درصد)</span>
                                </label>
                                <input class="form-control" value="0" data-response="pool-fee" type="number"
                                       data-calculate="true" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-bottom row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="table-responsive">
                        <table class="table mbm-result-table">
                            <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">
                                    هزینه برق<p class="meta-th">
                                        تومان</p>
                                </th>
                                <th scope="col">
                                    کارمزد پرداختی به استخر
                                    <p class="meta-th">
                                        دلار</p>
                                </th>
                                <th scope="col">
                                    درآمد<p class="meta-th">
                                        مقدار کوین</p>
                                </th>
                                <th scope="col">
                                    درآمد<p class="meta-th">
                                        دلار</p>
                                </th>
                                <th scope="col">
                                    درآمد<p class="meta-th">
                                        تومان</p>
                                </th>
                                <th scope="col">
                                    مجموع هزینه ها

                                    <p class="meta-th">
                                        تومان</p>
                                </th>
                                <th scope="col">
                                    سود<p class="meta-th">
                                        تومان</p>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="mbm-result-table-first-td">
                                    <strong>روز</strong>
                                </td>
                                <td data-response="device-daily-electricity-fee" data-res="هزینه برق"></td>
                                <td data-response="daily-pool-pay-fee" data-res="کامزد پرداختی به استخر"></td>
                                <td data-response="daily-coin-revenue" data-res="درآمد (مقدار کوین)"></td>
                                <td data-response="daily-coin-income-dollar" data-res="درآمد (دلار)"></td>
                                <td data-response="daily-coin-income-toman" data-res="درآمد (تومان)"></td>
                                <td data-response="daily-costs" data-res="مجموع هزینه ها (تومان)"></td>
                                <td class="mbm-red font-weight-bold" data-response="daily-profit"
                                    data-res="سود (تومان)" data-change-color="true"></td>
                            </tr>
                            <tr>
                                <td class="mbm-result-table-first-td">
                                    <strong>هفته</strong>
                                </td>
                                <td data-response="device-weekly-electricity-fee" data-res="هزینه برق"></td>
                                <td data-response="weekly-pool-pay-fee" data-res="کامزد پرداختی به استخر"></td>
                                <td data-response="weekly-coin-revenue" data-res="درآمد (مقدار کوین)"></td>
                                <td data-response="weekly-coin-income-dollar" data-res="درآمد (دلار)"></td>
                                <td data-response="weekly-coin-income-toman" data-res="درآمد (تومان)"></td>
                                <td data-response="weekly-costs" data-res="مجموع هزینه ها (تومان)"></td>
                                <td class="mbm-red font-weight-bold" data-response="weekly-profit"
                                    data-res="سود (تومان)" data-change-color="true"></td>
                            </tr>
                            <tr>
                                <td class="mbm-result-table-first-td">
                                    <strong>ماه</strong>
                                </td>
                                <td data-response="device-monthly-electricity-fee" data-res="هزینه برق"></td>
                                <td data-response="monthly-pool-pay-fee" data-res="کامزد پرداختی به استخر"></td>
                                <td data-response="monthly-coin-revenue" data-res="درآمد (مقدار کوین)"></td>
                                <td data-response="monthly-coin-income-dollar" data-res="درآمد (دلار)"></td>
                                <td data-response="monthly-coin-income-toman" data-res="درآمد (تومان)"></td>
                                <td data-response="monthly-costs" data-res="مجموع هزینه ها (تومان)"></td>
                                <td class="mbm-red font-weight-bold" data-response="monthly-profit"
                                    data-res="سود (تومان)" data-change-color="true"></td>
                            </tr>
                            <tr>
                                <td class="mbm-result-table-first-td">
                                    <strong>سال</strong>
                                </td>
                                <td data-response="device-yearly-electricity-fee" data-res="هزینه برق"></td>
                                <td data-response="yearly-pool-pay-fee" data-res=" کامزد پرداختی به استخر"></td>
                                <td data-response="yearly-coin-revenue" data-res="درآمد (مقدار کوین)"></td>
                                <td data-response="yearly-coin-income-dollar" data-res="درآمد (دلار)"></td>
                                <td data-response="yearly-coin-income-toman" data-res="درآمد (تومان)"></td>
                                <td data-response="yearly-costs" data-res="مجموع هزینه ها (تومان)"></td>
                                <td class="mbm-red font-weight-bold" data-response="yearly-profit"
                                    data-res="سود (تومان)" data-change-color="true"></td>
                            </tr>
                            <tr class="text-center">
                                <td colspan="8" class="text-right mbm-average-return-money-th">
                                    <label class="mbm-average-return-money">
                                        میانگین زمان بازگشت
                                        سرمایه(وابسته به
                                        قیمت دستگاه):<strong data-response="profit-duration">0</strong>
                                    </label>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <strong class="d-xl-none strongf">
                        <span>مجموع هزینه ها برابر است با </span>
                        مجموع هزینه برق و کارمزد استخر
                    </strong>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
