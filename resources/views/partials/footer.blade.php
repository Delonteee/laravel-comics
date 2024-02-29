@php
    $linksFooter = [
    'DC COMICS'=>[
        'Characters',
        'Comics',
        'Movie',
        'TV',
        'Games',
        'Videos',
        'News'
    ],
    'DC'=>[
        'Terms Of Use',
        'Privacy policy(New)',
        'Ad Choices',
        'Advertising',
        'Jobs',
        'Subscriptions',
        'Talent Workshops',
        'CPSC Certificates',
        'Ratings',
        'Shop Help',
        'Contact Us'
    ],
    'SITES'=>[
        'DC',
        'MAD Magazine',
        'DC Universe',
        'DC Power Visa'
    ],
    'SHOP'=>[
        'Shop DC',
        'Shop DC collectibles'
    ]
]
@endphp

<footer>
    <section class="footer-top">
        <div class="container ">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h5>DC COMICS</h5>
                            <ul>
                                @foreach ($linksFooter['DC COMICS'] as $singleLink)
                                    <li>
                                        <a href="">{{ $singleLink }}</a>
                                    </li>
                                @endforeach
                            </ul>

                            <h5>SHOP</h5>
                            <ul>
                                @foreach ($linksFooter['SHOP'] as $singleLink)
                                    <li>
                                        <a href="">{{ $singleLink }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-4">
                            <h5>DC</h5>
                            <ul>
                                @foreach ($linksFooter['DC'] as $singleLink)
                                    <li>
                                        <a href="">{{ $singleLink }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-4">
                            <h5>SITES</h5>
                            <ul>
                                @foreach ($linksFooter['SITES'] as $singleLink)
                                    <li>
                                        <a href="">{{ $singleLink }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col">
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero debitis et tenetur dignissimos velit itaque corporis, eos consequatur a consectetur pariatur voluptatibus laborum? Adipisci, corrupti? Aut id corrupti inventore veritatis.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-6 right">

                </div>
            </div>
        </div>
    </section>

    <section class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </div>
                <div class="col-6">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </div>
            </div>
        </div>
    </section>
</footer>
