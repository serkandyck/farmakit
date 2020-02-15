@extends('layouts.app')

@section('title', 'Gösterge Paneli')

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="ik ik-file-text bg-blue"></i>
                            <div class="d-inline">
                                <h5>Ayarlar</h5>
                                <span>Bu bölümden profil ve cihaz ayarlarınızı yapabilirsiniz.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <nav class="breadcrumb-container" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/"><i class="ik ik-home"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Ayarlar</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    @if($errors->any())
                        <div class="alert bg-danger alert-danger text-white" role="alert">
                          Lütfen aşşağıdaki hataları düzeltip tekrar deneyiniz
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session('message'))
                        <div class="alert bg-success alert-success text-white" role="alert">
                          {{session('message')}}
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert bg-danger alert-danger text-white" role="alert">
                          {{session('error')}}
                        </div>
                    @endif
                    <div class="card">
                        <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#current-month" role="tab" aria-controls="pills-timeline" aria-selected="true">Profil Ayarları</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-timeline-tab" data-toggle="pill" href="#sifre-ayarlari" role="tab" aria-controls="pills-timeline" aria-selected="true">Şifre Ayarları</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-profile" aria-selected="false">Cihaz Ayarları</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Bildirim Ayarları</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="current-month" role="tabpanel" aria-labelledby="pills-timeline-tab">
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="example-name">Ad Soyad</label>
                                            <input type="text" placeholder="Johnathan Doe" class="form-control" name="example-name" id="example-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email">Email</label>
                                            <input type="email" placeholder="johnathan@admin.com" class="form-control" name="example-email" id="example-email">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-password">Telefon</label>
                                            <input type="password" value="password" class="form-control" name="example-password" id="example-password">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-phone">Phone No</label>
                                            <input type="text" placeholder="123 456 7890" id="example-phone" name="example-phone" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-message">Message</label>
                                            <textarea name="example-message" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-country">Select Country</label>
                                            <select name="example-message" id="example-message" class="form-control">
                                                <option>London</option>
                                                <option>India</option>
                                                <option>Usa</option>
                                                <option>Canada</option>
                                                <option>Thailand</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-success" type="submit">Update Profile</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sifre-ayarlari" role="tabpanel" aria-labelledby="sifre-ayarlari-tab">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('updatePassword') }}" class="form-horizontal">
                                        @csrf
                                        <div class="form-group">
                                            <label for="password">Eski Şifreniz</label>
                                            <input type="password" placeholder="Eski şifre" class="form-control" name="password" id="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Yeni Şifre</label>
                                            <input type="password" placeholder="Yeni şifre" class="form-control" name="new_password" id="new_password">
                                        </div>
                                        <div class="form-group">
                                            <label for="password_confirmation">Yeni Şifre Tekrar</label>
                                            <input type="password" placeholder="Yeni şifre tekrarı" class="form-control" name="new_password_confirmation" id="new_password_confirmation">
                                        </div>
                                        <button class="btn btn-success" type="submit">Şifreyi Güncelle</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="example-name">Full Name</label>
                                            <input type="text" placeholder="Johnathan Doe" class="form-control" name="example-name" id="example-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email">Email</label>
                                            <input type="email" placeholder="johnathan@admin.com" class="form-control" name="example-email" id="example-email">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-password">Password</label>
                                            <input type="password" value="password" class="form-control" name="example-password" id="example-password">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-phone">Phone No</label>
                                            <input type="text" placeholder="123 456 7890" id="example-phone" name="example-phone" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-message">Message</label>
                                            <textarea name="example-message" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-country">Select Country</label>
                                            <select name="example-message" id="example-message" class="form-control">
                                                <option>London</option>
                                                <option>India</option>
                                                <option>Usa</option>
                                                <option>Canada</option>
                                                <option>Thailand</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-success" type="submit">Update Profile</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="example-name">Full Name</label>
                                            <input type="text" placeholder="Johnathan Doe" class="form-control" name="example-name" id="example-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email">Email</label>
                                            <input type="email" placeholder="johnathan@admin.com" class="form-control" name="example-email" id="example-email">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-password">Password</label>
                                            <input type="password" value="password" class="form-control" name="example-password" id="example-password">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-phone">Phone No</label>
                                            <input type="text" placeholder="123 456 7890" id="example-phone" name="example-phone" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-message">Message</label>
                                            <textarea name="example-message" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-country">Select Country</label>
                                            <select name="example-message" id="example-message" class="form-control">
                                                <option>London</option>
                                                <option>India</option>
                                                <option>Usa</option>
                                                <option>Canada</option>
                                                <option>Thailand</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-success" type="submit">Update Profile</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
<script type="text/javascript">
  $(document).ready(function() {
    
  });
</script>
@endsection