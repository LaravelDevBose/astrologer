<div class="linkheaderContainer">
  <nav class="navbar linkheadernavbar navbar-expand-lg" style="background: linear-gradient(to right, #FA7936, #9900EB);">
    <div class="container p-lg-auto p-0">
      <a href="{{ url('/') }}" style="display: block; text-align: center;">
        <img src="{{ asset('storage/' . $data['header']->websiteLogo) }}" alt="" style="max-width: 250px;">
      </a>

      <button class="hamburger-btn me-3 d-lg-none d-block" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="3" y1="12" x2="21" y2="12"></line>
          <line x1="3" y1="6" x2="21" y2="6"></line>
          <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="list-unstyled d-lg-flex d-none ms-auto my-auto mainmenu">
          <li class=" mainmenu-item"><a href="#" class="mainmenu-link font-14-600 text-decoration-none text-white">HOROSCOPES
              <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path d="M7 10L12 15L17 10" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
              </svg>

            </a>


            <ul class="list-unstyled submenu">
              @foreach(config('global.zodics') as $zodicName => $zodiac)
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{ route('horescope',['name'=>$zodicName]) }}">
                  <div class="d-flex justify-content-between align-items-center pe-2">{{strtoupper($zodicName)}}</div>
                </a>
              </li>
              @endforeach
            </ul>

          </li>
          <li class=" mainmenu-item "><a href="#" class="mainmenu-link font-14-600 text-decoration-none text-white">ASTROLOGY
              <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path d="M7 10L12 15L17 10" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
              </svg>


            </a>
            <ul class="list-unstyled submenu">

              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/Articles/Astrology">ARTICLE</a></li>
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/astrology-calendar/January">ASTROLOGY CALENDAR</a></li>
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="">BIRTH/NATAL CHART</a></li>
              <li class="submenu-item submenu-item-level-two"><a class="submenu-link my-auto font-14-500" href="">
                  <div class="d-flex justify-content-between align-items-center pe-2">ZODIAC SIGNS <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <path d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z" fill="#ffffff"></path>
                      </g>
                    </svg></div>
                </a>
                <ul class="list-unstyled submenu-level-two">
                  <li class="submenu-item  submenu-item-level-three"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/ARIES">
                      <div class="d-flex justify-content-between align-items-center pe-2">ARIES <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier">
                            <path d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z" fill="#ffffff"></path>
                          </g>
                        </svg></div>
                    </a>

                    <ul class="list-unstyled submenu-level-three">
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/ARIES/MEN">MEN</a></li>
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/ARIES/WOMAN">WOMEN</a></li>
                    </ul>


                  </li>
                  <li class="submenu-item   submenu-item-level-three"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/TAURUS">
                      <div class="d-flex justify-content-between align-items-center pe-2"> TAURUS <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier">
                            <path d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z" fill="#ffffff"></path>
                          </g>
                        </svg></div>
                    </a>
                    <ul class="list-unstyled submenu-level-three">
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/TAURUS/MEN">MEN</a></li>
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/TAURUS/WOMEN">WOMEN</a></li>
                    </ul>
                  </li>

                  <li class="submenu-item   submenu-item-level-three"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/GEMINI">
                      <div class="d-flex justify-content-between align-items-center pe-2"> GEMINI <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier">
                            <path d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z" fill="#ffffff"></path>
                          </g>
                        </svg></div>
                    </a>
                    <ul class="list-unstyled submenu-level-three">
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/GEMINI/MEN">MEN</a></li>
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/GEMINI/WOMEN">WOMEN</a></li>
                    </ul>
                  </li>

                  <li class="submenu-item   submenu-item-level-three"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/CANCER">
                      <div class="d-flex justify-content-between align-items-center pe-2"> CANCER <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier">
                            <path d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z" fill="#ffffff"></path>
                          </g>
                        </svg></div>
                    </a>
                    <ul class="list-unstyled submenu-level-three">
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/CANCER/MEN">MEN</a></li>
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/CANCER/WOMEN">WOMEN</a></li>
                    </ul>
                  </li>

                  <li class="submenu-item   submenu-item-level-three"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/LEO">
                      <div class="d-flex justify-content-between align-items-center pe-2"> LEO <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier">
                            <path d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z" fill="#ffffff"></path>
                          </g>
                        </svg></div>
                    </a>
                    <ul class="list-unstyled submenu-level-three">
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/LEO/MEN">MEN</a></li>
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/LEO/WOMEN">WOMEN</a></li>
                    </ul>
                  </li>

                  <li class="submenu-item   submenu-item-level-three"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/VIRGO">
                      <div class="d-flex justify-content-between align-items-center pe-2"> VIRGO <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier">
                            <path d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z" fill="#ffffff"></path>
                          </g>
                        </svg></div>
                    </a>
                    <ul class="list-unstyled submenu-level-three">
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/VIRGO/MEN">MEN</a></li>
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/VIRGO/WOMEN">WOMEN</a></li>
                    </ul>
                  </li>

                  <li class="submenu-item   submenu-item-level-three"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/LIBRA">
                      <div class="d-flex justify-content-between align-items-center pe-2"> LIBRA <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier">
                            <path d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z" fill="#ffffff"></path>
                          </g>
                        </svg></div>
                    </a>
                    <ul class="list-unstyled submenu-level-three">
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/LIBRA/MEN">MEN</a></li>
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/LIBRA/WOMEN">WOMEN</a></li>
                    </ul>
                  </li>

                  <li class="submenu-item   submenu-item-level-three"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/SCORPIO">
                      <div class="d-flex justify-content-between align-items-center pe-2"> SCORPIO <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier">
                            <path d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z" fill="#ffffff"></path>
                          </g>
                        </svg></div>
                    </a>
                    <ul class="list-unstyled submenu-level-three">
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/SCORPIO/MEN">MEN</a></li>
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/SCORPIO/WOMEN">WOMEN</a></li>
                    </ul>
                  </li>

                  <li class="submenu-item   submenu-item-level-three"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/SAGITTARIUS">
                      <div class="d-flex justify-content-between align-items-center pe-2"> SAGITTARIUS <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier">
                            <path d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z" fill="#ffffff"></path>
                          </g>
                        </svg></div>
                    </a>
                    <ul class="list-unstyled submenu-level-three">
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/SAGITTARIUS/MEN">MEN</a></li>
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/SAGITTARIUS/WOMEN">WOMEN</a></li>
                    </ul>
                  </li>

                  <li class="submenu-item   submenu-item-level-three"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/CAPRICORN">
                      <div class="d-flex justify-content-between align-items-center pe-2"> CAPRICORN <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier">
                            <path d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z" fill="#ffffff"></path>
                          </g>
                        </svg></div>
                    </a>
                    <ul class="list-unstyled submenu-level-three">
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/CAPRICORN/MEN">MEN</a></li>
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/CAPRICORN/WOMEN">WOMEN</a></li>
                    </ul>
                  </li>


                  <li class="submenu-item   submenu-item-level-three"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/AQUARIUS">
                      <div class="d-flex justify-content-between align-items-center pe-2"> AQUARIUS <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier">
                            <path d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z" fill="#ffffff"></path>
                          </g>
                        </svg></div>
                    </a>
                    <ul class="list-unstyled submenu-level-three">
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/AQUARIUS/MEN">MEN</a></li>
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/AQUARIUS/WOMEN">WOMEN</a></li>
                    </ul>
                  </li>

                  <li class="submenu-item   submenu-item-level-three"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/PISCES">
                      <div class="d-flex justify-content-between align-items-center pe-2"> PISCES <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier">
                            <path d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z" fill="#ffffff"></path>
                          </g>
                        </svg></div>
                    </a>
                    <ul class="list-unstyled submenu-level-three">
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/PISCES/MEN">MEN</a></li>
                      <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/zordic-sign/PISCES/WOMEN">WOMEN</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="">ASTROLOGY DEFINATIONS</a></li>
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('planets/')}}">PLANETS</a></li>
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="">ASTROLOGICAL HOUSES</a></li>
              <li class="submenu-item  submenu-item-level-two"><a class="submenu-link my-auto font-14-500" href="">
                  <div class="d-flex justify-content-between align-items-center pe-2">CHINESE ZODIAC <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <path d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z" fill="#ffffff"></path>
                      </g>
                    </svg></div>
                </a>
                <ul class="list-unstyled submenu-level-two">
                  <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('chinese-zodiac/rat')}}">Rat</a> </li>
                  <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('chinese-zodiac/ox')}}">Ox</a> </li>
                  <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('chinese-zodiac/tiger')}}">Tiger</a> </li>
                  <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('chinese-zodiac/rabbit')}}">Rabbit</a> </li>
                  <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('chinese-zodiac/dragon')}}">Dragon</a> </li>
                  <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('chinese-zodiac/snake')}}">Snake</a> </li>
                  <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('chinese-zodiac/horse')}}">Horse</a> </li>
                  <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('chinese-zodiac/goat')}}">Goat</a> </li>
                  <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('chinese-zodiac/monkey')}}">Monkey</a> </li>
                  <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('chinese-zodiac/rooster')}}">Rooster</a> </li>
                  <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('chinese-zodiac/dog')}}">Dog</a> </li>
                  <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('chinese-zodiac/pig')}}">Pig</a> </li>
                </ul>

              </li>
            </ul>
          </li>
          <ul class="list-unstyled d-flex my-auto">
            <li class="ms-lg-4 ms-3"><a href="{{route('aboutus')}}" class="font-14-600 text-decoration-none" style="color: white;">ABOUT US</a></li>
            <li class="ms-lg-4 ms-3"><a href="{{route('contact')}}" class="font-14-600 text-decoration-none" style="color: white;">CONTACT US</a></li>
            @guest
            <li class="ms-lg-4 ms-3"><a href="{{route('login')}}" class="font-14-600 text-decoration-none" style="color: white;">LOGIN</a></li>
            @else
            <li class="ms-lg-4 ms-3"><a href="{{route('login')}}" class="font-14-600 text-decoration-none" style="color: white;"> <i class="fa fa-user"></i>{{ Auth::user()->name }}</a></li>

            <li class="ms-lg-4 ms-3"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
              </form>

            </li>
            @endguest
            <li style="margin-left: 20px;"></li> <!-- Empty element for space -->
            <li class="ms-lg-4 ms-3"><a href="{{asset('/storage/app/public')}}/{{$data['header']->facebooklink}}" class="font-18-600 me-3" style="color: white;"><i class="fab fa-facebook"></i></a></li>
            <li class="ms-lg-4 ms-3"><a href="{{asset('/storage/app/public')}}/{{$data['header']->youtube}}" class="font-18-600 me-3" style="color: white;"><i class="fab fa-youtube"></i></a></li>
            <li class="ms-lg-4 ms-3"><a href="{{asset('/storage/app/public')}}/{{$data['header']->instagram}}" class="font-18-600 me-3" style="color: white;"><i class="fab fa-instagram"></i></a></li>
          </ul>




          <!-- <li class=" mainmenu-item "><a href="#" class="mainmenu-link font-14-600 text-decoration-none text-white">TAROT <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path d="M7 10L12 15L17 10" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
              </svg>
            </a>
            <ul class="list-unstyled submenu">
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('Articles/Tarot')}}">Articles</a></li>
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('tarot/defination')}}">Tarot Card Definitions </a></li>
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('tarot/daily-tarot-reading')}}">Daily Tarot Reading</a></li>
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="">Free 3-Card Career Reading</a></li>
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="">Free 3-Card Love Reading</a></li>
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="">Free 3-Card Reading</a></li>
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="">Yes / No Tarot</a></li>
            </ul>
          </li>
          <li class=" mainmenu-item "><a href="#" class="mainmenu-link font-14-600 text-decoration-none text-white">PSYCHICS</a></li>
          <li class=" mainmenu-item "><a href="#" class="mainmenu-link font-14-600 text-decoration-none text-white">QUIZZES</a></li>
          <li class=" mainmenu-item "><a href="#" class="mainmenu-link font-14-600 text-decoration-none text-white">COMPATIBILITY <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path d="M7 10L12 15L17 10" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
              </svg> </a>

            <ul class="list-unstyled submenu">

              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('Articles/Love-&-Relationships')}}">Articles</a></li>
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="">Love Compatibility</a></li>
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="">Pet Compatibility</a></li>
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="">Career Compatibility</a></li>
            </ul>

          </li>
          <li class=" mainmenu-item "><a href="#" class="mainmenu-link font-14-600 text-decoration-none text-white">MORE<svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path d="M7 10L12 15L17 10" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
              </svg> </a>
            <ul class="list-unstyled submenu">
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/Articles/All">Articles</a></li>
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/shop">Shop</a></li>
              <li class="submenu-item submenu-item-level-two"><a class="submenu-link my-auto font-14-500" href="">
                  <div class="d-flex justify-content-between align-items-center pe-2">Numerology <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <path d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z" fill="#ffffff"></path>
                      </g>
                    </svg></div>
                </a>
                <ul class="list-unstyled submenu-level-two">
                  <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="">Articles</a> </li>
                  <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/numerology/daily-numerology-reading">Daily Numerology Reading</a> </li>
                  <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/numerology/life-path-calculator">Life Path Calculator</a> </li>
                  <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/numerology/hearts-desire">Heart’s Desire Number Calculator</a> </li>
                  <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/numerology/past-life-number-calculator">Past Life Number Calculator</a> </li>
                  <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/numerology/personality-calculator">Personality Number Calculator</a> </li>
                  <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/numerology/hidden-passion-calculator">Hidden Passion Calculator</a> </li>
                  <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="numerology/personal-year-calculator/">Personal Year Number Calculator</a> </li>
                </ul>
              </li>
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('crystal')}}">Crystals</a></li>
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('methods-of-divination/')}}">Methods of Divination</a></li>
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('dream-interpretation/')}}">Dream Interpretation</a></li>
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('dream-interpretation/dream-dictionary/')}}">Dream Dictionary</a></li>
              <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('money-wealth')}}">Money & Wealth</a></li>
            </ul>
          </li> -->
          <!-- <li class=" mainmenu-item "><a href="{{ url('/viewYourCart') }}" class="mainmenu-link font-14-600 text-decoration-none text-white"><i class="fa fa-shopping-cart" style="font-size: 30px;" aria-hidden="true"></i>@guest @else<?php echo Helper::cartItemCount(Auth::user()->id); ?> @endguest</a>
          </li> -->
        </ul>
        <!DOCTYPE html>
        <html lang="en">

        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Mobile Menu</title>
          <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
        </head>

        <body>
          <div class="mobileMenuBox d-lg-none d-block">
            <div class="box">
              <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item" style="background: linear-gradient(to right, #FA7936, #9900EB);">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                      HOROSCOPES
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                    <div class="accordion-body">
                      <ul class="list-unstyled submenu">
                        @foreach(config('global.zodics') as $zodicName => $zodiac)
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{ route('horescope',['name'=>$zodicName]) }}">
                            <div class="d-flex justify-content-between align-items-center pe-2">{{strtoupper($zodicName)}}</div>
                          </a>
                        </li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#astrologyAccordion" aria-expanded="false" aria-controls="astrologyAccordion">
                      ASTROLOGY
                    </button>
                  </h2>
                  <div id="astrologyAccordion" class="accordion-collapse collapse">
                    <div class="accordion-body">
                      <ul class="list-unstyled submenu">
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/Articles/Astrology">ARTICLE</a></li>
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/astrology-calendar/January">ASTROLOGY CALENDAR</a></li>
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="">BIRTH/NATAL CHART</a></li>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#zodiacCollapse" aria-expanded="false" aria-controls="zodiacCollapse">
                              ZODIAC SIGNS
                            </button>
                          </h2>
                          <div id="zodiacCollapse" class="accordion-collapse collapse">
                            <div class="accordion-body">
                              <ul class="list-unstyled submenu">
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ariesCollapse" aria-expanded="false" aria-controls="ariesCollapse">
                                      ARIES
                                    </button>
                                  </h2>
                                  <div id="ariesCollapse" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                      <ul class="list-unstyled submenu">
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">MEN</a></li>
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">WOMEN</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>

                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#taurusCollapse" aria-expanded="false" aria-controls="taurusCollapse">
                                      TAURUS
                                    </button>
                                  </h2>
                                  <div id="taurusCollapse" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                      <ul class="list-unstyled submenu">
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">MEN</a></li>
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">WOMEN</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>

                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#geminiCollapse" aria-expanded="false" aria-controls="geminiCollapse">
                                      GEMINI
                                    </button>
                                  </h2>
                                  <div id="geminiCollapse" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                      <ul class="list-unstyled submenu">
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">MEN</a></li>
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">WOMEN</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>

                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cancerCollapse" aria-expanded="false" aria-controls="cancerCollapse">
                                      CANCER
                                    </button>
                                  </h2>
                                  <div id="cancerCollapse" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                      <ul class="list-unstyled submenu">
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">MEN</a></li>
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">WOMEN</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>

                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#leoCollapse" aria-expanded="false" aria-controls="leoCollapse">
                                      LEO
                                    </button>
                                  </h2>
                                  <div id="leoCollapse" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                      <ul class="list-unstyled submenu">
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">MEN</a></li>
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">WOMEN</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>

                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#virgoCollapse" aria-expanded="false" aria-controls="virgoCollapse">
                                      VIRGO
                                    </button>
                                  </h2>
                                  <div id="virgoCollapse" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                      <ul class="list-unstyled submenu">
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">MEN</a></li>
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">WOMEN</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>

                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#libraCollapse" aria-expanded="false" aria-controls="libraCollapse">
                                      LIBRA
                                    </button>
                                  </h2>
                                  <div id="libraCollapse" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                      <ul class="list-unstyled submenu">
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">MEN</a></li>
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">WOMEN</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>

                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#scorpioCollapse" aria-expanded="false" aria-controls="scorpioCollapse">
                                      SCORPIO
                                    </button>
                                  </h2>
                                  <div id="scorpioCollapse" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                      <ul class="list-unstyled submenu">
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">MEN</a></li>
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">WOMEN</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>

                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sagittariusCollapse" aria-expanded="false" aria-controls="sagittariusCollapse">
                                      SAGITTARIUS
                                    </button>
                                  </h2>
                                  <div id="sagittariusCollapse" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                      <ul class="list-unstyled submenu">
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">MEN</a></li>
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">WOMEN</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>

                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#capricornCollapse" aria-expanded="false" aria-controls="capricornCollapse">
                                      CAPRICORN
                                    </button>
                                  </h2>
                                  <div id="capricornCollapse" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                      <ul class="list-unstyled submenu">
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">MEN</a></li>
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">WOMEN</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>

                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#aquariusCollapse" aria-expanded="false" aria-controls="aquariusCollapse">
                                      AQUARIUS
                                    </button>
                                  </h2>
                                  <div id="aquariusCollapse" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                      <ul class="list-unstyled submenu">
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">MEN</a></li>
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">WOMEN</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>

                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#piscesCollapse" aria-expanded="false" aria-controls="piscesCollapse">
                                      PISCES
                                    </button>
                                  </h2>
                                  <div id="piscesCollapse" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                      <ul class="list-unstyled submenu">
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">MEN</a></li>
                                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">WOMEN</a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">ASTROLOGY DEFINATIONS</a></li>
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">PLANETS</a></li>
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">ASTROLOGICAL HOUSES</a></li>
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">ASTROLOGY DEFINATIONS</a></li>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chinesezodiacCollapse" aria-expanded="false" aria-controls="chinesezodiacCollapse">
                              CHINESE ZODIAC
                            </button>
                          </h2>
                          <div id="chinesezodiacCollapse" class="accordion-collapse collapse">
                            <div class="accordion-body">
                              <ul class="list-unstyled submenu">
                                <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">RAT</a></li>
                                <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">OX</a></li>
                                <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">TIGER</a></li>
                                <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">RABBIT</a></li>
                                <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">DRAGON</a></li>
                                <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">HORSE</a></li>
                                <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">GOAT</a></li>
                                <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">MONKEY</a></li>
                                <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">ROOSTER</a></li>
                                <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">DOG</a></li>
                                <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="#">PIG</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapse4">
                      TAROT
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse">
                    <div class="accordion-body">
                      <ul class="list-unstyled submenu">
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('Articles/Tarot')}}">Articles</a></li>
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('tarot/defination')}}">Tarot Card Definitions </a></li>
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('tarot/daily-tarot-reading')}}">Daily Tarot Reading</a></li>
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="">Free 3-Card Career Reading</a></li>
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="">Free 3-Card Love Reading</a></li>
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="">Free 3-Card Reading</a></li>
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="">Yes / No Tarot</a></li>
                      </ul>
                    </div>
                  </div> -->
                <!-- </div>
                <div class="link-item">
                  <a href="#">QUIZZES</a>
                </div>
                <div class="link-item">
                  <a href="#">COMPATIBILITY</a>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false" aria-controls="panelsStayOpen-collapse5">
                      MORE
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse">
                    <div class="accordion-body">
                      <ul class="list-unstyled submenu">
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/Articles/All">Articles</a></li>
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/shop">SHOP</a></li>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chinesezodiacCollapse" aria-expanded="false" aria-controls="chinesezodiacCollapse">
                              NUMEROLOGY
                            </button>
                          </h2>
                          <div id="chinesezodiacCollapse" class="accordion-collapse collapse">
                            <div class="accordion-body">
                              <ul class="list-unstyled submenu-level-two">
                                <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="">Articles</a> </li>
                                <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/numerology/daily-numerology-reading">Daily Numerology Reading</a> </li>
                                <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/numerology/life-path-calculator">Life Path Calculator</a> </li>
                                <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/numerology/hearts-desire">Heart’s Desire Number Calculator</a> </li>
                                <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/numerology/past-life-number-calculator">Past Life Number Calculator</a> </li>
                                <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/numerology/personality-calculator">Personality Number Calculator</a> </li>
                                <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="https://krishnaspeak.com/numerology/hidden-passion-calculator">Hidden Passion Calculator</a> </li>
                                <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="numerology/personal-year-calculator/">Personal Year Number Calculator</a> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('crystal')}}">Crystals</a></li>
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('methods-of-divination/')}}">Methods of Divination</a></li>
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('dream-interpretation/')}}">Dream Interpretation</a></li>
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('dream-interpretation/dream-dictionary/')}}">Dream Dictionary</a></li>
                        <li class="submenu-item"><a class="submenu-link my-auto font-14-500" href="{{url('money-wealth')}}">Money & Wealth</a></li>
                      </ul>
                    </div>
                  </div> -->
              </div>
            </div>
          </div>
      </div>
      <!-- Bootstrap Bundle with Popper -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

      </body>

      </html>

    </div>
</div>
</nav>
</div>