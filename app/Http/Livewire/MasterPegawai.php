<?php

namespace App\Http\Livewire;
use App\Models\Pegawai;
use Livewire\Component;

class MasterPegawai extends Component
{
    public $pegawai_id, $id_pegawai, $nama, $jenis_kelamin, $no_hp, $alamat;
    public $status = false;
    public function render()
    {
        return view('livewire.master-pegawai',[
            'pegawais' => Pegawai::latest()->get()
        ]);
    }

    public function simpan()
    {
        Pegawai::updateOrCreate([
            'id' => $this->pegawai_id
        ],[
            'id_pegawai' => $this->id_pegawai,
            'nama' => $this->nama,
            'jenis_kelamin' => $this->jenis_kelamin,
            'no_hp' => $this->no_hp,
            'alamat' => $this->alamat
        ]);

        $this->reset_tulisan();
    }

    private function reset_tulisan()
    {
        $this->id_pegawai='';
        $this->nama='';
        $this->jenis_kelamin='';
        $this->no_hp='';
        $this->alamat='';
    }

    public function clear()
    {
        $status = false;
        $this->reset_tulisan();
    }

    public function hapus($id)
    {
        if($id){
            $hapus_data=Pegawai::find($id);
            $hapus_data->delete();
        }
    }

    public function edit($id)
    {

        $this->status=true;
        $edit=Pegawai::where('id',$id)->first();
        $this->id_pegawai=$edit->id_pegawai;
        $this->nama=$edit->nama;
        $this->jenis_kelamin=$edit->jenis_kelamin;
        $this->no_hp=$edit->no_hp;
        $this->alamat=$edit->alamat;
        $this->pegawai_id=$edit->id;
    }
}
