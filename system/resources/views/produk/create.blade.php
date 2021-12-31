@extends('template.beranda')
@section('content')
<div class="container">
            <div class="row">
              <div class="col-md-12  col-xs-12">
                <div class="card" style="margin-top: 40px;">
                  <div class="card-header">
                    Tambah Data produk
                  </div>
                  <div class="card-body" >
                   <form action="{{url('admin/produk')}}" method="post">
                      @csrf
                     <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama"></input>
                     </div>
                     <div class="row">
                       <div class="col-md-3">
                           <div class="form-group">
                             <label for="" class="control-label">foto</label>
                             <input type="file" class="form-control" name="foto" accept=".png"></input>
                          </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                             <label for="" class="control-label">Stok</label>
                             <input type="text" class="form-control" name="stok"></input>
                          </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                             <label for="" class="control-label">Harga</label>
                             <input type="text" class="form-control" name="harga"></input>
                           </div> 
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                             <label for="" class="control-label">Berat</label>
                             <input type="text" class="form-control" name="berat"></input>
                           </div> 
                        </div>
                     </div>
                      <div class="form-group">
                             <label for="" class="control-label">Deskripsi</label>
                             <textarea name="deskripsi" class="form-control"></textarea>
                         </div>
                     <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                  </div>
                </div>
              </div>  
            </div> 
          </div>
@endsection