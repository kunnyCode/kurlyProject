
//여건 작성
//메인배너

let list = document.querySelector('.main_type1 .list_goods .bx-wrapper .bx-viewport .list'),  //ul
    li = document.querySelectorAll('.main_type1 .list_goods .bx-wrapper .bx-viewport .list li'),//li
    MainPrevBtn = document.querySelector('.m-bx-prev'); // 이전 버튼
    MainNextBtn = document.querySelector('.m-bx-next'); // 다음 버튼
    liIdx = 0;


    // ul 가로값 재정의 및 css값 정의
    list.style.float="left";
    list.style.width=100 * (li.length + 2) + '%';
    list.style.overflow='hidden';
    list.style.position='relative';

    makeClone(); //클론 만들기
    setInitialPOs(); // 메인배너 1면으로 재조정
    
    setTimeout(function(){   // 처름 배너 화면 애니메이션 넘어가는거 안보이게
        list.classList.add('animated');
    },100);
    

    //버튼 누르면 슬라이드
    MainPrevBtn.addEventListener('click' , function(){
        setTimeout(function(){
            MovSde(liIdx - 1);
        },200);
        
    });

    MainNextBtn.addEventListener('click' , function(){
        setTimeout(function(){
            MovSde(liIdx + 1);
        },200);
    });

    //자동넘기기
    // MovSdeInf();




    let iterTime = null;

    //iterTime = setInterval(MovSde(liIdx +1), 3000);



    iterTime = setInterval(() => {
        MovSde(liIdx + 1);


    }, 3000);











    //-------------------------함수------------------------------

    //무한루프를 위한 클론 만들기 함수
    //a.cloneNode() -> a 요소를 그대로 복사
    //a.cloneNode(true) -> a요소의 하위요소까지 복사
    //a.appendChild(b) -> a라는 부모요소 안에 있는 자식요소 맨 뒤에다 b요소를 넣는 것
    //a.prepend(b) -> 앞에다 추가하는 것
    function makeClone(){
        let clone0 = li[0].cloneNode(true);
        let clone9 = li[9].cloneNode(true);

        clone0.classList.add('clone');
        clone9.classList.add('clone');

        list.appendChild(clone0);
        list.prepend(clone9);

        
    }

    //초기 위치를 잡는 함수
    function setInitialPOs() {
        list.style.transform='translateX(-8.33%)';
    }



    //버튼 누르면 슬라이드 + 무힌루프 함수
    function MovSde(num){

        list.style.left= - 100 * num + '%';
        liIdx = num;

        // console.log(num);        
        if(liIdx == 10) {
            setTimeout(function(){
                list.classList.remove('animated');
                list.style.left=0 +'%';
                liIdx = 0;
            },500);
            setTimeout(function(){
                list.classList.add('animated');
            }, 600);
        }
        if(liIdx == -1) {
            setTimeout(function(){
                list.classList.remove('animated');
                list.style.left=-900 +'%';
                liIdx = 9;
            },500);
            setTimeout(function(){
                list.classList.add('animated');
            }, 600);
        }
    }

    // function MovSdeInf(){
    //     let iterTime = null;

    //     iterTime = setInterval(() => {
    //         MovSde(liIdx + 1)
    //     }, 3000);
    // }




    //-------------------------함수끝------------------------------


    //마우스 올리면 버튼 보이게 하기
    //onmouseover 해당 객체에 마우스가 올라왔을 때 이벤트
    //onmouseout 해당 객체에서 마우스가 나갔을 때 이벤트

    list.onmouseover = function(){
        MainPrevBtn.style.opacity="1";
        MainNextBtn.style.opacity="1";
    }

    list.onmouseout = function(){
        MainPrevBtn.style.opacity="0";
        MainNextBtn.style.opacity="0";
    }

    MainPrevBtn.onmouseover = function(){
        MainPrevBtn.style.opacity="1";
        MainNextBtn.style.opacity="1";
    }

    MainNextBtn.onmouseover = function(){
        MainPrevBtn.style.opacity="1";
        MainNextBtn.style.opacity="1";
    }








    // MainPrevBtn
    // MainNextBtn


// console.log(list);
// console.log(li);
// console.log(MainPrevBtn);










//이 상품 어때요?
//4단 페이지 롤링
//HTML에서 변수를 가져온다
let slider1 = document.querySelectorAll('.slider'), //ul태그

    slide0 = document.querySelectorAll('.s0 .slider li'), // 이상품
    slide1 = document.querySelectorAll('.s1 .slider li'), // 특가
    slide2 = document.querySelectorAll('.s2 .slider li'), // 놓치면
    slide3 = document.querySelectorAll('.s3 .slider li'), // MD
    slide4 = document.querySelectorAll('.s4 .slider li'), // 가장 핫한
    slide5 = document.querySelectorAll('.s5 .slider li'), // 추위가
    slide6 = document.querySelectorAll('.s6 .slider li'), // 컬리가
    slide7 = document.querySelectorAll('.s7 .slider li'), // 365
    slide8 = document.querySelectorAll('.s8 .slider li'), // 오프라인
    slide9 = document.querySelectorAll('.s9 .slider li'), // 컬리 레시피
    slide10 = document.querySelectorAll('.s10 .slider li'), // 인스타그램
    
    //slideCount = 0, //slide0.length, //끝인지 마지막인지 구분용도
    slideWidth = 249,
    slideWidth2 = 338,
    slideWidth3 = 175,
    slideMargin = 18,
    prevBtn = document.querySelectorAll('.bx-prev'),
    nextBtn = document.querySelectorAll('.bx-next');

    
    console.log(slider1.length);
    console.log(nextBtn.length);

    let currentIdx0 = 0,
        currentIdx1 = 0,
        currentIdx2 = 0,
        currentIdx3 = 0,
        currentIdx4 = 0,
        currentIdx5 = 0,
        currentIdx6 = 0,
        currentIdx7 = 0,
        currentIdx8 = 0,
        currentIdx9 = 0;
        currentIdx10 = 0;


    //ul width 값 설정
    slider1[0].style.width = (slideWidth + slideMargin) * slide0.length +'px';  
    // slider1[1].style.width = (slideWidth + slideMargin) * slide1.length +'px'; 
    slider1[2].style.width = (slideWidth + slideMargin) * slide2.length +'px'; 
    slider1[3].style.width = (slideWidth + slideMargin) * slide3.length +'px'; 
    slider1[4].style.width = (slideWidth + slideMargin) * slide4.length +'px'; 
    slider1[5].style.width = (slideWidth + slideMargin) * slide5.length +'px'; 
    slider1[6].style.width = (slideWidth + slideMargin) * slide6.length +'px'; 
    slider1[7].style.width = (slideWidth + slideMargin) * slide7.length +'px'; 
    slider1[8].style.width = (slideWidth + slideMargin) * slide8.length +'px';
    slider1[9].style.width = (slideWidth2 + slideMargin) * slide9.length +'px';  
    slider1[10].style.width = (slideWidth3 * slide10.length) +'px';

    
    //nextBtn, prevBtn 버튼 클릭시 오는 파라미터를 통해 4페이지씩 롤링
    function moveSlide(num){
        slider1[0].style.left = - num * 267 + 'px';
        currentIdx0 = num;

        // 슬라이드 끝지점에 다다르면 버튼 사라지게
        if(currentIdx0 == 0){
            prevBtn[0].classList.add("disabled");
        }else if(currentIdx0 == 16){
            nextBtn[0].classList.add("disabled");
        }else if(currentIdx0 > 1 || currentIdx0 < 16){
            prevBtn[0].classList.remove("disabled");
            nextBtn[0].classList.remove("disabled");
        }
        
    }

    // 오른쪽 버튼을 누르면 4페이지씩 넘겨주는 값을 moveSlide 파라미터로 전달
    nextBtn[0].addEventListener('click', function(){
        if(currentIdx0 < slide0.length - 5){
            moveSlide(currentIdx0 + 4);
            //console.log(currentIdx0);
        }
    });

    // 왼쪽 버튼을 누르면 4페이지씩 넘겨주는 값을 moveSlide 파라미터로 전달
    prevBtn[0].addEventListener('click', function(){
        if(currentIdx0 > slide0.length - 19){
            moveSlide(currentIdx0 - 4);
            //console.log(currentIdx0); 
        }
    });






        //놓치면 후회할 가격 롤링
        function moveSlide2(num){
        slider1[2].style.left = - num * 267 + 'px';
        currentIdx2 = num;

        
        if(currentIdx2 == 0){
            prevBtn[1].classList.add("disabled");
            nextBtn[1].classList.remove("disabled");
        }else if(currentIdx2 == 2){
            nextBtn[1].classList.add("disabled");
            prevBtn[1].classList.remove("disabled");
        }
    }
    

    
    nextBtn[1].addEventListener('click', function(){
        if(currentIdx2 < slide2.length - 5){
            moveSlide2(currentIdx2 + 2);
            //console.log(currentIdx2);
        }
    });

    
    prevBtn[1].addEventListener('click', function(){
        if(currentIdx2 > slide2.length - 19){
            moveSlide2(currentIdx2 - 2);
            //console.log(currentIdx2); 
        }
    });






    //MD
    function moveSlide3(num){
        slider1[3].style.left = - num * 267 + 'px';
        currentIdx3 = num;

        
        if(currentIdx3 == 0){
            prevBtn[2].classList.add("disabled");
            nextBtn[2].classList.remove("disabled");
        }else if(currentIdx3 == 2){
            nextBtn[2].classList.add("disabled");
            prevBtn[2].classList.remove("disabled");
        }
    }
    

    
    nextBtn[2].addEventListener('click', function(){
        if(currentIdx3 < slide3.length - 5){
            moveSlide3(currentIdx3 + 2);
            //console.log(currentIdx3);
        }
    });

    
    prevBtn[2].addEventListener('click', function(){
        if(currentIdx3 > slide3.length - 19){
            moveSlide3(currentIdx3 - 2);
            //console.log(currentIdx3); 
        }
    });







        //지금 가장 핫한
        function moveSlide4(num){
            slider1[4].style.left = - num * 267 + 'px';
            currentIdx4 = num;
    
            
            if(currentIdx4 == 0){
                prevBtn[3].classList.add("disabled");
                nextBtn[3].classList.remove("disabled");
            }else if(currentIdx4 == 2){
                nextBtn[3].classList.add("disabled");
                prevBtn[3].classList.remove("disabled");
            }
        }
        
    
        
        nextBtn[3].addEventListener('click', function(){
            if(currentIdx4 < slide4.length - 5){
                moveSlide4(currentIdx4 + 2);
                //console.log(currentIdx4);
            }
        });
    
        
        prevBtn[3].addEventListener('click', function(){
            if(currentIdx4 > slide4.length - 19){
                moveSlide4(currentIdx4 - 2);
                //console.log(currentIdx4); 
            }
        });






        //추위가 두렵지 않도록
        function moveSlide5(num){
            slider1[5].style.left = - num * 267 + 'px';
            currentIdx5 = num;
    
            
            if(currentIdx5 == 0){
                prevBtn[4].classList.add("disabled");
                nextBtn[4].classList.remove("disabled");
            }else if(currentIdx5 == 2){
                nextBtn[4].classList.add("disabled");
                prevBtn[4].classList.remove("disabled");
            }
        }
        
    
        
        nextBtn[4].addEventListener('click', function(){
            if(currentIdx5 < slide5.length - 5){
                moveSlide5(currentIdx5 + 2);
                //console.log(currentIdx5);
            }
        });
    
        
        prevBtn[4].addEventListener('click', function(){
            if(currentIdx5 > slide5.length - 19){
                moveSlide5(currentIdx5 - 2);
                //console.log(currentIdx5); 
            }
        });



        // 컬리가 만든 상품
        function moveSlide6(num){
            slider1[6].style.left = - num * 267 + 'px';
            currentIdx6 = num;
    
            
            if(currentIdx6 == 0){
                prevBtn[5].classList.add("disabled");
                nextBtn[5].classList.remove("disabled");
            }else if(currentIdx6 == 2){
                nextBtn[5].classList.add("disabled");
                prevBtn[5].classList.remove("disabled");
            }
        }
        
    
        
        nextBtn[5].addEventListener('click', function(){
            if(currentIdx6 < slide6.length - 5){
                moveSlide6(currentIdx6 + 2);
                //console.log(currentIdx6);
            }
        });
    
        
        prevBtn[5].addEventListener('click', function(){
            if(currentIdx6 > slide6.length - 19){
                moveSlide6(currentIdx6 - 2);
                //console.log(currentIdx6); 
            }
        });





        //365 최저가 도전
        function moveSlide7(num){
            slider1[7].style.left = - num * 267 + 'px';
            currentIdx7 = num;
    
            
            if(currentIdx7 == 0){
                prevBtn[6].classList.add("disabled");
                nextBtn[6].classList.remove("disabled");
            }else if(currentIdx7 == 2){
                nextBtn[6].classList.add("disabled");
                prevBtn[6].classList.remove("disabled");
            }
        }
        
    
        
        nextBtn[6].addEventListener('click', function(){
            if(currentIdx7 < slide7.length - 5){
                moveSlide7(currentIdx7 + 2);
                //console.log(currentIdx7);
            }
        });
    
        
        prevBtn[6].addEventListener('click', function(){
            if(currentIdx7 > slide7.length - 19){
                moveSlide7(currentIdx7 - 2);
                //console.log(currentIdx7); 
            }
        });





        //오프라인 맛집
        function moveSlide8(num){
        slider1[8].style.left = - num * 267 + 'px';
        currentIdx8 = num;

        
            if(currentIdx8 == 0){
                prevBtn[7].classList.add("disabled");
                nextBtn[7].classList.remove("disabled");
            }else if(currentIdx8 == 2){
                nextBtn[7].classList.add("disabled");
                prevBtn[7].classList.remove("disabled");
            }
        }
        

    
    nextBtn[7].addEventListener('click', function(){
        if(currentIdx8 < slide8.length - 4){
            moveSlide8(currentIdx8 + 2);
            //console.log(currentIdx8);
        }
    });

    
    prevBtn[7].addEventListener('click', function(){
        if(currentIdx8 > slide8.length - 19){
            moveSlide8(currentIdx8 - 2);
            //console.log(currentIdx8); 
        }
    });




    // 컬리의 레시피 
    function moveSlide9(num){
        slider1[9].style.left = - num * (338+18) + 'px';
        currentIdx9 = num;

        
            if(currentIdx9 == 0){
                prevBtn[8].classList.add("disabled");
                nextBtn[8].classList.remove("disabled");
            }else if(currentIdx9 == 2){
                nextBtn[8].classList.add("disabled");
                prevBtn[8].classList.remove("disabled");
            }
        }
        

    
    nextBtn[8].addEventListener('click', function(){
        if(currentIdx9 < slide8.length - 4){
            moveSlide9(currentIdx9 + 2);
            //console.log(currentIdx9);
        }
    });

    
    prevBtn[8].addEventListener('click', function(){
        if(currentIdx9 > slide9.length - 19){
            moveSlide9(currentIdx9 - 2);
            //console.log(currentIdx9); 
        }
    });






    // 인스타그램
    function moveSlide10(num){
        slider1[10].style.left = - num * 175 + 'px';
        currentIdx10 = num;

        
            if(currentIdx10 == 0){
                prevBtn[9].classList.add("disabled");
                nextBtn[9].classList.remove("disabled");
            }else if(currentIdx10 == 6){
                nextBtn[9].classList.add("disabled");
                prevBtn[9].classList.remove("disabled");
            }
        }
        

    
    nextBtn[9].addEventListener('click', function(){
        if(currentIdx10 < slide10.length - 4){
            moveSlide10(currentIdx10 + 6);
            //console.log(currentIdx10);
        }
    });
    
        
        prevBtn[9].addEventListener('click', function(){
            if(currentIdx10 > slide10.length - 7){
                moveSlide10(currentIdx10 - 6);
                //console.log(currentIdx10); 
            }
        });

    // console.log(slider1);
    // console.log(slide0.length);
    // console.log(slide1.length);
    // console.log(slide2.length);
    // console.log(slide3.length);
    // console.log(slide4.length);
    // console.log(slide5.length);
    // console.log(slide6.length);
    // console.log(slide7.length);
    // console.log(slide8.length);
    // console.log(slide9.length);


    // console.log(slideCount1);
    // console.log(prevBtn);
    // console.log(nextBtn);
    

    


    //여건 작성
    // MD 추천 구현
    // 노다가 코딩 햇는데 혹시 더 효율적으로 코딩하실 수 잇으시다면 변경해주셔도 좋습니다!!
    let menu = document.querySelectorAll('.category .list_category .menu');
    let btnBottom = document.querySelector('.category_type .link_cate .link .ico');


    function swt (i){
        if(i==0){
            menu[0].classList.add("on");
            menu[1].classList.remove("on");
            menu[2].classList.remove("on");
            menu[3].classList.remove("on");
            menu[4].classList.remove("on");
            menu[5].classList.remove("on");
            menu[6].classList.remove("on");
            menu[7].classList.remove("on");
            menu[8].classList.remove("on");
            menu[9].classList.remove("on");
            menu[10].classList.remove("on");
            menu[11].classList.remove("on");
            menu[12].classList.remove("on");
            menu[13].classList.remove("on");
            menu[14].classList.remove("on");
            menu[15].classList.remove("on");
            menu[16].classList.remove("on");
            menu[17].classList.remove("on");
        }else if(i==1){
            menu[0].classList.remove("on");
            menu[1].classList.add("on");
            menu[2].classList.remove("on");
            menu[3].classList.remove("on");
            menu[4].classList.remove("on");
            menu[5].classList.remove("on");
            menu[6].classList.remove("on");
            menu[7].classList.remove("on");
            menu[8].classList.remove("on");
            menu[9].classList.remove("on");
            menu[10].classList.remove("on");
            menu[11].classList.remove("on");
            menu[12].classList.remove("on");
            menu[13].classList.remove("on");
            menu[14].classList.remove("on");
            menu[15].classList.remove("on");
            menu[16].classList.remove("on");
            menu[17].classList.remove("on");
        }else if(i==2){
            menu[0].classList.remove("on");
            menu[1].classList.remove("on");
            menu[2].classList.add("on");
            menu[3].classList.remove("on");
            menu[4].classList.remove("on");
            menu[5].classList.remove("on");
            menu[6].classList.remove("on");
            menu[7].classList.remove("on");
            menu[8].classList.remove("on");
            menu[9].classList.remove("on");
            menu[10].classList.remove("on");
            menu[11].classList.remove("on");
            menu[12].classList.remove("on");
            menu[13].classList.remove("on");
            menu[14].classList.remove("on");
            menu[15].classList.remove("on");
            menu[16].classList.remove("on");
            menu[17].classList.remove("on");
        }else if(i==3){
            menu[0].classList.remove("on");
            menu[1].classList.remove("on");
            menu[2].classList.remove("on");
            menu[3].classList.add("on");
            menu[4].classList.remove("on");
            menu[5].classList.remove("on");
            menu[6].classList.remove("on");
            menu[7].classList.remove("on");
            menu[8].classList.remove("on");
            menu[9].classList.remove("on");
            menu[10].classList.remove("on");
            menu[11].classList.remove("on");
            menu[12].classList.remove("on");
            menu[13].classList.remove("on");
            menu[14].classList.remove("on");
            menu[15].classList.remove("on");
            menu[16].classList.remove("on");
            menu[17].classList.remove("on");
        }else if(i==4){
            menu[0].classList.remove("on");
            menu[1].classList.remove("on");
            menu[2].classList.remove("on");
            menu[3].classList.remove("on");
            menu[4].classList.add("on");
            menu[5].classList.remove("on");
            menu[6].classList.remove("on");
            menu[7].classList.remove("on");
            menu[8].classList.remove("on");
            menu[9].classList.remove("on");
            menu[10].classList.remove("on");
            menu[11].classList.remove("on");
            menu[12].classList.remove("on");
            menu[13].classList.remove("on");
            menu[14].classList.remove("on");
            menu[15].classList.remove("on");
            menu[16].classList.remove("on");
            menu[17].classList.remove("on");
        }else if(i==5){
            menu[0].classList.remove("on");
            menu[1].classList.remove("on");
            menu[2].classList.remove("on");
            menu[3].classList.remove("on");
            menu[4].classList.remove("on");
            menu[5].classList.add("on");
            menu[6].classList.remove("on");
            menu[7].classList.remove("on");
            menu[8].classList.remove("on");
            menu[9].classList.remove("on");
            menu[10].classList.remove("on");
            menu[11].classList.remove("on");
            menu[12].classList.remove("on");
            menu[13].classList.remove("on");
            menu[14].classList.remove("on");
            menu[15].classList.remove("on");
            menu[16].classList.remove("on");
            menu[17].classList.remove("on");
        }else if(i==6){
            menu[0].classList.remove("on");
            menu[1].classList.remove("on");
            menu[2].classList.remove("on");
            menu[3].classList.remove("on");
            menu[4].classList.remove("on");
            menu[5].classList.remove("on");
            menu[6].classList.add("on");
            menu[7].classList.remove("on");
            menu[8].classList.remove("on");
            menu[9].classList.remove("on");
            menu[10].classList.remove("on");
            menu[11].classList.remove("on");
            menu[12].classList.remove("on");
            menu[13].classList.remove("on");
            menu[14].classList.remove("on");
            menu[15].classList.remove("on");
            menu[16].classList.remove("on");
            menu[17].classList.remove("on");
        }else if(i==7){
            menu[0].classList.remove("on");
            menu[1].classList.remove("on");
            menu[2].classList.remove("on");
            menu[3].classList.remove("on");
            menu[4].classList.remove("on");
            menu[5].classList.remove("on");
            menu[6].classList.remove("on");
            menu[7].classList.add("on");
            menu[8].classList.remove("on");
            menu[9].classList.remove("on");
            menu[10].classList.remove("on");
            menu[11].classList.remove("on");
            menu[12].classList.remove("on");
            menu[13].classList.remove("on");
            menu[14].classList.remove("on");
            menu[15].classList.remove("on");
            menu[16].classList.remove("on");
            menu[17].classList.remove("on");
        }else if(i==8){
            menu[0].classList.remove("on");
            menu[1].classList.remove("on");
            menu[2].classList.remove("on");
            menu[3].classList.remove("on");
            menu[4].classList.remove("on");
            menu[5].classList.remove("on");
            menu[6].classList.remove("on");
            menu[7].classList.remove("on");
            menu[8].classList.add("on");
            menu[9].classList.remove("on");
            menu[10].classList.remove("on");
            menu[11].classList.remove("on");
            menu[12].classList.remove("on");
            menu[13].classList.remove("on");
            menu[14].classList.remove("on");
            menu[15].classList.remove("on");
            menu[16].classList.remove("on");
            menu[17].classList.remove("on");
        }else if(i==9){
            menu[0].classList.remove("on");
            menu[1].classList.remove("on");
            menu[2].classList.remove("on");
            menu[3].classList.remove("on");
            menu[4].classList.remove("on");
            menu[5].classList.remove("on");
            menu[6].classList.remove("on");
            menu[7].classList.remove("on");
            menu[8].classList.remove("on");
            menu[9].classList.add("on");
            menu[10].classList.remove("on");
            menu[11].classList.remove("on");
            menu[12].classList.remove("on");
            menu[13].classList.remove("on");
            menu[14].classList.remove("on");
            menu[15].classList.remove("on");
            menu[16].classList.remove("on");
            menu[17].classList.remove("on");
        }else if(i==10){
            menu[0].classList.remove("on");
            menu[1].classList.remove("on");
            menu[2].classList.remove("on");
            menu[3].classList.remove("on");
            menu[4].classList.remove("on");
            menu[5].classList.remove("on");
            menu[6].classList.remove("on");
            menu[7].classList.remove("on");
            menu[8].classList.remove("on");
            menu[9].classList.remove("on");
            menu[10].classList.add("on");
            menu[11].classList.remove("on");
            menu[12].classList.remove("on");
            menu[13].classList.remove("on");
            menu[14].classList.remove("on");
            menu[15].classList.remove("on");
            menu[16].classList.remove("on");
            menu[17].classList.remove("on");
        }else if(i==11){
            menu[0].classList.remove("on");
            menu[1].classList.remove("on");
            menu[2].classList.remove("on");
            menu[3].classList.remove("on");
            menu[4].classList.remove("on");
            menu[5].classList.remove("on");
            menu[6].classList.remove("on");
            menu[7].classList.remove("on");
            menu[8].classList.remove("on");
            menu[9].classList.remove("on");
            menu[10].classList.remove("on");
            menu[11].classList.add("on");
            menu[12].classList.remove("on");
            menu[13].classList.remove("on");
            menu[14].classList.remove("on");
            menu[15].classList.remove("on");
            menu[16].classList.remove("on");
            menu[17].classList.remove("on");
        }else if(i==12){
            menu[0].classList.remove("on");
            menu[1].classList.remove("on");
            menu[2].classList.remove("on");
            menu[3].classList.remove("on");
            menu[4].classList.remove("on");
            menu[5].classList.remove("on");
            menu[6].classList.remove("on");
            menu[7].classList.remove("on");
            menu[8].classList.remove("on");
            menu[9].classList.remove("on");
            menu[10].classList.remove("on");
            menu[11].classList.remove("on");
            menu[12].classList.add("on");
            menu[13].classList.remove("on");
            menu[14].classList.remove("on");
            menu[15].classList.remove("on");
            menu[16].classList.remove("on");
            menu[17].classList.remove("on");
        }else if(i==13){
            menu[0].classList.remove("on");
            menu[1].classList.remove("on");
            menu[2].classList.remove("on");
            menu[3].classList.remove("on");
            menu[4].classList.remove("on");
            menu[5].classList.remove("on");
            menu[6].classList.remove("on");
            menu[7].classList.remove("on");
            menu[8].classList.remove("on");
            menu[9].classList.remove("on");
            menu[10].classList.remove("on");
            menu[11].classList.remove("on");
            menu[12].classList.add("on");
            menu[13].classList.remove("on");
            menu[14].classList.remove("on");
            menu[15].classList.remove("on");
            menu[16].classList.remove("on");
            menu[17].classList.remove("on");
        }else if(i==14){
            menu[0].classList.remove("on");
            menu[1].classList.remove("on");
            menu[2].classList.remove("on");
            menu[3].classList.remove("on");
            menu[4].classList.remove("on");
            menu[5].classList.remove("on");
            menu[6].classList.remove("on");
            menu[7].classList.remove("on");
            menu[8].classList.remove("on");
            menu[9].classList.remove("on");
            menu[10].classList.remove("on");
            menu[11].classList.remove("on");
            menu[12].classList.remove("on");
            menu[13].classList.remove("on");
            menu[14].classList.add("on");
            menu[15].classList.remove("on");
            menu[16].classList.remove("on");
            menu[17].classList.remove("on");
        }else if(i==15){
            menu[0].classList.remove("on");
            menu[1].classList.remove("on");
            menu[2].classList.remove("on");
            menu[3].classList.remove("on");
            menu[4].classList.remove("on");
            menu[5].classList.remove("on");
            menu[6].classList.remove("on");
            menu[7].classList.remove("on");
            menu[8].classList.remove("on");
            menu[9].classList.remove("on");
            menu[10].classList.remove("on");
            menu[11].classList.remove("on");
            menu[12].classList.remove("on");
            menu[13].classList.remove("on");
            menu[14].classList.remove("on");
            menu[15].classList.add("on");
            menu[16].classList.remove("on");
            menu[17].classList.remove("on");
        }else if(i==16){
            menu[0].classList.remove("on");
            menu[1].classList.remove("on");
            menu[2].classList.remove("on");
            menu[3].classList.remove("on");
            menu[4].classList.remove("on");
            menu[5].classList.remove("on");
            menu[6].classList.remove("on");
            menu[7].classList.remove("on");
            menu[8].classList.remove("on");
            menu[9].classList.remove("on");
            menu[10].classList.remove("on");
            menu[11].classList.remove("on");
            menu[12].classList.remove("on");
            menu[13].classList.remove("on");
            menu[14].classList.remove("on");
            menu[15].classList.remove("on");
            menu[16].classList.add("on");
            menu[17].classList.remove("on");
        }else if(i==17){
            menu[0].classList.remove("on");
            menu[1].classList.remove("on");
            menu[2].classList.remove("on");
            menu[3].classList.remove("on");
            menu[4].classList.remove("on");
            menu[5].classList.remove("on");
            menu[6].classList.remove("on");
            menu[7].classList.remove("on");
            menu[8].classList.remove("on");
            menu[9].classList.remove("on");
            menu[10].classList.remove("on");
            menu[11].classList.remove("on");
            menu[12].classList.remove("on");
            menu[13].classList.remove("on");
            menu[14].classList.remove("on");
            menu[15].classList.remove("on");
            menu[16].classList.remove("on");
            menu[17].classList.add("on");
        }
    }

    menu[0].addEventListener('click', function(){
        btnBottom.innerHTML="채소 전체보기"
        swt(0);
        //menu[0].classList.add("on");
        // menu[0].style.backgroundColor = ("#5f0080");
        // menu[0].style.color = ("#fff");
    });
 
    menu[1].addEventListener('click', function(){
        btnBottom.innerHTML="과일·견과·쌀 전체보기"
        swt(1);
    });

    menu[2].addEventListener('click', function(){
        btnBottom.innerHTML="수산·해산·건어물 전체보기"
        swt(2);
    });

    menu[3].addEventListener('click', function(){
        btnBottom.innerHTML="정육·계란 전체보기"
        swt(3);
    });

    menu[4].addEventListener('click', function(){
        btnBottom.innerHTML="국·반찬·메인요리 전체보기"
        swt(4);
    });

    menu[5].addEventListener('click', function(){
        btnBottom.innerHTML="샐러드·간편식 전체보기"
        swt(5);
    });

    menu[6].addEventListener('click', function(){
        btnBottom.innerHTML="면·양념·오일 전체보기"
        swt(6);
    });

    menu[7].addEventListener('click', function(){
        btnBottom.innerHTML="생수·음료·우유·커피 전체보기"
        swt(7);
    });

    menu[8].addEventListener('click', function(){
        btnBottom.innerHTML="간식·과자·떡 전체보기"
        swt(8);
    });

    menu[9].addEventListener('click', function(){
        btnBottom.innerHTML="베이커리·치즈·델리 전체보기"
        swt(9);
    });

    menu[10].addEventListener('click', function(){
        btnBottom.innerHTML="건강식품 전체보기"
        swt(10);
    });

    menu[11].addEventListener('click', function(){
        btnBottom.innerHTML="생활용품·리빙·캠핑 전체보기"
        swt(11);
    });

    menu[12].addEventListener('click', function(){
        btnBottom.innerHTML="스킨케어·메이크업 전체보기"
        swt(12);
    });

    menu[13].addEventListener('click', function(){
        btnBottom.innerHTML="헤어·바디·구강 전체보기"
        swt(13);
    });

    menu[14].addEventListener('click', function(){
        btnBottom.innerHTML="주방용품 전체보기"
        swt(14);
    });

    menu[15].addEventListener('click', function(){
        btnBottom.innerHTML="가전제품 전체보기"
        swt(15);
    });

    menu[16].addEventListener('click', function(){
        btnBottom.innerHTML="베이비·키즈 전체보기"
        swt(16);
    });

    menu[17].addEventListener('click', function(){
        btnBottom.innerHTML="반려동물 전체보기"
        swt(17);
    });

    console.log(menu);
    console.log(btnBottom.innerHTML);
    



// 현이 작성
// 사이드 퀵 메뉴
$(document).ready(function() {

    var floatPosition = parseInt($("#qnb").css('top'), 10);

    $(window).scroll(function() {

        var height = $(window).scrollTop() - $("#header").height()/0.5 ;
        var newPosition = height + floatPosition + "px";

        $("#qnb").stop().animate( {
            "top" : newPosition
        }, 500);
    }).scrollfixed();
});