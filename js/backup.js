
//여건 작성
//연습용, 백업용, 참고용 js파일입니다.



//이 상품 어때요?
//4단 페이지 롤링
//HTML에서 변수를 가져온다
let slider1 = document.querySelector('.slider'),
    slide = document.querySelectorAll('.slider li'),
    currentIdx = 0,
    slideCount = slide.length, //끝인지 마지막인지 구분용도
    slideWidth = 249,
    slideMargin = 18,
    prevBtn = document.querySelector('.prev'),
    nextBtn = document.querySelector('.next');

    slider1.style.width = (slideWidth + slideMargin) * slideCount +'px';  //ul width 값 설정

    //nextBtn, prevBtn 버튼 클릭시 오는 파라미터를 통해 4페이지씩 롤링
    function moveSlide(num){
        slider1.style.left = - num * 267 + 'px';
        currentIdx = num;

        // 슬라이드 끝지점에 다다르면 버튼 사라지게
        if(currentIdx == 0){
            prevBtn.classList.add("disabled");
        }else if(currentIdx == 16){
            nextBtn.classList.add("disabled");
        }else if(currentIdx > 1 || currentIdx < 16){
            prevBtn.classList.remove("disabled");
            nextBtn.classList.remove("disabled");
        }
        
    }

    // 오른쪽 버튼을 누르면 4페이지씩 넘겨주는 값을 moveSlide 파라미터로 전달
    nextBtn.addEventListener('click', function(){
        if(currentIdx < slideCount - 5){
            moveSlide(currentIdx + 4);
            //console.log(currentIdx);
        }
    });

    // 왼쪽 버튼을 누르면 4페이지씩 넘겨주는 값을 moveSlide 파라미터로 전달
    prevBtn.addEventListener('click', function(){
        if(currentIdx > slideCount - 19){
            moveSlide(currentIdx - 4);
            //console.log(currentIdx); 
        }
    });


    console.log(slider1);
    console.log(slide.length);
    console.log(prevBtn);
    console.log(nextBtn);
    

    
