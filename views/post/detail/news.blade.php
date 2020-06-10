@extends('layout.main')
@section('title')
<div class="container mt-5 pt-5">
  <div class="text-left p-4 bg-success text-light">
    <h2>News</h2>
  </div>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a class="black-text" href="{{url('/')}}" style="text-decoration:none;">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">News</li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-md-9">
      <h3>Kenali Tanda-tanda Kehamilan Sehat</h3><hr>
    <img class="float-left w-50" style="margin:0 10px 5px 0;" src="img/kehamilan.jpg" alt="tiara">
    <p class="text-justify">
      Terlambat datang bulan merupakan hal pertama yang menandakan kehamilan. Meski demikian, tanda ini bisa salah jika Anda memang memiliki siklus menstruasi yang tidak teratur. Untuk mengecek kepastian hamil, gunakan testpack seminggu setelah terlambat datang bulan. Usia kehamilan sendiri dihitung sejak hari pertama haid terakhir, meskipun saat itu belum terjadi pembuahan. Setelah positif hamil, Anda disarankan untuk menjalani pemeriksaan kehamilan ke dokter kandungan. <br>
      <strong>Berbagai Tanda Kehamilan yang Sehat</strong>
      Jika testpack maupun dokter kandungan menyatakan positif hamil, tanda-tanda berikut mungkin akan dialami seiring bertambahnya usia kehamilan. <br>
      <b>Mual dan muntah</b>
      Morning sickness alias mual dan muntah saat hamil, biasanya dirasakan pada trimester pertama kehamilan.  Mual dan muntah tidak hanya dirasakan pada pagi hari, tapi bisa juga saat siang atau malam hari. Gejala ini berangsur-angsur hilang saat memasuki usia kehamilan 12 minggu.
      Mual dan muntah di awal kehamilan kemungkinan disebabkan oleh perubahan hormon. Namun tidak perlu khawatir jika Anda tidak mengalami mual dan muntah. Banyak ibu hamil yang tidak mengalami gejala ini, tapi kehamilannya tetap sehat. <br>
      Kondisi yang justru harus diwaspadai adalah ketika muntah tidak hilang setelah usia kehamilan 12 minggu atau muntah yang sangat sering. Kondisi ini disebut hiperemesis gravidarium, dan bisa menyebabkan dehidrasi akibat kesulitan makan. Jika mengalami ini, Anda mungkin memerlukan perawatan di rumah sakit. <br>
      <b>Sensitif terhadap makanan dan bau-bauan</b>
      Banyak ibu hamil yang merasakan indera penciumannya menjadi semakin sensitif di awal kehamilan. Sensitivitas terhadap bau dapat memicu mual, muntah, dan menurunkan nafsu makan. Penyebab kondisi ini masih belum jelas, namun kemungkinan karena perubahan hormon dan berkaitan dengan morning sickness. Salah satu cara untuk mengatasi mual dan muntah selama kehamilan, adalah dengan menghindari bau-bauan kuat atau menyengat. <br>
      <b>Sering buang air kecil</b>
      Saat hamil, frekuensi buang air kecil akan semakin sering. Kondisi ini disebabkan oleh meningkatnya volume darah semasa kehamilan, sehingga ginjal harus bekerja ekstra dan menghasilkan urine lebih banyak. Saat hamil, jumlah urine yang mengisi kandung kemih akan lebih cepat meningkat sehingga ibu hamil akan merasa sering ingin buang air kecil. Perubahan hormon kehamilan dan bertambahnya ukuran rahim juga berperan dalam menyebabkan ibu hamil sering buang air kecil. <br>
      <b>Nyeri payudara</b>
      Perubahan payudara merupakan tanda kehamilan sehat, dan mulai terjadi sejak trimester pertama kehamilan. Biasanya diawali dengan payudara terasa lebih membesar, sensitif, disertai sedikit nyeri. Kondisi ini disebabkan oleh naiknya hormon estrogen dan progesteron, dan biasanya akan hilang saat tubuh sudah beradaptasi dengan hormon kehamilan. <br>
      Efek dari lonjakan hormon juga membuat kelenjar susu tumbuh lebih banyak dan aliran darah di area ini meningkat. Kemudian pada minggu ke-11, areola (area di sekitar puting) berubah menjadi Perubahan ini bertujuan untuk mempersiapkan payudara dalam menyusui bayi. <br>
      <b>Mudah lelah</b>
      Kelelahan menjadi hal yang paling sering dikeluhkan oleh ibu hamil. Di awal kehamilan, kadar hormon progesteron meningkat, sehingga menyebabkan kantuk. Kondisi ini bisa diatasi dengan istirahat dan tidur yang cukup. Namun waspadai jika mudah lelah diikuti gejala lain, seperti pucat, sering sakit kepala, nyeri dada, jantung berdebar, dan kaki tangan teraba dingin. Tanda-tanda tersebut menandakan anemia pada ibu hamil. <br>
      Untuk meningkatkan energi, Anda juga bisa melakukan olahraga untuk ibu hamil, seperti senam hamil. Namun konsultasikan dulu pada dokter sebelum memulainya, apalagi jika sebelum hamil Anda tidak terbiasa olahraga. <br>
      <b>Gerakan janin</b>
      Merasakan tendangan janin merupakan tanda bahwa bayi tumbuh dan berkembang sehat. Pergerakan janin sebenarnya bisa dirasakan mulai di awal kehamilan. Tetapi mendekati akhir trimester kedua kehamilan, pergerakan janin semakin kuat dan sering. Umumnya, janin paling aktif bergerak pada jam 9 malam sampai jam 1 pagi. Selain itu, gerakan janin juga merupakan respons janin terhadap suara dan sentuhan.
      Pergerakan janin akan tampak dalam pemeriksaan USG kehamilan. Jika intensitas pergerakan janin berkurang, Anda dapat melakukan trik untuk memancing janin bergerak atau memeriksakan diri ke dokter untuk mengetahui penyebabnya. <br>
      <b>Perubahan emosional (mood swing)</b>
      Emosi yang mudah berubah (mood swing) yang dirasakan ibu hamil, dipicu oleh berbagai faktor termasuk perubahan hormon, kelelahan, dan stres. Faktor tersebut kemudian memengaruhi zat kimia (neurotransmiter) di otak. Hasilnya ibu hamil mungkin merasakan pergantian emosi dari bahagia, gugup, bahkan sampai depresi. <br>
      Jika mood swing yang dialami sampai mengganggu aktivitas sehari-hari atau bertahan lebih dari dua minggu, konsultasikan pada dokter atau psikolog. Penelitian menunjukkan bahwa gangguan emosional yang tidak ditangani dapat memengaruhi kesehatan janin, meningkatkan risiko persalinan prematur dan depresi pascamelahirkan. Oleh karenanya, sangat penting untuk mendapatkan bantuan dan pengobatan profesional jika mengalami hal ini.
    </p>
  </div>
  <div class="col-3 text-center">
    <h3>Pag</h3>
      <a href="#">Kehamilan</a> <br>
      <a href="#">Anak</a>


  </div>
</div>
</div>
@endsection