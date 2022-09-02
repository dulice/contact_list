$('.counter').counterUp({
    delay: 10,
    time: 2000
});

$('.counter-location').counterUp({
    delay: 10,
    time: 1000
});

$('.slide').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true,
  autoplay: true,
  autoplaySpeed: 1500,
  arrows: false
});

 var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })

let dateArr = ['jul 21','jul 20','jul 19','jul 18','jul 17','jul 16','jul 15','jul 14','jul 13','jul 12','jul 11'];
let orderCountArr = [7, 5, 6, 4, 6, 4,8,6,8,9,6];
let viewerCountArr = [13,12,15,14,20,17,19,16,23,33,16];
const lineChart = document.getElementById('lineChart').getContext('2d');
const myChart = new Chart(lineChart, {
    type: 'line',
    data: {
        labels: dateArr,
        datasets: [{
            label: 'Order Count',
            data: orderCountArr,
            backgroundColor: [
                '#0d6efd30',
          
            ],
            borderColor: [
                '#0d6efd',
            
            ],
            borderWidth: 1
        },
        {
            label: 'Viewer Count',
            data: viewerCountArr,
            backgroundColor: [
                '#19875430',
          
            ],
            borderColor: [
                '#198754',
            
            ],
            borderWidth: 1
        }
    ]
    },
    options: {
        legend: {
            labels: {
                usePointStyle: true
            }
        },
        elements: {
            line: {
                tension: 0
            }
        },
        scales: {
            yAxes: [{
                display: false,
            }],
            xAxes: [{
                display: false,
            }]
        }     
    }
});
