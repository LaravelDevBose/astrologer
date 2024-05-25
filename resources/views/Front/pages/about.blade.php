@extends('Layouts.default')
@section('content')
 <!---------------------------------about start------------------------------------------>

 <div class="container aboutContainer py-5">
      <div class="row">
        <div class="col-lg-11 mx-auto">
          <p class="font-45-700 text-black font-1">{{$data['pages']->h1}}</p>

          <div class="bannerItem">
            <p class="font-35-700 font-1 text-white title-tag">
            {{$data['pages']->h2}}
            </p>
          </div>

          <div class="font-20-400 missionVissionCard mx-auto">
            <div class="">
              <div>
               {!! $data['pages']->contant !!}
              </div>
            </div>
          </div>

          <div class="bannerItem">
            <p class="font-35-700 font-1 text-white title-tag">
            {{$data['pages']->h3}}</p>
          </div>

          <div class="font-20-400 missionVissionCard mx-auto">
            <div class="">
              <div>
                <p>{{$data['pages']->content2}}</p>
              </div>

              <div class="joinCommunityCard">
                <p class="title-tag font-30-700 tx-prime text-center">Want to join our community?</p>
                <p>Click on the icons below to join the Astrology Answers community on social media. Follow along to watch videos, get daily insight, and receive esoteric guidance.</p>
                <ul class="list-unstyled d-flex flex-wrap justify-content-center align-items-center">
                    <li class="my-2 mx-lg-4 mx-3">
                       <a href="{{asset('/storage/app/public')}}/{{$data['header']->facebooklink}}" target="_blank" rel="noopener noreferrer">
                        <svg width="40px" height="40px" viewBox="-5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#3e83ec" stroke="#3e83ec"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>facebook [#176]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-385.000000, -7399.000000)" fill="#3e83ec"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M335.821282,7259 L335.821282,7250 L338.553693,7250 L339,7246 L335.821282,7246 L335.821282,7244.052 C335.821282,7243.022 335.847593,7242 337.286884,7242 L338.744689,7242 L338.744689,7239.14 C338.744689,7239.097 337.492497,7239 336.225687,7239 C333.580004,7239 331.923407,7240.657 331.923407,7243.7 L331.923407,7246 L329,7246 L329,7250 L331.923407,7250 L331.923407,7259 L335.821282,7259 Z" id="facebook-[#176]"> </path> </g> </g> </g> </g></svg></a>
                    </li>
                    <li class="my-2 mx-lg-4 mx-3">
                        <a href="{{asset('/storage/app/public')}}/{{$data['header']->twitter}}" target="_blank" rel="noopener noreferrer"><svg width="40px" height="40px" viewBox="0 -2 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>twitter [#154]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)" fill="#56cce6"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705" id="twitter-[#154]"> </path> </g> </g> </g> </g></svg></a>
                     </li>
                     <li class="my-2 mx-lg-4 mx-3">
                        <a href="{{asset('/storage/app/public')}}/{{$data['header']->youtube}}" target="_blank" rel="noopener noreferrer"><svg width="40px" height="40px" viewBox="0 -3 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>youtube [#168]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-300.000000, -7442.000000)" fill="#ed4141"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M251.988432,7291.58588 L251.988432,7285.97425 C253.980638,7286.91168 255.523602,7287.8172 257.348463,7288.79353 C255.843351,7289.62824 253.980638,7290.56468 251.988432,7291.58588 M263.090998,7283.18289 C262.747343,7282.73013 262.161634,7282.37809 261.538073,7282.26141 C259.705243,7281.91336 248.270974,7281.91237 246.439141,7282.26141 C245.939097,7282.35515 245.493839,7282.58153 245.111335,7282.93357 C243.49964,7284.42947 244.004664,7292.45151 244.393145,7293.75096 C244.556505,7294.31342 244.767679,7294.71931 245.033639,7294.98558 C245.376298,7295.33761 245.845463,7295.57995 246.384355,7295.68865 C247.893451,7296.0008 255.668037,7296.17532 261.506198,7295.73552 C262.044094,7295.64178 262.520231,7295.39147 262.895762,7295.02447 C264.385932,7293.53455 264.28433,7285.06174 263.090998,7283.18289" id="youtube-[#168]"> </path> </g> </g> </g> </g></svg></a>
                     </li>
                     <li class="my-2 mx-lg-4 mx-3">
                        <a href="{{asset('/storage/app/public')}}/{{$data['header']->instagram}}" target="_blank" rel="noopener noreferrer"><svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="#ed4141"></path> <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" fill="#ed4141"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z" fill="#ed4141"></path> </g></svg></a>
                     </li>
                     <li class="my-2 mx-lg-4 mx-3">
                        <a href="{{asset('/storage/app/public')}}/{{$data['header']->pinterest}}" target="_blank" rel="noopener noreferrer"><svg width="40px" height="40px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10.8097 14.2306C10.4323 14.06 9.98797 14.2276 9.81733 14.605C9.64668 14.9824 9.81431 15.4267 10.1917 15.5974L10.8097 14.2306ZM12.5007 15.344L12.5015 16.0941L12.5136 16.0939L12.5007 15.344ZM17.5007 10.172L16.7508 10.1595C16.7507 10.1678 16.7507 10.1762 16.7508 10.1845L17.5007 10.172ZM12.5007 5L12.5136 4.25011C12.505 4.24996 12.4964 4.24996 12.4879 4.25011L12.5007 5ZM7.50072 10.172L8.25072 10.1741C8.25073 10.1692 8.2507 10.1644 8.25062 10.1595L7.50072 10.172ZM7.68386 13.4079C7.90528 13.758 8.36855 13.8623 8.71862 13.6409C9.06869 13.4194 9.17299 12.9562 8.95158 12.6061L7.68386 13.4079ZM11.2292 15.0923C11.3277 14.69 11.0814 14.284 10.679 14.1855C10.2767 14.087 9.87069 14.3334 9.77222 14.7357L11.2292 15.0923ZM8.77222 18.8217C8.67375 19.224 8.92009 19.63 9.32243 19.7285C9.72477 19.827 10.1308 19.5806 10.2292 19.1783L8.77222 18.8217ZM9.76171 14.7861C9.69105 15.1942 9.96463 15.5823 10.3728 15.653C10.7809 15.7237 11.1691 15.4501 11.2397 15.0419L9.76171 14.7861ZM12.2397 9.26594C12.3104 8.8578 12.0368 8.46966 11.6287 8.39899C11.2205 8.32833 10.8324 8.60191 10.7617 9.01006L12.2397 9.26594ZM10.1917 15.5974C10.9175 15.9255 11.705 16.0949 12.5015 16.094L12.4999 14.594C11.9171 14.5946 11.3408 14.4707 10.8097 14.2306L10.1917 15.5974ZM12.5136 16.0939C15.7362 16.0386 18.3043 13.3822 18.2506 10.1595L16.7508 10.1845C16.7907 12.5791 14.8825 14.553 12.4879 14.5941L12.5136 16.0939ZM18.2506 10.1845C18.3043 6.96184 15.7362 4.30541 12.5136 4.25011L12.4879 5.74989C14.8825 5.79098 16.7907 7.76488 16.7508 10.1595L18.2506 10.1845ZM12.4879 4.25011C9.26523 4.30541 6.69714 6.96184 6.75082 10.1845L8.25062 10.1595C8.21072 7.76488 10.119 5.79098 12.5136 5.74989L12.4879 4.25011ZM6.75072 10.1699C6.74751 11.316 7.07122 12.4393 7.68386 13.4079L8.95158 12.6061C8.49143 11.8786 8.24831 11.0349 8.25072 10.1741L6.75072 10.1699ZM9.77222 14.7357L8.77222 18.8217L10.2292 19.1783L11.2292 15.0923L9.77222 14.7357ZM11.2397 15.0419L12.2397 9.26594L10.7617 9.01006L9.76171 14.7861L11.2397 15.0419Z" fill=" #ed4242"></path> </g></svg></a>
                     </li>
                     <li class="my-2 mx-lg-4 mx-3">
                        <a href="{{asset('/storage/app/public')}}/{{$data['header']->tiktok}}" target="_blank" rel="noopener noreferrer"><svg fill="#000000" width="40px" height="40px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>tiktok</title> <path d="M16.656 1.029c1.637-0.025 3.262-0.012 4.886-0.025 0.054 2.031 0.878 3.859 2.189 5.213l-0.002-0.002c1.411 1.271 3.247 2.095 5.271 2.235l0.028 0.002v5.036c-1.912-0.048-3.71-0.489-5.331-1.247l0.082 0.034c-0.784-0.377-1.447-0.764-2.077-1.196l0.052 0.034c-0.012 3.649 0.012 7.298-0.025 10.934-0.103 1.853-0.719 3.543-1.707 4.954l0.020-0.031c-1.652 2.366-4.328 3.919-7.371 4.011l-0.014 0c-0.123 0.006-0.268 0.009-0.414 0.009-1.73 0-3.347-0.482-4.725-1.319l0.040 0.023c-2.508-1.509-4.238-4.091-4.558-7.094l-0.004-0.041c-0.025-0.625-0.037-1.25-0.012-1.862 0.49-4.779 4.494-8.476 9.361-8.476 0.547 0 1.083 0.047 1.604 0.136l-0.056-0.008c0.025 1.849-0.050 3.699-0.050 5.548-0.423-0.153-0.911-0.242-1.42-0.242-1.868 0-3.457 1.194-4.045 2.861l-0.009 0.030c-0.133 0.427-0.21 0.918-0.21 1.426 0 0.206 0.013 0.41 0.037 0.61l-0.002-0.024c0.332 2.046 2.086 3.59 4.201 3.59 0.061 0 0.121-0.001 0.181-0.004l-0.009 0c1.463-0.044 2.733-0.831 3.451-1.994l0.010-0.018c0.267-0.372 0.45-0.822 0.511-1.311l0.001-0.014c0.125-2.237 0.075-4.461 0.087-6.698 0.012-5.036-0.012-10.060 0.025-15.083z"></path> </g></svg></a>
                     </li>
                </ul>
            </div>
            </div>
          </div>



          <div class="bannerItem">
            <p class="font-35-700 font-1 text-white title-tag">{{$data['pages']->h4}}</p>
          </div>

          <div class="font-20-400 missionVissionCard bg-transparent px-0 mx-auto">
            <div class=" paragraph-box">
              <div>
                <p>{{$data['pages']->content2}}</p>
              </div>

            </div>

            <div class="box triangle-box"></div>


            <div class="row content-box">
            @foreach($data['contributor'] as $contributor)
               <div class="col-lg-3 col-sm-4 col-6 mb-sm-3 mb-2">
                <div class="card">
                  <div class="img-box">
                    <img src="{{asset('/storage/contributor')}}/{{$contributor->profilepic}}" alt="">
                  </div>
                  <ul class="list-unstyled mt-2">
                    <li class="font-20-700">{{$contributor->name}}</li>
                    <li><i>{{$contributor->position}}</i></li>
                  </ul>
                </div>
               </div>
               @endforeach


            </div>

          </div>

        </div>
      </div>
    </div>

    <!---------------------------------about end------------------------------------------>


@stop
