<?php
    class Transaksi_model{
        private $transaksi = [
            [
                "id" => "23453",
                "nama_pelanggan" => "Dafa",
                "produk" => "Cuci Kiloan",
                "total_harga" => "10000",
                "status" => "Selesai",
            ],
            [
                "id" => "23413",
                "nama_pelanggan" => "Dhafin",
                "produk" => "Cuci Kiloan",
                "total_harga" => "10000",
                "status" => "Selesai",
            ],
            [
                "id" => "23443",
                "nama_pelanggan" => "Fariz",
                "produk" => "Cuci Kiloan",
                "total_harga" => "10000",
                "status" => "Dalam Pengerjaan",
            ],
            [
                "id" => "23463",
                "nama_pelanggan" => "Dede",
                "produk" => "Cuci Kiloan",
                "total_harga" => "10000",
                "status" => "Belum Selesai",
            ],
            [
                "id" => "23493",
                "nama_pelanggan" => "Ucup",
                "produk" => "Cuci Kiloan",
                "total_harga" => "10000",
                "status" => "Belum Selesai",
            ],
        ];

        public function getAllTransaksi(){
            return $this->transaksi;
        }
    }
?>