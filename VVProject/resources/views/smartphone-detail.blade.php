@extends('layouts.app')

@section('content')
<div id="fh5co-main">
    <div class="container">
        <div class="row">
            <h3 class="row-title-detail">Smartphone Details</h3>
            <div class="content col-md-12">
                <div class="col-md-4 img-detail-border">
                    <img src="{{$smartphone['UrlPhoto']}}" alt="{{$smartphone['Title']}}" class="img-rounded img-responsive">
                </div>
                <div class="col-md-8 content-detail">
                    <h3 class="phone-title-detail">{{$smartphone['Title']}}</h3>
                    <hr class="hr-divider"/>
                    <p>{{$smartphone['Status']}}</p>
                    <p>{{$smartphone['Weight']}}</p>
                    <p>{{$smartphone['OS']}}</p>
                    <p>{{$smartphone['Internal']}}</p>
                    <div class="col-md-3 border-p-detail">
                        <span class="glyphicon glyphicon-phone p-detail" aria-hidden="true"></span>
                        <p class="p-detail">{{$smartphone['Size']}}</p><span>{{$smartphone['Resolution']}}</span>
                    </div>
                    <div class="col-md-3 border-p-detail">
                        <span class="glyphicon glyphicon-camera p-detail" aria-hidden="true"></span>
                        <p class="p-detail">{{$smartphone['Primary']}}</p><span>{{$smartphone['Video']}}</span>
                    </div>
                    <div class="col-md-3 border-p-detail">
                        <span class="glyphicon glyphicon-hdd p-detail" aria-hidden="true"></span>
                        <p class="p-detail">{{$smartphone['Internal']}}</p><span>{{$smartphone['CPU']}}</span>
                    </div>
                    <div class="col-md-3 border-p-detail">
                        <span class="glyphicon glyphicon-time p-detail" aria-hidden="true"></span>
                        <p class="p-detail">{{$smartphone['Kosong']}}</p><span>Li-Ion</span>
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
                <!-- <p>0 Rekomendasi Penjual Ditemukan</p> -->
                <div class="row product-container">
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
                    <!-- <div class="navigate-to"><a href="" class="btn-see-more">See more at Bukalapak.com >></a></div> -->
                </div>
              </div>
              <div id="menu1" class="tab-content-detail tab-pane fade">
                <h3>Spesifikasi</h3>
                <!-- Network -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="8" scope="row">NETWORK</th>
                        <td class="spec-title">Technology</td>
                        <td class="spec-info"><?php if(isset($smartphone['Technology'])){echo $smartphone['Technology'];}?></td>
                    </tr>   
                    <tr>
                        <td class="spec-title">2G bands</td>
                        <td class="spec-info"><?php if(isset($smartphone['2G bands'])){echo $smartphone['2G bands'];}?></td>
                    </tr>
                    <tr>
                        <td class="spec-title">3G bands</td>
                        <td class="spec-info"><?php if(isset($smartphone['3G bands'])){echo $smartphone['3G bands'];}?></td>
                    </tr>
                    <tr>
                        <td class="spec-title">4G bands</td>
                        <td class="spec-info"><?php if(isset($smartphone['4G bands'])){echo $smartphone['4G bands'];}?></td>
                    </tr>
                    <tr>
                        <td class="spec-title">Speed</td>
                        <td class="spec-info"><?php if(isset($smartphone['Speed'])){echo $smartphone['Speed'];}?></td>
                    </tr>
                    <tr>
                        <td class="spec-title">GPRS</td>
                        <td class="spec-info"><?php if(isset($smartphone['GPRS'])){echo $smartphone['GPRS'];}?></td>
                    </tr>
                    <tr>
                        <td class="spec-title">EDGE</td>
                        <td class="spec-info"><?php if(isset($smartphone['EDGE'])){echo $smartphone['EDGE'];}?></td>
                    </tr>
                </table>

                <!-- LAUNCH -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="2" scope="row">LAUNCH</th>
                        <td class="spec-title">Announced</td>
                        <td class="spec-info"><?php if(isset($smartphone['Announced'])){echo $smartphone['Announced'];}?></td>
                        
                    </tr>   
                    <tr>
                        <td class="spec-title">Status</td>
                        <td class="spec-info"><?php if(isset($smartphone['Status'])){echo $smartphone['Status'];}?></td>
                    </tr>
                </table>

                <!-- BODY -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="3" scope="row">BODY</th>
                        <td class="spec-title">Dimensions</td>
                        <td class="spec-info"><?php if(isset($smartphone['Dimensions'])){echo $smartphone['Dimensions'];}?></td>
                    </tr>   
                    <tr>
                        <td class="spec-title">Weight</td>
                        <td class="spec-info"><?php if(isset($smartphone['Weight'])){echo $smartphone['Weight'];}?></td>
                    </tr>
                    <tr>
                        <td class="spec-title">SIM</td>
                        <td class="spec-info"><?php if(isset($smartphone['SIM'])){echo $smartphone['SIM'];}?></td>
                    </tr>
                </table>

                <!-- Display -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="4" scope="row">DISPLAY</th>
                        <td class="spec-title">Type</td>
                        <td class="spec-info"><?php if(isset($smartphone['Type'])){echo $smartphone['Type'];}?></td>
                    </tr>   
                    <tr>
                        <td class="spec-title">Size</td>
                        <td class="spec-info"><?php if(isset($smartphone['Size'])){echo $smartphone['Size'];}?></td>
                    </tr>
                    <tr>
                        <td class="spec-title">Resolution</td>
                        <td class="spec-info"><?php if(isset($smartphone['Resolution'])){echo $smartphone['Resolution'];}?></td>
                    </tr>
                    <tr>
                        <td class="spec-title">Multitouch</td>
                        <td class="spec-info"><?php if(isset($smartphone['Multitouch'])){echo $smartphone['Multitouch'];}?></td>
                    </tr>
                </table>

                <!-- Platform -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="4" scope="row">PLATFORM</th>
                        <td class="spec-title">OS</td>
                        <td class="spec-info"><?php if(isset($smartphone['OS'])){echo $smartphone['OS'];}?></td>
                    </tr>   
                    <tr>
                        <td class="spec-title">Chipset</td>
                        <td class="spec-info"><?php if(isset($smartphone['Chipset'])){echo $smartphone['Chipset'];}?></td>
                    </tr>
                    <tr>
                        <td class="spec-title">CPU</td>
                        <td class="spec-info"><?php if(isset($smartphone['CPU'])){echo $smartphone['CPU'];}?></td>
                    </tr>
                    <tr>
                        <td class="spec-title">GPU</td>
                        <td class="spec-info"><?php if(isset($smartphone['GPU'])){echo $smartphone['GPU'];}?></td>
                    </tr>
                </table>

                <!-- Memory -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="2" scope="row">MEMORY</th>
                        <td class="spec-title">Card slot</td>
                        <td class="spec-info"><?php if(isset($smartphone['MEMORY'])){echo $smartphone['MEMORY'];}?></td>
                    </tr>   
                    <tr>
                        <td class="spec-title">Internal</td>
                        <td class="spec-info"><?php if(isset($smartphone['Internal'])){echo $smartphone['Internal'];}?></td>
                    </tr>
                </table>

                <!-- Camera -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="4" scope="row">CAMERA</th>
                        <td class="spec-title">Primary</td>
                        <td class="spec-info"><?php if(isset($smartphone['Primary'])){echo $smartphone['Primary'];}?></td>
                    </tr>   
                    <tr>
                        <td class="spec-title">Features</td>
                        <td class="spec-info"><?php if(isset($smartphone['Features'])){echo $smartphone['Features'];}?></td>
                    </tr>
                    <tr>
                        <td class="spec-title">Video</td>
                        <td class="spec-info"><?php if(isset($smartphone['Video'])){echo $smartphone['Video'];}?></td>
                    </tr>
                    <tr>
                        <td class="spec-title">Secondary</td>
                        <td class="spec-info"><?php if(isset($smartphone['Secondary'])){echo $smartphone['Secondary'];}?></td>
                    </tr>
                </table>

                <!-- Sound -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="3" scope="row">SOUND</th>
                        <td class="spec-title">Alert types</td>
                        <td class="spec-info"><?php if(isset($smartphone['Alert types'])){echo $smartphone['Alert types'];}?></td>
                    </tr>   
                    <!-- <tr> -->
                        <!-- <td class="spec-title">Loudspeaker</td>
                        <td class="spec-info">{{$smartphone['Dimensions']}}</td> -->
                    <!-- </tr> -->
                    <tr>
                        <td class="spec-title">3.5mm jack</td>
                        <td class="spec-info"><?php if(isset($smartphone['3.5mm jack'])){echo $smartphone['3.5mm jack'];}?></td>
                    </tr>
                </table>

                <!-- COMMS -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="6" scope="row">COMMS</th>
                        <td class="spec-title">WLAN</td>
                        <td class="spec-info"><?php if(isset($smartphone['WLAN'])){echo $smartphone['WLAN'];}?></td>
                    </tr>   
                    <tr>
                        <td class="spec-title">Bluetooth</td>
                        <td class="spec-info"><?php if(isset($smartphone['Bluetooth'])){echo $smartphone['Bluetooth'];}?></td>
                    </tr>
                    <tr>
                        <td class="spec-title">GPS</td>
                        <td class="spec-info"><?php if(isset($smartphone['GPS'])){echo $smartphone['GPS'];}?></td>
                    </tr>
                    <tr>
                        <td class="spec-title">NFC</td>
                        <td class="spec-info"><?php if(isset($smartphone['NFC'])){echo $smartphone['NFC'];}?></td>
                    </tr>
                    <tr>
                        <td class="spec-title">Radio</td>
                        <td class="spec-info"><?php if(isset($smartphone['Radio'])){echo $smartphone['Radio'];}?></td>
                    </tr>
                    <tr>
                        <td class="spec-title">USB</td>
                        <td class="spec-info"><?php if(isset($smartphone['USB'])){echo $smartphone['USB'];}?></td>
                    </tr>
                </table>

                <!-- FEATURES -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="4" scope="row">FEATURES</th>
                        <td class="spec-title">Sensors</td>
                        <td class="spec-info"><?php if(isset($smartphone['Sensors'])){echo $smartphone['Sensors'];}?></td>
                    </tr>   
                    <tr>
                        <td class="spec-title">Messaging</td>
                        <td class="spec-info"><?php if(isset($smartphone['Messaging'])){echo $smartphone['Messaging'];}?></td>
                    </tr>
                    <tr>
                        <td class="spec-title">Browser</td>
                        <td class="spec-info"><?php if(isset($smartphone['Browser'])){echo $smartphone['Browser'];}?></td>
                    </tr>
                    <tr>
                        <td class="spec-title">Java</td>
                        <td class="spec-info"><?php if(isset($smartphone['Java'])){echo $smartphone['Java'];}?></td>
                    </tr>
                </table>

                <!-- BATTERY -->
                <table class="table spec-table" cellspacing="0">
                    <tr>
                        <th rowspan="3" scope="row">BATTERY</th>
                        <td class="spec-title">&nbsp;</td>
                        <td class="spec-info">{{$smartphone['Kosong']}}</td>
                    </tr>
                    <!-- <tr>
                        <td class="spec-title">Talk Ttime</td>
                        <td class="spec-info">{{$smartphone['Dimensions']}}</td>
                    </tr> -->   
                    <!-- <tr>
                        <td class="spec-title">Music play</td>
                        <td class="spec-info">Up to 40 h</td>
                    </tr> -->
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