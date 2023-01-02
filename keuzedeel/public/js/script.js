let checked = document.querySelectorAll('input[type="checkbox"]:checked');
let boxes = document.querySelectorAll('input[type="checkbox"]');
let count = checked.length;

const ctx = document.getElementById('myChart');


let array = [];
let squares = [];

show();

async function fetchData(file) {
    const res = await fetch(file);
    const fetched = await res.json();
    return fetched;
}

function show() {
    const retrieved = fetchData('js/data.json');
    retrieved.then((data) => {
        boxes.forEach(box => {
            box.addEventListener('click', () => {
                if (count == 6 && box.checked) {
                    change(box, count);
                    return;
                }

                count = change(box, count);
                count == 0 && (array = []);


                updateArray(array, count);
                showSquares(squares, array, data, box);
            });
        });
    });
}

for (let i = 1; i <= 6; i++) {
    const box = document.getElementById(`box-${i}`);
    squares.push(box);
}

function showSquares(squares, array, data, box) {
    squares.forEach(square => {
        appear(square, array);
    });

    if (array.length >= 1) {
        data.forEach(d => {
            if (box.id == d.category) {

                squares[count - 1].innerText = d.category;

                console.log(d.info);
                // console.log(10, 12, 40, 15)
                var ctx = document.getElementById("myChart");


                var myChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: [10, 12, 14, 20, 31],
                        datasets: [{
                            label: 'Jaar oud',
                            data: [10, 12, 14, 20, 31],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.5)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        //cutoutPercentage: 40,
                        responsive: false,

                    }
                });

            }
        });
    }
}

function appear(box, array) {
    let i = box.id.split('box-')[1];

    if (array.includes(parseInt(i))) {
        box.classList.remove('hidden');
    } else {
        box.classList.add('hidden');
    }
}

function change(variable, count) {
    if (variable.checked && count == 6) {
        variable.checked = false;
        return count;
    }

    variable.checked ? count++ : count--;
    return count;
}

function updateArray(array, count) {
    if (!array.includes(count)) {
        array.push(count);
    }

    for (let i = 0; i < array.length; i++) {
        if (array[i] === count) {
            array.splice(count, 1);
        }
    }
    return array
}


