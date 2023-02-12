<div class="Container">
    <div class="Sidebar">
        <div class="Header">
            <div class="List-Item">
                <a href="#" class="Desc">
                    {{-- <img src="./assets/icons/facebook.svg" alt="" class="Icon"> --}}
                    <span class="Desc-Header"> Your Brand Here </span>
                </a>

            </div>
            <div class="Ilustration">
                <img src="./assets/img/motoPolda.jpg" alt="" class="Icon">
            </div>
        </div>
        <div class="Main">
            <a class="List-Item {{ Request::is('Home') ? 'text-primary' : '' }}" href="Home">
                <img class="Icon" src="./assets/icons/speedometer.svg" alt="">
                <span class="Description">Dashboard</span>
            </a>
            <a class="List-Item {{ Request::is('Dikreg') ? 'text-primary' : '' }}" href="{{route('Dikreg')}}">
                    <img class="Icon"
                src="./assets/icons/speedometer.svg" alt="">
                <span class="Description">Dikreg</span>
            </a>



            <div class="List-Item">
                <img class="Icon" src="./assets/icons/speedometer.svg" alt="">
                <span class="Description">Serdik</span>
            </div>
            <div class="List-Item">
                <img class="Icon" src="./assets/icons/speedometer.svg" alt="">
                <span class="Description">Pleton</span>
            </div>
            <div class="List-Item">
                <img class="Icon" src="./assets/icons/speedometer.svg" alt="">
                <span class="Description">Kompi</span>
            </div>
            <div class="List-Item">
                <img class="Icon" src="./assets/icons/speedometer.svg" alt="">
                <span class="Description">Batalion</span>
            </div>

            <a class="List-Item {{ Request::is('logout') ? 'text-primary' : '' }}" href="{{route('logout')}}" >
                <img class="Icon"
            src="./assets/icons/speedometer.svg" alt="">
            <span class="Description">logout</span>
        </a>

        </div>
    </div>

    {{-- <div class="Main-Content">
        <div class="List-Item">
            <h1>Hello</h1>
            <a href="#">
                <img src="" alt="" class="Icon">
                <span class="Description">Dashboard</span>
            </a>
        </div>
    </div> --}}
</div>
