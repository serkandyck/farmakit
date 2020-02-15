@extends('layouts.app')

@section('title', 'Gösterge Paneli')

@section('content')
  <div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-12">
                                <h3 class="card-title">Anlık Veri</h3>
                                <h5 style="color: red; text-align: center;">NOT: Anlık veri analizi sadece "fr02" modeli ile çalışmaktadır.</h5>
                                <main class="main">
                                  <div class="gauge-container row">
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="gauge1"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="gauge2"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="gauge3"></div>
                                    </div>
                                  </div>
                            </main>

                                <svg width="0" height="0" version="1.1" class="gradient-mask" xmlns="http://www.w3.org/2000/svg">
                                  <defs>
                                    <linearGradient id="gradientGauge">
                                    <stop class="color-red" offset="0%"/>
                                    <stop class="color-yellow" offset="17%"/>
                                    <stop class="color-green" offset="40%"/>
                                    <stop class="color-yellow" offset="87%"/>
                                    <stop class="color-red" offset="100%"/>
                                    </linearGradient>
                                  </defs>  
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Recent Chat</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body chat-box scrollable" style="height:300px;">
                        <ul class="chat-list">
                            <li class="chat-item">
                                <div class="chat-img"><img src="img/users/1.jpg" alt="user"></div>
                                <div class="chat-content">
                                    <h6 class="font-medium">James Anderson</h6>
                                    <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the printing &amp; type setting industry.</div>
                                </div>
                                <div class="chat-time">10:56 am</div>
                            </li>
                            <li class="chat-item">
                                <div class="chat-img"><img src="img/users/2.jpg" alt="user"></div>
                                <div class="chat-content">
                                    <h6 class="font-medium">Bianca Doe</h6>
                                    <div class="box bg-light-info">It’s Great opportunity to work.</div>
                                </div>
                                <div class="chat-time">10:57 am</div>
                            </li>
                            <li class="odd chat-item">
                                <div class="chat-content">
                                    <div class="box bg-light-inverse">I would love to join the team.</div>
                                    <br>
                                </div>
                            </li>
                            <li class="odd chat-item">
                                <div class="chat-content">
                                    <div class="box bg-light-inverse">Whats budget of the new project.</div>
                                    <br>
                                </div>
                                <div class="chat-time">10:59 am</div>
                            </li>
                            <li class="chat-item">
                                <div class="chat-img"><img src="img/users/3.jpg" alt="user"></div>
                                <div class="chat-content">
                                    <h6 class="font-medium">Angelina Rhodes</h6>
                                    <div class="box bg-light-info">Well we have good budget for the project</div>
                                </div>
                                <div class="chat-time">11:00 am</div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer chat-footer">
                        <div class="input-wrap">
                            <input type="text" placeholder="Type and enter" class="form-control">
                        </div>
                        <button type="button" class="btn btn-icon btn-theme"><i class="fa fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <h4 class="card-title">Weather Report</h4>
                            <select class="form-control w-25 ml-auto">
                                <option selected="">Today</option>
                                <option value="1">Weekly</option>
                            </select>
                        </div>
                        <div class="d-flex align-items-center flex-row mt-30">
                            <div class="p-2 f-50 text-info"><i class="wi wi-day-showers"></i> <span>23<sup>°</sup></span></div>
                            <div class="p-2">
                            <h3 class="mb-0">Saturday</h3><small>Banglore, India</small></div>
                        </div>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>Wind</td>
                                    <td class="font-medium">ESE 17 mph</td>
                                </tr>
                                <tr>
                                    <td>Humidity</td>
                                    <td class="font-medium">83%</td>
                                </tr>
                                <tr>
                                    <td>Pressure</td>
                                    <td class="font-medium">28.56 in</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <ul class="list-unstyled row text-center city-weather-days mb-0 mt-20">
                            <li class="col"><i class="wi wi-day-sunny mr-5"></i><span>09:30</span><h3>20<sup>°</sup></h3></li>
                            <li class="col"><i class="wi wi-day-cloudy mr-5"></i><span>11:30</span><h3>22<sup>°</sup></h3></li>
                            <li class="col"><i class="wi wi-day-hail mr-5"></i><span>13:30</span><h3>25<sup>°</sup></h3></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="min-height: 422px;">
                    <div class="card-header">
                        <h3>Timeline</h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body timeline">
                        <div class="header bg-theme" style="background-image: url('img/placeholder/placeimg_400_200_nature.jpg')">
                            <div class="color-overlay d-flex align-items-center">
                                <div class="day-number">8</div>
                                <div class="date-right">
                                    <div class="day-name">Monday</div>
                                    <div class="month">February 2018</div>
                                </div>
                            </div>                                
                        </div>
                        <ul>
                            <li>
                                <div class="bullet bg-pink"></div>
                                <div class="time">11am</div>
                                <div class="desc">
                                    <h3>Attendance</h3>
                                    <h4>Computer Class</h4>
                                </div>
                            </li>
                            <li>
                                <div class="bullet bg-green"></div>
                                <div class="time">12pm</div>
                                <div class="desc">
                                    <h3>Design Team</h3>
                                    <h4>Hangouts</h4>
                                </div>
                            </li>
                            <li>
                                <div class="bullet bg-orange"></div>
                                <div class="time">2pm</div>
                                <div class="desc">
                                    <h3>Finish</h3>
                                    <h4>Go to Home</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
    $(function () {

      class GaugeChart {
      constructor(element, params) {
        this._element = element;
        this._initialValue = params.initialValue;
        this._higherValue = params.higherValue;
        this._title = params.title;
        this._subtitle = params.subtitle;
      }

      _buildConfig() {
        let element = this._element;

        return {
        value: this._initialValue,
        valueIndicator: {
          color: '#000' },

        geometry: {
          startAngle: 180,
          endAngle: 360 },

        scale: {
          startValue: -30,
          endValue: this._higherValue,
          customTicks: [-30, -20, -10, 0, 10, 20, 30, 40, 50, 60],
          tick: {
          length: 10 },

          label: {
          font: {
            color: '#87959f',
            size: 9,
            family: '"Open Sans", sans-serif' } } },



        title: {
          verticalAlignment: 'bottom',
          text: this._title,
          font: {
          family: '"Open Sans", sans-serif',
          color: '#000',
          size: 18 },

          subtitle: {
          text: this._subtitle,
          font: {
            family: '"Open Sans", sans-serif',
            color: '#000',
            weight: 700,
            size: 18 } } },



        onInitialized: function () {
          let currentGauge = $(element);
          let circle = currentGauge.find('.dxg-spindle-hole').clone();
          let border = currentGauge.find('.dxg-spindle-border').clone();

          currentGauge.find('.dxg-title text').first().attr('y', 48);
          currentGauge.find('.dxg-title text').last().attr('y', 28);
          currentGauge.find('.dxg-value-indicator').append(border, circle);
        } };


      }

      init() {
        $(this._element).dxCircularGauge(this._buildConfig());
      }}
      
      class GaugeChartNem {
      constructor(element, params) {
        this._element = element;
        this._initialValue = params.initialValue;
        this._higherValue = params.higherValue;
        this._title = params.title;
        this._subtitle = params.subtitle;
      }

      _buildConfig() {
        let element = this._element;

        return {
        value: this._initialValue,
        valueIndicator: {
          color: '#000' },

        geometry: {
          startAngle: 180,
          endAngle: 360 },

        scale: {
          startValue: 0,
          endValue: this._higherValue,
          customTicks: [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
          tick: {
          length: 10 },

          label: {
          font: {
            color: '#87959f',
            size: 9,
            family: '"Open Sans", sans-serif' } } },



        title: {
          verticalAlignment: 'bottom',
          text: this._title,
          font: {
          family: '"Open Sans", sans-serif',
          color: '#000',
          size: 18 },

          subtitle: {
          text: this._subtitle,
          font: {
            family: '"Open Sans", sans-serif',
            color: '#000',
            weight: 700,
            size: 18 } } },



        onInitialized: function () {
          let currentGauge = $(element);
          let circle = currentGauge.find('.dxg-spindle-hole').clone();
          let border = currentGauge.find('.dxg-spindle-border').clone();

          currentGauge.find('.dxg-title text').first().attr('y', 48);
          currentGauge.find('.dxg-title text').last().attr('y', 28);
          currentGauge.find('.dxg-value-indicator').append(border, circle);
        } };


      }

      init() {
        $(this._element).dxCircularGauge(this._buildConfig());
      }}


      $(document).ready(function () {
      
      let ortam = {
        initialValue: 0,
        higherValue: 60,
        title: 'Ortam',
        subtitle: '00.00 &deg;C'
      };
      
      let nem = {
        initialValue: 0,
        higherValue: 100,
        title: 'Nem',
        subtitle: '00.00 %'
      };
      
      let dolap = {
        initialValue: 0,
        higherValue: 60,
        title: 'Dolap',
        subtitle: '00.00 &deg;C'
      };

      let ortamGauge = new GaugeChart($('.gauge1'), ortam);
      ortamGauge.init();
      
      let nemGauge = new GaugeChartNem($('.gauge2'), nem);
      nemGauge.init();
      
      let dolapGauge = new GaugeChart($('.gauge3'), dolap);
      dolapGauge.init();

      $('#random').click(function () {

        $('.gauge1').each(function (index, item) {
        console.log(item);
        let gauge = $(item).dxCircularGauge('instance');
        let randomNum = Math.round(Math.random() * 1560);
        let gaugeElement = $(gauge._$element[0]);

        gaugeElement.find('.dxg-title text').last().html(`${randomNum} &deg;C`);
        gauge.value(randomNum);
        });
      });
      });

    });
    var client = new Paho.MQTT.Client('app.farmakit.com', 9001, "clientId");
    
    client.onConnectionLost = onConnectionLost;
    client.onMessageArrived = onMessageArrived;
    
    client.connect({
      onSuccess:onConnect,
      onFailure:onFailure
    });
    
    function onConnect() {
      
      console.log("onConnect");
      client.subscribe("1/sensor/ortam");
      client.subscribe("1/sensor/dolap");
      client.subscribe("1/sensor/nem");
    }

    function onFailure() {
        let gauge = $('.gauge1').dxCircularGauge('instance');
        let gaugeElement = $(gauge._$element[0]);

        gaugeElement.find('.dxg-title text').last().html(`-- &deg;C`);
        gauge.value(0);

        let gauge1 = $('.gauge3').dxCircularGauge('instance');
        let gaugeElement1 = $(gauge1._$element[0]);

        gaugeElement1.find('.dxg-title text').last().html(`-- &deg;C`);
        gauge1.value(0);

        let gauge2 = $('.gauge2').dxCircularGauge('instance');
        let gaugeElement2 = $(gauge2._$element[0]);

        gaugeElement2.find('.dxg-title text').last().html(`-- %`);
        gauge2.value(0);
    }
    
    // called when the client loses its connection
    function onConnectionLost(responseObject) {
      if (responseObject.errorCode !== 0) {
      console.log("onConnectionLost:"+responseObject.errorMessage);
        let gauge = $('.gauge1').dxCircularGauge('instance');
        let gaugeElement = $(gauge._$element[0]);

        gaugeElement.find('.dxg-title text').last().html(`-- &deg;C`);
        gauge.value(0);

        let gauge1 = $('.gauge3').dxCircularGauge('instance');
        let gaugeElement1 = $(gauge1._$element[0]);

        gaugeElement1.find('.dxg-title text').last().html(`-- &deg;C`);
        gauge1.value(0);

        let gauge2 = $('.gauge2').dxCircularGauge('instance');
        let gaugeElement2 = $(gauge2._$element[0]);

        gaugeElement2.find('.dxg-title text').last().html(`-- %`);
        gauge2.value(0);
      }
    }
    
    function onMessageArrived(message) {
      if(message.destinationName == "1/sensor/ortam") {
      if(message.payloadString == "nan") {
        let gauge = $('.gauge1').dxCircularGauge('instance');
        let newValue = parseFloat(message.payloadString);
        let gaugeElement = $(gauge._$element[0]);

        gaugeElement.find('.dxg-title text').last().html(`NaN &deg;C`);
        gauge.value(0);
      } else {
        let gauge = $('.gauge1').dxCircularGauge('instance');
        let newValue = parseFloat(message.payloadString);
        let gaugeElement = $(gauge._$element[0]);

        gaugeElement.find('.dxg-title text').last().html(`${newValue} &deg;C`);
        gauge.value(newValue);
      }
      }
      if(message.destinationName == "1/sensor/dolap") {
      if(message.payloadString == "nan") {
        let gauge = $('.gauge3').dxCircularGauge('instance');
        let newValue = parseFloat(message.payloadString);
        let gaugeElement = $(gauge._$element[0]);

        gaugeElement.find('.dxg-title text').last().html(`NaN &deg;C`);
        gauge.value(0);
      } else {
        let gauge = $('.gauge3').dxCircularGauge('instance');
        let newValue = parseFloat(message.payloadString);
        let gaugeElement = $(gauge._$element[0]);

        gaugeElement.find('.dxg-title text').last().html(`${newValue} &deg;C`);
        gauge.value(newValue);
      }
      }
      if(message.destinationName == "1/sensor/nem") {
      if(message.payloadString == "nan") {
        let gauge = $('.gauge2').dxCircularGauge('instance');
        let newValue = parseFloat(message.payloadString);
        let gaugeElement = $(gauge._$element[0]);

        gaugeElement.find('.dxg-title text').last().html(`NaN %`);
        gauge.value(0);
      } else {
        let gauge = $('.gauge2').dxCircularGauge('instance');
        let newValue = parseFloat(message.payloadString);
        let gaugeElement = $(gauge._$element[0]);

        gaugeElement.find('.dxg-title text').last().html(`${newValue} %`);
        gauge.value(newValue);
      }
      }
    }
</script>
@endsection