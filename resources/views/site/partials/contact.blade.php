<div class="Contact PageHeight Filter" id="ContactID">
    <div class="container-fluid ">
        <div class="row FooterRow justify-content-center">

            @if(!empty($contact))

                <div class="col-md-4 col-sm-7 ContactPadding">
                    <ul class="ContactList  ContactTrideContent text-uppercase">

                    @if(!empty($contact->services))
                            @foreach($contact->services as $service)
                                <li class="Truncate"><a href="{{route('site.service', $service->id)}}">{{$service->title}}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>

                <div class="col-md-4 col-sm-7 ContactPadding  ">
                    <ul class="ContactList ContactTrideContent SecondTride text-uppercase text-center">
                        <li>{{$contact->telephone}}</li>
                        <li>{{$contact->city}}</li>
                        <li>Ежедневно с {{$contact->work_from}} до {{$contact->work_to}}</li>
                    </ul>
                </div>


            @endif

            <div class="col-md-4 col-sm-7 ContactPadding">
                <div class="ContactTrideContent">
                    <div id="map" style="width: inherit; height: inherit;"></div>
                </div>
            </div>

                <div  class="col-lg-12 col-md-12 col-sm-12 text-center  BottomIcons">
                    <nav class="SocialContainer">
                        <ul>
                            <li><a href="https://www.instagram.com">
                                    <svg class="SocialIcons" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                         y="0px"
                                         viewBox="74.4 867.7 420.4 312.9" enable-background="new 74.4 867.7 420.4 312.9" xml:space="preserve">
<g transform="translate(0,-952.36218)">
    <path fill="#16164F" d="M204.4,1820.1c-41.7,0-75.8,34-75.8,75.8v160.5c0,41.7,34,75.8,75.8,75.8h160.5c41.7,0,75.8-34,75.8-75.8
		v-160.5c0-41.7-34-75.8-75.8-75.8H204.4z M204.4,1846.8h160.5c27.4,0,49,21.6,49,49v160.5c0,27.4-21.6,49-49,49H204.4
		c-27.4,0-49-21.6-49-49v-160.5C155.3,1868.5,177,1846.8,204.4,1846.8z M373.8,1873.6c-9.8,0-17.8,8-17.8,17.8
		c0,9.8,8,17.8,17.8,17.8c9.8,0,17.8-8,17.8-17.8C391.6,1881.6,383.6,1873.6,373.8,1873.6z M284.6,1900.3
		c-41.7,0-75.8,34.1-75.8,75.8s34.1,75.8,75.8,75.8s75.8-34.1,75.8-75.8C360.4,1934.4,326.3,1900.3,284.6,1900.3z M284.6,1927.1
		c27.2,0,49,21.8,49,49s-21.8,49-49,49c-27.2,0-49-21.8-49-49C235.6,1948.9,257.4,1927.1,284.6,1927.1z"/>
</g>
</svg>
                                </a></li>
                            <li><a href="https://vk.com">
                                    <svg class="SocialIcons" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="74.4 117.7 420.4 312.9" enable-background="new 74.4 117.7 420.4 312.9" xml:space="preserve">
<g>
    <path fill="#16164F" d="M492.6,370.9c-0.5-1.1-1-2-1.4-2.7c-7.3-13.1-21.2-29.3-41.8-48.4l-0.4-0.4l-0.2-0.2l-0.2-0.2h-0.2
		c-9.3-8.9-15.2-14.9-17.7-17.9c-4.5-5.8-5.5-11.7-3.1-17.7c1.7-4.5,8.3-14.1,19.7-28.7c6-7.7,10.7-13.9,14.2-18.6
		c25.2-33.6,36.2-55,32.8-64.3l-1.3-2.2c-0.9-1.3-3.1-2.5-6.8-3.6c-3.7-1.1-8.3-1.3-14-0.5l-63,0.4c-1-0.4-2.5-0.3-4.4,0.1
		c-1.9,0.4-2.8,0.7-2.8,0.7l-1.1,0.5l-0.9,0.7c-0.7,0.4-1.5,1.2-2.4,2.3c-0.9,1.1-1.6,2.4-2.2,3.8c-6.9,17.7-14.7,34.1-23.4,49.2
		c-5.4,9-10.4,16.9-14.9,23.5c-4.5,6.6-8.3,11.5-11.4,14.7c-3.1,3.1-5.8,5.7-8.3,7.5c-2.5,1.9-4.4,2.7-5.7,2.4
		c-1.3-0.3-2.6-0.6-3.7-0.9c-2-1.3-3.7-3.1-4.9-5.4c-1.2-2.3-2.1-5.1-2.5-8.5c-0.4-3.4-0.7-6.4-0.8-8.9c-0.1-2.5,0-6,0.1-10.5
		c0.2-4.5,0.2-7.6,0.2-9.2c0-5.5,0.1-11.6,0.3-18.1c0.2-6.5,0.4-11.6,0.5-15.4c0.1-3.8,0.2-7.8,0.2-12c0-4.2-0.3-7.5-0.8-10
		c-0.5-2.4-1.3-4.7-2.3-7c-1-2.3-2.5-4-4.5-5.3c-2-1.2-4.4-2.2-7.3-3c-7.7-1.8-17.6-2.7-29.5-2.8c-27.1-0.3-44.6,1.5-52.3,5.3
		c-3.1,1.6-5.8,3.8-8.3,6.6c-2.6,3.2-3,5-1.1,5.3c8.8,1.3,15,4.4,18.6,9.4l1.3,2.6c1,1.9,2,5.3,3.1,10.1c1,4.8,1.7,10.1,2,16
		c0.7,10.7,0.7,19.8,0,27.4c-0.7,7.6-1.4,13.5-2.1,17.7c-0.7,4.2-1.6,7.7-3,10.3c-1.3,2.6-2.2,4.2-2.6,4.8c-0.4,0.6-0.8,0.9-1.1,1.1
		c-1.9,0.7-3.9,1.1-5.9,1.1c-2,0-4.5-1-7.4-3.1c-2.9-2-5.9-4.9-9.1-8.4c-3.1-3.6-6.7-8.6-10.6-15c-3.9-6.4-8-14-12.3-22.8l-3.5-6.3
		c-2.2-4.1-5.2-10-9-17.8c-3.8-7.8-7.2-15.4-10.1-22.7c-1.2-3.1-2.9-5.4-5.3-7l-1.1-0.7c-0.7-0.6-1.9-1.2-3.5-1.9
		c-1.6-0.7-3.3-1.1-5-1.4l-60,0.4c-6.1,0-10.3,1.4-12.5,4.2l-0.9,1.3c-0.4,0.7-0.7,1.9-0.7,3.5c0,1.6,0.4,3.6,1.3,5.9
		c8.8,20.6,18.3,40.4,28.6,59.5s19.2,34.5,26.8,46.2c7.6,11.7,15.3,22.7,23.2,33c7.9,10.4,13.1,17,15.6,19.9c2.6,2.9,4.6,5.1,6,6.6
		l5.5,5.3c3.5,3.5,8.6,7.7,15.4,12.6c6.8,4.9,14.3,9.7,22.5,14.4c8.2,4.7,17.8,8.6,28.8,11.6c10.9,3,21.6,4.2,32,3.6h25.2
		c5.1-0.4,9-2,11.6-4.8l0.9-1.1c0.6-0.9,1.1-2.2,1.6-4c0.5-1.8,0.8-3.8,0.8-6c-0.1-6.3,0.3-11.9,1.4-17c1.1-5,2.3-8.8,3.7-11.4
		c1.4-2.6,3-4.7,4.7-6.5c1.7-1.8,3-2.8,3.7-3.2c0.7-0.4,1.3-0.6,1.7-0.8c3.5-1.2,7.6,0,12.4,3.4c4.7,3.4,9.2,7.7,13.4,12.7
		c4.2,5,9.2,10.7,15,17c5.8,6.3,10.9,10.9,15.3,14l4.4,2.6c2.9,1.8,6.7,3.4,11.4,4.8c4.7,1.5,8.7,1.8,12.3,1.1l56-0.9
		c5.5,0,9.9-0.9,12.9-2.7c3.1-1.8,4.9-3.8,5.5-6c0.6-2.2,0.6-4.7,0.1-7.4C493.6,373.9,493.1,372,492.6,370.9z"/>
</g>
</svg>
                                </a></li>
                            <li><a href="https://facebook.com">
                                    <svg class="SocialIcons" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="74.4 483.7 420.4 312.9" enable-background="new 74.4 483.7 420.4 312.9" xml:space="preserve">
	<path fill="#16164F" d="M390.9,628c-15.5,0-30.9,0-46.4,0c0-0.6-0.1-1-0.1-1.5c0-10.4-0.1-20.8,0.1-31.2c0-2.6,0.4-5.2,1.1-7.6
		c1.7-6.8,6.5-10.5,13.2-11.6c3.5-0.6,7-0.8,10.5-0.8c7.1-0.1,14.2,0,21.2,0c2.4,0,2.4,0,2.4-2.5c0-12.7,0-25.3,0-38
		c0-2.1,0-2.1-2.1-2.3c-12.8-1.4-25.6-1.9-38.4-1.5c-13.7,0.4-26.3,4.2-37,13.1c-9.5,7.9-15.1,18.3-18,30.2
		c-1.6,6.5-2.2,13.2-2.2,19.9c0,10.6,0,21.1,0,31.7c0,0.7,0,1.4,0,2.3c-13.6,0-27.1,0-40.7,0c-0.1,0.8-0.1,1.5-0.1,2.1
		c0,14.5,0,28.9,0,43.4c0,2.1,0,2.1,2.1,2.1c12.2,0,24.4,0,36.6,0c2.1,0,2.1,0,2.1,2.1c0,39,0,78,0,117.1c0,0.6,0,1.1-0.1,1.9
		c-0.7,0-1.3,0-1.8,0c-49,0-98,0-147,0c-9.3,0-16.1-5.7-17.8-14.8c-0.2-1-0.2-2-0.2-3c0-92.5,0-184.9-0.1-277.4
		c0-9,6.4-16.5,14.6-17.5c1.1-0.1,2.2-0.2,3.3-0.2c92.3,0,184.6,0,276.9-0.1c9.7,0,16.2,6.5,17.5,13.5c0.3,1.5,0.5,3,0.5,4.5
		c0,92.3,0,184.5,0,276.7c0,8.9-5.2,15.7-13.4,17.6c-1.3,0.3-2.7,0.5-4.1,0.5c-25.9,0-51.9,0-77.8,0c-0.4,0-0.8,0-1.4-0.1
		c0-0.6-0.1-1.2-0.1-1.7c0-39.1,0-78.2,0-117.2c0-1.7,0.6-2,2.1-2c12.1,0,24.3,0,36.4,0c2.2,0,2.2,0,2.4-2.2c1-7.7,2-15.5,3-23.2
		c0.9-6.8,1.8-13.6,2.6-20.4C390.9,629.3,390.9,628.8,390.9,628z"/>
	</svg>
                                </a></li>
                        </ul>
                    </nav>
                </div>

        </div>
    </div>

    <div class="container">
        <div class="row FooterRow FooterLogoContainer">
            <svg class="FooterLogo" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 501.4 234.7" enable-background="new 0 0 501.4 234.7" xml:space="preserve">
					<path  d="M286,43.4L332.4,96c0.8,0.9,1.7,1.2,2.8,1.2c0.9,0,1.7-0.1,2.5-0.7c1.5-1.4,1.9-3.3,0.6-4.8L296,43.9
					l41.3-36.8c1.5-1.4,1.5-3.5,0-4.8c-1.3-1.2-3.8-1.3-5.2,0L286,43.4z"/>
                <path  d="M179.1,95.5c-0.2,0.3-0.6,0.4-0.8,0.6c-0.9,0.8-2.1,1.2-3.6,1.2c-2.6,0-4.7-1.5-4.7-3.3V44.5
					c0-1.8,2.1-2.2,4.7-2.2c2.4,0,4.5,0,4.5,1.8v39.6L259,2.7c1.3-1.5,4.3-1.8,6.4-0.8c1.7,1,1.7,2.2,1.7,3.7V94c0,1.8-2.1,3.3-4.5,3.3
					c-2.4,0-4.5-1.5-4.5-3.3V15.1L179.1,95.5z"/>
                <path  d="M180.5,5.2c0-0.5-0.3-1.8-0.7-2.3c-0.3-0.4-0.7-0.7-1.1-1.1c-1.8-1-4.4-0.7-5.5,0.8l-40.4,47.5L92.3,2.6
					c-1.3-1.5-3.8-1.8-5.5-0.8c-1.2,0.7-2,1.6-2,2.9V94c0,1.8,1.8,3.3,4.1,3.3c2.1,0,3.9-1.5,3.9-3.3V14.8l36.5,42.7
					c0.8,1.1,2,1.5,3.4,1.5h0.3c1.1,0,2.4-0.5,3.3-1.5L180.5,5.2z"/>
                <path  d="M346.5,49.3L346.5,49.3c0,26.9,23.8,48.7,53.1,48.7c12.5,0,24.1-4,32.9-10.5c1.6-1.1,1.9-3.6,0.4-4.8
					c-1-1.7-3.4-1.9-5.1-0.8c-7.6,6.1-17.5,9.4-28.3,9.4c-25.5,0-45.9-18.9-45.9-41.9c0-23.6,20.4-42.5,45.9-42.5
					c10.8,0,20.7,3.6,28.6,9.4c1.5,1.1,3.8,1,5-0.7c1.3-1.2,1-3.6-0.6-4.8C423.6,4.1,412.1,0,399.6,0C370.2,0.1,346.5,21.8,346.5,49.3"
                />
                <text transform="matrix(1 0 0 1 38.7145 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">к</text>
                <text transform="matrix(1 0 0 1 52.8131 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">л</text>
                <text transform="matrix(1 0 0 1 69.195 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">у</text>
                <text transform="matrix(1 0 0 1 83.9225 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">б </text>
                <text transform="matrix(1 0 0 1 108.6281 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">к</text>
                <text transform="matrix(1 0 0 1 122.7272 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">р</text>
                <text transform="matrix(1 0 0 1 141.1496 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">а</text>
                <text transform="matrix(1 0 0 1 157.2956 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">с</text>
                <text transform="matrix(1 0 0 1 171.6999 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">о</text>
                <text transform="matrix(1 0 0 1 190.1569 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">т</text>
                <text transform="matrix(1 0 0 1 201.9782 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">ы </text>
                <text transform="matrix(1 0 0 1 230.3961 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">&amp; </text>
                <text transform="matrix(1 0 0 1 260.1857 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">к</text>
                <text transform="matrix(1 0 0 1 274.2848 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">у</text>
                <text transform="matrix(1 0 0 1 289.0119 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">р</text>
                <text transform="matrix(1 0 0 1 307.4342 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">о</text>
                <text transform="matrix(1 0 0 1 325.8918 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">р</text>
                <text transform="matrix(1 0 0 1 344.3141 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">т </text>
                <text transform="matrix(1 0 0 1 362.7702 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">в </text>
                <text transform="matrix(1 0 0 1 385.0251 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">г</text>
                <text transform="matrix(1 0 0 1 395.797 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">о</text>
                <text transform="matrix(1 0 0 1 414.2541 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">р</text>
                <text transform="matrix(1 0 0 1 432.6764 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">о</text>
                <text transform="matrix(1 0 0 1 451.1339 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">д</text>
                <text transform="matrix(1 0 0 1 468.34 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">е</text>
                <path fill-rule="evenodd" clip-rule="evenodd"  d="M0,187.9c172.9-28.6,282,91.7,501.4,19.5
						C438,230,405.6,235.7,335,234.5C194,232.2,131,169.6,0,187.9"/>
				</svg>
        </div>
    </div>
</div> <!-- .Contact-->