let checked = document.querySelectorAll('input[type="checkbox"]:checked');
let switches = document.querySelectorAll('input[type="checkbox"]');
let count = checked.length;

const container = document.getElementById('container-block');
let array = [];

showBox();

function showBox() {
    switches.forEach(lever => {
        lever.addEventListener('click', () => {
            if (count == 6 && lever.checked) {
                return lever.checked == false;
            }

            count = change(lever, count);
            count == 0 && (array = []);

            if (!array.includes(document.getElementById(`${lever.id}-box`)) && lever.checked) {
                array.push(Container(lever, count));
            }

            if (lever.checked) {
                let box = container.appendChild(array[count-1]);
                fill(lever, data, box);
            }
            
            update(lever, array)
        });
    });
}

function update(variable, array)
{
    const box = document.getElementById(`${variable.id}-box`);
    const child = box.firstChild;
    const canvas = child.firstChild;
    let chart = Chart.getChart(canvas.id);

    if (array.includes(box) && !variable.checked || array.length == 0) {
        box.remove();
        array.slice(array.indexOf(box), 1)
        chart.destroy();
    }

    return array
}

function fill(lever, data, box)
{
    let child = box.firstChild;
    let canvas = child.firstChild.id

    data.forEach(d => {
        if (d.category == lever.id) {
            show(d.url, canvas, d.text);
        }
    });

    lever.id == 'BMI' ? showBmi(canvas) : showGender(canvas);
}


function change(variable, count) {
    if (variable.checked && count == 6) {
        variable.checked = false;
    }

    variable.checked ? count++ : count--;
    return count;
}

function Container(lever)
{
    const parent = document.createElement('div');
    parent.id = `${lever.id}-box`;
    parent.className = 'rounded-xl flex items-center';
    const wrapper = document.createElement('div');

    const canvas = document.createElement('canvas');
    canvas.id = `${lever.id}-canvas`;
    
    parent.appendChild(wrapper);
    wrapper.appendChild(canvas);

    return parent;
}

function show(url, id, title) {
    fetch('http://localhost:8000/api/data/' + url)
        .then((response) => response.json())
        .then((data) => {
            const ctx = document.getElementById(id);
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['30-40', '41-50', '51-61'],
                    datasets: [{
                        label: 'Man',
                        data: [data.men._30_40, data.men._41_50, data.men._51_65],
                        borderColor: '#FFFFFF',
                        backgroundColor: '#36A2EB',
                        borderWidth: 1
                    },
                    {
                        label: 'Vrouw',
                        data: [data.women._30_40, data.women._41_50, data.women._51_65],
                        borderColor: '#FFFFFF',
                        backgroundColor: '#FF6384',
                        borderWidth: 1
                    },
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        title: {
                            display: true,
                            text: title
                        }
                    }
                }
            });
        });
}

function showBmi(id) {
    fetch('http://localhost:8000/api/data/bmi/count')
        .then((response) => response.json())
        .then((data) => {
            const ctx = document.getElementById(id);
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Ondergewicht', 'Gezond', 'Overgewicht', 'Zwaar overgewicht'],
                    datasets: [{
                        label: '',
                        data: [data.underweight, data.healthy, data.overweight, data.obese],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Gemiddelde BMI'
                        }
                    }
                }
            });
        });
}


function showGender(id) {
    fetch('http://localhost:8000/api/data/gender/count')
        .then((response) => response.json())
        .then((data) => {
            const ctx = document.getElementById(id);
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Man', 'Vrouw'],
                    datasets: [{
                        label: '%',
                        data: [data.men, data.women],
                        borderWidth: 1
                    }]
                },
                options: {
                    plugins: {
                        title: {
                            display: true,
                            text: 'Percentage tussen man / vrouw'
                        }
                    }
                }
            });
        });
}

const data = [
    {
        "category" : "Height",
        "url" : "height/avg",
        "text" : "Lengte"
    },
    {
        "category" : "Weight",
        "url" : "weight/avg",
        "text" : "Gewicht"
    },
    {
        "category" : "DBP",
        "url" : "dbp/avg",
        "text" : "Bloeddruk"
    },
    {
        "category" : "KCAL",
        "url" : "kcal_intake/avg",
        "text" : "KCAL intake"
    }
];