<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Dashboard
                    <!--begin::Separator-->
                    <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <span class="text-muted fs-7 fw-bold mt-2">#XRS-45670</span>
                    <!--end::Description--></h1>
                    <!--end::Title-->
                </div>
            </div>
        </div> 
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-12">
                    <!--begin::Mixed Widget 2-->
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Header-->
                        
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-3">
                            <a href="#" class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#tambahdata">Tambah Data</a>



                            <div wire:ignore.self class="modal fade" id="tambahdata" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content rounded">
                                        <!--begin::Modal header-->
                                        <div class="modal-header pb-0 border-0 justify-content-end">
                                            <!--begin::Close-->
                                            <div wire:click="clear()" class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Close-->
                                        </div>
                                        <!--begin::Modal header-->
                                        <!--begin::Modal body-->
                                        <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                            <!--begin:Form-->
                                            <form>
                                                <!--begin::Heading-->
                                                
                                                <!--end::Heading-->
                                                <!--begin::Input group-->
                                                <div class="d-flex flex-column mb-8 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                        <span class="required">ID Pegawai</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <input wire:model="id_pegawai" type="text" class="form-control form-control-solid" placeholder="ID Pegawai" name="id_pegawai" />
                                                </div>
                                                <div class="d-flex flex-column mb-8 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                        <span class="required">Nama Lengkap</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <input wire:model="nama" type="text" class="form-control form-control-solid" placeholder="Nama Lengkap" name="nama" />
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="row g-9 mb-8">
                                                    <!--begin::Col-->
                                                    <div class="col-md-6 fv-row">
                                                        <label class="required fs-6 fw-bold mb-2">Jenis Kelamin</label>
                                                        <select wire:model="jenis_kelamin" class="form-select form-select-solid" data-hide-search="true" data-placeholder="Pilih Jenis Kelamin" name="target-assign" data-control="jenis_kelamin">
                                                            <option value="">Select user...</option>
                                                            <option value="Pria">Pria</option>
                                                            <option value="Wanita">Wanita</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-md-6 fv-row">
                                                        <label class="required fs-6 fw-bold mb-2">Nomor HP</label>
                                                        <!--begin::Input-->
                                                            <!--begin::Datepicker-->
                                                            <input wire:model="no_hp" type="number" class="form-control form-control-solid" placeholder="Masukkan Nomor HP" />
                                                            <!--end::Datepicker-->
                                                        {{-- </div> --}}
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="d-flex flex-column mb-8">
                                                    <label class="fs-6 fw-bold mb-2">
                                                        <span class="required">Alamat</span>
                                                    </label>
                                                    <textarea wire:model="alamat" class="form-control form-control-solid" rows="3" name="alamat" placeholder="Masukkan Alamat Lengkap"></textarea>
                                                </div>
                                                
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="text-center">
                                                    <button wire:click="clear()" type="button" class="btn btn-danger me-3" data-bs-dismiss="modal">Cancel</button>
                                                    <button wire:click="simpan()" type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Simpan</button>
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end:Form-->
                                        </div>
                                        <!--end::Modal body-->
                                    </div>
                                    <!--end::Modal content-->
                                </div>
                                <!--end::Modal dialog-->
                            </div>






                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead class="text-left">
                                        <tr class="fw-bolder text-light bg-primary">
                                            <th class="ps-4 rounded-start">ID Pegawai</th>
                                            <th class="ps-4" >Nama</th>
                                            <th class="ps-4">Jenis Kelamin</th>
                                            <th class="ps-4">No HP</th>
                                            <th class="ps-4">Alamat</th>
                                            <th class="ps-4 rounded-end">Action</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    @foreach ($pegawais as $dt)
                                    <tbody class="text-left">
                                        <tr>
                                            <td class="ps-4 text-dark fw-bolder">
                                                {{ $dt->id_pegawai }}
                                            </td>
                                            <td class="text-dark fw-bolder">
                                                {{ $dt->nama }}
                                            </td>
                                            <td class="text-dark fw-bolder">
                                                {{ $dt->jenis_kelamin }}
                                            </td>
                                            <td class="text-dark fw-bolder">
                                                {{ $dt->no_hp }}
                                            </td>
                                            <td class="text-dark fw-bolder">
                                                {{ $dt->alamat }}
                                            </td>
                                            <td class="text-dark fw-bolder">
                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                                                            <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <a wire:click="edit('{{ $dt->id }}')" href="javascript:;" data-bs-toggle="modal" data-bs-target="#tambahdata" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <a wire:click="hapus('{{ $dt->id }}')" href="javascript:;" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>    
                                    @endforeach
                                    
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->
                    </div>
                    <!--end::Mixed Widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                
                <!--end::Col-->
            </div>
        </div>
    </div>   
</div>
<br><br><br><br><br><br><br><br><br>





