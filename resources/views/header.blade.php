 <style>
    .reverse-list {
        display: flex;
        flex-direction: row-reverse;
    }
    .bg-dark {
        background-color: var(--blue) !important;
    }
    body {
        margin: 0;
        font-family: "Montserrat", sans-serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: var(--white);
        text-align: left;
        background-color: #EDEFF4;
    }
    .text-body {
        color: var(--white) !important;
        text-transform: uppercase;
        font-weight: bold;
    }
    .section-title {
        margin-bottom: 15px;
        padding: 15px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #FFFFFF;
        border: 1px solid #dee2e6;
        border-left: 5px solid var(--blue);
    }
    .font-weight-medium {
        font-weight: 500 !important;
        color: var(--blue);
    }
    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -0.5rem;
        margin-left: -0.5rem;
        align-content: space-between;
        justify-content: space-between;
        align-items: center;
    }
    .text-primary {
        color: var(--light) !important;
        font-size: inherit;
    }
</style>
 <script language='javascript'>
     var myVar=setInterval(function(){Clock()},1000);
     function Clock() {
         a=new Date();
         w=Array("Chủ Nhật","Thứ hai","Thứ ba","Thứ tư","Thứ năm","Thứ sáu","Thứ bảy");
         var a=w[a.getDay()],
             w=new Date,
             d=w.getDate();
         m=w.getMonth()+1;
         y=w.getFullYear();
         h=w.getHours();
         mi=w.getMinutes();
         se=w.getSeconds();
         if(10>d){d="0"+d}
         if(10>m){m="0"+m}
         if(10>h){h="0"+h}
         if(10>mi){mi="0"+mi}
         if(10>se){se="0"+se}
         document.getElementById("clockDiv").innerHTML="Hôm nay: "+a+", "+d+" / "+m+" / "+y+" - "+h+":"+mi+":"+se+"";
     }
 </script>

<!-- Topbar Start -->
 <div class="container-fluid d-none d-lg-block">
     <div class="row align-items-center bg-dark px-lg-5">
         <div class="col-lg-9">
             <nav class="navbar navbar-expand-sm bg-dark p-0">
                 <a class="nav-link text-body small" href="http://tgu.edu.vn">
                   <i class="fas fa-home"></i> Trang chủ đại học Tiền Giang</a>
             </nav>
         </div>

         <div class="col-lg-3 text-right d-none d-md-block">
             <nav class="navbar navbar-expand-sm bg-dark p-0">
                 <ul class="navbar-nav ml-auto mr-n2">
                     <div class="clockDiv">
                         <a class="nav-link text-body small"><div id="clockDiv"></div></a>
                     </div>
                 </ul>
             </nav>
         </div>

     </div>

     <div class="row align-items-center bg-white py-3 px-lg-5">
         <div class="col-lg-5">
             <a class="navbar-brand p-0 d-none d-lg-block">
                 <img class="img-fluid" src="{{$photo->description}}" alt="Trường Đại học Tiền Giang">
             </a>
         </div>

         <div class="col-lg-5">
             <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>{{$phone->description}}</p>
             <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>{{$email->description}}</p>
             <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>{{$address1->description}}</p>
             <p class="font-weight-medium">&nbsp;&nbsp;&nbsp;&nbsp;{{$address2->description}}</p>
         </div>
     </div>


 </div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-4 text-uppercase text-primary">{{$company->description}}</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Trang chủ</a>
                <div class="reverse-list">
                @foreach($menus as $menu)
                     @if (count($menu->submenus)>0)
                        <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{$menu->name}}</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                @foreach($menu->submenus as $submenu)
                                    <a href="#" class="dropdown-item">{{$submenu->name}}</a>
                                @endforeach
                            </div>
                            </div>
                 @else
                @if($menu->parent_id == 0)

                            <a href="contact.html" class="nav-item nav-link" >{{$menu->name}}</a>

                @endif
                    @endif
                @endforeach
                </div>
            </div>

            <div class="input-group ml-auto d-none d-lg-flex" style="width: 50%; max-width: 250px;">
                <input type="text" class="form-control border-0" placeholder="Keyword">
                <div class="input-group-append">
                    <button class="input-group-text bg-primary text-dark border-0 px-3"><i
                            class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->
