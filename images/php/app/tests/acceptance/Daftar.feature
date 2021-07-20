# language: id
#workflow
Fitur: Daftar Akun

Dasar:
    Dengan saya berada di halaman "beranda"
    Dan terdapat opsi "masuk"
    Dan saya memilih opsi "masuk"
    Dan saya berada di halaman "Daftar Akun"

@positif_skenario
Skenario: Daftar Berhasil
Saya sebagai user sooltan dapat daftar akun, agar saya dapat login di aplikasi sooltan

    Dengan saya berada di halaman "Daftar Akun" 
    Dan terdapat opsi:
        """
        Nama Lengkap:
        Nomor HP:
        Kode Referral:
        """
    Dan terdapat opsi "sudah punya akun? Masuk"
    Dan saya pilih opsi "Masuk"
