@if(\Route::current()->getName() == 'testSuratKeterangan')
<html>
    <head>
        @include('layouts.partials.css')
    </head>
    <body>
        <div class="container">
@endif
            <!-- potong disini -->
            <div class="row">
                <div class="col-xs-3 float-left"><img style="height: 140px;width:140px;" class="pull-right img img-fluid img-responsive" src="{{ url('suratketerangan/images/logo.png') }}" /></div>
                <div class="col-xs-9 text-center">
                    <h3 class="pt-0 pb-0 mt-0 mb-0">dr. Milka Wikga Putri</h3>
                    <h2 class="pt-0 mt-0 pb-0 mb-0">SIP: 446/3203/1934/V-21</h2>
                    <p class="pt-0 mt-0 pb-0 mb-0">Blotan RT 3 RW 40</p>
                    <p class="pt-0 mt-0 pb-0 mb-0">Wedomartani, Ngemplak, Sleman, DI Yogyakarta 55584</p>
                    <p class="pt-0 mt-0 pb-0 mb-0">Email: milkaaesthetic@gmail.com</p>
                    <p class="pt-0 mt-0 pb-0 mb-0">Telp. 0811 2929 07</p>
                </div>
                <div class="col-xs-12" style="border-top: dotted  black 2px; border-bottom: solid black 3px;"></div>
            </div>
            <div class="row mt-10 mb-5">
                <div class="col-xs-12">
                    <table>
                        <tbody>
                            <tr>
                                <td width="151">
                                    <p class="pt-0 mt-0 pb-0 mb-0"><strong>No. RM</strong></p>
                                    <p class="pt-0 mt-0 pb-0 mb-0"><strong>No Transaksi</strong></p>
                                    <p class="pt-0 mt-0 pb-0 mb-0"><strong>Tgl Order</strong></p>
                                    <p class="pt-0 mt-0 pb-0 mb-0"><strong>Nama</strong></p>
                                    <p class="pt-0 mt-0 pb-0 mb-0"><strong>Tgl Lahir/Umur/JK</strong></p>
                                    <p class="pt-0 mt-0 pb-0 mb-0"><strong>Alamat</strong></p>
                                </td>
                                <td width="19">
                                    <p class="pt-0 mt-0 pb-0 mb-0">:</p>
                                    <p class="pt-0 mt-0 pb-0 mb-0">:</p>
                                    <p class="pt-0 mt-0 pb-0 mb-0">:</p>
                                    <p class="pt-0 mt-0 pb-0 mb-0">:</p>
                                    <p class="pt-0 mt-0 pb-0 mb-0">:</p>
                                    <p class="pt-0 mt-0 pb-0 mb-0">:</p>
                                </td>
                                <td width="532">
                                    <p class="pt-0 mt-0 pb-0 mb-0">126</p>
                                    <p class="pt-0 mt-0 pb-0 mb-0">{{ $receipt_details->invoice_no }}</p>
                                    <p class="pt-0 mt-0 pb-0 mb-0">{{ $receipt_details->invoice_date }}</p>
                                    <p class="pt-0 mt-0 pb-0 mb-0">{{ $receipt_details->customer_name }}</p>
                                    <p class="pt-0 mt-0 pb-0 mb-0">{{ $receipt_details->customer_name }}19 Agustus 1958/62 Tahun/Perempuan</p>
                                    <p class="pt-0 mt-0 pb-0 mb-0">Jl. Hayam Wuruk 36, RT 019 RW 006, Bausasran, Danurejan, Yogyakarta</p>
                                </td>
                            </tr>
                            <tr>
                                <td width="151">
                                    <p class="pt-0 mt-0 pb-0 mb-0"><strong>&nbsp;</strong></p>
                                </td>
                                <td width="19">
                                    <p class="pt-0 mt-0 pb-0 mb-0">&nbsp;</p>
                                </td>
                                <td width="532">
                                    <p class="pt-0 mt-0 pb-0 mb-0">&nbsp;</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <h2 class="col-xs-12 pt-0 pb-0 mt-0 mb-10 text-center">Hasil Pemeriksaan</h2>
                <div class="col-xs-12">
                    <table class="table mb-0">
                        <tbody>
                            <tr class="border-bottom border-top">
                                <td width="28">
                                    <p>&nbsp;</p>
                                </td>
                                <td width="180">
                                    <p><strong>Pemeriksaan</strong></p>
                                </td>
                                <td colspan="2" width="113">
                                    <p><strong>Hasil</strong></p>
                                </td>
                                <td width="113">
                                    <p><strong>Satuan</strong></p>
                                </td>
                                <td colspan="2" width="127">
                                    <p><strong>Normal</strong></p>
                                </td>
                                <td width="141">
                                    <p><strong>Metode</strong></p>
                                </td>
                            </tr>
                            <tr class="border-bottom-small top" height="40">
                                <td width="28">
                                    <p>1</p>
                                </td>
                                <td width="180">
                                    <p>SWAB RAPID ANTIGEN</p>
                                </td>
                                <td colspan="2" width="113">
                                    <p>Negatif</p>
                                </td>
                                <td width="113">
                                    <p>&nbsp;</p>
                                </td>
                                <td colspan="2" width="127">
                                    <p>Negatif</p>
                                </td>
                                <td width="141">
                                    <p>Swab Nasal</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" width="265">
                                    <p>Jam Pengambilan Spesimen 1 SERUM&nbsp;</p>
                                    <p class="small">*&nbsp;&nbsp; : Hasil dibawah / diatas nilai normal</p>
                                    <p class="small">** : Nilai Kritis</p>
                                </td>
                                <td colspan="3" style="vertical-align: top;" width="203">
                                    <p>1 Juli 2021 17:20:17</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <p><strong>Catatan :</strong></p>
                    <p>Interprestasi dan Saran:</p>
                    <ol>
                        <li>Jika hasil Positif : dilanjutkan dengan pemeriksaan Real Time PCR.</li>
                        <li>Jika hasil Negatif :</li>
                        <li>Pada pemeriksaan pertama : Isolasi diri dan ulang rapid test Antigen 7 - 10 hari kemudian.</li>
                        <li>Pada pemeriksaan kedua : sangat mungkin bukan infeksi SARS-CoV-2, namun pasien harus tetap menjaga pola hidup bersih dan sehat (PHBS).</li>
                        <li>Apabila selama isolasi gejala memberat, segera melapor ke RS Rujukan Covid 19</li>
                    </ol>
                </div>
            </div>
            
            <div class="row" style="margin-top: 25px !important; ">
                <div class="col-xs-12">
                    <table class="table">
                        <tbody>
                            <tr style="vertical-align: top;">
                                <td width="148">
                                    <p>Tanggal Keluar Hasil</p>
                                </td>
                                <td width="26">
                                    <p>:</p>
                                </td>
                                <td width="237">
                                    <p>{tgl_order}</p>
                                    <p>&nbsp;</p>
                                </td>
                                <td class="text-center" width="285">
                                    <p>Penanggung Jawab</p>
                                    <p style="margin-top: 75px;">dr. Milka Wikga Putri</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- potong disini -->
            @if(\Route::current()->getName() == 'testSuratKeterangan')
        </div>
        @include('layouts.partials.javascripts')
    </body>
</html>
@endif