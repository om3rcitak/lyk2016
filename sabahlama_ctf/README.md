## Linux Yaz Kampı 2015, Web Güvenliği CTF
Linux Yaz Kampı 2015'te Web Güvenliği sınıfı için hazırlamış olduğum CTF soruları.

## Çözümler

#### 1- Login Olamıyorum :(
Kullanıcı girişi yapıldığında, kullanıcıya ait veriler user class'ından türetilmiş bir object'e kaydoluyor. Ve object'in serialize edilmiş hali cookie olarak clientte tutuluyor. Farklı bir kullanıcı olarak giriş yapıp, cookie editleyerek admin user'ıymış gibi sistemi kandırabilmeniz gerekiyor.

#### 2- Meetrix
Verilen matrix.php dosyasının source code görüntülendiğinde matrix film afişinin text veriyonu çıkmaktadır. Badchars mantığı ile zararlı karakterleri replace ederek flagi bulmanız gerekiyor.


#### 3- Bot
Sistem, normal bir clientten gelen requestlere normal cevap veriyor. Eğer gelen request google veya yandex botu ise flagi print ediyor. Request'in User-agent bilgisi ile oynarayak flag'i ekrana basmanız gerekiyor.

#### 4- Zaman Akıp Gidiyor
Sayfa ilk açıldığında post olarak time parametresi beklediğini zaten belirtiyor. Post ile time datası yolladığımızda ise ekrana wordwrap edilmiş bir md5 değeri basılıyor. O md5 değeri request gönderilen anın timestamp formatının md5 hash halidir. Bunun farkına varıp, request gönderilecek zamanın timestamp'ının md5 hashini post method ile time parametresinde göndererek flagi bulabilirsiniz.

#### 5- İkseses
Klasik XSS sorusudur. "alert", "script", "/", "onerror", "'", '"' karakter ve kelimeleri replace edilmiştir. Kelime filtrelerini recursive, tek karakter filtrelerini ise o karakterlere gerek duymayan bir html tag'i kullanarak aşabilirsiniz.

#### 6- Emlakçı
Elimizde txt formatında bir emlak datası var. Satır satır her data kendi içinde space'e göre explode etmeniz gerekiyor. İlk sayı arsanın  eni, 2. sayı arsanın boyu, 3. sayı ise arsanın metrekare fiyatını belirtiyor. Gerekli kod betiği ile gerekli işlemler yapılıp, en kıymetli arsanın kaç metrekare olduğunu integer formatında girmeniz gerekiyor.

# 
[#lyk2015](https://twitter.com/search?q=%23lyk2015&src=typd), [Ömer Çıtak](http://omercitak.com/)



