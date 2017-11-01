@extends('layouts.app')

@section('content')
<!-- header end -->

<!-- About us section start -->

<div class="w3-container">
    <h2 class="w3-myfont w3-center">Meet the team</h2>
    <ul class="w3-ul w3-card-4 w3-round">
        <li class="w3-bar">
            <img src={{asset('img/avatar1.png')}} class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
            <div class="w3-bar-item">
                <span class="w3-large">Xinyi Jiang</span><br>
            </div>
        </li>

        <li class="w3-bar">
            <img src= {{asset('img/avatar2.png')}} class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
            <div class="w3-bar-item">
                <span class="w3-large">James Martin</span><br>
            </div>
        </li>

        <li class="w3-bar">
            <img src= {{asset('img/avatar3.png')}} class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
            <div class="w3-bar-item">
                <span class="w3-large">Catherine Xiao</span><br>
            </div>
        </li>
        <li class="w3-bar">
            <img src= {{asset('img/avatar4.png')}}  class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
            <div class="w3-bar-item">
                <span class="w3-large">Tony Kang</span><br>
            </div>
        </li>
        <li class="w3-bar">
            <img src= {{asset('img/avatar5.png')}} class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
            <div class="w3-bar-item">
                <span class="w3-large">Quintin Kauchick</span><br>
            </div>
        </li>
        <li class="w3-bar">
            <img src= {{asset('img/avatar6.png')}} class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
            <div class="w3-bar-item">
                <span class="w3-large">Owen Handel</span><br>
            </div>
        </li>
    </ul>
</div>
<!-- About Me section end -->
<!-- dividing part -->
<div class="w3-row-padding">
    <div class="w3-col s3 w3-container">
            <img src={{asset('img/house1.jpg')}} alt="Nature" style="width:100%">
    </div>
    <div class="w3-col s3 w3-container">
            <img src={{asset('img/house2.jpg')}} alt="Fjords" style="width:100%">

    </div>
    <div class="w3-col s3 w3-container">

            <img src={{asset('img/house3.jpg')}} alt="Mountains" style="width:100%">

    </div>
    <div class="w3-col s3 w3-container">

            <img src={{asset('img/house4.jpg')}} alt="Lights" style="width:100%">

    </div>
</div><br>
<!--dividing part end-->
<hr>
<!-- Info section start -->

<div id = "info2" class="w3-container sand w3-xlarge w3-serif w3-panel w3-round-xlarge" style="padding: 5%">
    <h1 class="w3-xxlarge">What we do</h1>

            <p>At {{ config('app.name', 'Laravel') }}, we strive to bring meaningful insight to your property-based
                business. Our software gives you a clear view of you properties' capital expenditures, and more
                importantly, gives you meaningful feedback about how to plan the future. Whether you just want to
                improve maintenance or build additions, you can know exactly how much it is going to cost, which
                helps you avoid the hassle of unforeseen costs. Don't guess about your property -- {{ config('app.name','Laravel') }}
                .&nbsp;</p>

</div>
<!-- Info section end -->

<!-- Form section start -->

<form action="/action_page.php" class="w3-container w3-card-4 w3-light-grey  w3-margin w3-text-gray w3-round" style="padding: 3%">
    <h2 class="w3-center">Contact Us</h2>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
        <div class="w3-rest">
            <input class="w3-input w3-border" name="first" type="text" placeholder="First Name">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
        <div class="w3-rest">
            <input class="w3-input w3-border" name="last" type="text" placeholder="Last Name">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
        <div class="w3-rest">
            <input class="w3-input w3-border" name="email" type="text" placeholder="Email">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
        <div class="w3-rest">
            <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
        <div class="w3-rest">
            <input class="w3-input w3-border" name="message" type="text" placeholder="Message">
        </div>
    </div>

    <button class="w3-button w3-block w3-section w3-theme w3-ripple w3-padding">Send</button>
</form>
<!-- Form section end -->
<!-- Contacts section start -->
<div class="section" id="contacts">
    <h1><span>Follow Us</span></h1>
    <div>
        <a href="https://github.com/debuggers-370" target="_blank">
            <img alt="github" src={{asset('img/GitHub-Mark-32px.png')}} />
        </a>
    </div>
</div>
<!-- Contacts section end -->

<footer class="w3-container">
    <p class="w3-right w3-text-grey">&copy; 2017 {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
</footer>

@endsection
