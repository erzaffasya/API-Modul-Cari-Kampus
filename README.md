Framework Lumen 9

setelah clone projek jalankan pada terminal di projek:
1. composer install
2. cp .env.example .env
3. setting .env sesuai dengan settingan pc (pastikan database sudah dibuat dan sesuai)
3. php artisan migrate --seed

Cara Menjalankan server:
php -S localhost:8000 -t public


List Route:

    #Login:
    http://localhost:8000/api/login   -> Method POST


    #Logout:
    http://localhost:8000/api/logout  -> Method POST


    //Diharuskan Login dan memasang bearer token sebelum mengakses route dibawah ini

    #Lihat Data Kampus:
    http://localhost:8000/api/kampus  -> Method GET + Bearer Token


    #Cari Kampus:
    http://localhost:8000/api/cari-kampus/{slug}  -> Method GET + Bearer Token
    
    contoh : http://localhost:8000/api/cari-kampus/itk


    #Mengikuti Kampus:
    http://localhost:8000/api/mengikuti-kampus/{slug}  -> Method POST + Bearer Token

    contoh : http://localhost:8000/api/mengikuti-kampus/itk


    #Lihat Mengikuti Kampus:
    http://localhost:8000/api/mengikuti-kampus  -> Method GET + Bearer Token
    

    #Lihat Jurusan:
    http://localhost:8000/api/{slug}/jurusan  -> Method GET + Bearer Token

    contoh : http://localhost:8000/api/itk/jurusan



    Author : Erza Fahmi Fasya