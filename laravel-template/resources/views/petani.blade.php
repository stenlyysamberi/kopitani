@extends('main.index')

@section('menu')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $menu1 }}</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $menu2 }}</a></li>
                    <li class="breadcrumb-item active">{{ $menu3 }}</li>
                </ol>
            </div>
            <h4 class="page-title">{{ $menu4 }}</h4>
        </div>
    </div>
</div>

@if (session('user'))

      <div class="alert alert-success" role="alert">
        <i class="mdi mdi-check-all mr-2"></i>  {{ session('user') }}
    </div>
@endif

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <a data-toggle="modal" data-target="#add-dokter" href="javascript:void(0);" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle mr-2"></i> Tamba</a>
                    </div>
                    <div class="col-sm-8">
                        <div class="text-sm-right">
                            <button type="button" class="btn btn-success mb-2 mr-1"><i class="mdi mdi-cog"></i></button>
                            <button type="button" class="btn btn-light mb-2 mr-1">Import</button>
                            <button type="button" class="btn btn-light mb-2">Export</button>
                        </div>
                    </div><!-- end col-->
                </div>

                <div class="table-responsive">
                    <table class="table table-centered table-striped dt-responsive nowrap w-100" id="products-datatable">
                        <thead>
                            <tr>
                                <th style="width: 20px;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                    </div>
                                </th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                
                                <th style="width: 75px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                           

                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                                        <label class="custom-control-label" for="customCheck4">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="table-user">
                                    <img src="assets/images/users/user-2.jpg" alt="table-user" class="mr-2 rounded-circle">
                                    <a href="javascript:void(0);" class="text-body font-weight-semibold">Stenly Samberi</a>
                                </td>
                                
                                <td>stenly@gmail.com</td>
                                <td>
                                    Jl.Airport Sentni Timur Papua, Indonesia
                                </td>

                                <td>
                                    <a data-toggle="modal" data-target="#put-petani" href="#" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    
                                    <form action="/petani" method="post">
                                       @method("delete")
                                        @csrf
                                       
                                      
                                        <button onclick="return confirm('Are you sure?')" class="action-icon border-0"><i class="mdi mdi-delete"></i></button>
                                    </form>
                                    
                                </td>
                            </tr>

                            {{-- add form model --}}

<form enctype="multipart/form-data" method="POST" action="/put_petani">
    @method('put')
    @csrf
   

    <div id="put-petani" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">


        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Edit Doctor</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body p-4">


                   <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Nama Lengkap</label>
                            <input type="text" value="" name="nama"  class="form-control" id="field-3" placeholder="Nama Lengkap">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Username</label>
                            <input type="text" value="" name="username" required="required" class="form-control" id="field-3" placeholder="Username">
                        </div>
                    </div>
                </div>
               

               
                

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Phone</label>
                            <input value="" type="text" maxlength="12" name="phone" class="form-control" id="field-1" required="required" placeholder="+62">
                        </div>
                    </div>
                   
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-2"  class="control-label">Level</label>
                            <select name="level" required="required" class="form-control">
                                <option value="">Pilih</option>
                                <option value="admin">Admin</option>
                                <option value="dokter">Dokter</option>
                                <option value="ceo">CEO</option>
                               
                            </select>
                        </div>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">Alamat Rumah</label>
                            <textarea name="remember_token" required="required" class="form-control" id="field-7" placeholder="Enter Text"></textarea>
                        </div>
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                         <h4 class="header-title">Image Profil</h4>
                        <p class="sub-header">
                           Set your Profil Image.
                        </p>

                        <input type="file"  name="gambar" class="form-control" width="100" />
                        
                    </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-info waves-effect waves-light">Ok, Simpan</button>
        </div>



    </div>
</div>

</div>

</form>


{{-- and add --}}
                                
                            
                            
                           
                            
                        </tbody>
                    </table>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>


{{-- add form model --}}

<form method="POST" action="/petani" enctype="multipart/form-data">
    @csrf
    <div id="add-dokter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">


        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Tamba Petani</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body p-4">


                   <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Nama Lengkap</label>
                            <input type="text" name="nama"  class="form-control" id="field-3" placeholder="Nama Lengkap">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Email</label>
                            <input type="email" name="email" required="required" class="form-control" id="field-3" placeholder="Username">
                        </div>
                    </div>
                </div>
               

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Nomor HP/WA</label>
                            <input type="phone"  name="phone" required="required" class="form-control" id="field-3" placeholder="Enter text">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Kampung</label>
                            <input type="text"  name="kamp" required="required" class="form-control" id="field-3" placeholder="Enter Text">
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-2"  class="control-label">Kab</label>
                            <select name="level" required="required" class="form-control">
                                <option value="">Pilih</option>
                                <option value="admin">Jayapura</option>
                                <option value="dokter">Biak</option>
                                <option value="ceo">Wasior</option>
                               
                            </select>
                        </div>
                    </div>
                   
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-2"  class="control-label">Provinsi</label>
                            <select name="level" required="required" class="form-control">
                                <option value="">Pilih</option>
                                <option value="admin">Papua</option>
                                <option value="dokter">Papua Barat</option>
                               
                               
                            </select>
                        </div>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <img src="assets/images/users/user-1.jpg" alt="">
                        </div>
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                         <h4 class="header-title">Image Profil</h4>
                        <p class="sub-header">
                           Set your Profil Image.
                        </p>

                        <input type="file" required  name="image" class="form-control" width="100" />
                        
                    </div>

                
                  
                       



               

            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-info waves-effect waves-light">Tamba</button>
            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Batal</button>
            
        </div>



    </div>
</div>

</div>

</form>


{{-- and add --}}

@endsection
