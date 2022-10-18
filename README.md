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
    
    Dummy Login
    email : admin@gmail.com
    password : 123123123



    //Diharuskan Login dan memasang bearer token sebelum mengakses route dibawah ini

    
    #Logout:
    http://localhost:8000/api/logout  -> Method POST + Bearer

    #Lihat Data Kampus:
    http://localhost:8000/api/kampus  -> Method GET + Bearer Token


    #Cari Kampus:    
    Bisnis Rule : 
    1. Dapat mencara berdasarkan nama kampus/slug

    http://localhost:8000/api/cari-kampus/{data}  -> Method GET + Bearer Token + Parameter data (bisa berupa nama kampus/slug)
    
    contoh : http://localhost:8000/api/cari-kampus/itk


    #Mengikuti Kampus:    
    Bisnis Rule : 
    1. Jika user sudah mengikuti kampus tsb, maka sistem akan unfollow kampus tsb
    2. Jika data kampus tersebut tidak tersedia, maka response error

    http://localhost:8000/api/mengikuti-kampus/{slug}  -> Method POST + Bearer Token + Parameter slug 

    contoh : http://localhost:8000/api/mengikuti-kampus/itk

    #Lihat Mengikuti Kampus:
    http://localhost:8000/api/mengikuti-kampus  -> Method GET + Bearer Token
    

    #Lihat Jurusan:
    Bisnis Rule : 
    1. Jika data kampus tersebut tidak tersedia, maka response error

    http://localhost:8000/api/{slug}/jurusan  -> Method GET + Bearer Token + Parameter slug

    contoh : http://localhost:8000/api/itk/jurusan



    Author : Erza Fahmi Fasya