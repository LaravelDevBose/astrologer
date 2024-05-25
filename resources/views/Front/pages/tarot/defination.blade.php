        @extends('Layouts.default')
        @section('content')
        
        <link rel="stylesheet" href="{{asset('/public/assets/tarot_definition/css/tarot-definition.css')}}">
        
        <main class="wrapes">
        <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 ">
        <div class="wrap-2">
        <div class="container">
        <h1 class="my-3">{{$definationData->h1}}</h1>
        <picture>
        <img style="width: 100%;height: 200px;" class="img-fluid" src="{{asset('storage/app/public/uploads/tarot_images/'.$definationData->image)}}" alt="">
        </picture>
        <h2 class="mt-4">{{$definationData->h2}}</h2>
        <hr>
        <p>
        Receiving a <a href="">Tarot card reading</a> is an experience that can help you better understand your unique journey through the spiritual, emotional, and physical world.
        </p>

        <div class="zodiac-section">
        <h3 class="my-4 py-3"><a class="text-white"  href=""  >GET YOUR FREE DAILY TAROT READING</a></h3>
        </div><hr>
        <h2 class="my-4">
        The Major Arcana
        </h2>
        <p>It’s important to know that there are 22 <a href=""><strong>Major Arcana cards</strong></a> in an average 78-card deck. They represent archetypal images and energies and tell the Fool’s story, as he starts at number 0 and travels through all of life’s experiences, ending with the World card at number 21.</p>
        <p>
        The Major Arcana cards are the anchor of the Tarot and deal with the significant details within your life and can even represent a person. 
        </p>
        <p>
        Whenever a Major Arcana card reveals itself in your reading, pay special attention to it—the meaning of these cards specifically impacts the overall interpretation of your reading.
        </p>
        <div class="zodiac-section">
        <h3 class="my-4 py-3"><a class="text-white"  href=""  >LEARN MORE ABOUT THE MAJOR ARCANA</a></h3>
        </div><hr>
        </div>
        </div>
        <div class="wrap-3">
        <div class="container">
        <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/the-fool.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a class="color-purple" href="">The Fool</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/the-magician.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a class="color-purple" href="">The Magician</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/the-hight-priestess.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a class="color-purple" href="">The High Priestess</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/the-empress.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a class="color-purple" href="">The Empress</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/the-emeror.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">The Emperor</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/the-hierophant.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a class="color-purple" href="">The Hierophant</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/the-lovers-edited.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">The Lovers</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/the-chariot.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a class="color-purple" href="">The Chariot</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/strenght.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Strength</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/the-hermit.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">The Hermit</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/wheel-of-fortune.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Wheel of Fortune</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/justice.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Justice</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/the-hanged-man.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">The Hanged Man</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/death.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">The Death</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/temperance.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Temperance</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/the-devil-edited.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a class="color-purple" href="">The Devil</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/the-tower.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">The Tower</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/the-star-edited-v2.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">The Star</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/the-moon.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">The Moon</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/the-sun.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">The Sun</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/judgement.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Judgement</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/the-world-edited.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a class="color-purple" href="">The World</a></p>
        </div>
        </div>
        </div>
        </div>
        <div class="wrap-4 mb-5">
        <div class="container">
        <div class="zodiac-section">
        <h3 class="my-4 pb-3"><a class="text-white"  href=""  >TAKE THE QUIZ : WHICH TAROT CARD ARE YOU</a></h3>
        </div>
        <h2></h2>
        <p>
        The 56 cards of the <a href=""><strong>Minor Arcana</strong></a> are meant to complement the Major Arcana
        </p>
        <p>
        These cards help you focus on the current challenges and opportunities you face daily. They can help you better understand when opportunity knocks or prevent you from making decisions you are not 100% sure of.
        </p>
        <p>
        The 56 Minor Arcana cards are divided into four suits (similar to playing cards).
        </p>
        <p><strong>
        These suits are: 
        </strong></p>
        <ul>
        <li>
        <a href="Wands"></a>
        </li>
        <li>
        <a href="Pentacles"></a>
        </li>
        <li>
        <a href="Swords"></a>
        </li>
        <li>
        <a href="Cups"></a>
        </li>
        </ul>
        <p>
        Another purpose of this category is to better understand the Major Arcana cards in your reading. They give you additional details or perspectives that you need. Each suit contains court cards—pages, knights, queens, and kings—that contribute meaning in your reading.
        </p>
        
        <div class="zodiac-section">
        <h3 class="my-4 pb-3 "><a href="" class="text-white">LEARN MORE ABOUT THE MINOR ARCANA</a></h3>
        </div><hr>
        <h2 class="my-4">Cups</h2>
        <p><a href="">Cups</a> represent a person’s emotions or situation being inquired about. </p>
        <p>This suit is associated with the element of Water, a symbol found on almost every one of these cards. The water will either be in the scenery or the cup being presented.</p>
        <p>Suppose you are a Water sign (Cancer, Scorpio, or Pisces). In that case, you will feel most represented by these cards, as their symbolism will tie directly to your driving forces of creativity, inspiration, attachment, feelings, and intuition. Cups bring clarity to the emotional depth and connections we all feel, whether happy, joyful, or sad.</p>
        </div>
        </div>
        <div class="wrap-5">
        <div class="container">
        <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/ace.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Ace of Cups</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/2.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">2 of Cups</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/3.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">3 of Cups</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/4.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">4 of Cups</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/5.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">5 of Cups</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/6.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">6 of Cups</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/7.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">7 of Cups</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/8.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">8 of Cups</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/9.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">9 of Cups</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/10.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">10 of Cups</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/page.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Pages of Cups</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/knight.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Knight of Cups</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/queen.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Queen of Cups</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/king.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">King of Cups
        
        </a></p>
        </div>
        
        </div>
        </div>
        </div><hr>
        <div class="wrap-6">
        <div class="container">
        <h2 class="my-3">Pentacles</h2>
        <p><a href="">Pentacles</a> represent the path to success, varying based on what your definition of success means. </p>
        <p>This suit is associated with the element of Earth and is represented on each card by a pentacle, often on a golden disk. These star-shaped symbols will either be in the scenery or held in the hand of the person featured.</p>
        <p>
        Suppose you are an Earth sign (Taurus, Virgo, Capricorn). In that case, you will feel most represented by these cards, as their symbolism will tie directly to your core values of tradition, ambition, rationality, and reaching wealth and career goals. Pentacles bring the concepts of greed, loss, failure, and reality to the forefront of our readings.
        </p>
        </div>
        </div>
        <div class="wrap-7 my-5">
        <div class="container">
        <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/ace-1.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Ace of Pentacles</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/2-1.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">2 of Pentacles</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/3-1.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">3 of Pentacles</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/4-1.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">4 of Pentaclesl</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/5-1.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">5 of Pentacles</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/6-1.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">6 of Pentacles</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/7-1.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">7 of Pentacles</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/8-1.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">8 of Pentacles</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/9-1.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">9 of Pentacles</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/10-1.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4" ><a href="" class="color-purple">10 of Pentacles</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/page-1.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Pages of Pentacles</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/knight-1.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Knight of Pentacles</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/queen-1.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Queen of Pentacles</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/king-1.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">King of Pentacles</a></p>
        </div>
        
        </div>
        </div>
        </div><hr>
        <div class="wrap-8">
        <div class="container">
        <div class="zodiac-section">
        <h3 class="my-4 pb-3 "><a href="" class="text-white">TRY YOUR OWN 3-CARD TAROT READING</a></h3>
        </div>
        <h2>Swords</h2>
        <p><a href="">Swords</a> represent the obstacles you face regarding a person, place, or situation. </p>
        <p>
        This suit is associated with the element of Air and is represented on each card by a silver or gold sword. The higher the card, the more of this weapon is featured, either in the scenery or held in the hand of the person featured.
        </p>
        <p>
        If you are an Air sign (Gemini, Libra, Aquarius), you will feel most represented by these cards. These cards channel the challenges you face in social situations, such as power, intellect, growth, and good vs. evil. Swords allow us to tap into the thoughts of the people or situations we face to make the best decision for ourselves.
        </p>
        </div>
        </div>
        <div class="wrap-9">
        <div class="container">
        <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/ace-2.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Ace of Swords</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/2-2.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">2 of Swords</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/3-2.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">3 of Swords</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/4-2.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">4 of Swords</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/5-2.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">5 of Swords</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/6-2.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">6 of Swords</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/7-2.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">7 of Swords</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/8-2.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">8 of Swords</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/9-2.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">9 of Swords</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/10-2.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">10 of Swords</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/page-2.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Pages of Swords</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/knight-2.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Knight of Swords</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/queen-2.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Queen of Swords</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/king-2.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">King of Swords</a></p>
        </div>
        
        </div>
        </div>
        </div><hr>
        <div class="wrap-10">
        <div class="container">
        <h2 class="my-3">Wands</h2>
        <p><a href="">Wands</a> represent the actions we are taking or should be taking in order to show us how to make the next move. </p>
        <p>This suit is associated with the element of Fire and is represented on each card by a wooden stick or pole. This symbol of wood ties to fire as these cards show us what is already there in front of us, we just need to light the flame.</p>
        <p>If you are a Fire sign (Aries, Leo, Sagittarius), you will feel most represented by these cards, as they channel your main drivers such as activity, ambition, enthusiasm, and passionate thought. </p>
        <p>Wands allow us to get to the core of our being and discover what “lights our fire.” In turn, Wands allow us to understand and put into motion our dreams and passions.</p>
        </div>
        </div>
        <div class="wrap-11 my-4">
        <div class="container">
        <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/ace-3.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Ace of Wands</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/2-3.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">2 of Wands</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/3-3.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">3 of Wands</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/4-4.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">4 of Wands</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/5-3.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">5 of Wands</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/4-3.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">6 of Wands</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/7-3.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">7 of Wands</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/8-3.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">8 of Wands</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/9-3.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">9 of Wands</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/10-3.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">10 of Wands</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/page-3.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Page of Wands</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/knight-3.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Knight of Wands</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/queen-3.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">Queen of Wands</a></p>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-12 text-center">
        <picture>
        <img class="img-fluid" src="https://www.astrologyanswers.com/wp-content/uploads/2022/05/king-3.jpg.webp" alt="" loading="lazy">
        </picture>
        <p class="my-2 text-center fs-4 mb-4"><a href="" class="color-purple">King of Wands</a></p>
        </div>
        
        </div>
        </div>
        </div><hr>
        <div class="button-wrapper">
        <div class="container">
        <div class="row g-2">
        <h2 class="fw-bold mt-4">Explore More Tarot Readings</h2> <hr>
        <div class="col-5">
        <div class="eleven">
        <img src="" alt="">
        <a href="#" class="text-white text-uppercase fw-bold"> daily tarot reading</a>
        </div>
        </div>
        <div class="col-5">
        <div class="eleven">
        <img src="" alt="">
        <a href="#" class="text-white text-uppercase fw-bold"> daily love reading</a>
        </div>
        </div>
        <div class="col-4">
        <div class="eleven">
        <img src="" alt="">
        <a href="#" class="text-white text-uppercase fw-bold"> 3-Card reading</a>
        </div>
        </div>
        <div class="col-5">
        <div class="eleven">
        <img src="" alt="">
        <a href="#" class="text-white text-uppercase fw-bold"> tarot career reading</a>
        </div>
        </div>
        </div>
        </div>
        </div>
        
        
        <div class="wrap-12 mb-3 mt-2">
        <div class="row">
        @if(count($footer_articles))
        @foreach($footer_articles as $article)
        <div class="col-lg-6 col-md-6 col-sm-6">
        <img class="figure" src="{{ $article->thumbImage != '' ? asset("storage/app/public/horoscopecategory/{$article->thumbImage}") : 'https://www.astrologyanswers.com/wp-content/uploads/2023/11/mercury-cap-300x300.png.webp' }}" alt="" data-src="https://www.astrologyanswers.com/wp-content/uploads/2022/08/how-to-make-the-most-of-the-new-moon-in-capricorn-850x850-astrologyanswers-300x300.jpg.webp" data-ll-status="loaded">
        
        <h3 class="elementor-post__title mt-5">
        <a href="{{url('Article/'.$article->slug)}}">{{ $article->title }}</a>
        </h3>
        
        <p>{{ strip_tags(substr($article->contant, 0, 160)) }}...</p>
        
        <a class="elementor-post__read-more" href="{{url('Article/'.$article->slug)}}" aria-label="Read more about THIS New Moon is About to Bring You Financial Security & Heightened Ambition" tabindex="-1">
        Read Full Article »
        </a>
        </div>
        @endforeach
        @endif
        
        
        </div>
        </div>
        
        </div>
        
        <div class="col-md-4 py-3">
        <div class="trendingList">
        <p class="font-30-600 font-1 my-0">Editor's Picks</p>

        <ul class="list-unstyled">
          @if(count($editor_picks_articles))
          @foreach($editor_picks_articles as $article)
          <a href="{{url('Article/'.$article->slug)}}" class="text-decoration-none d-flex mb-lg-5 mb-2">
            <div class="img-box me-3">
              <img src="{{ $article->thumbImage != '' ? asset("storage/app/public/horoscopecategory/{$article->thumbImage}") : 'https://www.astrologyanswers.com/wp-content/uploads/2023/11/mercury-cap-300x300.png.webp' }}" alt="" data-src="https://www.astrologyanswers.com/wp-content/uploads/2022/08/how-to-make-the-most-of-the-new-moon-in-capricorn-850x850-astrologyanswers-300x300.jpg.webp" class="rounded-1" style="height: 80px; width: 80px;" alt="">
            </div>
            <p class="font-18-700 font-1 tx-prime" style="line-height: 25px;">{{ $article->title }}</p>
          </a>
            @endforeach
            @endif

        </ul>

      </div>
      @include('Front.includes.socialmedia')

    </div>
    
        </div>
        </div>
        </main>
        
        @stop