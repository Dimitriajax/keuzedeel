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
                let box = container.appendChild(array[array.length -1]);
                fill(lever, box, data);
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

    if (array.includes(box) && !variable.checked || array.length == 0) {
        box.remove();
        array.slice(array.indexOf(box), 1)
        const chart = Chart.getChart(canvas.id);

        if (chart != null || chart != undefined){
            chart.destroy()
        }
    }
    return array
}

function fill(lever, box, data)
{
    let child = box.firstChild;
    let front = child.firstChild;
    let back = child.lastChild;
    let canvas = front.firstChild.id;

    data.forEach(d => {
        if (d.category == lever.id ) {
            back.innerText = d.description;
            if (lever.id == 'BMI') {
                back.appendChild(button());
                showBmi(canvas);
            }
            lever.id == 'Gender' && showGender(canvas);

            return show(d.url, canvas, d.text);
        }
    });
}


function change(variable, count) 
{
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
    parent.className = 'rounded-xl flex items-center parent';
    const card = document.createElement('div');
    card.className = 'card'

    const front = document.createElement('div');
    front.className = 'front card-body'
    const back = document.createElement('div');
    back.className = 'back card-body flex flex-col'

    const canvas = document.createElement('canvas');
    canvas.id = `${lever.id}-canvas`;
    
    parent.appendChild(card);
    card.append(front, back);
    front.append(canvas)

    return parent;
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
                    animation : {
                        duration : 1500,
                    },
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

function button()
{
    const button = document.createElement('a');
    button.href = '/';
    button.innerText = 'Reken jouw bmi uit!';
    button.id = 'BMI-btn'

    return button
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
                    animation : {
                        duration : 1500,
                    },
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
                    animation : {
                        duration : 1500,
                    },
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

const data = [
    {
        "category" : "Gender",
        "description" : "Geslacht"
    },
    {
        "category" : "BMI",
        "description" : "Je BMI is een rekensommetje van hoe lang je bent en hoeveel je weegt."
    },
    {
        "category" : "Height",
        "url" : "height/avg",
        "text" : "Lengte",
        "description" : "Met lengte meten we hoe snel je groeit. Wist je dat je ‘s ochtends langer bent dan ‘s avonds? Meet zelf maar eens!"
    },
    {
        "category" : "Weight",
        "url" : "weight/avg",
        "text" : "Gewicht",
        "description" : "Met gewicht meten we hoeveel je weegt."
    },
    {
        "category" : "DBP",
        "url" : "dbp/avg",
        "text" : "Bloeddruk",
        "description" : "Met bloeddruk meten we of je hart het bloed goed door je lichaam kan laten stromen. Dit is belangrijk zodat alles in je lichaam goed kan blijven werken."
    },
    {
        "category" : "KCAL",
        "url" : "kcal_intake/avg",
        "text" : "KCAL inname",
        "description" : "Een calorie is een maat voor het aantal energie dat in je eten zit."
    }
];