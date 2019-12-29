

$(document).ready(function() {
  $('.textArea').summernote({
    airMode: true
  });
  const date = new Date();
  date.setHours( date.getHours() + 1 );
  $('.flipTimer').flipTimer({ 

    // count up or countdown
    direction: 'down', 

    // the target <a href="https://www.jqueryscript.net/time-clock/">date</a>
    date: date, 

    // callback works only with direction = "down"
    callback: function() {
      $('#exam-form').submit();  
    },
    days:false,
    hours: false,
  });
  
});

$('#page-pagination').twbsPagination({
    totalPages: 50,
    // the current page that show on start
    startPage: 1,
    
    // maximum visible pages
    visiblePages: 5,
    
    initiateStartPageClick: true,
    
    // template for pagination links
    href: false,
    
    // variable name in href template for page number
    hrefVariable: '{{number}}',
    
    // Text labels
    first: 'İlk',
    prev: 'Önceki',
    next: 'Sonraki',
    last: 'Son',
    
    // carousel-style pagination
    loop: false,
    
    // callback function
    onPageClick: function (event, page) {
        $('.page-active').removeClass('page-active');
      $('#page'+page).addClass('page-active');
    },
    
    // pagination Classes
    paginationClass: 'pagination',
    nextClass: 'next',
    prevClass: 'prev',
    lastClass: 'last',
    firstClass: 'first',
    pageClass: 'page',
    activeClass: 'active',
    disabledClass: 'disabled'
    
    });
    
