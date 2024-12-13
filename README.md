Mata Kuliah  : Bimbingan Karir-TI-S1 <br />
Tugas        : Pertama <br />
Nama         : Rizky Eka Septiandi <br />
NIM          : A11.2021.13889 <br />


1. Pada database **poli_bk** terdapat 8 table yaitu daftar_poli, detail_periksa, dokter, jadwal_periksa, obat, pasien, periksa, dan poli. <br />
   **Daftar Hubungan Foreign Key :** <br />
   1.	Tabel daftar_poli <br />
      •	ID_jadwal (daftar_poli) ke ID (jadwal_periksa) <br />
     	•	ID_pasien (daftar_poli) ke ID (pasien) <br />
   2.	Tabel detail_periksa <br />
      •	ID_obat (detail_periksa) ke ID (obat) <br />
     	•	ID_periksa (detail_periksa) ke ID (periksa) <br />
   3.	Tabel dokter <br />
      •	ID_poli (dokter) ke ID (poli) <br />
   4.	Tabel jadwal_periksa <br />
      •	ID_dokter (jadwal_periksa) ke ID (dokter) <br />
   5.	Tabel periksa <br />
      •	ID_daftar_poli (periksa) ke ID (daftar_poli) <br />

2. Template web menggunakan AdminLTE (baik untuk admin, dokter, maupun pasien). <br />

3. Login sebagai admin <br />
   Untuk login sebagai admin: <br />
   Username: admin <br />
   Password: admin <br />

4. Login sebagai dokter <br />
   Untuk login sebagai dokter: <br />
   Username: [nama dokter bisa dilihat di database] <br />
   Password: [nama dokter bisa dilihat di database] <br />

5. Tampilan menu dashboard dapat menampilkan sesuai menu yang diklik <br />

6. Tampilan CRUD obat telah berhasil dibuat <br />
   
    




   
   



   
  
