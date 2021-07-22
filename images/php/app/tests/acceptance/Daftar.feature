# language: id
#workflow
Fitur: Daftar Akun

Dasar:
    Dengan saya berada di halaman "beranda"
    Dan terdapat opsi "masuk"
    Dan saya memilih opsi "masuk"
    Dan saya berada di halaman "Daftar Akun"

@positif_skenario
Skenario: 
Saya sebagai user sooltan dapat daftar akun, agar saya dapat login di aplikasi sooltan

    Dengan saya berada di halaman "Daftar Akun" 
    # Dan terdapat form:
    #     """
    #     Nama Lengkap:
    #     Nomor HP:
    #     Kode Referral:
    #     """
    # Dan terdapat opsi "sudah punya akun? Masuk"
    # Dan saya pilih opsi "Masuk"
    # Maka sistem akan menampilkan halaman "login"
    # Dan terdapat opsi "step 1 Data Akun"
    # Dan terdapat opsi "kembali"
    # Dan saya pilih opsi "kembali" 
    # Maka sistem akan menampilkan halaman "beranda"
    Dan saya mengisi form:
    """
    Nama Lengkap: Tissa Maharanti
    Nomor HP: 081310273428
    Kode Referral: qwe123
    """
    # Dan terdapat opsi "Selanjutnya" 
    Dan saya pilih opsi "Selanjutnya"
    Maka sistem akan menampilkan halaman "OTP"

# Aturan: user harus mengisi form "Data Akun" dengan benar 
    # | field          | sample data      | validation                                                                |
    # |--------------- |---------------   |---------------------------------------------------------------------------|
    # | Nama Lengkap   | tissa maharanti  | mandatory, 3-30 character (max block), alphabet                           |
    # | Nomor HP       | 081310273428     | mandatory, 6-20 character (max block), number, no space                   |
    # | Kode Referral  | qwe123           | optional, 6-20 character (max block), alphabet, number, no space          |


@negatif_skenario 
Skenario konsep: user menginputkan  <Nama Lengkap> dan <Nomor HP> dan <Kode Referral>
    Ketika saya berada di halaman "Daftar Akun"
    Dan Saya mengisi dengan case <case>
    Maka sistem menampilkan <result>
    Contoh:
        | case                                 | <Nama Lengkap> | <Nomor HP>   |<Kode Referral>| <copywriting>	   	                             |
    	|--------------------------------------|------------    |-----------   |---------------|-------------------------------------------------|
    	| [positive case] - Daftar Akun passed | tissa maharanti| 081310273428 |               |                                                 |
    	| [negative case] - Daftar Akun failed | tissa maharanti| 081102728    |               | Nomor HP yg Anda masukkan salah                 |
        | [negative case] - Daftar Akun failed |                |              |               | Nama Lengkap dan Nomor HP harus diisi           |
        | [negative case] - Daftar Akun failed |                | 081310273428 |               | Nama Lengkap harus diisi                        |
        | [negative case] - Daftar Akun failed | tissa maharanti|              |               | Nomor HP harus diisi                            |
