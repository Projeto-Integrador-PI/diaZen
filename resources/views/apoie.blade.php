@extends(".layouts.container")
@section("content")

<div class="content">
        <div class="container">
          <h3>Doe para o projeto!</h3>
          <p>Somos um espaço sem fins lucrativos. As doações que recebemos são fundamentais para custear as atividades gratuitas deste aplicativo a fim de ajudar pessoas a adquirir autoconhecimento.</p>
          <p>Recebemos doações de qualquer valor que podem ser feitas via transferência, pix ou pelo Pagseguro.</p>
          <div class="qr-code">
            <img src="{{URL::asset('assets/images/qrcode.png')}}" alt="QR Code"/>
          </div>
        </div>

@endsection