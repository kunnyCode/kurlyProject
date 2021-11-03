
//여건 작성
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
    slide6 = document.querySelectorAll('.s6 .slider li'), // 365
    slide7 = document.querySelectorAll('.s7 .slider li'), // 오프라인
    slide8 = document.querySelectorAll('.s8 .slider li'), // 컬리 레시피
    slide9 = document.querySelectorAll('.s9 .slider li'), // 인스타그램
    
    //slideCount = 0, //slide0.length, //끝인지 마지막인지 구분용도
    slideWidth = 249,
    slideWidth2 = 338,
    slideWidth3 = 175,
    slideMargin = 18,
    prevBtn = document.querySelectorAll('.bx-prev'),
    nextBtn = document.querySelectorAll('.bx-next');



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


    //ul width 값 설정
    slider1[0].style.width = (slideWidth + slideMargin) * slide0.length +'px';  
    // slider1[1].style.width = (slideWidth + slideMargin) * slide1.length +'px'; 
    slider1[2].style.width = (slideWidth + slideMargin) * slide2.length +'px'; 
    slider1[3].style.width = (slideWidth + slideMargin) * slide3.length +'px'; 
    slider1[4].style.width = (slideWidth + slideMargin) * slide4.length +'px'; 
    slider1[5].style.width = (slideWidth + slideMargin) * slide5.length +'px'; 
    slider1[6].style.width = (slideWidth + slideMargin) * slide6.length +'px'; 
    slider1[7].style.width = (slideWidth + slideMargin) * slide7.length +'px'; 
    slider1[8].style.width = (slideWidth2 + slideMargin) * slide8.length +'px'; 
    slider1[9].style.width = slideWidth3 * slide9.length +'px'; 


    
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



        //365 최저가 도전
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





        //오프라인 맛집
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





        //컬리의 레시피
        function moveSlide8(num){
        slider1[8].style.left = - num * (338+18) + 'px';
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




    //인스타그램
    function moveSlide9(num){
        slider1[9].style.left = - num * 175 + 'px';
        currentIdx9 = num;

        
            if(currentIdx9 == 0){
                prevBtn[8].classList.add("disabled");
                nextBtn[8].classList.remove("disabled");
            }else if(currentIdx9 == 6){
                nextBtn[8].classList.add("disabled");
                prevBtn[8].classList.remove("disabled");
            }
        }
        

    
    nextBtn[8].addEventListener('click', function(){
        if(currentIdx9 < slide8.length - 4){
            moveSlide9(currentIdx9 + 6);
            //console.log(currentIdx9);
        }
    });

    
    prevBtn[8].addEventListener('click', function(){
        if(currentIdx9 > slide8.length - 19){
            moveSlide9(currentIdx9 - 6);
            //console.log(currentIdx9); 
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
    

    
