<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Data;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    protected function createData(
        $user_id, $nama, $NIP,
        $bagian, $tujuan, $jenjang_pendidikan,
        $surat, $approved = 'Menunggu'
    ) {
        Data::create([
            'user_id' => $user_id,
            'nama' => $nama,
            'NIP' => $NIP,
            'bagian' => $bagian,
            'tujuan' => $tujuan,
            'jenjang_pendidikan' => $jenjang_pendidikan,
            'surat' => $surat,
            'approved' => $approved,
        ]);
    }

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('password123')
        ]);

        User::create([
            'name' => 'leader',
            'email' => 'leader@gmail.com',
            'role' => 'approver',
            'password' => Hash::make('leader123')
        ]);

        User::create([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'role' => 'user',
            'password' => Hash::make('password234')
        ]);
    
        User::create([
            'name' => 'John',
            'email' => 'john@gmail.com',
            'role' => 'user',
            'password' => Hash::make('password345')
        ]);

        $this->createData(3, 'Nichole', 'SP001', 'Dokumentasi', 'Universitas Konoha', 'S1', 'file/surat1.pdf', 'Ditolak');
        $this->createData(3, 'Tesla', 'SP002', 'Akuntansi', 'Universitas Amagakure', 'S1', 'file/surat2.pdf');
        $this->createData(4, 'John', 'SP003', 'Manajemen', 'Universitas Akatsuki', 'S2', 'file/surat3.pdf', 'Disetujui');
        $this->createData(4, 'Smith', 'SP004', 'Perbankan', 'Universitas Unknown', 'S5', 'file/surat4.pdf', 'Ditolak');
    }
}
