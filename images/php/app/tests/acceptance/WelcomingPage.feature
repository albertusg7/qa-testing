#language: id
#workflow
Fitur: Welcoming Page

Dasar:
    # Dengan saya mendownload apk "Sooltan"
    # Dan terdapat halaman "Welcoming Page 1"

@positif_skenario
Skenario: Berhasil melihat Welcoming Page
Saya sebagai user, dapat membuka aplikasi sooltan hingga homepage tanpa perlu login atau registrasi terlebih dahulu

    Dengan saya berada pada halaman "Welcoming Page 1"
    Dan terdapat Opsi "Lanjutkan"
    Dan terdapat Opsi "Lewati"
    Ketika user pilih "Lanjutkan" 
    Maka sistem akan menuju halaman "Welcoming Page 2"
    Dengan saya berada pada halaman "Welcoming Page 2"
    Dan terdapat Opsi "Lanjutkan"
    Dan terdapat Opsi "Lewati"
    Ketika user pilih "Lanjutkan" 
    Maka sistem akan menuju halaman "Welcoming Page 3"
    Dengan saya berada pada halaman "Welcoming Page 3"
    Dan terdapat Opsi "Saya Mengerti"
    Ketika user pilih "Saya Mengerti" 
    Maka sistem akan menuju halaman "Homepage"
    Dan terdapat opsi "Tidak menampilkan lagi welcoming di kemudian hari"

Skenario: Berhasil Skip ke Homepage
Saya sebagai user, dapat membuka aplikasi sooltan hingga homepage tanpa perlu login atau registrasi terlebih dahulu

    Dengan saya berada pada halaman "Welcoming Page 1"
    Dan terdapat Opsi "Lanjutkan"
    Dan terdapat Opsi "Lewati"
    Ketika user pilih "Lewati"
    Maka sistem akan menuju halaman "Homepage"
    Dan terdapat opsi "Tidak menampilkan lagi welcoming di kemudian hari"

# @log
# Skenario: Berhasil menyimpan log user pada saat berada di Welcoming Page
# data user my sooltan di log

#     Dan sistem menyimpan log "waktu user saat masuk ke halaman welcoming page 1"
#     Dan sistem menyimpan log "lama user saat berada di halaman welcoming page 1"
#     Dan sistem menyimpan log "banyak user saat pilih opsi "skip" di halaman welcoming page 1"
#     Dan sistem menyimpan log "banyak user saat pilih opsi "Lanjutkan" di halaman welcoming page 1"
#     Dan sistem menyimpan log "waktu user saat masuk ke halaman welcoming page 2"
#     Dan sistem menyimpan log "lama user saat berada di halaman welcoming page 2"
#     Dan sistem menyimpan log "banyak user saat pilih opsi "skip" di halaman welcoming page 2"
#     Dan sistem menyimpan log "banyak user saat pilih opsi "“Lanjutkan”" di halaman welcoming page 2"
#     Dan sistem menyimpan log "waktu user saat masuk ke halaman welcoming page 3"
#     Dan sistem menyimpan log "lama user saat berada di halaman welcoming page 3"
#     Dan sistem menyimpan log "banyak user saat pilih opsi "“Lanjutkan”" di halaman welcoming page 3"

