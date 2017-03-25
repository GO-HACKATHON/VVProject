@extends('layouts.app')

@section('content')
<div id="fh5co-main">
    <div class="container">
        <div class="row">
            <h3 class="row-title-detail">Smartphone Details</h3>
            <div class="content col-md-12">
                <div class="col-md-4 img-detail-border">
                    <img src="{{ URL::to('/dummy-data/apple-iphone-7.jpg') }}" alt="Apple Iphone 7" class="img-rounded img-responsive">
                </div>
                <div class="col-md-8 content-detail">
                    <h3 class="phone-title-detail">Apple iPhone 7</h3>
                    <hr class="hr-divider"/>
                    <p>Released 2016, September</p>
                    <p>138g, 7.1mm thickness</p>
                    <p>iOS 10.0.1, up to iOS 10.2</p>
                    <p>32/128/256GB storage, no card slot</p>
                    <div class="col-md-3 border-p-detail">
                        <span class="glyphicon glyphicon-phone p-detail" aria-hidden="true"></span>
                        <p class="p-detail">4.7"</p><span>750x1334 pixels</span>
                    </div>
                    <div class="col-md-3 border-p-detail">
                        <span class="glyphicon glyphicon-camera p-detail" aria-hidden="true"></span>
                        <p class="p-detail">12MP</p><span>2160p</span>
                    </div>
                    <div class="col-md-3 border-p-detail">
                        <span class="glyphicon glyphicon-hdd p-detail" aria-hidden="true"></span>
                        <p class="p-detail">2GB RAM</p><span>Apple A10 Fusion</span>
                    </div>
                    <div class="col-md-3 border-p-detail">
                        <span class="glyphicon glyphicon-time p-detail" aria-hidden="true"></span>
                        <p class="p-detail">1960mAh</p><span>Li-Ion</span>
                    </div>
                </div>
            </div>
        </div>
        
   </div>
</div>

<div id="fh5co-secondary">
<div class="container">
    <div class="row">
        <div class="content-tab col-md-12">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">Rekomendasi Penjual</a></li>
              <li><a data-toggle="tab" href="#menu1">Spesifikasi Smartphone</a></li>
              <li><a data-toggle="tab" href="#menu2">Link Terkait</a></li>
            </ul>

            <div class="tab-content">
              <div id="home" class="tab-content-detail tab-pane fade in active">
                <h3>Rekomendasi Penjual</h3>
                <p>0 Rekomendasi Penjual Ditemukan</p>
                <div class="row product-container">
                <p class="product-e-commerce">Produk dari Bukalapak.com</p>
                    <div class="col-md-15 col-xs-6">
                    <a href="">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ URL::to('/dummy-data/apple-iphone-7-tokopedia1.jpg') }}">
                            </div>
                            <div class="meta-product">
                                <div class="product-title">
                                    <p>Apple IPhone 7 - GSM - 32GB</p>
                                </div>
                                <div class="product-price">
                                    <p>Rp. 10.000.000</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-md-15 col-xs-6">
                    <a href="">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ URL::to('/dummy-data/apple-iphone-7-tokopedia2.jpg') }}">
                            </div>
                            <div class="meta-product">
                                <div class="product-title">
                                    <p>Apple IPhone 7 - GSM - 32GB</p>
                                </div>
                                <div class="product-price">
                                    <p>Rp. 10.000.000</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-md-15 col-xs-6">
                    <a href="">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ URL::to('/dummy-data/apple-iphone-7-tokopedia3.jpg') }}">
                            </div>
                            <div class="meta-product">
                                <div class="product-title">
                                    <p>Apple IPhone 7 - GSM - 256GB</p>
                                </div>
                                <div class="product-price">
                                    <p>Rp. 14.120.120</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-md-15 col-xs-6">
                    <a href="">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ URL::to('/dummy-data/apple-iphone-7-tokopedia4.jpg') }}">
                            </div>
                            <div class="meta-product">
                                <div class="product-title">
                                    <p>Apple IPhone 7 Plus - GSM - 32GB</p>
                                </div>
                                <div class="product-price">
                                    <p>Rp. 11.000.000</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-md-15 col-xs-6">
                    <a href="">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ URL::to('/dummy-data/apple-iphone-7-tokopedia5.jpg') }}">
                            </div>
                            <div class="meta-product">
                                <div class="product-title">
                                    <p>Apple IPhone 7 Plus - GSM - 256GB</p>
                                </div>
                                <div class="product-price">
                                    <p>Rp. 17.210.150</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="navigate-to"><a href="" class="btn-see-more">See more at Bukalapak.com >></a></div>
                </div>
              </div>
              <div id="menu1" class="tab-content-detail tab-pane fade">
                <h3>Spesifikasi</h3>
                <!-- Network -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="8" scope="row">NETWORK</th>
                        <td class="spec-title">Technology</td>
                        <td class="spec-info">GSM / CDMA / HSPA / EVDO / LTE</td>
                    </tr>   
                    <tr>
                        <td class="spec-title">2G bands</td>
                        <td class="spec-info">GSM 850 / 900 / 1800 / 1900 - A1660, A1778</td>
                    </tr>
                    <tr>
                        <td class="spec-title">3G bands</td>
                        <td class="spec-info">HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100 - A1660, A1778</td>
                    </tr>
                    <tr>
                        <td class="spec-title">4G bands</td>
                        <td class="spec-info">LTE band 1(2100), 2(1900), 3(1800), 4(1700/2100), 5(850), 7(2600), 8(900), 12(700), 13(700), 17(700), 18(800), 19(800), 20(800), 25(1900), 26(850), 27(800), 28(700), 29(700), 30(2300), 38(2600), 39(1900), 40(2300), 41(2500) - A1660, A1778</td>
                    </tr>
                    <tr>
                        <td class="spec-title">Speed</td>
                        <td class="spec-info">HSPA 42.2/5.76 Mbps, LTE-A (3CA) Cat9 450/50 Mbps, EV-DO Rev.A 3.1 Mbps</td>
                    </tr>
                    <tr>
                        <td class="spec-title">GPRS</td>
                        <td class="spec-info">Yes</td>
                    </tr>
                    <tr>
                        <td class="spec-title">EDGE</td>
                        <td class="spec-info">Yes</td>
                    </tr>
                </table>

                <!-- LAUNCH -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="2" scope="row">LAUNCH</th>
                        <td class="spec-title">Announced</td>
                        <td class="spec-info">2017, February</td>
                    </tr>   
                    <tr>
                        <td class="spec-title">Status</td>
                        <td class="spec-info">Available. Released 2017, March</td>
                    </tr>
                </table>

                <!-- BODY -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="3" scope="row">BODY</th>
                        <td class="spec-title">Dimensions</td>
                        <td class="spec-info">138.3 x 67.1 x 7.1 mm (5.44 x 2.64 x 0.28 in)</td>
                    </tr>   
                    <tr>
                        <td class="spec-title">Weight</td>
                        <td class="spec-info">138 g (4.87 oz)</td>
                    </tr>
                    <tr>
                        <td class="spec-title">SIM</td>
                        <td class="spec-info">Nano-SIM</td>
                    </tr>
                </table>

                <!-- Display -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="4" scope="row">DISPLAY</th>
                        <td class="spec-title">Type</td>
                        <td class="spec-info">LED-backlit IPS LCD, capacitive touchscreen, 16M colors</td>
                    </tr>   
                    <tr>
                        <td class="spec-title">Size</td>
                        <td class="spec-info">4.7 inches (~65.6% screen-to-body ratio)</td>
                    </tr>
                    <tr>
                        <td class="spec-title">Resolution</td>
                        <td class="spec-info">750 x 1334 pixels (~326 ppi pixel density)</td>
                    </tr>
                    <tr>
                        <td class="spec-title">Multitouch</td>
                        <td class="spec-info">Yes</td>
                    </tr>
                </table>

                <!-- Platform -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="4" scope="row">PLATFORM</th>
                        <td class="spec-title">OS</td>
                        <td class="spec-info">iOS 10.0.1, upgradable to iOS 10.2</td>
                    </tr>   
                    <tr>
                        <td class="spec-title">Chipset</td>
                        <td class="spec-info">Apple A10 Fusion</td>
                    </tr>
                    <tr>
                        <td class="spec-title">CPU</td>
                        <td class="spec-info">Quad-core 2.34 GHz (2x Hurricane + 2x Zephyr)</td>
                    </tr>
                    <tr>
                        <td class="spec-title">GPU</td>
                        <td class="spec-info">PowerVR Series7XT Plus (six-core graphics)</td>
                    </tr>
                </table>

                <!-- Memory -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="2" scope="row">MEMORY</th>
                        <td class="spec-title">Card slot</td>
                        <td class="spec-info">No</td>
                    </tr>   
                    <tr>
                        <td class="spec-title">Internal</td>
                        <td class="spec-info">32/128/256 GB, GB, 2 GB RAM</td>
                    </tr>
                </table>

                <!-- Camera -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="4" scope="row">CAMERA</th>
                        <td class="spec-title">Primary</td>
                        <td class="spec-info">12 MP, f/1.8, 28mm, phase detection autofocus, OIS, quad-LED (dual tone) flash, check quality</td>
                    </tr>   
                    <tr>
                        <td class="spec-title">Features</td>
                        <td class="spec-info">1/3\" sensor size, geo-tagging, simultaneous 4K video and 8MP image recording, touch focus, face/smile detection, HDR (photo/panorama)</td>
                    </tr>
                    <tr>
                        <td class="spec-title">Video</td>
                        <td class="spec-info">2160p@30fps, 1080p@30/60/120fps, 720p@240fps, check quality</td>
                    </tr>
                    <tr>
                        <td class="spec-title">Secondary</td>
                        <td class="spec-info">7 MP, f/2.2, 32mm, 1080p@30fps, 720p@240fps, face detection, HDR, panorama</td>
                    </tr>
                </table>

                <!-- Sound -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="3" scope="row">SOUND</th>
                        <td class="spec-title">Alert types</td>
                        <td class="spec-info">Vibration, proprietary ringtones</td>
                    </tr>   
                    <tr>
                        <td class="spec-title">Loudspeaker</td>
                        <td class="spec-info">Yes, with stereo speakers</td>
                    </tr>
                    <tr>
                        <td class="spec-title">3.5mm jack</td>
                        <td class="spec-info">No</td>
                    </tr>
                </table>

                <!-- COMMS -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="6" scope="row">COMMS</th>
                        <td class="spec-title">WLAN</td>
                        <td class="spec-info">Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot</td>
                    </tr>   
                    <tr>
                        <td class="spec-title">Bluetooth</td>
                        <td class="spec-info">v4.2, A2DP, LE</td>
                    </tr>
                    <tr>
                        <td class="spec-title">GPS</td>
                        <td class="spec-info">Yes, with A-GPS, GLONASS</td>
                    </tr>
                    <tr>
                        <td class="spec-title">NFC</td>
                        <td class="spec-info">Yes (Apple Pay only)</td>
                    </tr>
                    <tr>
                        <td class="spec-title">Radio</td>
                        <td class="spec-info">No</td>
                    </tr>
                    <tr>
                        <td class="spec-title">USB</td>
                        <td class="spec-info">v2.0, reversible connector</td>
                    </tr>
                </table>

                <!-- FEATURES -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="4" scope="row">FEATURES</th>
                        <td class="spec-title">Sensors</td>
                        <td class="spec-info">Fingerprint (front-mounted), accelerometer, gyro, proximity, compass, barometer</td>
                    </tr>   
                    <tr>
                        <td class="spec-title">Messaging</td>
                        <td class="spec-info">iMessage, SMS (threaded view), MMS, Email, Push Email</td>
                    </tr>
                    <tr>
                        <td class="spec-title">Browser</td>
                        <td class="spec-info">HTML5 (Safari)</td>
                    </tr>
                    <tr>
                        <td class="spec-title">Java</td>
                        <td class="spec-info">No</td>
                    </tr>
                </table>

                <!-- BATTERY -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="3" scope="row">BATTERY</th>
                        <td class="spec-title">&nbsp;</td>
                        <td class="spec-info">Non-removable Li-Ion 2860 mAh battery</td>
                    </tr>
                    <tr>
                        <td class="spec-title">Talk Ttime</td>
                        <td class="spec-info">Up to 14 h (3G)</td>
                    </tr>   
                    <tr>
                        <td class="spec-title">Music play</td>
                        <td class="spec-info">Up to 40 h</td>
                    </tr>
                </table>
              </div>
            <div id="menu2" class="tab-content-detail tab-pane fade">
                <h3>Link Terkait</h3>
                <p>Alamat Web lain</p>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection