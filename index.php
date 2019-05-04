<!DOCTYPE html>

<head>
    <title>Happy Independence Day</title>
        <script>
       window.onload=function(){
            if(screen.width>732)
                {
                    var element=document.body;
                    element.remove();
                    document.write("this site is only available for mobiles and tablets");
                }
       }
        
        
        
        
        function animation()
            {
                 setTimeout(function(){
                document.getElementById("hi").classList.remove("second");
                },3500 );
                setTimeout(function(){
                    var rect=document.getElementById("rect");
                    var rect1=document.getElementById("rect1");
                     rect.remove();
                     rect1.remove();
                     
                
                },3900)
                var btn=document.getElementById("btn");
                var vl=document.getElementById("vl");
                var date=document.getElementById("date");
                var line=document.getElementById("line");
                
                vl.remove();
                setTimeout(function(){
                date.classList.add("date1");
                },6000);
                setTimeout(function(){
                document.getElementById("line1").classList.add("line1");
                },10000 );
                setTimeout(function(){
                document.getElementById("line2").classList.add("line2");
                },12000 );
                setTimeout(function(){
                document.getElementById("line3").classList.add("line3");
                },14000 );
                setTimeout(function(){
                document.getElementById("line4").classList.add("line4");
                },16000 );
                setTimeout(function(){
                document.getElementById("line5").classList.add("line5");
                },18000 );
                setTimeout(function(){
                document.getElementById("line6").classList.add("line6");
                },19500 );
                setTimeout(function(){
                document.getElementById("line7").classList.add("line7");
                },21500 );
                setTimeout(function(){
                document.getElementById("line8").classList.add("line8");
                },23000 );
                setTimeout(function(){
                document.getElementById("from").classList.add("from1");
                },24500 );
                setTimeout(function(){
                var line8=document.getElementById("line8");
                    line8.remove();
                     line7=document.getElementById("line7");
                    line7.remove();
                    line6=document.getElementById("line6");
                    line6.remove();
                    line5=document.getElementById("line5");
                    line5.remove();
                    line4=document.getElementById("line4");
                    line4.remove();
                    line3=document.getElementById("line3");
                    line3.remove();
                    line2=document.getElementById("line2");
                    line2.remove();
                    line1=document.getElementById("line1");
                    line1.remove();
                var iframe=document.createElement("iframe");
                    iframe.setAttribute("src","movie.mp4");
                    iframe.style.position="absolute";
                    iframe.style.left="0%";
                    iframe.style.top="25%";
                    iframe.style.width="99%";
                    iframe.style.height="35%";
                    iframe.style.marginBottom="0%";
                    
                    document.body.appendChild(iframe);
                },30000);
                
                 setTimeout(function(){
                document.getElementById("name").style.display="block";
                document.getElementById("div").style.display="block";
                document.getElementById("para").style.display="block";
                document.getElementById("whatsapp").style.display="block";
                document.getElementById("whatsapppara").style.display="block";
                },30000);
                
                
                btn.remove();
                document.getElementById("rect").classList.add("rec");
                document.getElementById("rect1").classList.add("rec1");
            }
        function share()
        {
            if(document.getElementById("name").value=="")
            {
                alert("Please enter your name");
            }
            else
            {
            var url=window.location.hostname+window.location.pathname+"?name="+document.getElementById("name").value.split(" ").join("-");
            window.location="whatsapp://send?text=Wish Independes day to your friend in different way, See More:"+url;
            }
        }
        function removepara()
        {
            var para=document.getElementById("para");
            para.style.display="none";
            
        
        }
        function getpara()
        {
            if(document.getElementById("name").value=="")
            {
                alert("Please enter your name");
            }
            else
            {
            var url=window.location.hostname+window.location.pathname+"?name="+document.getElementById("name").value.split(" ").join("-");
            document.getElementById("whatsapppara").href="whatsapp://send?text=Wish Independes day to your friend in different way, See More:"+url;
            }
            var para=document.getElementById("para");
            para.style.display="block";
            
        
        }
        
    </script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <style>
    img[src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]
    {
        display:none;
    }
        #vl
        {
            position: absolute;
            left: 50%;
            top: 0%;
            height: 100vh;
            border-right: .3vw solid black;
        }
        .button
        {
            position: absolute;
            height: 20vh;
            left: 40%;
            width: 20vw;
            top: 38%;
            border-radius:50px;
            background: linear-gradient(120deg,#FF9933,#FFFFFF,#138808);
            background: -webkit-linear-gradient(120deg,#FF9933,#FFFFFF,#138808);
            background: -moz-linear-gradient(120deg,#FF9933,#FFFFFF,#138808);
            background: -o-linear-gradient(120deg,#FF9933,#FFFFFF,#138808);
            z-index: 1;
            border: none;
            
           
        }
        .first
        {
            margin-left: 0px;
            position: absolute;
            top: 0%;
            font-size: 5.5vw;
            
            
        }
        .first.second
        {
            opacity: 0;
        }
    .first li
        {
            font-weight: 500;
            margin: 0px;
            display:inline-block;
            transition: all 4s ease;
            opacity: 1;
        }
        
       #para
       {
           font-size:4vw;
       }
        
        .first.second li:nth-child(1){  transform: translateX(-10px) translateY(-60px) ;opacity: 0;}
        .first.second li:nth-child(2){ transform: translateX(0px) translateY(-60px) ;opacity: 0;}
        .first.second li:nth-child(3){ transform: translateX(10px) translateY(-60px) ;opacity: 0;}
        .first.second li:nth-child(4){ transform: translateX(20px) translateY(-60px) ;opacity: 0;}
        .first.second li:nth-child(5){ transform: translateX(30px) translateY(-60px) ;opacity: 0;}
        .first.second li:nth-child(6){ transform: translateX(40px) translateY(-60px) ;opacity: 0;}
        .first.second li:nth-child(7){ transform: translateX(50px) translateY(-60px) ;opacity: 0;}
        .first.second li:nth-child(8){ transform: translateX(60px) translateY(-60px) ;opacity: 0;}
        .first.second li:nth-child(9){ transform: translateX(60px) translateY(-60px) ;opacity: 0;}
        .first.second li:nth-child(10){ transform: translateX(-15px) translateY(10px) ;opacity: 0;}
        .first.second li:nth-child(11){ transform: translateX(-15px) translateY(5px) ;opacity: 0;}
        .first.second li:nth-child(12){ transform: translateX(20px) translateY(20px) ;opacity: 0;}
        .first.second li:nth-child(13){ transform: translateX(40px) translateY(6px) ;opacity: 0;}
        .first.second li:nth-child(14){ transform: translateX(0px) translateY(100px) ;opacity: 0;}
        .first.second li:nth-child(15){ transform: translateX(10px) translateY(110px) ;opacity: 0;}
        .first.second li:nth-child(16){ transform: translateX(-25px) translateY(80px) ;opacity: 0;}
        .first.second li:nth-child(17){ transform: translateX(-10px) translateY(85px) ;opacity: 0;}
        .first.second li:nth-child(18){ transform: translateX(-10px) translateY(90px) ;opacity: 0;}
        .first.second li:nth-child(19){ transform: translateX(-10px) translateY(950px) ;opacity: 0;}
        .first.second li:nth-child(20){ transform: translateX(-10px) translateY(20px) ;opacity: 0;}
        .first.second li:nth-child(21){ transform: translateX(-10px) translateY(40px) ;opacity: 0;}
        .first.second li:nth-child(22){ transform: translateX(-15px) translateY(10px) ;opacity: 0;}
        .first.second li:nth-child(23){ transform: translateX(-15px) translateY(10px) ;opacity: 0;}
        
        
    .date
        {  
            position:absolute;
            top:13vh;
            left: 30vw;
            width: 8em;
            font-size: 6vw;
            color:green;
            opacity:0;
            white-space: nowrap;
            overflow: hidden;
            
        }
        .date1
        {
            -webkit-animation: onload 4s steps(200);
            -webkit-animation-fill-mode: forwards;
           -moz-animation: onload 4s steps(200);
             -moz-animation-fill-mode: forwards;
            -o-animation: onload 4s steps(200);
             -o-animation-fill-mode: forwards;
            animation: onload 4s steps(200);
             animation-fill-mode: forwards;
            
        }
    .shayari
        {  position: absolute;
            width:69;
            top: 0%;
            color:blue;
            white-space: nowrap;
            opacity: 0;
            font-size: 4.5vw;
            overflow: hidden;
            animation-fill-mode: forwards;
            -webkit-animation-fill-mode: forwards;
            -moz-animation-fill-mode: forwards;
            -o-animation-fill-mode: forwards;
            
        }
        .line1
        {
            animation: line1 3s steps(200,end);
            animation-fill-mode: forwards;
            -webkit-animation: line1 3s steps(200,end);
            -webkit-animation-fill-mode: forwards;
            -moz-animation: line1 3s steps(200,end);
            -moz-animation-fill-mode: forwards;
            -o-animation: line1 3s steps(200,end);
            -o-animation-fill-mode: forwards;
            left:22vw;
            top: 23%;
        }
    
        .line2
        {
            -webkit-animation: line1 3s steps(200,end);
            -webkit-animation-fill-mode: forwards;
            -moz-animation: line1 3s steps(200,end);
            -moz-animation-fill-mode: forwards;
            -o-animation: line1 3s steps(200,end);
            -o-animation-fill-mode: forwards;
            animation: line1 3s steps(200,end);
            animation-fill-mode: forwards;
            left: 28vw;
            top: 28%;
        }
    
        .line3
        {
            -webkit-animation: line3 3s steps(200,end);
            -webkit-animation-fill-mode: forwards;
            -moz-animation: line3 3s steps(200,end);
            -moz-animation-fill-mode: forwards;
            -o-animation: line3 3s steps(200,end);
            -o-animation-fill-mode: forwards;
            animation: line3 3s steps(200,end);
            animation-fill-mode: forwards;
            left:22vw;
            top: 33%;
        }
    
        .line4
        {
            -webkit-animation: line4 3s steps(200,end);
            -webkir-animation-fill-mode: forwards;
            -moz-animation: line4 3s steps(200,end);
            -moz-animation-fill-mode: forwards;
            -o-animation: line4 3s steps(200,end);
            -o-animation-fill-mode: forwards;
            animation: line4 3s steps(200,end);
            animation-fill-mode: forwards;
            left: 28vw;
            top: 38%;
        }
    
        .line5
        {
            -webkit-animation: line5 3s steps(200,end);
            -webkit-animation-fill-mode: forwards;
            -moz-animation: line5 3s steps(200,end);
            -moz-animation-fill-mode: forwards;
            -o-animation: line5 3s steps(200,end);
            -o-animation-fill-mode: forwards;
            animation: line5 3s steps(200,end);
            animation-fill-mode: forwards;
            left:22vw;
            top: 43%;
        }
    
        .line6
        {
            
            -webkit-animation: line6 3s steps(200,end);
            -webkit-animation-fill-mode: forwards;
            -moz-animation: line6 3s steps(200,end);
            -moz-animation-fill-mode: forwards;
            -o-animation: line6 3s steps(200,end);
            -o-animation-fill-mode: forwards;
            animation: line6 3s steps(200,end);
            animation-fill-mode: forwards;
            left: 28vw;
            top: 48%;
        }
    
        .line7
        {
            -webkit-animation: line7 3s steps(200,end);
            -webkit-animation-fill-mode: forwards;
            -moz-animation: line7 3s steps(200,end);
            -moz-animation-fill-mode: forwards;
            -o-animation: line7 3s steps(200,end);
            -o-animation-fill-mode: forwards;
            animation: line7 3s steps(200,end);
            animation-fill-mode: forwards;
            left:22vw;
            top: 53%;
        }
    
        .line8
        {
            -webkit-animation: line8 3s steps(200,end);
            -webkit-animation-fill-mode: forwards;
            -moz-animation: line8 3s steps(200,end);
            -moz-animation-fill-mode: forwards;
            -o-animation: line8 3s steps(200,end);
            -o-animation-fill-mode: forwards;
            animation: line8 3s steps(200,end);
            animation-fill-mode: forwards;
            left: 28vw;
            top: 58%;
        }
    
        
        
        
        
    #rect
        {
            text-align: right;
            height:100vh;
            width:50vw;
            float: left;
            clip-path:polygon(0 0,100% 0,100% 100%,0% 100%);
            -webkit-clip-path:polygon(0 0,100% 0,100% 100%,0% 100%);
             -moz-clip-path:polygon(0 0,100% 0,100% 100%,0% 100%);
             -o-clip-path:polygon(0 0,100% 0,100% 100%,0% 100%);
            animation-fill-mode: forwards;
            -webkit-animation-fill-mode: forwards;
            -moz-animation-fill-mode: forwards;
            -o-animation-fill-mode: forwards;
            background:linear-gradient(170deg,blue,white);
            background:-webkit-linear-gradient(170deg,blue,white);
            background:-moz-linear-gradient(170deg,blue,white);
            background:-o-linear-gradient(170deg,blue,white);
            font-size: 10vw;
            color: aliceblue;
            
        }
        ul
        {
            position: absolute;
            left: 5.5vw;
            padding:0px;
        }
        
        .rec
        {
            -webkit-animation: yogy 4s steps(200);
            -moz-animation: yogy 4s steps(200);
            -o-animation: yogy 4s steps(200);
            animation: yogy 4s steps(200);
            
        }
        
        #rect1
        {
            font-size: 10vw;
            color: aliceblue;
            text-align: left;
            height:100vh;
            width:50vw;
            float: left;
            clip-path:polygon(0% 0,100% 0,100% 100%,0% 100%);
            -webkit-clip-path:polygon(0% 0,100% 0,100% 100%,0% 100%);
            -moz-clip-path:polygon(0% 0,100% 0,100% 100%,0% 100%);
            -o-clip-path:polygon(0% 0,100% 0,100% 100%,0% 100%);
            -webkit-animation-fill-mode: forwards;
            -moz-animation-fill-mode: forwards;
            -o-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            background:linear-gradient(10deg,blue,white);
            background:-webkit-linear-gradient(10deg,blue,white);
            background:-moz-linear-gradient(10deg,blue,white);
            background:-o-linear-gradient(10deg,blue,white);
            
        }
        
        
        .rec1
        {
            -webkit-animation: yogy1 4s steps(200);
            -moz-animation: yogy1 4s steps(200);
            -o-animation: yogy1 4s steps(200);
            animation: yogy1 4s steps(200);

        }
        
        
        
        @keyframes yogy
            {
                0%{opacity:1;}
                100%{clip-path:polygon(0 0,0 0,0 50%,0 100%);opacity:0;}
            }

        @keyframes yogy1
            {
                0%{opacity:1;}
                100%{clip-path:polygon(100% 0,100% 0,100% 100%,100% 50%);opacity:0;}
            }
        
        @keyframes yo
            {
                from{top: 0px;opacity: 1;}
                50%{top:75px;}
                100%{top:150px;}
            }

        @keyframes onload
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 50%;}
                100% {opacity: 1;}
            }
        
        @keyframes line1
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @keyframes line2
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @keyframes line3
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @keyframes line4
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @keyframes line5
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @keyframes line6
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @keyframes line7
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width:60%;}
                100% {opacity: 1;}
            }
        @keyframes line8
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @keyframes btn
        {
            0% {opacity:.25;}
            
            50% {opacity:1;}
            100%{opacity:.25;}
            
            
        }
        
        
        
        
        @-webkit-keyframes yogy
            {
                0%{opacity: 1;}
                75%{opacity: 0;}
                100%{opacity: 0;}
            }

        @-webkit-keyframes yogy1
            {
                0%{opacity: 1;}
                75%{opacity: 0;}
                100%{opacity: 0;}
            }
        
        @-webkit-keyframes yo
            {
                from{top: 0px;opacity: 1;}
                50%{top:75px;}
                100%{top:150px;}
            }

        @-webkit-keyframes onload
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 50%;}
                100% {opacity: 1;}
            }
        
        @-webkit-keyframes line1
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-webkit-keyframes line2
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-webkit-keyframes line3
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-webkit-keyframes line4
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-webkit-keyframes line5
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-webkit-keyframes line6
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-webkit-keyframes line7
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width:60%;}
                100% {opacity: 1;}
            }
        @-webkit-keyframes line8
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-webkit-keyframes btn
        {
            0% {opacity:.25;}
            
            50% {opacity:1;}
            100%{opacity:.25;}
            
            
        }
        
        
        
        @-moz-keyframes yogy
            {
                0%{opacity: 1;}
                75%{opacity: 0;}
                100%{opacity: 0;}
            }

        @-moz-keyframes yogy1
            {
                  0%{opacity: 1;}
                75%{opacity: 0;}
                100%{opacity: 0;}
        }
        
        @-moz-keyframes yo
            {
                from{top: 0px;opacity: 1;}
                50%{top:75px;}
                100%{top:150px;}
            }

        @-moz-keyframes onload
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 50%;}
                100% {opacity: 1;}
            }
        
        @-moz-keyframes line1
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-moz-keyframes line2
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-moz-keyframes line3
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-moz-keyframes line4
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-moz-keyframes line5
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-moz-keyframes line6
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-moz-keyframes line7
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width:60%;}
                100% {opacity: 1;}
            }
        @-moz-keyframes line8
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-moz-keyframes btn
        {
            0% {opacity:.25;}
            
            50% {opacity:1;}
            100%{opacity:.25;}
            
            
        }
        
        
        
        @-o-keyframes yogy
            {
                0%{}
                100%{-o-clip-path:polygon(0 0,0 0,0 50%,0 100%);}
            }

        @-o-keyframes yogy1
            {
                0%{}
                100%{-o-clip-path:polygon(100% 0,100% 0,100% 100%,100% 50%);}
            }
        
        @-o-keyframes yo
            {
                from{top: 0px;opacity: 1;}
                50%{top:75px;}
                100%{top:150px;}
            }

        @-o-keyframes onload
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 50%;}
                100% {opacity: 1;}
            }
        
        @-o-keyframes line1
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-o-keyframes line2
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-o-keyframes line3
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-o-keyframes line4
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-o-keyframes line5
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-o-keyframes line6
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-o-keyframes line7
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width:60%;}
                100% {opacity: 1;}
            }
        @-o-keyframes line8
            {
                0% {width: 0%;opacity: 0;}
                70% {opacity: 1; width: 60%;}
                100% {opacity: 1;}
            }
        @-o-keyframes btn
        {
            0% {opacity:.25;}
            
            50% {opacity:1;}
            100%{opacity:.25;}
            
            
        }
        
        .from
        {
            position: absolute;
            top: 64vh;
            opacity: 0;
            left: 30%;
            margin-bottom: 2px;
        }
        .from1
        {
            animation: from 5s;
            animation-fill-mode: forwards;
        }
        input[type=text]
        {
            position: absolute;
            border-radius: 5vw;
            width: 40vw;
            height: 5vw;
            float: left;
            }
       
        
    @keyframes from
        {
            from{opacity: 0;font-size:1vw;}
            to{opacity: 1;font-size:4.5vw;left: 30%;}
        }
        
        
        
    body
        {
            margin: 0px;
           overflow-x: scroll;
            overflow-y: scroll;
            height: 100vh;
            background: linear-gradient(120deg,#FF9933,#FFFFFF,#138808);
            background: -webkit-linear-gradient(120deg,#FF9933,#FFFFFF,#138808);
            background: -moz-linear-gradient(120deg,#FF9933,#FFFFFF,#138808);
            background: -o-linear-gradient(120deg,#FF9933,#FFFFFF,#138808);
            
            
           
          
        }
    #g1
        {
            position: absolute;
            top: 65vh;
            font-size: 8vw;
            left: 30%;
            
        }
    #g2
        {
            position: absolute;
            top: 70vh;
            font-size: 8vw;
        }
        
    </style>

    
    
    
<body>
       
    
        <clippath id="rect" >Happ<br>Inde<br>D<p id="g1">From:</p></clippath>
        <clippath id="rect1" >y<br>pendence<br>ay<p id="g2"><?php 
            if(isset($_GET['name']))
            {
               $name1=$_GET['name']; 
            }
            else
            {
                echo("<script> var answer=prompt('enter your name');</script>");
                $name1="<script>document.write(answer);</script>";
                
            }
               
    
    
        echo str_replace("-"," ",$name1);
        ?></p></clippath>
    <div id="vl"></div>
         <button class="button" onclick="animation()" id="btn">Tap to open</button>
        <center>
        <ul class="first second" id="hi">
            <li>H</li>
            <li>A</li>
            <li>P</li>
            <li>P</li>
            <li>Y</li>
            <li> </li>
            <li>I</li>
            <li>N</li>
            <li>D</li>
            <li>E</li>
            <li>P</li>
            <li>E</li>
            <li>N</li>
            <li>D</li>
            <li>E</li>
            <li>N</li>
            <li>C</li>
            <li>E</li>
            <li> </li>
            <br>
            <li>D</li>
            <li>A</li>
            <li>Y</li>
        </ul>
    
    <p class="date" id="date">15 AUGUST 2018 </p>
       
       
       
            

       
       
       
       
       
       
       
       
       
       
     </center>
        <p class="shayari " id="line1">Watan Hamara aise,</p>

            <p class="shayari " id="line2">na chod paye koi..,</p>

            <p class="shayari " id="line3">Rishte Hamare aise,</p>
            <p class="shayari " id="line4">na Tod paye koi..,</p>

<p class="shayari " id="line5">Dil Hamare ek hai,</p>
<p class="shayari " id="line6">ek hai hamari jaan..</p>

<p class="shayari " id="line7">Hindustan hamara hai</p>
<p class="shayari " id="line8">hum hai iski shaan...</p>
<p class="from" id="from">From:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php 
                if(isset($_GET['name']))
                {
                   $name1=$_GET['name']; 
                }
                else
                {
                    $name1="<script>document.write(answer);</script>";

                }



            echo str_replace("-"," ",$name1);
            ?></p>
       
    
    
    

    <p style="position:absolute;top:75vh;display:none;" id="para">For send greeting to your friend <br>enter your name and press whatsapp share icon</p>
    
    <div id="div" style="position:relative;height:4vh;top:87vh;display:block;">
    <input type="text" placeholder="enter your name" id="name" style="display:none;" onfocus="removepara()" onblur="getpara()">
    <img id="whatsapp" src="whatsapp.png" height="40px" width="40px" style="float:left;position:absolute;top:5vh;display:none;margin-bottom=2px;z-index:1;" onclick="share()" data-action="share/whatsapp/share" /><a style="position:absolute;float:left;top:8vh; display:none;width:50%;left:12vw;margin-bottom=2px;z-index:1;"  id="whatsapppara"  data-action="share/whatsapp/share">Share on WhatsApp</a>
    </div>
    <div style="background:black;color:white;font-family:cursive;padding-bottom:5vh;position:absolute;top:100vh;height:5vh;bottom:0%;width:100%;">
        <a style="text-decoration:none;font-size:3vh;color:white;margin:2vw;" href="contact_us.html">Contact us</a>
        <a style="text-decoration:none;font-size:3vh;color:white;" href="about_us.html">About us</a>
        
    </div>
</body>