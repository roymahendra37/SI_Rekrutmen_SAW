<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h2 style="margin-bottom:  50px">Selamat Datang Admin!</h2>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $total }}</div>
                            <div>Pelamar</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('pelamar.index') }}">
                    <div class="panel-footer">
                        <span class="pull-left">Lihat Data Pelamar</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-layout>

