@extends('master')

@section('content')

    <div class="myDiv4">
        <img src="{{asset('ud_logo.png')}}" width=400 height=100 align="right"></img>
        <br><br>

        <div class="slider">
            <ul>

                <li>

                    <img src="{{asset('ccq.jpg')}}" alt="" width="1300" height="300"></img>


                </li>
                <li>

                    <img src="{{asset('ccq1.jpg')}}" alt="" width="1300" height="300"></img>

                </li>

                <li>
                    <img src="{{asset('ccq2.jpg')}}" alt="" width="1300" height="300"></img>

                </li>

                <li>
                    <img src="{{asset('ccq3.jpg')}}" alt="" width="1300" height="300"></img>

                </li>

            </ul>
        </div>


        <div class="myDiv">

            <h2>Dean's Message</h2>
            ‎
            <HR WIDTH="20%" ALIGN="center">
            ‎

            <p><i><strong>Praise be to Allah and peace and blessings be upon His Prophets, Messengers, and companions.

                        The philosophy that underpins <br>the Community College depends upon serving the local community
                        by enrolling the public education graduates and providing various substantial academic
                        preparation,<br>
                        oriented towards the development of students and enhancement of their skills in addition to an
                        extensive
                        job training and matching of the market needs,<br> by raising skill levels and facilitating smooth
                        transition
                        from school to work through a combination of off-the-job vocational education and linking it with
                        the <br>
                        college’s curriculum, and other vocational skill pathways.

                        Additionally, the Community College instills the national, religious values and principles to
                        cultivate<br>
                        a great generation and contribute in the advancement of the nation.<br>

                        The Community College is aspiring highly to be an entrepreneur and a pioneer, in bringing an
                        effective human resources to the community, <br>
                        and achieving its operational goals, and strategic objectives through acquiring the academic
                        accreditation,<br>
                        and providing quality education to students. <br>


                        <h4>The College’s Dean</h4>
                        Dr. Horia AlOtaibi </strong></i></p>
        </div>
    </div>


    <div class="myDiv2">
        <h1 style="border: none  ;background-color:#664400;"><i>Last News</i></h1>

        <img src="{{asset('div1.jpg')}}" alt="" width="300" height="300"></img>

        <img src="{{asset('div2.jpg')}}" alt="" width="300" height="300"></img>
        <img src="{{asset('div3.jpg')}}" alt="" width="300" height="300"></img><br><br>
        <img src="{{asset('div4.jpg')}}" alt="" width="300" height="300"></img>
        <img src="{{asset('div5.jpg')}}" alt="" width="300" height="300"></img>
        <img src="{{asset('div5.jpg')}}" alt="" width="300" height="300"></img>
    </div>

    <div class="myDiv3">
        <h1><i>The Location </i></h1>
        ‎
        <HR WIDTH="80%" ALIGN="center >‎



 <i class=" fas fa-map-marker-alt
        " style="font-size:35px; color:gray;"></i>
        <p> Qatif</p>
        <i class="fas fa-map-marker-alt" style="font-size:35px; color:gray;"></i>
        <p>Damamm</p>
        <i class="fas fa-map-marker-alt" style="font-size:36px; color:gray;"></i>
        <p> Alraka</p>

    </div>
    <div class="myDiv4">
        <img src="{{asset('ud_logo.png')}}" width=400 height=100 align="right"></img>
        <br><br>
        ‎
        <i class="fab fa-twitter" style=" font-size:50px;color:gray" align="right"></i>
        <i class="fab fa-instagram" style=" font-size:50px;color:gray" align="right"></i>
        <i class="fab fa-youtube" style=" font-size:50px;color:gray" align="right"></i>
        <i class="fas fa-phone-square" style=" font-size:50px;color:gray" align="right"></i>

        <br><br>

    </div>
    <p><span style="color:white;"><i><b>2021Community College- Imam Abdulrahman Bin Faisal University. All rights reserved &copy;</b> </i></span>
    </p>

@endsection
