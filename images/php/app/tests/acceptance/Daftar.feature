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
    Nama Lengkap: Tissa Maharanti
    Nomor HP: 081310273428
    Kode Referral: qwe123
    usia number: 20
    menikah b: true
    """
    Dan terdapat opsi "sudah punya akun? Masuk"
    Dan saya pilih opsi "Masuk"
